<section>
    <section>
        <h2>Estrutura de um projeto angular</h2>
    </section>

    <section>
        <h2>Módulos</h2>

        <pre><code data-trim class="js" style="text-align: center;">var app = angular.module('legal', []);</code></pre>

        <div class="fragment">
            <h2>Um módulo pode ter:</h2>
            <pre><code data-trim class="js" style="text-align: left;">app.config(function() { ... });</code></pre>
            <pre><code data-trim class="js" style="text-align: left;">app.controller('LegalController', function() { ... });</code></pre>
            <pre><code data-trim class="js" style="text-align: left;">app.service('LegalService', function() { ... });</code></pre>
            <pre><code data-trim class="js" style="text-align: left;">app.directive('legalDirective', function() { ... });</code></pre>
            <pre><code data-trim class="js" style="text-align: left;">app.constant('LEGAL', 'VALOR_LEGAL');</code></pre>
        </div>
    </section>

    <section>
        <h2>Dependência</h2>
        <pre><code data-trim class="js" style="text-align: center;">app = angular.module('mais_legal', ['legal']);
/* app refere ao módulo "mais_legal" agora */</code></pre>
    </section>

    <section>
        <h2>Arquivos</h2>

        <img src="img/file-tree.png" />
    </section>

    <section>
        <h2>controlles.js</h2>
        <img src="img/controllersjs.png" />
    </section>

    <section>
        <h2>directives.js</h2>
        <img src="img/directivesjs.png" />
    </section>

    <section>
        <h2>Inserir no html</h2>

        <img src="img/tag-script.png" />
    </section>

    <section>
        <h2>app.js</h2>
        <img src="img/appjs.png" />
    </section>
</section>
