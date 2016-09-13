<div class="sd-app" ng-app="Projects" ng-controller="AddNewProject">
    <div class="modal fade"   id="NewProject" aria-hidden="true" data-backdrop="static" role="dialog" style="border-radius: 5px;">
        <div class="modal-dialog" >
            <div class="modal-content">
                <div class="bg-green-gradient modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add New Project</h4>
                </div>
                <div class="modal-body" >
                    <form method="POST" action="{{-- route('SU-NewProject') --}}">
                        {{ csrf_field()}}
                        {{--Tabs for add new user--}}
                        <label>Project Name?</label>
                        <div class="input-group" style="margin-bottom: 15px ">
                            <span class="input-group-addon"><i class="fa fa-laptop"></i></span>
                            <input ng-model="NewProject.title" class="form-control" name="projectName" type="text" placeholder="Swap Development">
                        </div>
                        <div class="nav-tabs-custom" id="AddNewProject">
                            <ul class="nav nav-tabs" id="AddUser">
                                <li class="active"><a href="#projectDescription" data-toggle="tab">Description</a></li>
                                <li><a href="#projectClient" data-toggle="tab">Client</a></li>
                                <li><a href="#projectTeam" data-toggle="tab">Team</a></li>
                                <li><a href="#projectDates" data-toggle="tab">Dates</a></li>
                                <li><a href="#projectPlateform" data-toggle="tab">Plateform</a></li>
                                <li><a href="#projectCategory" data-toggle="tab">Category</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="projectDescription">
                                    <textarea placeholder="Write Project Description Here" ng-model="NewProject.description" name="projectDescription" style="width: 100%; font-size: 14px; height: 200px;  line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div><!-- /.tab-pane -->
                                <div class="tab-pane" id="projectClient">
                                    <div id="CreateNewClient">
                                        <label>Create New Client</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input class="form-control" ng-model="NewProject.clientName" name="client-fullname" type="text" id="user-fullname" placeholder="Name">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-skype"></i></span>
                                            <input class="form-control" ng-model="NewProject.clientContact" id="user-contact" name="client-contact" type="text" placeholder="Skype/ Contact No.">
                                        </div>    
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                            <input class="form-control" ng-model="NewProject.clientEmail" name="client-email" id="user-email" type="email" placeholder="Email ID">
                                        </div>    
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                            <input class="form-control" ng-model="NewProject.clientCountry" id="user-address" name="client-address" type="text" placeholder="Country / Region">
                                        </div>    
                                    </div>
                                    <div id="SelectClient">
                                        <label>Select Registered Client</label>
                                    </div>

                                </div><!-- /.tab-pane -->
                                <div class="tab-pane" id="projectTeam" ng-init="ViewAllSuperUser()">
                                    <div class=" col-md-12" style="padding: 5px;margin-bottom: 10px">
                                        <div class="selectedUser" ng-repeat="PTeam in NewProject.team">
                                            <img class="img-circle img-sm" src="{{url('/img/<% PTeam.dp %>')}}" alt="User Image">
                                            <!--<% PTeam.name %>-->
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                        <input type="text" class="form-control" ng-model="search" placeholder="Search">
                                    </div> 
                                    <div class="box-team box-comments" id="ViewTeam"  ng-init="ViewTeam()">
                                        <!--<div ng-click="AddToTeam(team)" class="box-comment box-team-member" ng-repeat="team in VewAllTeam| filter: search">-->
                                        <div ng-click="" class="box-comment box-team-member" ng-repeat="team in VewAllTeam| filter: search">
                                            <img alt="User Image" src="{{url('/img/<% team.dp %>')}}" class="img-circle img-sm">
                                            <div class="comment-text">
                                                <span class="username">
                                                    <% team.name %>
                                                    <span class="text-muted pull-right" ><i class="fa fa-check btn btn-success" ng-click="AddToTeam(team)"></i><i class="fa fa-remove  btn btn-danger" ng-click="RemoveFromTeam(team)"></i></span>
                                                </span><!-- /.username --> 
                                            </div> <!-- /.comment-text -->
                                        </div>
                                    </div>
                                </div><!-- /.tab-pane -->
                                <div class="tab-pane" id="projectDates" >
                                    <label style="color: #555559">Project Dates (Optional)</label>
                                    <p style="color:#999999">Adding a start and end date provides your team a useful way to see the duration of this project which helps with planning your tasks and milestones</p>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input class="form-control" ng-model="NewProject.startDate" name="project-start-date" id="start-date" type="text" placeholder="Project Start Date">
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                                            <input class="form-control" ng-model="NewProject.endDate" name="project-end-date" id="end-date" type="text" placeholder="Project End Date">
                                        </div>   
                                    </div>

                                    <br>

                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="projectPlateform">
                                    <label>Plateform (Optional)<sup><a class="label label-danger bg-red-gradient" data-toggle='modal' data-target='#addPlateform'>Add New</a></sup></label>
                                    <p>Adding a plateform provides your team a useful way to group related projects together</p>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                        <input type="text" class="form-control" placeholder="Search Plateform" ng-model="SearchPlateform">
                                    </div>
                                    <div class="plateformContainer" style="padding: 5px;margin: 10px 0px" ng-init="ProjectPlateform">
                                        <div id="plateformContainer" >
                                            <div ng-click="SelectPlateform(plateform)" class="btn btn-default bg-aqua-gradient" ng-repeat="plateform in ProjectPlateform | filter : SearchPlateform"><% plateform.plateform %> <i class="fa fa-tag"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="projectCategory">
                                    <label>Category (Optional)<sup><a class="label label-danger bg-red-gradient" data-toggle='modal' data-target='#addCategory'>Add New</a></sup></label>
                                    <p>Adding a Category provides your team a useful way to group related projects together</p>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                        <input type="text" class="form-control" placeholder="Search Category" ng-model="SearchCategory">
                                    </div>
                                    <div class="form-group" ng-init="ProjectCategories">
                                        <div class="plateformContainer" style="padding: 5px;margin: 10px 0px">
                                            <div id="categoryContainer" >
                                                <button ng-click="SelectCategory(category)" class="btn bg-green-gradient" ng-repeat="category in ProjectCategories | filter: SearchCategory" style="margin: 2px"><i class="fa fa-tags"></i> <% category.category %></button> 
                                            </div>
                                        </div> 
                                    </div>  
                                </div><!-- /.tab-pane -->
                            </div><!-- /.tab-content -->
                        </div>
                </div>
                <div class="modal-footer">
                    <div class="pull-right"><input type="button" ng-click="SaveProject()" class="btn bg-green-gradient" value="Register"></div>
                    <div class="pull-left"><button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button></div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addCategory" role="dialog"  >
        <div class="modal-dialog modal-sm" style="top: 15%">
            <div class="modal-content">
                <div class="modal-header bg-red-gradient">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add New Category</h4>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" placeholder="Category Name" ng-model="CreateCategory">
                    <p id="CatAddedMsg" style="display: none"><i class="fa fa-check"></i> Category Added</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" ng-click="NewCategory(CreateCategory)" class="btn btn-default pull-right bg-green-gradient" data-dismiss="modal">Add Category</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addPlateform" role="dialog"  >
        <div class="modal-dialog modal-sm" style="top: 15%">
            <div class="modal-content">
                <div class="modal-header bg-red-gradient">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add New Plateform</h4>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" placeholder="Plateform Name" ng-model="CreatePlateform">
                    <p id="CatAddedMsg" style="display: none"><i class="fa fa-check"></i> Category Added</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" ng-click="NewPlateform(CreatePlateform)" class="btn btn-default pull-right bg-green-gradient" data-dismiss="modal">Add Platefrom</button>
                </div>
            </div>
        </div>
    </div>
