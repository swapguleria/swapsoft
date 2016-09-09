@extends('layouts.app')
@section('title') Dashboard @stop
@section('Manage') active @stop
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Manage Users
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box"><!-- /.box-header -->
                    <div class="box-body">

                        {{-- date('d-M-Y') --}}
                        <div class="flash-message">
                            @foreach(['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has('alert-'.$msg))
                            <p class="alert alert-{{msg}}">
                                <a href="javascript:void(0);" class="close" data-dismiss='alert' aria-label='close'>&times;</a>
                            </p>
                            @endif
                            @endforeach
                        </div>
                        <table id="Users" class="table table-bordered table-hover dataTable">
                            <thead>
                                <tr>
                                    <th>EMP. ID</th>
                                    <th>NAME</th>
                                    <th>MOBILE</th>
                                    <th>EMAIL</th>
                                    <th>DEPARTMENT</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $fields => $user )
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td><a href="{{ url('/user/view/'.$user->id) }}">{{$user->name}}</a></td>
                                    <td>{{$user->contact}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->designation}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>EMP. ID</th>
                                    <th>NAME</th>
                                    <th>MOBILE</th>
                                    <th>EMAIL</th>
                                    <th>DEPARTMENT</th>
                                </tr>
                            </tfoot>
                        </table>

                        <div class="modal " id="NewUser" aria-hidden="true" data-backdrop="static" role="dialog" style="border-radius: 5px;">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="bg-blue-gradient modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Add New User</h4>
                                    </div>
                                    <div class="modal-body" >
                                        {!! Form::open(['route'=>'add-user', 'method'=>'post']) !!}
                                        {{--Tabs for add new user--}}
                                        <div class="nav-tabs-custom">

                                            <ul class="nav nav-tabs" id="AddUser">
                                                <li class="active"><a href="#login-details" data-toggle="tab">Login</a></li>
                                                <li id="Personal"><a href="#personal-details" data-toggle="tab">Personal</a></li>
                                                <li id="JobProfile"><a href="#job-profile" data-toggle="tab">Job Profile</a></li>
                                                <li id="JobProfile"><a href="#profile" data-toggle="tab">About</a></li>

                                                <li class="pull-right header">{!! Form::submit('Register', ['class'=>'btn btn-primary btn-flat']) !!}</li>
                                            </ul>
                                            <div class="tab-content" style="height: 300px !important">
                                                <div class="tab-pane active" id="login-details" >
                                                    <div class="progress progress-xxs active">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" id="new-user-login-details" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-user fa-2x"></i></span>
                                                        {!! Form::text('fullname', '', ['class'=>'form-control input-lg', 'id'=>'user-fullname', 'placeholder'=>'Full Name']) !!}
                                                    </div>
                                                    <br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-at fa-2x"></i></span>
                                                        {!! Form::email('email', 'swap.', ['class'=>'form-control input-lg', 'id'=>'user-username', 'placeholder'=>'Username']) !!}
                                                    </div>
                                                    <br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-keyboard-o fa-2x"></i></span>
                                                        {!! Form::password('password', ['class'=>'form-control input-lg', 'id'=>'user-password', 'placeholder'=>'Password']) !!}
                                                    </div>    
                                                    <br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-keyboard-o fa-2x"></i></span>
                                                        {!! Form::password('password', ['class'=>'form-control input-lg', 'id'=>'user-re-password', 'placeholder'=>'Confirm Password']) !!}
                                                    </div>    
                                                </div>
                                                <!-- /.tab-pane -->
                                                <div class="tab-pane" id="personal-details">
                                                    <div class="progress progress-xxs active">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" id="new-user-personal-details" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-home fa-2x"></i></span>
                                                        {!! Form::text('address1', '', ['class'=>'form-control input-lg', 'id'=>'user-address-1', 'placeholder'=>'Home Address 1']) !!}
                                                    </div>
                                                    <br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-home fa-2x"></i></span>
                                                        {!! Form::text('address2', '', ['class'=>'form-control input-lg', 'id'=>'user-address-2', 'placeholder'=>'Home Address 2']) !!}
                                                    </div>
                                                    <br>
                                                    <div class="input-group" style="width: 50%; float: left">
                                                        <span class="input-group-addon"><i class="fa fa-street-view fa-2x"></i></span>
                                                        {!! Form::text('city', '', ['class'=>'form-control input-lg', 'id'=>'user-city', 'placeholder'=>'District/City']) !!}
                                                    </div>    
                                                    <div class="input-group"  style="width: 50%; float: left; margin-bottom: 20px">
                                                        <span class="input-group-addon"><i class="fa fa-building fa-2x"></i></span>
                                                        {!! Form::text('state', '', ['class'=>'form-control input-lg', 'id'=>'user-email', 'placeholder'=>'State']) !!}
                                                    </div>  
                                                    <div class="input-group" style="width: 50%; float: left; margin-bottom: 20px">
                                                        <span class="input-group-addon"><i class="fa fa-check fa-2x"></i></span>
                                                        {!! Form::text('zip', '', ['class'=>'form-control input-lg', 'id'=>'user-contact', 'placeholder'=>'Zip Code']) !!}
                                                    </div>    
                                                    <div class="input-group"  style="width: 50%; float: left; margin-bottom: 20px">
                                                        <span class="input-group-addon"><i class="fa fa-globe fa-2x"></i></span>
                                                        {!! Form::text('country', '', ['class'=>'form-control input-lg', 'id'=>'user-email', 'placeholder'=>'Country']) !!}
                                                    </div>    
                                                </div>
                                                <!-- /.tab-pane -->
                                                <div class="tab-pane" id="job-profile">
                                                    <div class="progress progress-xxs active">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" id="new-user-job-profile" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">mnhhgf
                                                        </div>
                                                    </div>
                                                    <div class="input-group" >
                                                        <span class="input-group-addon"><i class="fa fa-user fa-2x"></i></span>
                                                        <select name="category" class="form-control input-lg SearchSelect" data-placeholder='Assign Team Role' style="width: 100%">
                                                            <option value=""></option>
                                                            @foreach($Roles as $Role)
                                                            <option value="{{ $Role->id }}">{{ $Role->role }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <br>
                                                    <div class="input-group" >
                                                        <span class="input-group-addon"><i class="fa fa-gitlab fa-2x"></i></span>
                                                        <select name="category" class="form-control input-lg SearchSelect" data-placeholder='Assign Department' style="width: 100%">
                                                            <option value=""></option>
                                                            @foreach($Departments as $Department)
                                                            <option value="{{ $Department->id }}">{{ $Department->department }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>    
                                                    <br>
                                                    <div class="input-group" >
                                                        <span class="input-group-addon"><i class="fa fa-users fa-2x"></i></span>
                                                        <select name="category" class="form-control input-lg SearchSelect" data-placeholder='Assign Team Leader' style="width: 100%">
                                                            <option value=""></option>
                                                            @foreach($TeamLeaders as $TeamLeader)
                                                            <option value="{{ $TeamLeader->id }}">{{ $TeamLeader->name }} ({{ $TeamLeader->designation }})</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <br>
                                                    <div class="input-group" >
                                                        <span class="input-group-addon"><i class="fa fa-clock-o fa-2x"></i></span>
                                                        <select name="category" class="form-control input-lg SearchSelect" data-placeholder='Work Experiance' style="width: 100%">
                                                            <option value=""></option>
                                                            <option value="0-1">0 to 1 Year</option>
                                                            <option value="1-2">1 to 2 Years</option>
                                                            <option value="2-3">2 to 3 Years</option>
                                                            <option value="3-4">3 to 4 Years</option>
                                                            <option value="5+">Above 5 Years</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- /.tab-pane -->
                                                

                                                <div class="tab-pane" id="profile">
                                                    <textarea name="profile" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                                </div>
                                            </div><!-- /.tab-content -->
                                        </div>
                                    </div>
                                    {{--<div class="modal-footer">
                                        
                                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                    </div>  --}}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                      
                    </div><!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
</div>
@stop
@push('css')
<style>
    .select2-container {
        border: 1px solid #d2d6de;
        box-sizing: border-box;
        display: inline-block;
        margin: 0;
        padding: 7px 0px;
        position: relative;
        vertical-align: middle;border-radius: 0px !important;
    }
    .select2-container--default .select2-selection--single{
        border: none;
        padding: 5px 0px;
        border-radius: 0px !important;
        border-color: #D2D6DE;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        padding: 20px 5px;
    }
    .select2-dropdown.select2-dropdown--below, .select2-dropdown--above {
        left: -1px !important;
        top: -1px !important;
        border-radius: 0px !important;  
    }
    .select2-search__field {
        width: 100% !important;
    }
</style>
@endpush
@push('css')
<style>
    #SPD-Btn {
        top: 110px;
    }

    .ANUF{ top: 110px; }
    #SPD-Wrapper, #SJP-Wrapper, #SPE-Wrapper{
        display: none;
    }
    .modal-header{
        cursor: move;
    }
</style>
@endpush
@push('script')
<script>
    $(function () {
        $('.modal-content').draggable({
            handle: '.modal-header',
        });
    });
</script>
@endpush