angular.module('AttendeeController', []).controller('AttendeeController', ['$scope', '$location', '$routeParams', 'Attendee', 'Modal',
    function ($scope, $location, $routeParams, Attendee, Modal){
        
        $scope.find = function() {
            $scope.attendees = Attendee.query();
        }

        $scope.remove = function(attendee) {

            var modalOptions = {
                closeButtonText: 'Cancel',
                actionButtonText: 'Delete Customer',
                headerText: 'Delete ?',
                bodyText: 'Are you sure you want to delete this customer?'
            };

            Modal.showModal({}, modalOptions).then(
           )
        };

    }
]);