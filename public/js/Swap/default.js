/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    "use strict";
//***********************************Global Variable***********************************************************************
    //|----------------------------------------------------------------------------------------|
    //|                                       Add New User Variables                        |
    //|----------------------------------------------------------------------------------------|

//***LOGIN DETAILS***
    var _SD_progress_bar = null,
            _SLD_Inputs = $('#user-username, #user-password, #user-re-password, #user-backup-pin'), _SLD_Btn = $('#SLD-Btn'),
            _SLD_Wrapper = $('#SLD-Wrapper'), _LD_username = $('#user-username'), _LD_pass = $('#user-password'),
            _LD_re_pass = $('#user-re-password'), _LD_pin = $('#user-backup-pin'), _LD_user = _LD_username.val(),
            _LD_pwrd = _LD_pass.val(), _LD_re_pwrd = _LD_re_pass.val(), _LD_mpin = _LD_pin.val();
//***PERSONAL DETAILS***
    var _SPD_Inputs = $('#user-fullname, #user-contact, #user-email, #user-address'), _SPD_Btn = $('#SPD-Btn'),
            _SPD_Prev = $('#SPD-Prev'), _SPD_Wrapper = $('#SPD-Wrapper'), _JP_Btn = $('#JP-Btn'), _PD_name = $('#user-fullname'),
            _PD_contact = $('#user-contact'), _PD_email = $('#user-email'), _PD_adrs = $('#user-address'), _PD_fname = _PD_name.val(),
            _PD_mobile = _PD_contact.val(), _PD_mail = _PD_email.val(), _PD_adrss = _PD_adrs.val();
//***JOB PROFILE***
    var _SJP_Inputs = $('#user-category, #user-designation, #user-teamleader'), _SJP_Wrapper = $('#SJP-Wrapper'),
            _SJP_Prev = $('#SJP-Prev'), _JP_category = $('#user-category'), _JP_designation = $('#user-designation'),
            _JP_teamleader = $('#user-teamleader');
//***PROFESSIONAL EXPERIANCE***
    var _SPE_Inputs = $('#user-category, #user-designation, #user-teamleader'), _SPE_Wrapper = $('#SPE-Wrapper'),
            _SPE_Prev = $('#SPE-Prev');


//***************************************** App Functions ********************************************************************
    //-------------------------------------------------------------------------------|
    //                              Data Views
    //-------------------------------------------------------------------------------|
    $(function () {
        //-----------------------------Function Vars------------------------------
        var _Projects = $('#Projects'), _Tasks = $('#Tasks'), _Company = $('#Company'), _Users = $('#Users'),
                _Departments = $('#Departments'), _Roles = $('#Roles');

        //-----------------Users Data Table-------------------------------------
        _Users.DataTable();
        $('#Users_length').append('<label><button data-toggle="modal" data-target="#NewUser" class="btn tbl-btn btn-primary btn-flat"><i class="fa fa-user"></i> New User</button></label>');

        //-----------------Department Data Table-----------------------------
        _Departments.DataTable();
        $('#Departments_length').append('<label><button data-toggle="modal" data-target="#NewDepartment" class="btn tbl-btn btn-primary btn-flat"><i class="fa fa-gitlab"></i> New Department</button></label>');
        
        //-----------------User Role Data Table-----------------------------
        _Roles.DataTable();
        $('#Roles_length').append('<label><button data-toggle="modal" data-target="#NewRole" class="btn tbl-btn btn-primary btn-flat"><i class="fa fa-gitlab"></i> New Role</button></label>');
        
        //-----------------Projects Data Table----------------------------------
        _Projects.DataTable();
        $('#Projects_length').append('<label><button data-toggle="modal" data-target="#NewProject" class="btn tbl-btn btn-primary btn-flat"><i class="fa fa-product-hunt"></i> New Project</button></label>');

        //------------------Tasks Data Table------------------------------------
        _Tasks.DataTable();
        $('#Tasks_length').append('<label><button data-toggle="modal" data-target="#NewTask" class="btn tbl-btn btn-primary btn-flat">New</button></label>');

        //------------------Company Data Table-------------------------------
        _Company.DataTable();
        $('#Company_length').append('<label><button data-toggle="modal" data-target="#NewCompany" class="btn tbl-btn btn-primary btn-flat"><i class="fa fa-bank"></i> New Company</button></label>');
    });


    //-------------------------------------------------------------------------------|
    //                              App Text Editors Function
    //-------------------------------------------------------------------------------|
    $(function () {
        $(".textarea").wysihtml5();
    });
    
    
    //-------------------------------------------------------------------------------|
    //                              App Search Select Function
    //-------------------------------------------------------------------------------|
    $(function () {
        $(".SearchSelect").select2();
    });


    //-------------------------------------------------------------------------------|
    //                              Account Log-Off
    //-------------------------------------------------------------------------------|
    var StartTimer = 0;
    $(this).mousemove(function () {
        StartTimer = 0;
    });
    $(this).keypress(function () {
        StartTimer = 0;
    });
    $(function () {
        setInterval(function () {
            StartTimer + 1;
            if (StartTimer === 1)
            {
                alert(StartTimer);
                window.location.href = "http://blog/log-off";
            }
        }, 60000);
    });

