// ==================== List Student ====================
function ListStudentCtrl($scope, $location, Student) {
  $scope.students = Student.query();
  $scope.title = "Liste des étudiants";

  $scope.destroy = function (Student) {
    Student.destroy(function () {
      $scope.students.splice($scope.students.indexOf(Student), 1);
    });
  };
}

// ================ Student create ==========
function CreateStudentCtrl($scope, $location, Student) {
  $scope.title = "Ajout de nouveau étudiant";

  $scope.save = function () {
    Student.save($scope.student, function (student) {
      $location.path("/");
    });
  };
}

// ==================== Student edit ==============
function EditStudentCtrl($scope, $location, $routeParams, Student) {
  var self = this;

  $scope.title = "Modification";

  Student.get(
    {
      id: $routeParams.id,
    },
    function (student) {
      self.original = student;
      $scope.student = new Student(self.original);
    }
  );

  $scope.isClean = function () {
    return angular.equals(self.original, $scope.student);
  };

  $scope.destroy = function () {
    self.original.destroy(function () {
      $location.path("/");
    });
  };

  $scope.save = function () {
    $scope.student.update(function () {
      $location.path("/");
    });
  };
}

angular
  .module("studentApi", ["ngResource"])
  .factory("Student", function ($resource) {
    var Student = $resource(
      BASE_URL + "api/students/:method/:id",
      {},
      {
        query: {
          method: "GET",
          params: {
            method: "index",
          },
          isArray: true,
        },
        save: {
          method: "POST",
          params: {
            method: "save",
          },
        },
        get: {
          method: "GET",
          params: {
            method: "edit",
          },
        },
        remove: {
          method: "DELETE",
          params: {
            method: "remove",
          },
        },
      }
    );

    Student.prototype.update = function (cb) {
      return Student.save(
        {
          id: this.id,
        },
        angular.extend({}, this, {
          id: undefined,
        }),
        cb
      );
    };

    Student.prototype.destroy = function (cb) {
      if (confirm("Voulez-vous vraiment le supprimer ?")) {
        return Student.remove(
          {
            id: this.id,
          },
          cb
        );
      } else {
      }
    };

    return Student;
  });
