<section>

    <section>
        <h2>Exercício</h2>
        <h3><a href="todoapp/" target="_blank">To Do List</a></h3>
    </section>


    <section>
        <h3>Requisitos</h3>
        <ol>
            <li>Listar itens não concluídos numa primeira lista</li>
            <li>Adicionar um item a lista</li>
            <li>Marcar um item como concluído</li>
            <li>Listar itens já concluídos numa segunda lista</li>
            <li>Marcar um item como não-concluído</li>
        </ol>
    </section>

    <section>
        <p>1. Listar itens não concluídos numa primeira lista</p>

<pre><code data-trim class="javascript" style="text-align: left;">var app = angular.module('todoapp', []);

app.controller('TodoAppController', function($scope) {
    /** todo tasks */
    $scope.items = [
        {text: 'Dominar o mundo', done: false},
        {text: 'Comprar um ps4', done: false},
        {text: 'Se manter vivo', done: true},
    ];

    $scope.getToDoItems = function() {
        return $scope.items.filter(function(item) {
            return ! item.done;
        });
    };
});</code></pre>

<?php $html = "
<h3>A fazer</h3>
<div class='list-group'>
    <a class='list-group-item' ng-repeat='item in getToDoItems()'>{{ item.text }}</a>
</div>"; ?>
<pre><code data-trim data-noescape class="html" style="text-align: left;"><?php echo htmlspecialchars($html); ?></code></pre>


    </section>

    <section>
    <p>2. Adicionar um item a lista</p>

    <pre><code data-trim class="javascript" style="text-align: left;">
/** The new item text */
$scope.newItem = "";

$scope.addItem = function() {
    $scope.items.push({text: $scope.newItem, done: false});
    $scope.newItem = "";
};</code></pre>

<?php $html = "
<div class='input-group' style='margin: 20px 0;' >
    <input type='text' ng-model='newItem' class='form-control' />

    <span class='input-group-btn'>
        <button class='btn btn-default' type='button' ng-click='addItem()'>Adicionar</button>
    </span>
</div>"; ?>
<pre><code data-trim data-noescape class="html" style="text-align: left;"><?php echo htmlspecialchars($html); ?></code></pre>

    </section>

    <section>
        <p>3. Marcar um item como concluído</p>

<?php $html = "<a class='list-group-item' ng-repeat='item in getToDoItems()' ng-click='item.done = true'>{{ item.text }}</a>"; ?>
<pre><code data-trim data-noescape class="html" style="text-align: left;"><?php echo htmlspecialchars($html); ?></code></pre>
    </section>

    <section>
        <p>4. Listar itens já concluídos numa segunda lista</p>

        <pre><code data-trim class="javascript" style="text-align: left;">
$scope.getDoneItems = function() {
    return $scope.items.filter(function(item) {
        return ! item.done;
    });
};
</code></pre>
<?php $html = "
<h3>Concluídos</h3>
<div class='list-group'>
    <a class='list-group-item' ng-repeat='item in getDoneItems()' ng-click='item.done = false'>{{ item.text }}</a>
</div>"; ?>
<pre><code data-trim data-noescape class="html" style="text-align: left;"><?php echo htmlspecialchars($html); ?></code></pre>


    </section>

</section>
