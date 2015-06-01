(function(){
  var shopController = function ($scope) {
    $scope.information = {
      shopName : 'Alza CZ',
      e_mail : 'email@email.cz;',
      street: 'Potovni 336',
      city: 'Brno',
      country: 'Czech Republic',
      zipcode: '671 67',
      phone: '741 450 645',
      web: 'seznam.cz',
      gps_lat: '454545',
      gps_long: '454556',
    };

    $scope.resetForm = function(){
      for(var i in $scope.information){
        $scope.information[i] = '';
      }
    }
  };
  angular.module('Shop', ['ngSanitize'])
  .controller('shopController', shopController)
  ;
}());
