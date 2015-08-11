angular.module('AttendeeController', []).controller('AttendeeController', ['$scope', '$location', '$routeParams', 'Attendee', 'Modal',
    function ($scope, $location, $routeParams, Attendee, Modal){
        
        $scope.find = function() {
            $scope.attendees = Attendee.query();
        }

        $scope.remove = function(attendee) {

            var modalOptions = {
                closeButtonText: 'Cancel',
                actionButtonText: 'Delete Attendee',
                headerText: 'Delete '+ attendee.firstname + ' ' + attendee.lastname + ' ?',
                bodyText: 'Are you sure you want to delete this attendee?'
            };

            Modal.showModal({}, modalOptions).then( function(result) {
                    attendee.$remove(function (res) {
                        if (res) {
                            for (var i in $scope.attendees) {
                                if ($scope.attendees[i] === attendee) {
                                    $scope.attendees.splice(i, 1);
                                }
                            }
                        }
                    }, function (err) {
                        console.log(err);
                    })
                }
           )

        };

    }
]);