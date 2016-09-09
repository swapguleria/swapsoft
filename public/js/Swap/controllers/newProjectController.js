var SwapProjects = angular.module('Projects', []).config(function($interpolateProvider){
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
SwapProjects.controller('AddNewProject', function ($scope, $http) {
    $scope.NewProject = {};
    $scope.ProjectTeam = {};
    
    $scope.ViewTeam = function () {
        $http.get('http://swapdevelopment/ajax/view/all/team').success(function (response) {
            $scope.VewAllTeam = response;
        });
    };
    
    $scope.ViewAllSuperUser = function(){
        $http.get('http://swapdevelopment/ajax/view/all/superuser').success(function(response){
            $scope.AllSuperUser = response;

            $scope.ProjectTeam = $scope.AllSuperUser;
            console.log($scope.ProjectTeam);
        });
    };
$scope.AllSuperUser
    $scope.AddToTeam = function(index, name, email, type, dp){
        $scope.ProjectTeam.push({id: index, name: name, email: email, type: type, dp: dp});
    };
    

    $scope.SaveProject = function () {
//        $scope.loading = true;
//        $http.get('http://swapdevelopment/ajax/view/team').success(function (response) {
            console.log($scope.NewProject);
//        });
    };
});