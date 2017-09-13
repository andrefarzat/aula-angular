<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <link rel="stylesheet" href="css/reveal.css" />
        <link rel="stylesheet" href="css/theme/black.css" />
    </head>
    <body>
        <div class="reveal">
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
        <script src="js/reveal.js"></script>
        <script>
            Reveal.initialize({
                slideNumber: true,
                history: true
            });
        </script>
    </body>
</html>
