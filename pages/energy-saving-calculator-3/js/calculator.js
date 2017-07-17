var app = angular.module('calcApp', []);
app.controller('myCtrl1', function($scope) {
  $scope.OriginalWatts = null;
  $scope.ReplacementWatts = null;
  $scope.NumberOfLamps = null;

  $scope.TotalWatts = function() {
    return (($scope.OriginalWatts - $scope.ReplacementWatts) * $scope.NumberOfLamps);
  }

  $scope.KiloWatts = function() {
    return ($scope.TotalWatts() / 1000);
  }

  $scope.HoursPerDay = null;
  $scope.DaysPerWeek = null;
  $scope.WeeksPerYear = null;

  $scope.AnualSaving = function() {
    return ($scope.KiloWatts() * $scope.HoursPerDay * $scope.DaysPerWeek * $scope.WeeksPerYear);
  }

  $scope.EnergyCost = null;

  $scope.TotalSavings = function() {
    return (($scope.AnualSaving() * $scope.EnergyCost));
  }

});
