@extends('layouts.app')
@section('title') Companies @stop
@section('Manage') active @stop
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Companies 
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
            <div class="col-md-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="col-lg-12">
                            <table id="Company" class="table table-bordered table-hover dataTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>State</th>
                                        <th>Type</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Company as $CompanyData)
                                    <tr>
                                        <td>{{ $CompanyData->id }}</td>
                                        <td>{{ $CompanyData->company }}</td>
                                        <td>{{ $CompanyData->status }}</td>
                                        <td>{{ $CompanyData->id }}</td>
                                        <td>{{ $CompanyData->id }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>State</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class="modal " id="NewCompany" aria-hidden="true" data-backdrop="static" role="dialog" style="border-radius: 5px;">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="bg-green-gradient modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Add New Company</h4>
                                    </div>
                                    <div class="modal-body" >
                                        {!! Form::open(['route'=>'NewCompany', 'method'=>'post']) !!}
                                        {{--Tabs for add new user--}}
                                        <div class="nav-tabs-custom">

                                            <ul class="nav nav-tabs" id="AddUser">
                                                <li class="active"><a href="#company-details" data-toggle="tab">Company Details</a></li>
                                                <li><a href="#company-description" data-toggle="tab">Company Description</a></li>
                                                <li><a href="#company-address" data-toggle="tab">Company Address</a></li>
                                                <li class="pull-right header">{!! Form::submit('Register', ['class'=>'btn btn-primary btn-flat']) !!}</li>
                                            </ul>
                                            <div class="tab-content" style="height: 300px !important">
                                                <div class="tab-pane active" id="company-details" >
                                                    <div class="progress progress-xxs active">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" id="new-user-project-details" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-bank fa-2x"></i></span>
                                                        {!! Form::text('company', '', ['class'=>'form-control input-lg', 'id'=>'', 'placeholder'=>'Company']) !!}
                                                    </div>
                                                    <br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-envelope fa-2x"></i></span>
                                                        {!! Form::email('email', '', ['class'=>'form-control input-lg', 'placeholder'=> 'Email ']) !!}
                                                    </div>    
                                                    <br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-phone fa-2x"></i></span>
                                                        {!! Form::text('phone', '', ['class'=>'form-control input-lg', 'placeholder'=>'Phone']) !!}
                                                    </div>    
                                                    <br>
                                                    <div class="input-group" >
                                                        <span class="input-group-addon"><i class="fa fa-bank fa-2x"></i></span>
                                                        <select name="status" class="form-control input-lg SearchSelect" data-placeholder="Status" style="width: 100%" multiple>
                                                            <option>Published</option>
                                                            <option>Established</option>
                                                            <option>Open</option>
                                                        </select> 
                                                    </div>    

                                                </div> <!-- /.tab-pane -->
                                                <div class="tab-pane" id="company-description">
                                                    <textarea name="description" class="textarea" placeholder="Write Your Company Description"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                                </div> <!-- /.tab-pane -->
                                                <div class="tab-pane" id="company-address">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-bank fa-2x"></i></span>
                                                        {!! Form::text('address-line-1', '', ['class'=>'form-control input-lg', 'id'=>'', 'placeholder'=>'Address Line 1']) !!}
                                                    </div>
                                                    <br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-bank fa-2x"></i></span>
                                                        {!! Form::text('address-line-2', '', ['class'=>'form-control input-lg', 'id'=>'', 'placeholder'=>'Address Line 2']) !!}
                                                    </div>
                                                    <br>
                                                    <div class="input-group" style="width: 50%; float: left">
                                                        <span class="input-group-addon"><i class="fa fa-bank fa-2x"></i></span>
                                                        {!! Form::text('city', '', ['class'=>'form-control input-lg', 'id'=>'', 'placeholder'=>'City']) !!}
                                                    </div>
                                                    <div class="input-group" style="width: 50%; float: left">
                                                        <span class="input-group-addon"><i class="fa fa-bank fa-2x"></i></span>
                                                        {!! Form::text('state', '', ['class'=>'form-control input-lg', 'id'=>'', 'placeholder'=>'State']) !!}
                                                    </div>
                                                    <br><br><br>
                                                    <div class="input-group" style="width: 50%; float: left">
                                                        <span class="input-group-addon"><i class="fa fa-bank fa-2x"></i></span>
                                                        {!! Form::text('pin', '', ['class'=>'form-control input-lg', 'id'=>'', 'placeholder'=>'Zip Code']) !!}
                                                    </div>
                                                    <div class="input-group" style="width: 50%; float: left">
                                                        <span class="input-group-addon"><i class="fa fa-bank fa-2x"></i></span>
                                                        {!! Form::text('country', '', ['class'=>'form-control input-lg', 'id'=>'', 'placeholder'=>'Country']) !!}
                                                    </div>
                                                    <br>
                                                </div> <!-- /.tab-pane --> 
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
        $('.modal-content').draggable({
            handle: '.modal-header',
        });
    });
</script>
@endpush