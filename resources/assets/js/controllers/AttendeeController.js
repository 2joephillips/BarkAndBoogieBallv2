angular.module('AttendeeController', []).controller('AttendeeController', ['$scope', '$location', '$routeParams', 'Attendee',
    function ($scope, $location, $routeParams, Attendee){
        
        $scope.find = function() {
            $scope.attendees = Attendee.query();
        }

    }
]);