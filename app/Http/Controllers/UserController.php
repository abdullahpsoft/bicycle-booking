<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cartype;
use App\Biker;
class UserController extends Controller
{
    //


    public function index(){

        return view('booking-form');
    }

    public function store(Request $request){

    $checkBike = Cartype::find(1);

    if($checkBike->availability > 0){

     $addBiker = array();
     $addBiker['name'] =  $_POST['uname'];
        $addBiker['phone'] =  $_POST['phone'];
        $addBiker['origin_location'] =  $_POST['olocation'];
        $addBiker['destination_location'] =  $_POST['dlocation'];
        $addBiker['no_passenger'] =  $_POST['passenger'];
        $addBiker['issue_date'] =  $_POST['pickupDate'];
        $addBiker['issue_time'] =  $_POST['pickupTime'];

       Biker::create($addBiker);
       $checkBike->availability =  $checkBike->availability - 1;

       $checkBike->save();
    }
        $name =  $_POST['uname'];
        $phone =  $_POST['phone'];
        $olocation =  $_POST['olocation'];
        $pickupDate =  $_POST['pickupDate'];
        $pickupTime =  $_POST['pickupTime'];




        return view('thankyou',compact('name','phone','olocation','pickupDate','pickupTime'));

    }
    public function thanks(){

        return view('thankyou');
    }
}
