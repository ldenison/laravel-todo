<html>
    <head>
        <title>Laravel Todo Lists</title>
        <?= HTML::script("js/jquery-1.10.2.js");?>
        <?= HTML::script("js/handlebars-v1.3.0.js");?>
        <?= HTML::script("js/ember.js");?>
        <?= HTML::script("js/ember-data.js");?>
        <?= HTML::script("bootstrap-3.3.1/js/bootstrap.min.js");?>
        <?= HTML::style("bootstrap-3.3.1/css/bootstrap.min.css");?>
        <?= HTML::style("css/style.css");?>
    </head>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Ember.js • TodoMVC</title>
    </head>
    <body>
    <script type="text/x-handlebars" data-template-name="todos/index">
        <ul id="todo-list">
            {{#each todo in model itemController="todo"}}
                <li {{bind-attr class="todo.isCompleted:completed todo.isEditing:editing"}}>
                    {{#if todo.isEditing}}
                        {{edit-todo class="edit" value=todo.title focus-out="acceptChanges" insert-newline="acceptChanges"}}
                    {{else}}
                        {{input type="checkbox" checked=todo.isCompleted class="toggle"}}
                        <label {{action "editTodo" on="doubleClick"}}>{{todo.title}}</label>
                        <button {{action "removeTodo"}} class="destroy"></button>
                    {{/if}}
                </li>
            {{/each}}
        </ul>
    </script>

    <script type="text/x-handlebars" data-template-name="todos">
        <section id="todoapp">
            <header id="header">
                <h1>todos</h1>
                {{input
                    type="text"
                    id="new-todo"
                    placeholder="Add a task..."
                    value=newTitle
                    action="createTodo"}}
            </header>

            <section id="main">
                {{outlet}}
                {{input type="checkbox" id="toggle-all" checked=allAreDone}}
            </section>

            <footer id="footer">
            <span id="todo-count">
              <strong>{{remaining}}</strong> {{inflection}} left
            </span>
                <ul id="filters">
                    <li>
                        {{#link-to "todos.index" activeClass="selected"}}All{{/link-to}}
                    </li>
                    <li>
                        {{#link-to "todos.active" activeClass="selected"}}Active{{/link-to}}
                    </li>
                    <li>
                        {{#link-to "todos.completed" activeClass="selected"}}Completed{{/link-to}}
                    </li>
                </ul>
                {{#if hasCompleted}}
                    <button id="clear-completed" {{action "clearCompleted"}}>
                        Clear completed ({{completed}})
                    </button>
                {{/if}}
            </footer>
        </section>

        <footer id="info">
            <p>Double-click to edit a todo</p>
        </footer>
    </script>

    <?= HTML::script("js/app/application.js");?>
    <?= HTML::script("js/app/router.js");?>
    <?= HTML::script("js/models/todo.js");?>
    <?= HTML::script("js/controllers/todos_controller.js");?>
    <?= HTML::script("js/controllers/todo_controller.js");?>
    <?= HTML::script("js/views/edit_todo_view.js");?>
    </body>
</html>