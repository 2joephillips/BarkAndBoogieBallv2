angular.module('AuctionItemController', []).controller('AuctionItemController', ['$scope', '$location', '$routeParams', 'AuctionItem', 'Modal',
  function ($scope, $location, $routeParams, AuctionItem, Modal) {
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
      }, function (err) {
        console.log(err);
      });
    };

    $scope.find = function () {
      $scope.items = AuctionItem.query();
    };

      $scope.remove = function (item) {

          var modalOptions = {
              closeButtonText: 'Cancel',
              actionButtonText: 'Delete Item',
              headerText: 'Delete '+ item.nameOfActionItem + ' ?',
              bodyText: 'Are you sure you want to delete this item?'
          };

          Modal.showModal({}, modalOptions).then( function(result){
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
          })
      };

      $scope.update = function(item) {
        item.$update(function(res) {
            $location.path('auctionitems/');
          }, function (err) {
              console.log(err);
          });
      };

      $scope.findOne = function () {
          var splitPath = $location.path().split('/');
          var itemId = splitPath[splitPath.length - 1];
          $scope.item = AuctionItem.get({itemId: itemId});
      };
  }
]);
