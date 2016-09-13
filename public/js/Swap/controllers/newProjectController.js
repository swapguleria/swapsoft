var SwapProjects = angular.module('Projects', []).config(function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
SwapProjects.controller('AddNewProject', function ($scope, $http) {
    $scope.NewProject = {};
    $scope.ProjectCategories = [{category: 'Web Design'}, {category: "Web Development"}, {category: "Web Development & Designing"}, {category: "Web Maintainance"}];
    $scope.ProjectPlateform = [{plateform: 'Wordpress'}, {plateform: "YII"}, {plateform: "Core PHP"}, {plateform: "Laravel"}];
    $scope.ViewTeam = function () {
        $http.get('http://swapdevelopment/ajax/view/all/team').success(function (response) {
            $scope.VewAllTeam = response;
        });
    };
    $scope.ViewAllSuperUser = function () {
        $http.get('http://swapdevelopment/ajax/view/all/superuser').success(function (response) {
            $scope.AllSuperUser = response;
            $scope.NewProject.team = $scope.AllSuperUser;
        });
    };
    $scope.AddToTeam = function (user) {
        for (var i = 0; i < $scope.NewProject.team.length; i += 1) {
            if ($scope.NewProject.team[i]['id'] === user.id) {
                var objFound = 1;
            }
        }
        if (objFound !== 1) {
            $scope.NewProject.team.push({id: user.id, name: user.name, email: user.email, type: user.type, dp: user.dp});
        }
    };
    $scope.RemoveFromTeam = function (user) {
        for (var i = 0; i < $scope.NewProject.team.length; i++) {
            if ($scope.NewProject.team[i]['id'] === user.id && $scope.NewProject.team.length > 1 && $scope.NewProject.team[i]['type'] !== 'SuperUser') {
                $scope.NewProject.team.splice(i, 1);
            }
        }
    };
    $scope.ViewCategories = function () {


    };


    $scope.NewCategory = function (category) {
        if (category !== '')
        {
            for (var found, i = 0; i < $scope.ProjectCategories.length; i++) {
                if ($scope.ProjectCategories[i]['category'] === category) {
                    found = 1;
                }
            }
            if (found !== 1) {
                $scope.ProjectCategories.push({category: category});
                console.log($scope.ProjectCategories);
            }


        }
    };
    
    $scope.SelectPlateform = function(plateform){
        $scope.NewProject.plateform = plateform;
    };
    $scope.SelectCategory = function(category){
        $scope.NewProject.category = category;
    };
    
    $scope.NewPlateform = function (plateform) {
        if (plateform !== '')
        {
            for (var found, i = 0; i < $scope.ProjectPlateform.length; i++) {
                if ($scope.ProjectPlateform[i]['plateform'] === plateform) {
                    found = 1;
                }
            }
            if (found !== 1) {
                $scope.ProjectPlateform.push({plateform: plateform});
                console.log($scope.ProjectPlateform);
            }


        }
    };
    $scope.SaveProject = function () {
//        $scope.NewProject.push({'team': $scope.ProjectTeam});
//        $scope.loading = true;
//        $http.get('http://swapdevelopment/ajax/view/team').success(function (response) {
        console.log($scope.NewProject);
//        });
    };
});