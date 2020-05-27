@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        Map Tracks<small>Showing providers</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Maps</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">Map Views</div>
                </div>
            </div>
        </div>
    </div>
    <div class="box box-success">  
    </br>
    <div class="col-md-8">
        <input type="text" class="form-control" id="my-address" placeholder="Type an address">
    </div>

    <div class="col-md-4" id="flow2">
        <button id="getCords" class="btn btn-success" onClick="codeAddress();">Locate..</button>
    </div>
    </br>
    <!--<div class="page_load">
        <img title="Loading..." alt="Loading..." src="">
    </div>-->
    <div id="map" style="height:600px;width:100%;margin-top:30px;"></div>
    <input type="hidden" name="latitude" id="latitude">
    <input type="hidden" name="longitude" id="longitude">
</div>
<script>
// function myMap() {
// var mapProp= {
//     center:new google.maps.LatLng(51.508742,-0.120850),
//     zoom:15,
// };
// var map=new google.maps.Map(document.getElementById("map"),mapProp);
// }

x = navigator.geolocation;
x.getCurrentPosition(success, failure);

function  success(position) {
    var myLat = position.coords.latitude;
    var myLong = position.coords.longitude;

    var coords = new google.maps.LatLng(myLat,myLong);
    var mapOptions = {
        zoom:15,
        center: coords,
        mapTypeId: google.maps.MapTypeId.ROADMAP

    }
     var map = new google.maps.Map(document.getElementById("map"),mapOptions);

    var marker = new google.maps.Marker({map:map, position:coords});


}

function failure() {

}
</script>
    <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhuhBt5jX-J_bXA4QaSjO7NJzpeTvZF8U&callback=initMap"
            type="text/javascript"></script>
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3lsMPyNyhbksfo2As4DkAx3MoHgIHPC0&callback=myMap"></script>--}}
    
@endsection
