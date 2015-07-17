angular.module('AuctionItemController', []).controller('AuctionItemController', ['$scope', '$location', '$routeParams', 'AuctionItem',
  function ($scope, $location, $routeParams, AuctionItem) {
    $scope.create = function () {
      var item = new AuctionItem({
          nameOfActionItem: this.nameOfActionItem,
          auctionDescription: this.auctionDescription,
          itemId: this.itemId,
          auctionValue: this.auctionValue,
          auctionDonor: this.auctionDonor,
          auctionNotes: this.auctionNotes

      });
        item.$save(function (res) {
        $location.path('auctionitems/view/' + res.id);
        $scope.body = '';
      }, function (err) {
        console.log(err);
      });
    };

    $scope.find = function () {
      $scope.items = AuctionItem.query();
    };

      $scope.remove = function (item) {
          item.$remove(function (res) {
              if (res) {
                  for (var i in $scope.items) {
                      if ($scope.items[i] === item) {
                          $scope.items.splice(i, 1);
                      }
                  }
              }
          }, function (err) {
              console.log(err);
          })
      };

      $scope.findOne = function () {
          var splitPath = $location.path().split('/');
          var itemId = splitPath[splitPath.length - 1];
          $scope.item = AuctionItem.get({itemId: itemId});
      };
  }
]);
