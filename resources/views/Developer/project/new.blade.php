@extends('layouts.app')
@section('title') New Project @stop
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Add Project
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-md-6">
                    <div class="box box-danger">
                        <div class="box-header">
                            <h3 class="box-title">Project Details</h3>
                        </div>
                        <div class="box-body">
                            <!-- Date dd/mm/yyyy -->
                            <div class="form-group">
                                <label>Project Name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-laptop"></i>
                                    </div>
                                    {!! Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Name']) !!}
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                            <!-- phone mask -->
                            <div class="form-group">
                                <label>Project Category :</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-folder-open-o"></i>
                                    </div>
                                    {!! Form::text('category', '', ['class'=>'form-control']) !!}
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->

                            <!-- phone mask -->
                            <div class="form-group">
                                <label>Submit within Dates :</label>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    {!! Form::text('dates', '', ['class'=>'form-control']) !!}
                                </div><!-- /.input group -->
                            </div>
                        </div><!-- /.box-body -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-danger">
                        <div class="box-header">
                            <h3 class="box-title">Client Details</h3>
                        </div>
                        <div class="box-body">
                            <!-- Date dd/mm/yyyy -->
                            <div class="form-group">
                                <label>Name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    {!! Form::text('client_name', '', ['class'=>'form-control']) !!}
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->

                            <!-- phone mask -->
                            <div class="form-group">
                                <label>Email:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    {!! Form::text('email', '', ['class'=>'form-control']) !!}
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->

                            <!-- phone mask -->
                            <div class="form-group">
                                <label>Skype:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-skype"></i>
                                    </div>
                                    {!! Form::text('skype', '', ['class'=>'form-control']) !!}
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                        </div><!-- /.box-body -->
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title">Project Description
                                <small>All initial requirements of project</small>
                            </h3>
                        </div><!-- /.box-header -->
                        <div class="box-body pad">
                            <form>
                                <textarea class="textarea" placeholder="Write Project Description Here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Project Team</h3>

                            <div class="box-tools pull-right">
                                <span class="label label-danger">8 New Members</span>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <ul class="users-list clearfix">
                                <li>
                                    <img src="public/img/user1-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Alexander Pierce</a>
                                    <span class="users-list-date">Today</span>
                                </li>
                                <li>
                                    <img src="public/img/user8-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Norman</a>
                                    <span class="users-list-date">Yesterday</span>
                                </li>
                                <li>
                                    <img src="public/img/user7-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Jane</a>
                                    <span class="users-list-date">12 Jan</span>
                                </li>
                                <li>
                                    <img src="public/img/user6-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">John</a>
                                    <span class="users-list-date">12 Jan</span>
                                </li>
                                <li>
                                    <img src="public/img/user2-160x160.jpg" alt="User Image" width="128" height="128">
                                    <a class="users-list-name" href="#">Alexander</a>
                                    <span class="users-list-date">13 Jan</span>
                                </li>
                                <li>
                                    <img src="public/img/user5-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Sarah</a>
                                    <span class="users-list-date">14 Jan</span>
                                </li>
                                <li>
                                    <img src="public/img/user4-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Nora</a>
                                    <span class="users-list-date">15 Jan</span>
                                </li>
                                <li>
                                    <img src="public/img/user3-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Nadia</a>
                                    <span class="users-list-date">15 Jan</span>
                                </li>
                            </ul>
                            <!-- /.users-list -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="javascript:void(0)" class="uppercase">View All Users</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box box-solid bg-green-gradient">
                        <div class="box-header text-center">
                            <a class="btn btn-app">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a class="btn btn-app">
                                <i class="fa fa-play"></i> Play
                            </a>
                            <a class="btn btn-app">
                                <i class="fa fa-pause"></i> Pause
                            </a>
                            <a class="btn btn-app">
                                <i class="fa fa-bullhorn"></i> Notifications
                            </a>
                            <a class="btn btn-app">
                                <i class="fa fa-repeat"></i> Reset
                            </a>
                            <a class="btn btn-app">
                                <i class="fa fa-save"></i> Save
                            </a>
                            <a class="btn btn-app">
                                <i class="fa fa-barcode"></i> Products
                            </a>
                            <a class="btn btn-app">
                                <i class="fa fa-users"></i> Users
                            </a>
                            <a class="btn btn-app">
                                <i class="fa fa-inbox"></i> Orders
                            </a>
                            <a class="btn btn-app">
                                <i class="fa fa-envelope"></i> Inbox
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
