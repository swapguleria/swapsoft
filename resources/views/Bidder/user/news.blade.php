@extends('layouts.app')
@section('title')
New User
@stop
@section('content')  
{{-- Content Wrapper. Contains page content --}}
<div class="content-wrapper">
    {{-- Content Header (Page header) --}}
    <section class="content-header">
        <h1>
            New User
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('login') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="javascript:void(0);">Examples</a></li>
            <li class="active">User profile</li>
        </ol>
    </section>

    {{-- Main content --}}
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-md-6">
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Login Details</h3>
                        </div>
                        <div class="box-body">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-at"></i></span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-keyboard-o"></i></span>
                                <input type="text" class="form-control" placeholder="Password">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input type="text" class="form-control" placeholder="Backup Pin">
                            </div>
                            <br>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
                <div class="col-md-6">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Personal Details</h3>
                        </div>
                        <div class="box-body">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Profile Name">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="text" class="form-control" placeholder="Contact Number">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                <input type="text" class="form-control" placeholder="Email ID">
                            </div>
                            <br>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>

                <div class="col-lg-6">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Job Profile</h3>
                        </div>
                        <div class="box-body">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-suitcase"></i></span>
                                <select name="" class="form-control">
                                    <option value="">----- SELECT DESIGNATION -----</option>
                                    <option value="BDM">BDM</option>
                                    <option value="TL">Team Leader</option>
                                    <option value="TM">Team Member</option>
                                </select>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                                <select name="" class="form-control">
                                    <option value="">----- SELECT STREAM -----</option>
                                    <option value="Developer">Web Developer</option>
                                    <option value="Designer">Web Designer</option>
                                    <option value="SEO">Search Engine Optimization</option>
                                </select>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
                                <select name="" class="form-control">
                                    <option value="">----- ASSIGN TEAM LEADER -----</option>
                                    <option value="">Team Leader 1</option>
                                    <option value="">Team Leader 2</option>
                                    <option value="">Team Leader 3</option>
                                    <option value="">Team Leader 4</option>
                                    <option value="">Team Leader 5</option>
                                    <option value="">Team Leader 6</option>
                                    <option value="">Team Leader 7</option>
                                </select>
                            </div>
                            <br>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
                <div class="col-lg-6">
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Professional Experience</h3>
                        </div>
                        <div class="box-body">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-suitcase"></i></span>
                                <input type="text" class="form-control" placeholder="Previous Designation">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                <select name="" class="form-control">
                                    <option value="">----- SELECT EXPERIENCE -----</option>
                                    <option value="0">Fresher</option>
                                    <option value="0-1">0 to 1 Year</option>
                                    <option value="2-3">2 to 3 Years</option>
                                    <option value="4-5">4 to 5 Years</option>
                                    <option value="5+">Above 5 Years</option>
                                </select>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
                                <input type="text" class="form-control" placeholder="Highest Qualification">
                            </div>
                            <br>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>

                <div class="col-lg-12">
                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title">User Profile
                                <small>All detailed information of user</small>
                            </h3>
                        </div><!-- /.box-header -->
                        <div class="box-body pad">
                            <form>
                                <textarea class="textarea" placeholder="Write User Profile Content Here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </form>
                        </div>
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
        </div>{{-- .row --}}
    </section>{{-- .content --}}
</div>
@stop
