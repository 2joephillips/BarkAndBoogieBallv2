angular.module('ConfirmEmailController', []).controller('ConfirmEmailController', ['$scope', '$modalInstance' , 'attendee',
    function ($scope, $modalInstance,  attendee) {

        $scope.attendee = attendee;

        $scope.ok = function () {
            $modalInstance.close($scope.attendee);
        };

        $scope.cancel = function () {
            $modalInstance.dismiss('cancel');
        };

        $scope.update = function() {
            alert(attendee.email);

        }
    }
]);
