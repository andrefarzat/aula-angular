<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Aula Angular</title>
        <link rel="stylesheet" href="css/reveal.css" />
        <link rel="stylesheet" href="css/theme/black.css" />

        <link rel="stylesheet" href="plugin/highlight/zenburn.css" />
    </head>
    <body>
        <div class="reveal" id="app">
            <div class="slides">
                <?php
                $dir = new DirectoryIterator('slides');
                foreach($dir as $fileinfo):
                    if ($fileinfo->isDot()) continue;
                    include $fileinfo->getPathName();
                endforeach;
                ?>
            </div>
        </div>

        <script src="js/head.min.js"></script>
        <script src="js/reveal.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js"></script>
    </body>

    <script>
    var app = angular.module('aula', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');
    });

    app.controller('Ctrl01', function($scope) {
        $scope.valor = 'Qualquer valor';
    });

    app.controller('Ctrl02', function($scope) {
        $scope.valor = 0;

        $scope.adicionar = function(valor) {
            $scope.valor += valor;
        };

        $scope.reduzir = function(valor) {
            $scope.valor -= valor;
        }
    });

    app.controller('MainController', function($scope) {});
    app.controller('AnotherController', function($scope) {});
    app.controller('MeuComponenteCtrl', function($scope) {
        // Aqui
        $scope.valor = 'Valor no escopo';
    });

    app.directive('meuComponente', function() {
        return {
            template: '<div>Meu Componente</div>'
        };
    });

    app.directive('meuComponente2', function() {
        return {
            scope: { texto: '@' },
            template: '<div>{{ texto }}</div>'
        };
    });

    app.directive('meuComponente3', function() {
        return {
            scope: {step: '@'},
            controller: function($scope) {
                $scope.valor = 0;
                $scope.adicionar = function() { $scope.valor += parseInt($scope.step, 10); };
            },
            template: '<div ng-click="adicionar()">{{ valor }}</div>'
        };
    });

    app.directive('meuComponente4', function() {
        return {
            controller: 'MeuComponenteCtrl',
            templateUrl: 'templates/meu-componente.html'
        };
    });

    </script>

    <script>
        var bootstrap = function() {
            var div = document.getElementById('app');
            angular.bootstrap(div, ['aula']);
        };

        Reveal.initialize({
            slideNumber: true,
            history: true,
            width: 1024,
            height: 700,
            margin: 0,
            dependencies: [
                { src: 'plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
                { src: 'https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js', async: true, callback: bootstrap }
            ]
        });
    </script>
</html>
