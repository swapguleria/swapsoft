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
                                    <td><a href="{{ route('SU-ViewProject')}}/{{ $project->id }}">{{ $project->title }}</a></td>
                                    <td>{{ $project->client }}</td>
                                    <td>{{ $project->title }}</td>
                                    <td>{{ $project->title }}</td>
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
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
</div>
{{-- Including Popup Models --}}
@include('layouts.Models.newProject')
@stop
