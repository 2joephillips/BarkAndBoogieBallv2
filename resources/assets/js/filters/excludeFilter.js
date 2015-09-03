angular.module('excludeValue', []).filter('excludeValue', function() {
    return function(input, val) {
        var newArray = [];

        if (val === false || input === false) {
            return ;
        }

        if (val === undefined || input === undefined) {
            return ;
        }

        //Loop through all the results and remove the one that is not needed
        for( var n = 0 ; n < input.length; n++) {
            //Check if current value is not the same as a value we need to exclude
            if(input[n].table_number == val.table_number) {
                newArray.push(input[n]);
            }
        }
        return newArray;
    };
});