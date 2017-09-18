<section>

    <section>

        <h2>Angular Template</h2>

    </section>

    <section>
        <h2>Exibir valores</h2>

        <div class="fragment">
            <h3><small>{{ Delimitadores }}</small></h3>
            <pre><code data-trim data-noescape class="html" style="text-align: center;"><?php echo htmlspecialchars("<span>{{ 'oi, eu sou o Goku!' }}</span>"); ?></code></pre>
            <pre><div style="text-align: center;">[[ 'oi, eu sou o Goku!' ]]</div></pre>
        </div>

        <div class="fragment">
            <h3><small>ng-bind</small></h3>
            <pre><code data-trim data-noescape class="html" style="text-align: center;"><?php echo htmlspecialchars("<span ng-bind=\"'Estou pronto!'\">Será apagado</span>"); ?></code></pre>
            <pre><div style="text-align: center;" ng-bind="'Estou pronto!'">[[ 'oi, eu sou o Goku' ]]</div></pre>
        </div>

    </section>

    <section>
        <h2>angular expressions</h2>

        <div class="fragment">
            <h3><small>Operação simples</small></h3>
            <pre><code data-trim data-noescape class="html" style="text-align: center;"><?php echo htmlspecialchars("<span>1 + 2 = {{ 1 + 2 }}</span>"); ?></code></pre>
            <pre><div style="text-align: center;"><span>1 + 2 = [[ 1 + 2 ]]</span></div></pre>
        </div>

        <div class="fragment">
            <h3><small>Operador ternário</small></h3>
            <pre><code data-trim data-noescape class="html" style="text-align: center;"><?php echo htmlspecialchars("<span>resultado = {{ true ? 'Verdadeiro' : 'Falso' }}</span>"); ?></code></pre>
            <pre><div style="text-align: center;"><span>resultado = [[ true ? 'Verdadeiro' : 'Falso' ]]</span></div></pre>
        </div>
    </section>

    <section>
        <h2>Atribuir valores</h2>

        <div class="fragment">
            <h3><small>ng-model</small></h3>
            <pre><code data-trim class="html" style="text-align: center;">
                <input type="text" ng-model="nome" />
                <div ng-bind="nome"></div>
            </code></pre>
            <pre style="text-align: center;">
<input type="text" ng-model="nome" class="input" />
<div ng-bind="nome"></div>
            </pre>
        </div>

        <div class="fragment">
            <pre><code data-trim class="html" style="text-align: center;">
                <textarea ng-model="texto"></textarea>
                <div ng-bind="texto"></div>
            </code></pre>
            <pre style="text-align: center;">
<textarea ng-model="texto" class="textarea" style="width: 400px; height: 100px;"></textarea>
<div ng-bind="texto"></div>
            </pre>
        </div>

    </section>

    <section>
        <h2>angular expressions</h2>

        <div class="fragment">
            <h3><small>Concatenação</small></h3>
            <pre><code data-trim class="html" style="text-align: center;"><input ng-model="a" /> + <input ng-model="b" /> = {{ a + b }}</code></pre>
            <pre><input type="text" ng-model="a" class="input" /> + <input type="text" ng-model="b" class="input" /> = [[ a + b ]]</pre>
        </div>

        <div class="fragment">
            <h3><small>Ternário</small></h3>
            <pre><code data-trim class="html" style="text-align: center;"><input ng-model="c" /> {{ c.length > 5 ? 'Palavra grande' : 'Palavra pequena' }}</code></pre>
            <pre><input type="text" ng-model="c" class="input" /> = [[ c.length > 5 ? 'Palavra grande' : 'Palavra pequena' ]]</pre>
        </div>
    </section>

    <section>
        <h2>Estrutura de Repetição</h2>
        <div>ng-repeat</div>

        <div class="fragment">
            <pre><code data-trim class="html" style="text-align: left;">
<div ng-repeat="name in ['Joey', 'John', 'Dee Dee', 'Mark']">
    {{ name }} Ramone
</div>
            </code></pre>

            <pre><div style="text-align: center;">
            <div ng-repeat="name in ['Joey', 'John', 'Dee Dee', 'Mark']">[[ name ]] Ramone</div>
            </div></pre>
        </div>
    </section>

    <section>
        <h2>Estrutura de Repetição</h2>
        <div>ng-repeat com ng-list</div>

        <div class="fragment">
            <pre><code data-trim class="html" style="text-align: left;">
