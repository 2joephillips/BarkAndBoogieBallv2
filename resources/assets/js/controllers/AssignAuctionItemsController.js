angular.module('AssignAuctionItemsController', []).controller('AssignAuctionItemsController', ['$scope', '$location', '$routeParams', 'AuctionItem', 'Attendee',
  function ($scope, $location, $routeParams, AuctionItem, Attendee) {

    $scope.find = function () {
      $scope.items = AuctionItem.query();
      $scope.attendees = Attendee.query();
    };

      $scope.update = function (auctionitem) {
          var idFound = false;
          var bidMissing = false;
          if(auctionitem.winningBid === undefined || auctionitem.winningBid == null || auctionitem.winningBid == "")
          {
              bidMissing = true;
          }
          if(auctionitem.attendee === undefined || auctionitem.attendee == null )
          {
              alert("Winning Id needs to be entered.");
              return;
          }

          for (var i = 0; i < $scope.attendees.length; i++) {

              if ($scope.attendees[i].seat.auctionId == auctionitem.attendee.seat.auctionId) {
                  auctionitem.attendee_id = $scope.attendees[i].id;
                  idFound = true;
              }
          }
          if(!idFound && bidMissing)
          {
              alert("Re-enter you Winning Bid and Id.");
          }
          else if (!idFound)
          {
              alert("Re-enter you Winning Id.");
          }
          else if(bidMissing)
          {
              alert("Re-enter you Winning Bid.");
          }

          auctionitem.$update(function (res) {
              $location.path('assignauctionitems/')
          });
      };


  }
]);
