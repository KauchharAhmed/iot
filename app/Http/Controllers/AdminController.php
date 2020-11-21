<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use DB;
use Session;
use Mail;

class AdminController extends Controller
{
    private $rcdate ;
    private $date_time ;
    private $loged_id ;

    public function __construct()
    {
        date_default_timezone_set('Asia/Dhaka');
        $this->rcdate = date('Y-m-d');
        $this->loged_id     = Session::get('admin_id');
        $this->current_time = date('H:i:s');
        $this->date_time    = date('Y-m-d H:i:s') ;
    }

    // function for admin login
    public function index()
    {
    	return view('admin.index');
    }

    // BEGINING OF ADMIN LOGIN

    public function accessPermission(Request $request)
    {
        // Form validation
        $this->validate($request, [
        'email'    => 'required',
        'password'  => 'required'
        ]);

        // Collecting data from html form
        $email    = trim($request->email);
        $pwd       = trim($request->password);
        $salt      = 'a123A321';
        $password  = sha1($pwd.$salt);

        // Query for matching the provided data whether information found or not
        $count = DB::table('admin')
        ->where('email', $email)
        ->where('password', $password)
        ->where('status',1)
        ->count();

        // if query get some match then retrieve the first row data
        if($count > 0){
            $admin_login = DB::table('admin')
            ->where('email', $email)
            ->where('password', $password)
            ->where('status',1)
            ->first();

            // checking user type
            $type = $admin_login->type;

            if($type == '1'){
                // Storing data in session variable, 1 means admin
                Session::put('admin_name',$admin_login->name);
                Session::put('admin_id',$admin_login->id);
                Session::put('type',$admin_login->type);
                Session::put('photo',$admin_login->image);
                return Redirect::to('/adminDashboard');
            }elseif($type == '2'){
                // Storing data in session variable, 2 means accountant
                Session::put('accountant_name',$admin_login->name);
                Session::put('accountant_id',$admin_login->id);
                Session::put('type',$admin_login->type);
                Session::put('photo',$admin_login->image);
                return Redirect::to('/accountantDashboard');
            }elseif($type == '3') {
                // Storing data in session variable, 3 means moderator
                Session::put('moderator_name',$admin_login->name);
                Session::put('moderator_id',$admin_login->id);
                Session::put('type',$admin_login->type);
                Session::put('photo',$admin_login->image);
                return Redirect::to('/moderatorDashboard');
            }

        }else{
            Session::put('login_faild','<b>Wrong information provided. Try again !!</b>');
            return Redirect::to('/apanel');
        }
    }

    // END OF ADMIN LOGIN PROCESS

    // function for admin dashboard 
    public function adminDashboard()
    {
        return view('admin.adminDashboard');   
    }

    // function for admin logout
    public function adminLogout()
    {
        Session::put('admin_id',null);
        Session::put('type',null);
        return Redirect::to('apanel');
    }

    // function for accountant dashboard 
    public function accountantDashboard()
    {
        return view('admin.accountantDashboard');   
    }

    // function for accountant logout
    public function accountantLogout()
    {
        Session::put('admin_id',null);
        Session::put('type',null);
        return Redirect::to('apanel');
    }

    // function for moderator dashboard 
    public function moderatorDashboard()
    {
        return view('admin.moderatorDashboard');   
    }

    // function for moderator logout
    public function moderatorLogout()
    {
        Session::put('admin_id',null);
        Session::put('type',null);
        return Redirect::to('apanel');
    }

    // function for basic form
    public function insert()
    {
        return view('admin.insert');
    }

    // function for datatable
    public function view()
    {
        return view('admin.view');
    }

} // end of admin controller
