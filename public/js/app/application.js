window.Todos = Ember.Application.create();
Todos.ApplicationAdapter = DS.RESTAdapter.extend({
    namespace: "laravel/code/todo/public"
});