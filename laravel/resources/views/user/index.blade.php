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


                @if (isset($message))
                    <div class="row">
                      <div class="col-md-12">
                        <div class="alert alert-info">
                          {{ $message }}
                        </div>
                      </div>
                    </div>
                @endif





                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Email</h3>
                            </div>
                            <div class="panel-body">
                              <form method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="field" value="email">
                                <input type="hidden" name="data1" value="{{$user->email}}">
                                <input type="text" class="form-control" name="data2" value="{{$user->email}}" placeholder="email">
                                <input type="submit" class="btn btn-primary">
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
                              <form method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="field" value="avatar">
                                <input type="file" name="image">
                                <input type="submit" class="btn btn-primary">
                              </form>
                              <br>
                              <img src="{{asset("users")."/".$user->username.".png"}}" width="100%">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Password</h3>
                            </div>
                            <div class="panel-body">
                              <form method="get" action="/auth/logout">
                              <!-- {!! csrf_field() !!} -->
                              <!-- <input type="hidden" name="email" value="{{ old('email') }}"> -->
                              <input type="submit" class="btn btn-default btn-danger" value="Change Password?">
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
                              <form method="post">
                                {!! csrf_field() !!}
                                <input type="hidden" name="field" value="address">
                                <input type="text" name="data1" class="form-control" placeholder="Address" value="{{$user->address}}">
                                <input type="text" name="data2" class="form-control" placeholder="City" value="{{$user->city}}">
                                <input type="text" name="data3" class="form-control" placeholder="State" value="{{$user->state}}">
                                <input type="number" name="data4" class="form-control" placeholder="Zip Code" value="{{$user->zip}}">
                                <input type="submit" class="btn btn-primary">
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
                              <form method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="field" value="phones">
                                <input type="number" class="form-control" name="data1" placeholder="Phone Number" value="{{$user->phones}}">
                                <input type="submit" class="btn btn-primary">
                              </form>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Social Media</h3>
                            </div>
                            <div class="panel-body">
                              <form method="post">
                                {!! csrf_field() !!}
                                <input type="hidden" name="field" value="social">
                                <textarea class="form-control" name="data" placeholder="Links to your social media accounts" value="{{$user->social_media}}"></textarea>
                                <input type="submit" class="btn btn-primary">
                              </form>
                            </div>
                        </div>
                    </div> -->
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
