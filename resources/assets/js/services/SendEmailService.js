angular.module('SendEmailService', []).factory('SendEmail', ['$resource',
            function ($resource) {
                return $resource('/api/email/:attendeeId', {
                    attendeeId: '@id'
                });
            }
        ]);