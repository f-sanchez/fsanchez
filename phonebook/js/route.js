
var app = angular.module("myApp", ["ngRoute"]);

app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "view.php"
    })
    .when("/create", {
        templateUrl : "create.php"
    })
    .when("/view", {
        templateUrl : "view.php"
    })
    .when("/update", {
        templateUrl : "update.php"
    })
});