</div>
@push('css')
<style>

    .select2-container {
        border: 1px solid #d2d6de;
        box-sizing: border-box;
        display: inline-block;
        margin: 0;
        padding: 2px 0px;
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
        padding: 15px 5px;
    }
    .select2-dropdown.select2-dropdown--below, .select2-dropdown--above {
        left: -1px !important;
        top: -1px !important;
        border-radius: 0px !important;  
    }
    .select2-search__field {
        width: 100% !important;
    }


    .modal-title{
        text-transform: uppercase;
    }
    .modal-header{
        cursor: move;
    }
</style>
@endpush
@push('script')
<script src="{{ url('/plugins/Angular/angular.min.js')}}"></script>
<script src="{{ url('/js/Swap/controllers/newProjectController.js')}}"></script>
<script>
    $(function () {

        $(document).on('click', '.box-team-member', function () {
            var CurrentAttr = $(this).attr('ng-click');
            if (CurrentAttr === "AddToTeam(team)") {
                $(this).attr('ng-click', 'RemoveFromTeam(team)');
            } else {
                $(this).attr('ng-click', 'AddToTeam(team)');
            }
        });
        //Initialize Select2 Elements
        $(".select2").select2();
        //Datemask dd/mm/yyyy
        $("#start-date, #end-date").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        $('.modal-content').draggable({
            handle: '.modal-header',
        });
        $('#ViewTeam').slimScroll({height: "190px"});
        $('#plateformContainer, #categoryContainer').slimScroll({height: "115px"});
        $('textarea[name=projectDescription]').slimScroll({height: "200px", width: "100%"});
        $('[data-toggle="popover"]').popover();
    });
</script>
@endpush