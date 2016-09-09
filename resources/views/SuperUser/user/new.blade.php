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
                <div class="box box-solid " id="SLD-Wrapper">
                    <div class="box-header text-center">
                        <h5 class="box-title ">LOGIN DETAILS</h5>
                    </div>
                    <div class="box-body">
                        <div class="progress progress-sm active">
                            <div class="progress-bar progress-bar-success progress-bar-striped" id="new-user-login-details" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-at fa-2x"></i></span>
                                {!! Form::text('username', 'swap.', ['class'=>'form-control input-lg', 'id'=>'user-username', 'placeholder'=>'Username']) !!}
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
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key fa-2x"></i></span>
                                {!! Form::text('password', '', ['class'=>'form-control input-lg', 'id'=>'user-backup-pin', 'placeholder'=>'Backup Pin']) !!}
                            </div>    
                            <br><br>
                        </div>
                        <div class="col-lg-2 text-center" id="SLD-Next"></div>
                    </div>
                </div>
                
                <div class="box box-solid " id="SPD-Wrapper">
                    <div class="box-header text-center">
                        <h5 class="box-title ">PERSONAL DETAILS</h5>
                    </div>
                    <div class="box-body">
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-success progress-bar-striped" id="new-user-personal-details" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="col-lg-2 text-center" >
                                <a class="btn btn-app ANUF" id="SLD-Btn">
                                    <i class="fa fa-long-arrow-left "></i> Login Details
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa-2x"></i></span>
                                {!! Form::text('fullname', '', ['class'=>'form-control input-lg', 'id'=>'user-fullname', 'placeholder'=>'Full Name']) !!}
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone fa-2x"></i></span>
                                {!! Form::text('contact', '', ['class'=>'form-control input-lg', 'id'=>'user-contact', 'placeholder'=>'Contact No.']) !!}
                            </div>    
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope-o fa-2x"></i></span>
                                {!! Form::email('email', '', ['class'=>'form-control input-lg', 'id'=>'user-email', 'placeholder'=>'Email ID']) !!}
                            </div>    
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home fa-2x"></i></span>
                                {!! Form::text('address', '', ['class'=>'form-control input-lg', 'id'=>'user-address', 'placeholder'=>'Home Address']) !!}
                            </div>    
                            <br><br>
                        </div>
                        <div class="col-lg-2 text-center" id="SPD-Next"></div>
                    </div>
                </div>
                <div class="box box-solid " id="SJP-Wrapper">
                    <div class="box-header text-center">
                        <h5 class="box-title ">Job Profile</h5>
                    </div>
                    <div class="box-body">
                        <div class="progress progress-sm">
                            <div class="progress-bar progress-bar-success progress-bar-striped" id="new-user-personal-details" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">mnhhgf
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="col-lg-2 text-center" >
                                <a class="btn btn-app ANUF" id="SPD-Prev">
                                    <i class="fa fa-long-arrow-left "></i> Personal Details
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-briefcase fa-2x"></i></span>
                                {!! Form::select('designation', 
                                [
                                ''=>'----- SELECT DESIGNATION -----',
                                'BDM'=>'BDM',
                                'TL'=>'Team Leader',
                                'TM'=>'Team Member'
                                ], '', ['class'=>'form-control input-lg', 'id'=>'user-address']) !!}
                            </div>
                            <br><br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-desktop fa-2x"></i></span>
                                {!! Form::select('designation', 
                                [
                                ''=>'----- ASSIGN TEAM LEADER -----',
                                'Web Developer'=>'Web Developer',
                                'Web Designer'=>'Web Designer',
                                'SEO'=>'Search Engine Optimization'
                                ], '', ['class'=>'form-control input-lg', 'id'=>'user-address']) !!}
                            </div>    
                            <br><BR>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user-secret fa-2x"></i></span>
                                {!! Form::select('address', 
                                [
                                ''=>'----- SELECT DESIGNATION -----',
                                'TL1'=>'Team Leader 1',
                                'TL2'=>'Team Leader 2',
                                'TL3'=>'Team Leader 3',
                                'TL4'=>'Team Leader 4',
                                'TL5'=>'Team Leader 5',
                                'TL6'=>'Team Leader 6',
                                'TL7'=>'Team Leader 7',
                                'TL8'=>'Team Leader 8',
                                ], '', ['class'=>'form-control input-lg', 'id'=>'user-address']) !!}
                            </div>    
                            <br><br>
                        </div>
                        <div class="col-lg-2 text-center" id="SPD-Next"></div>
                    </div>
                </div>
            </div>
        </div>{{-- .row --}}
    </section>{{-- .content --}}
</div>
@stop
@push('css')
<style>
    #SPD-Btn {
        top: 110px;
    }

    .ANUF{ top: 110px; }
    #SPD-Wrapper, #SJP-Wrapper{
        display: none;
    }
</style>
@endpush
@push('script')
<script>
</script>
@endpush