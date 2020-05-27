@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        Providers<small>Showing all providers</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">All data</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">Bookings</div>
                </div>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="box-header">
              <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>P#id</th>
                  <th>Names</th>
                  <th>Email Address</th>
                  <th>Bike Type</th>
                  <th>Contacts</th>
                  <th>Picture</th>
                  <th>Status</th>
                   <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                @foreach($bookings as $booking)
                <tr>
                  <td>{{$booking->id}}</td>
                  <td>{{$booking->name}}</td>
                  <td>{{$booking->mail}}</td>
                  <td>Bike</td>
                  <td>{{$booking->phone}}</td>
                  <td><a href="#">View Image</a></td>
                  <td><span class="label label-success">
                              Approved</span></td>

                    <td> <div class="input-group-btn">
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Actions
                    <span class="fa fa-caret-down"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="maps">Track</a></li>
                    <li><a href="#">Edit</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Delete</a></li>
                  </ul>
                </div>
                </td>
                </tr>@endforeach


               </tbody>

                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
             {!! $bookings->render() !!}
            </div>
          </div>
@endsection
