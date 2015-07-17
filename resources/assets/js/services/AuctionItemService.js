angular.module('AuctionItemService', []).factory('AuctionItem', ['$resource',
  function ($resource) {
    return $resource('/api/auctionitem/:itemId', {
      itemId: '@id'
    }, {
      update: {
        method: 'PUT'
      }
    });
  }
]);