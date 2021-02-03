<?php
$router->get('/',function() use ($router){
    echo 'heyyy';
});
//user
$router->group(['prefix' => 'api'], function () use ($router) {

$router->post('/register',  ['uses' => 'AuthController@register']);

$router->post('/login',  ['uses' => 'AuthController@login']);
$router->get('profile', 'UserController@profile');
$router->get('users/{id}', 'UserController@singleUser');
$router->get('users', 'UserController@allUsers');
});

//Posts
$router->get('/posts',  ['uses' => 'PostController@showAllPosts']);
$router->get('/posts/{id}',  ['uses' => 'PostController@showOnePost']);
//Comments
$router->get('/comments', ['uses'=>'CommentController@CommentWithPost']);
$router->get('/comments',  ['uses' => 'CommentController@showAllComments']);
$router->get('/comments/{id}',  ['uses' => 'CommentController@showOneComment']);
//author
$router->get('/authors', ['uses' => 'AuthorController@ShowAllAuhtor']);
$router->get('/authors/{id}',  ['uses'=> 'AuthorController@ShowOneAuthor']);
$router->post('/authors', ['uses' => 'AuthorController@create']);
$router->delete('authors/{id}', ['uses' => 'AuthorController@delete']);
$router->put('authors/{id}', ['uses' => 'AuthorController@edit']);


//championship
$router->get('/championships', ['uses'=>'ChampionshipController@ShowAllChampionships']);
//team
$router->get('/teams',['uses'=>'TeamController@ShowAllTeam']);
