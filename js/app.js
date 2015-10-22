var app = angular.module('EoApp', ['ngMaterial']);

app.controller('AppCtrl', function($scope, $mdSidenav){
    $scope.openLeftMenu = function() {
        $mdSidenav('left').toggle();
    };
    $scope.ubs = 'http://ubs.com';
    $scope.prestige = 'http://prestige-asia.com';
    $scope.femina = 'http://feminagroup.com';
    $scope.marketeers = 'http://the-marketeers.com';
    $scope.event1 = 'http://padi.web.id/eoindonesia/pdf/pdf1.pdf';
    $scope.event2 = 'http://padi.web.id/eoindonesia/pdf/pdf2.pdf';
	$scope.event3 = 'http://padi.web.id/eoindonesia/pdf/pdf3.pdf';
	$scope.event4 = 'http://padi.web.id/eoindonesia/pdf/pdf4.pdf';
});

app.config(function($mdThemingProvider) {
    $mdThemingProvider.theme('default')
        .primaryPalette('orange', {
            'default': '800', // by default use shade 400 from the pink palette for primary intentions
            'hue-1': '100', // use shade 100 for the <code>md-hue-1</code> class
            'hue-2': '600', // use shade 600 for the <code>md-hue-2</code> class
            'hue-3': 'A100' // use shade A100 for the <code>md-hue-3</code> class
        })
        .accentPalette('grey', {
            'default': '700', // by default use shade 400 from the pink palette for primary intentions
            'hue-1': '100', // use shade 100 for the <code>md-hue-1</code> class
            'hue-2': '600', // use shade 600 for the <code>md-hue-2</code> class
            'hue-3': 'A100' // use shade A100 for the <code>md-hue-3</code> class
        })
});