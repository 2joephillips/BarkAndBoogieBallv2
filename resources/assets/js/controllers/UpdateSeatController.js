angular.module('UpdateSeatController', []).controller('UpdateSeatController', ['$scope', '$modalInstance' , 'availableSeats', 'attendee',
    function ($scope, $modalInstance, availableSeats, attendee) {

        $scope.attendee = attendee;
        $scope.availableSeats = availableSeats;

        $scope.ok = function () {
            $modalInstance.close($scope.attendee);
        };

        $scope.cancel = function () {
            $modalInstance.dismiss('cancel');
        };

        $scope.update = function() {
            alert("Changed");
            attendee.seat_id = attendee.seat.id;
        }
    }
]);
