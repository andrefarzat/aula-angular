<section>

    <section>
        <h2>Componentização</h2>
    </section>

    <section>
        <h3>O que são componentes?</h3>

        <p class="fragment">Blocos de código que podemos criar e re-utilizar.</p>
        <div class="fragment">
            <p>Exemplos:</p>
            <ul>
                <li><a target="_blank" href="https://getbootstrap.com/docs/3.3/components/#dropdowns">Bootstrap components</a></li>
                <li><a target="_blank" href="https://ionicframework.com/docs/components/#cards">Ionic components</a></li>
                <li><a target="_blank" href="https://material.angularjs.org/latest/demo/checkbox">Angular material components</a></li>
            </ul>
        </div>
    </section>

    <section>
        <h4>kiss / dry</h4>
        <img src="img/kissdry.png" />

        <h4>Keep It Simple, stupid!</h4>
        <h4>Don't Repeat yourself</h4>
    </section>

    <section>
        <h4>Criando seu próprio componente</h4>

        <pre><code data-trim class="javascript" style="text-align: left;">
app.directive('meuComponente', function() {
    return {
        template: "<div>Meu Componente</div>"
    };
});</code></pre>

    <pre><code data-trim class="html" style="text-align: center;"><meu-componente /></code></pre>

        <meu-componente />

    </section>

    <section>
        <h4>Adicionando parâmetros</h4>

        <pre><code data-trim class="javascript" style="text-align: left;">
app.directive('meuComponente', function() {
    return {
        scope: {texto: '@'}, // @ means string
        template: "<div>{{ texto }}</div>"
    };
});</code></pre>

        <pre><code data-trim class="html" style="text-align: center;"><meu-componente texto="Meu texto aqui" /></code></pre>

        <meu-componente2 texto="Meu texto aqui" />
    </section>

    <section>
        <h4>Adicionando comportamento</h4>

        <pre><code data-trim class="javascript" style="text-align: left;">
app.directive('meuComponente', function() {
    return {
        scope: {step: '@'},
        controller: function($scope) {
            $scope.valor = 0;
            $scope.adicionar = function() {
                $scope.valor += parseInt($scope.step, 10);
            };
        },
        template: '<div ng-click="adicionar()">{{ valor }}</div>'
    };
});</code></pre>

        <pre><code data-trim class="html" style="text-align: center;"><meu-componente step="2" /></code></pre>

        <meu-componente-3 step="2" />
    </section>

    <section>
        <h4>Separando o componente</h4>

        <pre><code data-trim class="javascript" style="text-align: left;">
var app = angular.module('projeto.directives', ['projeto.controllers']);
app.directive('meuComponente', function() {
    return {
        controller: 'MeuComponenteCtrl',
        templateUrl: 'templates/meu-componente.html'
    };
});</code></pre>

    <pre><code data-trim class="html" style="text-align: center;"><meu-componente /></code></pre>

    <meu-componente4 />

    </section>

</section>
