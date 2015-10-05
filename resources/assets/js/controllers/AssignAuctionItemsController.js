angular.module('AssignAuctionItemsController', []).controller('AssignAuctionItemsController', ['$scope', '$location', '$routeParams', 'AuctionItem', 'Attendee',
  function ($scope, $location, $routeParams, AuctionItem, Attendee) {

    $scope.find = function () {
      $scope.items = AuctionItem.query();
      $scope.attendees = Attendee.query();
    };

      $scope.selectedAuctionId = function(selected) {
          if(selected){

              $scope.items[$scope.itemId].attendee_id = selected.originalObject.id;
          }
      }

      $scope.focusIn = function(item) {
            $scope.itemId = item.id;
      }

      $scope.update = function (auctionitem) {
          auctionitem.$update(function (res) {
              $location.path('assignauctionitems/')
              toastr.success(auctionitem.itemId + ' Updated')
          });
      };


  }
]);
