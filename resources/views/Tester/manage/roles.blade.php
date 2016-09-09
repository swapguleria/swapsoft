@extends('layouts.app')
@section('title') Dashboard @stop
@section('Manage') active @stop
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Manage User Roles
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
                        <table id="Roles" class="table table-bordered table-hover dataTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Department</th>
                                    <th>Company</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($UserRoles as $UserRole)
                                <tr>
                                    <td>{{ $UserRole->id }}</td>
                                    <td>{{ $UserRole->role }} </td>
                                    <td>{{ $UserRole->department }}</td>
                                    <td>{{ $UserRole->company }}</td>
                                    <td>{{ $UserRole->status }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Department</th>
                                    <th>Company</th>
                                    <th>Description</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <div class="modal " id="NewRole" aria-hidden="true" data-backdrop="static" role="dialog" style="border-radius: 5px;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="bg-green-gradient modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add New Role</h4>
                            </div>
                            <div class="modal-body" >
                                {!! Form::open(['route'=>'NewRole', 'method'=>'post']) !!}
                                {{--Tabs for add new user--}}
                                <div class="nav-tabs-custom">

                                    <ul class="nav nav-tabs" id="AddUser">
                                        <li class="active"><a href="#role-details" data-toggle="tab">Role Details</a></li>
                                        <li><a href="#role-description" data-toggle="tab">Role Description</a></li>
                                        <li class="pull-right header">{!! Form::submit('Register', ['class'=>'btn btn-primary btn-flat']) !!}</li>
                                    </ul>
                                    <div class="tab-content" style="height: 250px !important">
                                        <div class="tab-pane active" id="role-details" >
                                            <div class="progress progress-xxs active">
                                                <div class="progress-bar progress-bar-success progress-bar-striped" id="new-user-project-details" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-laptop fa-2x"></i></span>
                                                {!! Form::text('role', '', ['class'=>'form-control input-lg', 'id'=>'', 'placeholder'=>'Role Name']) !!}
                                            </div>
                                            <br>
                                            <div class="input-group" >
                                                <span class="input-group-addon"><i class="fa fa-git fa-2x"></i></span>
                                                <select name="department" class="form-control input-lg SearchSelect" data-placeholder='Select Department' style="width: 100%">
                                                    <option value=""></option>
                                                    @foreach($Departments as $Department)
                                                    <option value="{{ $Department->id }}">{{ $Department->department }}</option>
                                                    @endforeach 
                                                </select>
                                            </div>   
                                            <br>
                                            <div class="input-group" >
                                                <span class="input-group-addon"><i class="fa fa-bank fa-2x"></i></span>
                                                <select name="company" class="form-control input-lg SearchSelect" data-placeholder='Select Company' style="width: 100%">
                                                    <option value=""></option>
                                                    @foreach($Companies as $Company)
                                                    <option value="{{ $Company->id }}">{{ $Company->company }}</option>
                                                    @endforeach
                                                </select>
                                            </div>   
                                        </div> <!-- /.tab-pane --> 

                                        <div class="tab-pane" id="role-description">
                                            <textarea name="description" class="textarea" style="width: 100%; height: 170px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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