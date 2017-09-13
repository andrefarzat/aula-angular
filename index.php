<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <link rel="stylesheet" href="css/reveal.css" />
        <link rel="stylesheet" href="css/theme/black.css" />

        <link rel="stylesheet" href="plugin/highlight/zenburn.css">
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
    angular.module('aula', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');
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
            dependencies: [
                { src: 'plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
                { src: 'https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js', async: true, callback: bootstrap }
            ]
        });
    </script>
</html>
