<html>
    <head>
        <title>Laravel Todo Lists</title>
        <?= HTML::script("js/jquery-1.10.2.js");?>
        <?= HTML::script("js/handlebars-v1.3.0.js");?>
        <?= HTML::script("js/ember.js");?>
        <?= HTML::script("js/ember-data.js");?>
        <?= HTML::script("js/app/application.js");?>
        <?= HTML::script("js/app/router.js");?>
        <?= HTML::script("js/models/todo.js");?>
        <?= HTML::script("js/controllers/todos_controller.js");?>
        <?= HTML::script("js/controllers/todo_controller.js");?>

        <?= HTML::script("bootstrap-3.3.1/js/bootstrap.min.js");?>
        <?= HTML::style("bootstrap-3.3.1/css/bootstrap.min.css");?>
        <?= HTML::style("css/style.css");?>
    </head>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Ember.js • TodoMVC</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
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
                <ul id="todo-list">
                    {{#each todo in model itemController="todo"}}
                        <li {{bind-attr class="todo.isCompleted:completed"}}>
                            {{input type="checkbox" checked=todo.isCompleted class="toggle"}}
                            <label>{{todo.title}}</label><button class="destroy"></button>
                        </li>
                    {{/each}}
                </ul>

                <input type="checkbox" id="toggle-all">
            </section>

            <footer id="footer">
            <span id="todo-count">
              <strong>2</strong> todos left
            </span>
                <ul id="filters">
                    <li>
                        <a href="all" class="selected">All</a>
                    </li>
                    <li>
                        <a href="active">Active</a>
                    </li>
                    <li>
                        <a href="completed">Completed</a>
                    </li>
                </ul>

                <button id="clear-completed">
                    Clear completed (1)
                </button>
            </footer>
        </section>

        <footer id="info">
            <p>Double-click to edit a todo</p>
        </footer>
    </script>
    </body>
</html>