//*******************************************************************************************************************
    //-------------------------------------------------------------------------------|
    //                      Unlock Personal Details Button
    //-------------------------------------------------------------------------------|
    _SLD_Inputs.bind('keyup focus', function (e) {
        var username = _LD_username.val();
        if (username !== '')
        {
            _LD_user = 25;
        } else {
            _LD_user = 0;
        }
        var pass = _LD_pass.val();
        if (pass !== '') {
            _LD_pwrd = 25;
        } else {
            _LD_pwrd = 0;
        }
        var repass = _LD_re_pass.val();
        if (repass !== '')
        {
            _LD_re_pwrd = 25;
        } else {
            _LD_re_pwrd = 0;
        }
        var backup = _LD_pin.val();
        if (backup !== '')
        {
            _LD_mpin = 25;
        } else {
            _LD_mpin = 0;
        }
        _SD_progress_bar = _LD_user + _LD_pwrd + _LD_re_pwrd + _LD_mpin;
        $('#new-user-login-details').css('width', _SD_progress_bar + '%');
        if (_SD_progress_bar === 100)
        {
//            $(document).find('#Personal').html("<a href="#personal-details" data-toggle="tab">Personal</a>');
//            $('#Personal').html('<a href="#personal-details" data-toggle="tab">Personal</a>');
        } else {
//            $('#Personal').html("");
        }
    });

    //******************************Login Details Validation********************************
    _LD_username.on(' cut copy paste ', function (e) {

        e.preventDefault();
    });
    _LD_username.on("contextmenu", function (e) {
        return false;
    });



    jQuery(function () {
        _LD_username.bind('keydown focus keypress', function () {
            if (_LD_username.val().length === 0 || _LD_username.val() === "")
            {
                _LD_username.val('swap.');
            }
        });
        _LD_username.bind('keydown focus', function (e) {
//            _LD_username.disableSelection();

            if ((e.ctrlKey) && (String.fromCharCode(e.which).toLowerCase() === 'a')) {
                e.preventDefault();
            }
            if (_LD_username.val().length <= 5 && e.which === 8)
            {
                return false;
            } else {
                if (_LD_username.val().length === 20 && e.which !== 8)
                {
                    return e.which = false;
                } else {
                    return true;
                }
            }

        });
    });
//*****************************************************************************
    //-------------------------------------------------------------------------------|
    //                      Unlock Job Profile Button
    //-------------------------------------------------------------------------------|
    _SPD_Inputs.bind('keyup focus', function () {
        var fullname = _PD_name.val();
        if (fullname !== '')
        {
            _PD_fname = 25;
        } else {
            _PD_fname = 0;
        }
        var contact = _PD_contact.val();
        if (contact !== '') {
            _PD_mobile = 25;
        } else {
            _PD_mobile = 0;
        }
        var email = _PD_email.val();
        if (email !== '')
        {
            _PD_mail = 25;
        } else {
            _PD_mail = 0;
        }
        var address = _PD_adrs.val();
        if (address !== '')
        {
            _PD_adrss = 25;
        } else {
            _PD_adrss = 0;
        }
        _SD_progress_bar = _PD_fname + _PD_mobile + _PD_mail + _PD_adrss;
        $('#new-user-personal-details').css('width', _SD_progress_bar + '%');
        if (_SD_progress_bar === 100)
        {
            $('#SPD-Next').html("<a class='btn btn-app ANUF' id='JP-Btn' ><i class='fa fa-long-arrow-right '></i> Job Profile</a>");
//            _SPD_Btn.show(1000);
        } else {
            $('#SPD-Next').html("");
//            _SPD_Btn.hide(1000);
        }
    });
//*****************************************************************************
    //-------------------------------------------------------------------------------|
    //                      Unlock Job Profile Button
    //-------------------------------------------------------------------------------|


    _SJP_Inputs.bind('change', function () {

        var category = _JP_category.val();
        if (category !== '')
        {
            _PD_fname = 33;
        } else {
            _PD_fname = 0;
        }
        var designation = _JP_designation.val();
        if (designation !== '') {
            _PD_mobile = 33;
        } else {
            _PD_mobile = 0;
        }
        var teamleader = _JP_teamleader.val();
        if (teamleader !== '')
        {
            _PD_mail = 34;
        } else {
            _PD_mail = 0;
        }
        _SD_progress_bar = _PD_fname + _PD_mobile + _PD_mail;
        $('#new-user-job-profile').css('width', _SD_progress_bar + '%');
        if (_SD_progress_bar === 100)
        {
            $('#SPE-Next').html("<a class='btn btn-app ANUF' id='PE-Btn' ><i class='fa fa-long-arrow-right '></i>Experience</a>");
//            _SPD_Btn.show(1000);
        } else {
            $('#SPE-Next').html("");
//            _SPD_Btn.hide(1000);
        }
    });
//*****************************************************************************
    $(document).on('click', '#SPD-Btn', function () {
        _SLD_Wrapper.hide('slide', {direction: 'left'}, 500);
        _SPD_Wrapper.delay(500).show('slide', {direction: 'right'}, 500);
    });
    _SLD_Btn.click(function () {
        _SPD_Wrapper.hide('slide', {direction: 'right'}, 500);
        _SLD_Wrapper.delay(500).show('slide', {direction: 'left'}, 500);
    });
    $(document).on('click', '#JP-Btn', function () {
        _SPD_Wrapper.hide('slide', {direction: 'left'}, 500);
        _SJP_Wrapper.delay(500).show('slide', {direction: 'right'}, 500);
    });
    _SPD_Prev.on('click', function () {
        _SJP_Wrapper.hide('slide', {direction: 'right'}, 500);
        _SPD_Wrapper.delay(500).show('slide', {direction: 'left'}, 500);
    });
    $(document).on('click', '#PE-Btn', function () {
        _SJP_Wrapper.hide('slide', {direction: 'left'}, 500);
        _SPE_Wrapper.delay(500).show('slide', {direction: 'right'}, 500);
    });
    _SPE_Prev.on('click', function () {
        _SPE_Wrapper.hide('slide', {direction: 'right'}, 500);
        _SJP_Wrapper.delay(500).show('slide', {direction: 'left'}, 500);
    });



});

