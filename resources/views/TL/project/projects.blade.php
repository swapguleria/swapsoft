@extends('layouts.app')
@section('title') All Project @stop
@section('projects') active @stop
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            AllProject
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="javascript:void(0);"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="Projects" class="table table-bordered table-hover dataTable">
                            <thead>
                                <tr>
                                    <tr>
                                    <th>Project ID</th>
                                    <th>Project Title</th>
                                    <th>Client</th>
                                    <th>Platform</th>
                                    <th>State</th>
                                </tr>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key => $project )
                                <tr>
                                    <td>{{ $project->id }}</td>
                                    <td>{{ $project->project_name }}</td>
                                    <td>{{ $project->project_client }}</td>
                                    <td>{{ $project->project_name }}</td>
                                    <td>{{ $project->project_name }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Project ID</th>
                                    <th>Project Title</th>
                                    <th>Client</th>
                                    <th>Platform</th>
                                    <th>State</th>
                                </tr>
                            </tfoot>
                        </table>

                        <div class="modal " id="NewProject" aria-hidden="true" data-backdrop="static" role="dialog" style="border-radius: 5px;">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="bg-green-gradient modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Add New Project</h4>
                                    </div>
                                    <div class="modal-body" >
                                        {!! Form::open(['route'=>'new-project', 'method'=>'post']) !!}
                                        {{--Tabs for add new user--}}
                                        <div class="nav-tabs-custom">

                                            <ul class="nav nav-tabs" id="AddUser">
                                                <li class="active"><a href="#project-details" data-toggle="tab">Project Details</a></li>
                                                <li><a href="#project-client-details" data-toggle="tab">Client Details</a></li>
                                                <li><a href="#project-description" data-toggle="tab">Project Description</a></li>
                                                <li><a href="#project-team" data-toggle="tab">Project Team</a></li>
                                                <li><a href="#project-access" data-toggle="tab">Project Access</a></li>

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
                                                        {!! Form::text('project-name', '', ['class'=>'form-control input-lg', 'id'=>'', 'placeholder'=>'Project Name']) !!}
                                                    </div>
                                                    <br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-folder-open-o fa-2x"></i></span>
                                                        {!! Form::select('project-category', 
                                                        [
                                                        'BDM'=>'BDM',
                                                        'TL'=>'Team Leader',
                                                        'TM'=>'Team Member'
                                                        ], '', ['class'=>'form-control input-lg select2', 'multiple'=>"multiple", 'id'=>'user-category', 'style'=>'width: 100%', 'data-placeholder'=>"Select Project Category"]) !!}
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-adn"></i>
                                                        </span>
                                                    </div>    
                                                    <br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-calendar fa-2x"></i></span>
                                                        {!! Form::text('project-start-date', '', ['class'=>'form-control input-lg', 'id'=>'start-date', 'placeholder'=> 'Project Start Date']) !!}
                                                    </div>    
                                                    <br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-calendar-check-o fa-2x"></i></span>
                                                        {!! Form::text('project-end-date', '', ['class'=>'form-control input-lg', 'id'=>'end-date', 'placeholder'=>'Project End Date']) !!}
                                                    </div>    
                                                </div>
                                                <!-- /.tab-pane -->
                                                <div class="tab-pane" id="project-client-details">
                                                    <div class="progress progress-xxs active">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" id="new-user-project-client-details" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-user fa-2x"></i></span>
                                                        {!! Form::text('client-fullname', '', ['class'=>'form-control input-lg', 'id'=>'user-fullname', 'placeholder'=>'Client Full Name']) !!}
                                                    </div>
                                                    <br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-skype fa-2x"></i></span>
                                                        {!! Form::text('client-contact', '', ['class'=>'form-control input-lg', 'id'=>'user-contact', 'placeholder'=>'Client Skype / Contact No.']) !!}
                                                    </div>    
                                                    <br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-envelope-o fa-2x"></i></span>
                                                        {!! Form::email('client-email', '', ['class'=>'form-control input-lg', 'id'=>'user-email', 'placeholder'=>'Client Email ID']) !!}
                                                    </div>    
                                                    <br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-home fa-2x"></i></span>
                                                        {!! Form::text('client-address', '', ['class'=>'form-control input-lg', 'id'=>'user-address', 'placeholder'=>'Client Address']) !!}
                                                    </div>    
                                                </div>
                                                <!-- /.tab-pane -->
                                                <div class="tab-pane" id="project-description">
                                                    <textarea name="project-description" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                                </div>
                                                <!-- /.tab-pane -->
                                                <div class="tab-pane" id="project-team">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-folder-open-o fa-2x"></i></span>
                                                        {!! Form::select('project-team', 
                                                        [
                                                        'BDM'=>'BDM',
                                                        'TL'=>'Team Leader',
                                                        'TM'=>'Team Member'
                                                        ], '', ['class'=>'form-control input-lg select2', 'multiple'=>"multiple", 'id'=>'user-category', 'style'=>'width: 100%', 'data-placeholder'=>"Select Project Category"]) !!}
                                                    </div> 
                                                </div><!-- /.tab-pane -->

                                                <div class="tab-pane" id="project-access">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-globe fa-2x"></i></span>
                                                        {!! Form::text('project-host-url', '', ['class'=>'form-control input-lg', 'id'=>'', 'placeholder'=>'Project Host URL']) !!}
                                                    </div>
                                                    <br>
                                                    <div class="input-group" style="width: 50%; float: left">
                                                        <span class="input-group-addon"><i class="fa fa-user fa-2x"></i></span>
                                                        {!! Form::text('project-host-user', '', ['class'=>'form-control input-lg', 'id'=>'', 'placeholder'=>'Project Host Username']) !!}
                                                    </div>
                                                    <div class="input-group" style="width: 50%; float: left">
                                                        <span class="input-group-addon"><i class="fa fa-key fa-2x"></i></span>
                                                        {!! Form::text('project-host-pass', '', ['class'=>'form-control input-lg', 'id'=>'', 'placeholder'=>'Project Host Password']) !!}
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-globe fa-2x"></i></span>
                                                        {!! Form::text('project-cp-url', '', ['class'=>'form-control input-lg', 'id'=>'', 'placeholder'=>'Project Cpanel URL']) !!}
                                                    </div>
                                                    <br>
                                                    <div class="input-group" style="width: 50%; float: left">
                                                        <span class="input-group-addon"><i class="fa fa-user fa-2x"></i></span>
                                                        {!! Form::text('project-cp-user', '', ['class'=>'form-control input-lg', 'id'=>'', 'placeholder'=>'Project Cpanel Username']) !!}
                                                    </div>
                                                    <div class="input-group" style="width: 50%; float: left">
                                                        <span class="input-group-addon"><i class="fa fa-key fa-2x"></i></span>
                                                        {!! Form::text('project-cp-pass', '', ['class'=>'form-control input-lg', 'id'=>'', 'placeholder'=>'Project Cpanel Password']) !!}
                                                    </div>
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
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
</div>
@stop
@push('css')
<style>
    .modal-title{
        text-transform: uppercase;
    }
    .modal-header{
        cursor: move;
    }
    .select2-container--default .select2-selection--multiple{
        padding: 5px 16px;
        border-radius: 0px !important;
        border-color: #D2D6DE;
    }
    .select2-search__field {
        width: 500px !important;
    }
</style>
@endpush
@push('script')
<script>
$(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
    //Datemask dd/mm/yyyy
    $("#start-date, #end-date").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    $('.modal-content').draggable({
        handle: '.modal-header',
    });
});
</script>
@endpush