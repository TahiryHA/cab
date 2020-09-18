var app = angular.module("myApp", ["studentApi"]);
app.config(function ($routeProvider) {
  $routeProvider
    .when("/", {
      controller: ListStudentCtrl,
      templateUrl: BASE_URL + "home/student_list",
    })
    .when("/student/edit/:id", {
      controller: EditStudentCtrl,
      templateUrl: BASE_URL + "home/student_details",
    })
    .when("/student/new", {
      controller: CreateStudentCtrl,
      templateUrl: BASE_URL + "home/student_details",
    })
    .when("/student/stat", {
      controller: StatCtrl,
      templateUrl: BASE_URL + "home/student_stat",
    })
    .otherwise({
      redirectTo: "/",
    });
});
