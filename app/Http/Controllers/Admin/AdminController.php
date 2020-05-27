<?php

namespace App\Http\Controllers\Admin;

use App\Biker;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Request as Req;
use App\Owner;
use App\Provider;
use App\Cartype;


class AdminController extends Controller
{

    public function redirect()
    {
        // The '/admin' route is not to be used as a page, because it breaks the menu's active state.
        return redirect(config('backpack.base.route_prefix').'/dashboard');
    }
    public function show_requests(){
        $req=Req::all();
        $req=$req->load('provider','owner');
        return view('request',compact('req'));
    }
     public function show_owners(){
        $users=User::simplePaginate(10);
        return view('owners',compact('users'));
    }
    public function show_providers(){

        $bookings=Biker::simplePaginate(10);

        return view('providers',compact('bookings'));
    }
    public function show_car_types(){
        $cartypes=Cartype::paginate(10);
        return view('car-types',compact('cartypes'));
    }
    public function show_map_view(){
        return view('maps');
    }
    public function show_general_settings(){
        return view('settings');
    }
}
