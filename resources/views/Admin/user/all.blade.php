@extends('layouts.app')
@section('title') All User @stop
@section('content')  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            All User
        </h1>
        <ol class="breadcrumb">
            <li><a href="javascript:void(0);"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="javascript:void(0);">Examples</a></li>
            <li class="active">User profile</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-6">
                    <div class="box box-solid bg-green-gradient">
                        <div class="box-header text-center">
                            <ul class="users-list clearfix">
                                <li>
                                    <img src="public/img/user1-128x128.jpg" alt="User Image">
                                </li>
                                <li style="width: 75%; text-align:left;">
                                    <a class="users-list-name" href="#">Alexander Pierce</a>
                                    <span class="users-list-date">Today</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box box-solid bg-green-gradient">
                        <div class="box-header text-center">
                            <ul class="users-list clearfix">
                                <li>
                                    <img src="public/img/user8-128x128.jpg" alt="User Image">
                                </li>
                                <li style="width: 75%; text-align:left;">
                                    <a class="users-list-name" href="#">Alexander Pierce</a>
                                    <span class="users-list-date">Today</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box box-solid bg-green-gradient">
                        <div class="box-header text-center">
                            <ul class="users-list clearfix">
                                <li>
                                    <img src="public/img/user7-128x128.jpg" alt="User Image">
                                </li>
                                <li style="width: 75%; text-align:left;">
                                    <a class="users-list-name" href="#">Alexander Pierce</a>
                                    <span class="users-list-date">Today</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box box-solid bg-green-gradient">
                        <div class="box-header text-center">
                            <ul class="users-list clearfix">
                                <li>
                                    <img src="public/img/user6-128x128.jpg" alt="User Image">
                                </li>
                                <li style="width: 75%; text-align:left;">
                                    <a class="users-list-name" href="#">Alexander Pierce</a>
                                    <span class="users-list-date">Today</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box box-solid bg-green-gradient">
                        <div class="box-header text-center">
                            <ul class="users-list clearfix">
                                <li>
                                    <img src="public/img/user5-128x128.jpg" alt="User Image">
                                </li>
                                <li style="width: 75%; text-align:left;">
                                    <a class="users-list-name" href="#">Alexander Pierce</a>
                                    <span class="users-list-date">Today</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box box-solid bg-green-gradient">
                        <div class="box-header text-center">
                            <ul class="users-list clearfix">
                                <li>
                                    <img src="public/img/user4-128x128.jpg" alt="User Image">
                                </li>
                                <li style="width: 75%; text-align:left;">
                                    <a class="users-list-name" href="#">Alexander Pierce</a>
                                    <span class="users-list-date">Today</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box box-solid bg-green-gradient">
                        <div class="box-header text-center">
                            <ul class="users-list clearfix">
                                <li>
                                    <img src="public/img/user3-128x128.jpg" alt="User Image">
                                </li>
                                <li style="width: 75%; text-align:left;">
                                    <a class="users-list-name" href="#">Alexander Pierce</a>
                                    <span class="users-list-date">Today</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box box-solid bg-green-gradient">
                        <div class="box-header text-center">
                            <ul class="users-list clearfix">
                                <li>
                                    <img src="public/img/user2-160x160.jpg" alt="User Image" width="128" height="128">
                                </li>
                                <li style="width: 75%; text-align:left;">
                                    <a class="users-list-name" href="#">Alexander Pierce</a>
                                    <span class="users-list-date">Today</span>
                                    <p></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
    </section><!-- /.content -->
</div>
@stop
<style>
    .users-list-name{
        color: #fff !important;
        font-size: 25px !important;
    }
    .users-list-date{
        color: #fff !important;
    }
</style>