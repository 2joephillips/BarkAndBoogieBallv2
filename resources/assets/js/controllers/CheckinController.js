angular.module('CheckinController', []).controller('CheckinController', ['$scope', '$http', '$location', '$routeParams', '$modal', 'Attendee', 'Modal', 'SendEmail',
    function ($scope, $http, $location, $routeParams, $modal, Attendee, Modal, SendEmail) {

        $scope.selection = [];
        $scope.balanceDue = "";
        $scope.checkin = checkin;
        $scope.checkOut = checkOut;
        $scope.checkItems = checkItems;
        $scope.sendEmail = sendEmail;
        $scope.totalbids = 0;

        $scope.find = function () {
            Attendee.assignedAuctionItems().$promise.then(function(data) {
                $scope.attendees  = data;


            });
        }

        $scope.findOne = function () {
            var splitPath = $location.path().split('/');
            var personId = splitPath[splitPath.length - 1];
           Attendee.get({personId: personId}).$promise.then(function(data){
              $scope.attendee = data;
               angular.forEach( $scope.attendee.item, function(item){
                       $scope.totalbids += parseInt(item.winningBid);
                   }
               )
           });
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

        function checkItems(attendee) {
            if (attendee.item.length > 0) {
                $location.path('/checkin/edit/' + attendee.id);
            }
            else {
                var modalOptions = {
                    closeButtonText: 'Cancel',
                    actionButtonText: 'Ok',
                    headerText: 'No items won during the bidding',
                    bodyText: 'No balance due for ' + attendee.firstname + ' ' + attendee.lastname + '.'
                };
                Modal.showModal({}, modalOptions).then( function(result) {
                    attendee.checkedOut = 1;
                    attendee.$update(function (res) {
                        $location.path('checkin/')
                    });
                })
            }
        }

        function checkOut(attendee){
            attendee.checkedOut = 1;
            attendee.$update(function(res){
                toastr.success('Checked Out ' + attendee.firstname + ' ' + attendee.lastname + '.')
                toastr.success('Receipt can be printed or emailed.')
                $location.path('/checkin/edit/' + attendee.id);
            })
        }

        function sendEmail(attendee) {

            var modalInstance = $modal.open({
                animation: true,
                templateUrl: '/partials/checkin/confirmEmail',
                controller: 'ConfirmEmailController',
                size: 'lg',
                resolve: {
                    attendee: function() {
                        return $scope.attendee;
                    }
                }
            })

            modalInstance.result.then(function () {
                attendee.$update(function(res) {
                    var attendeeId = attendee.id;
                    SendEmail.get({attendeeId: attendeeId});
                    toastr.success('Receipt has been emailed.')
                    $location.path('checkin/')
                })
            });

        }

    }
]);