<input ng-model="nomes" ng-list=", " />
<div ng-repeat="nome in nomes">
    {{ nome }} Ramone
</div>
            </code></pre>

            <pre><div style="text-align: center;">
<input ng-model="nomes" ng-list class="input" />
<div ng-repeat="nome in nomes">[[ nome ]] Ramone</div>
            </div></pre>
        </div>
    </section>

    <section>
        <h2>Estrutura de Repetição</h2>
        <div>ng-repeat em um objeto</div>

        <div class="fragment">
            <pre><code data-trim class="html" style="text-align: left;">
<div ng-repeat="(key, value) in {'nome': 'Joey Ramone', 'cidade': 'New York'}">
    {{ key }}: {{ value }}<br />
</div>
            </code></pre>

            <pre><div style="text-align: center;">
            <div ng-repeat="(key, value) in {'nome': 'Joey Ramone', 'cidade': 'New York'}">[[ key ]]: [[ value ]] <br /></div>
            </div></pre>
        </div>
    </section>

    <section>
        <h2>Estrutura de Repetição</h2>
        <div>ng-repeat em um objeto ng-model</div>

        <div class="fragment">
            <pre><code data-trim class="html" style="text-align: left;">
<label>Nome:</label> <input ng-model="pessoa.nome" /> <br />
<label>Idade:</label> <input ng-model="pessoa.idade" /> <br />
<label>Cidade:</label> <input ng-model="pessoa.cidade" /> <br />
<div ng-repeat="(key, value) in pessoa">{{ key }}: {{ value }} <br /></div>
            </code></pre>

            <pre><div style="text-align: center;">
<label>Nome:</label> <input ng-model="pessoa.nome" class="input" /> <br />
<label>Idade:</label> <input ng-model="pessoa.idade" class="input" /> <br />
<label>Cidade:</label> <input ng-model="pessoa.cidade" class="input" /> <br />
<div ng-repeat="(key, value) in pessoa">[[ key ]]: [[ value ]] <br /></div>
            </div></pre>
        </div>
    </section>

    <section>
        <h2>Estrutura Condicional</h2>
        <div>ng-if</div>

        <div class="fragment">
            <pre><code data-trim class="html" style="text-align: center">
<div ng-if="1 == 1">Eu existo</div>
            </code></pre>

            <pre><div style="text-align: center;"><div ng-if="1 == 1">Eu existo</div></div></pre>

            <pre><code data-trim class="html" style="text-align: center">
<div ng-if="true">Eu também existo</div>
            </code></pre>

            <pre><div style="text-align: center;"><div ng-if="1 == 1">Eu também existo</div></div></pre>

            <pre><code data-trim class="html" style="text-align: center">
<div ng-if="1 == 2">Já eu não existo</div>
            </code></pre>

            <pre><div style="text-align: center;"><div ng-if="1 == 2">Já eu não existo</div></div></pre>
        </div>
    </section>

    <section>
        <h2>Estrutura Condicional</h2>
        <div>ng-if com ng-model</div>

        <div class="fragment">
            <pre><code data-trim class="html" style="text-align: center">
<input ng-model="idade" />
<div ng-if="idade >= 18">Maior de idade</div>
            </code></pre>

            <pre><div style="text-align: center;">
<input ng-model="idade" class="input" />
<div ng-if="idade >= 18">Maior de idade</div>
            </div></pre>
        </div>

        <div class="fragment">
            <h4><small>Não existe ng-else =/</small></h4>
        </div>
    </section>


    <section>
        <h2>Estrutura Condicional</h2>
        <div>ng-show vs ng-hide</div>

        <div class="fragment">
            <pre><code data-trim class="html" style="text-align: center">
<input ng-model="quantidade" />
<div ng-show="quantidade > 10">Mais de 10</div>
<div ng-hide="quantidade > 10">Menos de 10</div>
            </code></pre>

            <pre><div style="text-align: center;">
<input ng-model="quantidade" class="input" />
<div ng-show="quantidade > 10">Mais de 10</div>
<div ng-hide="quantidade > 10">Menos de 10</div>
            </div></pre>
        </div>
    </section>


</section>
