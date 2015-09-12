<br>
<div class="well well-lg"
    <h1>App Todos:</h1>
    <div ng-controller="TodoController" ng-init="find()">
        <p ng-if="!todos.length">
            There are no todos right now, <a href="/todos/create">create one!</a>
        </p>

        <div class="row" ng-repeat="todo in todos">
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        <input type="checkbox" ng-click="remove(todo)">
                    </span>
                    <input type="text" class="form-control" ng-model="todo.body"
                           ng-blur="update(todo)" enter-stroke="update(todo)">
                </div>
                <br>

            </div>

        </div>

        <div class="form-group">
            <div class="col-md-5">
                <a class="btn btn-small btn-primary" href="/todos/create">Add Todo</a>
            </div>
        </div>
    </div>
</div>


