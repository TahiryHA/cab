angular
  .module("myApp", ["studentApi"])
  .config(function ($routeProvider) {
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
      .otherwise({
        redirectTo: "/",
      });
  });

