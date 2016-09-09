var SwapProjects = angular.module('Projects', []);
SwapProjects.controller('AddNewProject', function($scope, $http){
    $scope.NewProject = {};
    
    $scope.SaveProject = function(){
        $scope.loading = true;
        $http.get('http://swapdevelopment/ajax/view/team').success(function(response){
            console.log(response);
        });
        console.log($scope.NewProject);
    };
});