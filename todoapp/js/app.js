(function() {
    var app = angular.module('todoapp', []);

    app.controller('TodoAppController', function($scope) {

        /** The new item text */
        $scope.newItem = "";

        /** todo tasks */
        $scope.items = [
            {text: 'Dominar o mundo', done: false},
            {text: 'Comprar um ps4', done: false},
            {text: 'Se manter vivo', done: true},
        ];

        /**
         * Adds an item to the list
         * @param {string} text
         */
        $scope.addItem = function(text) {
            $scope.items.push({text: $scope.newItem, done: false});
            $scope.newItem = "";
        };

        $scope.getToDoItems = function() {
            return $scope.items.filter(function(item) {
                return ! item.done;
            });
        };

        $scope.getDoneItems = function() {
            return $scope.items.filter(function(item) {
                return item.done;
            });
        };
    });
})();
