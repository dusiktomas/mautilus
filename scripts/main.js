(function(){
  var shopController = function ($scope) {
    $scope.information = {
      shopName : 'Zkouska',
      e_mail : 'Zkouska',
      street: 'EUR',
      city: 'GBP',
      country: 'Czech Republic',
      zipcode: '1000',
      phone: '747.10',
      web: '24-JAN-15 10:27:44',
      gps_lat: 'FR',
      gps_long: 'FR',
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
