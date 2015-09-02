angular.module('AttendeeController', []).controller('AttendeeController', ['$scope', '$http', '$location', '$routeParams', 'Attendee', 'Modal', 'Seat',
    function ($scope, $http, $location, $routeParams, Attendee, Modal, Seat){


        $scope.paid = 0;
        $scope.showBalance = true;


        $scope.togglePaid = function() {
            if ($scope.paid == 1) {
                $scope.showBalance = false;
                $scope.prevBalance = $scope.balance;
                $scope.balance = 0;
            }
            else if ($scope.paid == 0) {
                $scope.showBalance = true;
                $scope.balance = $scope.prevBalance;

            }
        }

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

        activate()

        function activate() {
              Seat.emptySeat().$promise.then(function(data) {
                $scope.availableSeats = data;
            });
        }



    }
]);