angular.module('SeatService', []).factory('Seat', ['$resource',
    function($resource){
        return $resource('/api/seat/:seatId', {
            seatId: '@id'
        }, {
            update: {
                method: 'PUT'
            },
            emptySeat: {
                method: 'GET',
                isArray: true,
                url: '/api/seat/emptyseat'
            }
        });
    }
]);