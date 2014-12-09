<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    $model = Todo::find(1);
	return View::make('index',array("todo"=>$model));
});

Route::get("/todos",function() {
    $models = Todo::all();
    $response = array("todos"=>$models);
    return json_encode($response);
});

Route::get("/todo/{id}",function($id) {
    $model = Todo::find($id);
    return json_encode($model);
});

Route::put("/todos/{id}",function($id) {
    $model = Todo::find($id);
    $data = Input::all();

    $model->title = $data["todo"]["title"];
    $model->isCompleted = $data["todo"]["isCompleted"];

    $model->save();
    return json_encode($model);
});

Route::post("/todos",function() {
    $model = new Todo;
    $data = Input::all();

    $model->title = $data["todo"]["title"];
    $model->isCompleted = $data["todo"]["isCompleted"];

    $model->save();
});
