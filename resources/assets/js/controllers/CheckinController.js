angular.module('CheckinController', []).controller('CheckinController', ['$scope', '$http', '$location', '$routeParams', 'Attendee', 'Modal', 'SendEmail',
    function ($scope, $http, $location, $routeParams, Attendee, Modal, SendEmail) {

        $scope.selection = [];
        $scope.balanceDue = "";
        $scope.checkin = checkin;
        $scope.checkout = checkout;

        $scope.find = function () {
            Attendee.assignedAuctionItems().$promise.then(function(data) {
                $scope.attendees  = data;


            });
        }

        $scope.findOne = function () {
            var splitPath = $location.path().split('/');
            var personId = splitPath[splitPath.length - 1];
            $scope.attendee = Attendee.get({personId: personId});
        };


        function checkin(attendee) {
            for (var i = 0; i < $scope.attendees.length; i++) {
                if ($scope.attendees[i].id == attendee.id) {
                    if (attendee.paidinfull == 0) {
                        var modalOptions = {
                            closeButtonText: 'Cancel',
                            actionButtonText: 'Collected Money',
                            headerText: 'Balance due for ' + attendee.firstname + ' ' + attendee.lastname + '.',
                            bodyText: 'Please, collect $' + attendee.balance + '.'
                        };
                    }
                    else {
                        var modalOptions = {
                            closeButtonText: 'Cancel',
                            actionButtonText: 'Paid In Full',
                            headerText: 'No balance due for ' + attendee.firstname + ' ' + attendee.lastname + '.',
                            bodyText: ''
                        };

                    }

                    Modal.showModal({}, modalOptions).then( function(result) {
                        attendee.checkedIn = 1;
                        attendee.paidinfull = 1;
                        attendee.balance = "0";
                        attendee.$update(function (res) {
                            $location.path('checkin/')
                        });

                    });
                }
            }
        }

        function checkout(attendee){
            var attendeeId = attendee.id;
            attendee.checkedOut = 1;
           // SendEmail.get({attendeeId: attendeeId});
        }
    }
]);