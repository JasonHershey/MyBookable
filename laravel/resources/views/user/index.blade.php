@extends('openbootstrap')

@section('title')
  YourBookable Dashboard
@endsection

@section('more_assets')
<link href="{{asset("css/sb-admin.css")}}" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="{{asset("css/plugins/morris.css")}}" rel="stylesheet">

<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- Morris Charts JavaScript -->
<script src="{{asset("js/plugins/morris/raphael.min.js")}}"></script>
<script src="{{asset("js/plugins/morris/morris.min.js")}}"></script>
<script src="{{asset("js/plugins/morris/morris-data.js")}}"></script>



@endsection

@section('navigation')

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">{{$user->first_name}} {{$user->last_name}} - MyBookable</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i></a></li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i></a></li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i></a></li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> - Your Settings</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
@endsection

@section('container')

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Your Account
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> - Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">26</div>
                                        <div>New Comments!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">12</div>
                                        <div>New Tasks!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">124</div>
                                        <div>New Orders!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">13</div>
                                        <div>Support Tickets!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> -->
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Email</h3>
                            </div>
                            <div class="panel-body">
                              <form>
                                {!! csrf_field() !!}
                                <input type="text" class="form-control" value="{{$user->email}}" placeholder="email">
                              </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Avatar</h3>
                            </div>
                            <div class="panel-body">
                              <form>
                                {!! csrf_field() !!}
                                <input type="file">
                              </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Password</h3>
                            </div>
                            <div class="panel-body">
                              <form>
                                {!! csrf_field() !!}
                                <input type="password" class="form-control" placeholder="Old Password">
                                <input type="password" class="form-control" placeholder="New Password">
                                <input type="password" class="form-control" placeholder="Confirm Password">
                              </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12"><hr></div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Address</h3>
                            </div>
                            <div class="panel-body">
                              <form>
                                {!! csrf_field() !!}
                                <input type="text" class="form-control" placeholder="Address" value="{{$user->address}}">
                                <input type="text" class="form-control" placeholder="City" value="{{$user->city}}">
                                <input type="text" class="form-control" placeholder="State" value="{{$user->state}}">
                                <input type="number" class="form-control" placeholder="Zip Code" value="{{$user->zip}}">
                              </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Phone Numbers</h3>
                            </div>
                            <div class="panel-body">
                              <form>
                                {!! csrf_field() !!}
                                <input type="number" class="form-control" placeholder="Phone Number" value="{{$user->phones}}">
                                <input type="number" class="form-control" placeholder="Mobile Number" value="{{$user->phones}}">
                                <input type="number" class="form-control" placeholder="Work Number" value="{{$user->phones}}">
                              </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Social Media</h3>
                            </div>
                            <div class="panel-body">
                              <form>
                                {!! csrf_field() !!}
                                <textarea class="form-control" placeholder="Links to your social media accounts" value="{{$user->social_media}}"></textarea>
                              </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12"><hr></div>
                    <div class="col-md-12">
                      <button class="btn btn-lg btn-primary">Save</button>
                    </div>
                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

@endsection
