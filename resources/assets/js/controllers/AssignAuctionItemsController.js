angular.module('AssignAuctionItemsController', []).controller('AssignAuctionItemsController', ['$scope', '$location', '$routeParams', 'AuctionItem', 'Attendee',
  function ($scope, $location, $routeParams, AuctionItem, Attendee) {

    $scope.find = function () {
      $scope.items = AuctionItem.query();
      $scope.attendees = Attendee.query();
    };

      $scope.selectedAuctionId = function(selected) {
          if(selected){

              $scope.items[$scope.indexOfItem].attendee_id = selected.originalObject.id;
          }
      }

      $scope.focusIn = function(item) {

            $scope.indexOfItem = $scope.items.indexOf(item);
      }

      $scope.update = function (auctionitem) {
          var item = $scope.items[$scope.indexOfItem]
          item.$update(function (res) {
              $location.path('assignauctionitems/')
              toastr.success(item.itemId + ' Updated')
          });
      };


  }
]);
