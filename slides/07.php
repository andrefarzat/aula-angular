<section>

    <section>
        <h2>Escopo de execução</h2>
    </section>

    <section>
        <h2>ng-app</h2>
        <pre><code data-trim data-noescape class="html" style="text-align: center;"><?php echo htmlspecialchars("<body ng-app> ... </body>"); ?></code></pre>

        <pre class="fragment"><code data-trim data-noescape class="html" style="text-align: center;"><?php echo htmlspecialchars("<body ng-app='projeto'> ... </body>"); ?></code></pre>
    </section>

    <section>
        <h2>ng-controller</h2>

        <h3><small>controller.js</small></h3>
<pre><code data-trim class="javascript" style="text-align: left;">app.controller('MainController', function($scope) {
    $scope.valor = "Qualquer valor";
});</code></pre>

        <h3><small>index.html</small></h3>
        <?php $html = "
<div ng-app='projeto'>
    <div ng-controller='MainController'> {{ valor }} </div>
</div>"; ?>
        <pre><code data-trim data-noescape class="html" style="text-align: left;"><?php echo htmlspecialchars($html); ?></code></pre>
    </section>

    <section>
        <h2>Eventos e Métodos</h2>

        <h3><small>controller.js</small></h3>
<pre><code data-trim class="javascript" style="text-align: left;">app.controller('MainController', function($scope) {
    $scope.valor = 0;

    $scope.adicionar = function(valor) {
        $scope.valor += valor;
    };

    $scope.reduzir = function(valor) {
        $scope.valor -= valor;
    };
});</code></pre>
    </section>

    <section ng-controller="Ctrl02">
        <h2>Eventos e Métodos</h2>
    <h3><small>index.html</small></h3>
    <?php $html = "
<div ng-controller='MainController'>
    <button ng-click='reduzir(1)'>-</button>
    {{ value }}
    <button ng-click='adicionar(1))'>+</button>
</div>"; ?>
        <pre><code data-trim data-noescape class="html" style="text-align: left;"><?php echo htmlspecialchars($html); ?></code></pre>

        <div ng-controller='Ctrl02'>
            <button ng-click='reduzir(1)' class="btn">-</button>
            [[ valor ]]
            <button ng-click='adicionar(1)' class="btn">+</button>
        </div>
    </section>

    <section>
        <h2>Escopo de Controllers</h2>

        <h3><small>index.html</small></h3>
        <?php $html = "<div ng-app='projeto'>
    <div ng-controller='MainController'>
        <input type='text' ng-model='valor' /> <br />
        MainController.valor = {{ valor }}
    </div>
    <div ng-controller='AnotherController'>
        <input type='text' ng-model='valor' /> <br />
        AnotherController.valor = {{ valor }}
    </div>
</div>"; ?>

        <pre><code data-trim data-noescape class="html" style="text-align: left;"><?php echo htmlspecialchars($html); ?></code></pre>

        <div>
            <div ng-controller='MainController'>
                <input type='text' ng-model='valor' class="input" /> <br />
                <small>MainController.valor = [[ valor ]]</small>
            </div>

            <div ng-controller='AnotherController'>
            <input type='text' ng-model='valor' class="input" /> <br />
                <small>AnotherController.valor = [[ valor ]]</small>
            </div>
        </div>
    </section>

</section>
