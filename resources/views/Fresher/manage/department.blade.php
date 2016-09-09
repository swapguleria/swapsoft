@extends('layouts.app')
@section('title') Dashboard @stop
@section('Manage') active @stop
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
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
                <div class="box"><!-- /.box-header -->
                    <div class="box-body">
                        <table id="Departments" class="table table-bordered table-hover dataTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Department</th>
                                    <th>Manager</th>
                                    <th>Email</th>
                                    <th>Company</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Departments as $Department)
                                <tr>
                                    <td>{{ $Department->id }}</td>
                                    <td>{{ $Department->department }}</td>
                                    <td><a href="{{ url('/user/view/'.$Department->manager) }}" >{{ $Department->name }}</a></td>
                                    <td>{{ $Department->email }}</td>
                                    <td>{{ $Department->company }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Department</th>
                                    <th>Manager</th>
                                    <th>Email</th>
                                    <th>Company</th>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="modal " id="NewDepartment" aria-hidden="true" data-backdrop="static" role="dialog" style="border-radius: 5px;">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="bg-green-gradient modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Add New Department</h4>
                                    </div>
                                    <div class="modal-body" >
                                        {!! Form::open(['route'=>'NewDepartment', 'method'=>'post']) !!}
                                        {{--Tabs for add new user--}}
                                        <div class="nav-tabs-custom">

                                            <ul class="nav nav-tabs" id="AddUser">
                                                <li class="active"><a href="#project-details" data-toggle="tab">Department Details</a></li>
                                                <li><a href="#project-description" data-toggle="tab">Department Description</a></li>
                                                <li class="pull-right header">{!! Form::submit('Register', ['class'=>'btn btn-primary btn-flat']) !!}</li>
                                            </ul>
                                            <div class="tab-content" style="height: 300px !important">
                                                <div class="tab-pane active" id="project-details" >
                                                    <div class="progress progress-xxs active">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" id="new-user-project-details" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-laptop fa-2x"></i></span>
                                                        {!! Form::text('department', '', ['class'=>'form-control input-lg', 'id'=>'', 'placeholder'=>'Department Name']) !!}
                                                    </div>
                                                    <br>
                                                    <div class="input-group" >
                                                        <span class="input-group-addon"><i class="fa fa-user-secret fa-2x"></i></span>
                                                        <select name="manager" class="form-control input-lg SearchSelect" data-placeholder='Department Manager' style="width: 100%">
                                                            <option value=""></option>
                                                            @foreach($Users as $User)
                                                            <option value="{{ $User->id }}">{{ $User->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>   
                                                    <br>
                                                    <div class="input-group" style="width: 50%; float: left">
                                                        <span class="input-group-addon"><i class="fa fa-at fa-2x"></i></span>
                                                        {!! Form::email('email', '', ['class'=>'form-control input-lg', 'id'=>'end-date', 'placeholder'=>'Contact Email']) !!}
                                                    </div>    
                                                    <div class="input-group" style="width: 50%; float: left">
                                                        <span class="input-group-addon"><i class="fa fa-phone fa-2x"></i></span>
                                                        {!! Form::text('mobile', '', ['class'=>'form-control input-lg', 'id'=>'end-date', 'placeholder'=>'Contact Mobile']) !!}
                                                    </div><br><br><br>    
                                                    <div class="input-group" >
                                                        <span class="input-group-addon"><i class="fa fa-bank fa-2x"></i></span>
                                                        <select name="company" class="form-control input-lg SearchSelect" data-placeholder='Company' style="width: 100%">
                                                            <option value=""></option>
                                                            @foreach($Companies as $Company)
                                                            <option value="{{ $Company->id }}">{{ $Company->company }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>   
                                                </div> <!-- /.tab-pane --> 

                                                <div class="tab-pane" id="project-description">
                                                    <textarea name="description" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                                </div>
                                                <!-- /.tab-pane -->
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
                    </div> <!-- /.box-body -->
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