<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use DB;
use Session;
use Mail;

class DeviceController extends Controller
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

    // function for add device
    public function addDeviceType()
    {
    	return view('device.addDeviceType');
    }

    // function for add device type info
    public function addDeviceTypeInfo(Request $request)
    {
        //Form validation
        $this->validate($request, [
        'switchNo'            => 'required',
        'wifi'                => 'required',
        'sim'                 => 'required',
        'motionSensor'        => 'required',
        'tempSensor'          => 'required',
        'motorControlDevice'  => 'required'
        ]);

        // Collecting data from html form
        $switchNo     = trim($request->switchNo);
        $wifi         = trim($request->wifi);
        $sim          = trim($request->sim);
        $motionSensor = trim($request->motionSensor);
        $tempSensor   = trim($request->tempSensor);
        $motorControlDevice = trim($request->motorControlDevice);

        $data = array();
        $data['switch_no']             = $switchNo;
        $data['wifi']                  = $wifi;
        $data['sim']                   = $sim;
        $data['motion_sensor']         = $motionSensor;
        $data['temp_sensor']           = $tempSensor;
        $data['motor_controll_device'] = $motorControlDevice;
        $data['created_at']            = $this->rcdate;

        $query = DB::table('tbl_devices_type')->insert($data);
        if($query){
            Session::put('success','Congratulations, Device Type Added Sucessfully!!');
            return Redirect::to('addDeviceType');
        }else{
            Session::put('failed','Alas !! Error occured, try again.');
            return Redirect::to('addDeviceType');
        }
    }

    // Function for manage device type
    public function manageDeviceType()
    {
        $result = DB::table('tbl_devices_type')->get();
        return view('device.manageDeviceType')->with('result',$result);
    }

    // function for add device 
    public function addDevice()
    {
        $result = DB::table('tbl_devices_type')->get();
        return view('device.addDevice')->with('result',$result);
    }

    // function for add device info
    public function addDeviceInfo(Request $request)
    {
        //Form validation
        $this->validate($request, [
        'deviceType'    => 'required',
        'serialNo'      => 'required'
        ]);

        // Collecting data from html form
        $deviceType   = trim($request->deviceType);
        $serialNo     = trim($request->serialNo);

        $serialCount = DB::table('tbl_devices')->where('serial_no',$serialNo)->count();
        if($serialCount > 0){
            Session::put('failed','Your Serial Already Exists, Try Again.');
            return Redirect::to('addDevice');
            exit();
        }

        $data = array();
        $data['device_type']   = $deviceType;
        $data['serial_no']     = $serialNo;
        $data['created_at']    = $this->rcdate;

        $query = DB::table('tbl_devices')->insert($data);
        if($query){
            Session::put('success','Congratulations, Device Added Sucessfully!!');
            return Redirect::to('addDevice');
        }else{
            Session::put('failed','Alas !! Error occured, try again.');
            return Redirect::to('addDevice');
        }
    }

    // function for manage device
    public function manageDevice()
    {
        $result = DB::table('tbl_devices')
                ->join('tbl_devices_type','tbl_devices_type.id','=','tbl_devices.device_type')
                ->select('tbl_devices_type.*','tbl_devices.id','tbl_devices.serial_no')
                ->get();
        return view('device.manageDevice')->with('result',$result);
    }

    // function for view device
    public function viewDevice()
    {
        $result = DB::table('tbl_devices')
                ->join('tbl_devices_type','tbl_devices_type.id','=','tbl_devices.device_type')
                ->select('tbl_devices_type.*','tbl_devices.id','tbl_devices.serial_no')
                ->get();
        return view('device.viewDevice')->with('result',$result);
    }

    // function for view device by serial no
    public function viewDeviceBySerialNo($serial_no)
    {
        return view('device.viewDeviceBySerialNo')->with('serial_no',$serial_no);
    }


} // end of device controller
