<?php


Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');


Route::resource('posts', 'PostController');
// 认证路由...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// 注册路由...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
/*Route::get('logs-1',['middleware' => 'auth'],'LogController@logs1');
Route::get('logs-2', ['middleware' => 'auth', 'uses' => 'LogController@logs2']);*/
//用户管理
Route::group(['prefix' => 'admin', 'namespace' => 'Auth','middleware' =>'auth'], function () {
    Route::get('index', 'UserController@kzt');
    //用户管理
    Route::get('user','UserController@index');
    Route::post('user', ['as' => 'admin.user', 'uses' => 'UserController@add_user']);
    Route::get('user/delete/{id}','UserController@user_delete');
    Route::get('user/edit/{id}','UserController@user_edit');
    Route::post('user/update', ['as' => 'admin.user.update', 'uses' => 'UserController@update_user']);
    //角色管理
    Route::get('role','UserController@role_list');
    Route::get('role/delete/{id}','UserController@role_delete');
    Route::post('role', ['as' => 'admin.role', 'uses' => 'UserController@add_role']);
    Route::get('role/edit/{id}','UserController@role_edit');
    Route::post('role/update', ['as' => 'admin.role.update', 'uses' => 'UserController@update_role']);
    
    //权限管理
    Route::get('permission','UserController@permission_list');
    Route::get('permission/delete/{id}','UserController@permission_delete');
    Route::get('permission/edit/{id}','UserController@permission_edit');
    Route::post('permission', ['as' => 'admin.permission', 'uses' => 'UserController@add_permission']);
    Route::post('permission/update', ['as' => 'admin.permission.update', 'uses' => 'UserController@update_permission']);

    //菜单管理
    Route::post('menu', ['as' => 'admin.menu', 'uses' => 'UserController@add_menu']);
    Route::get('menu','UserController@menu_list');
    Route::get('menu/edit/{id}','UserController@menu_edit');
    Route::get('menu/delete/{id}','UserController@menu_delete');
    Route::post('menu/update', ['as' => 'admin.menu.update', 'uses' => 'UserController@update_menu']);

    //客户管理
    Route::get('client','ClientController@client_list');
    Route::post('client',['as'=>'admin.client','uses'=> 'ClientController@add_client']);
    Route::get('client/delete/{id}','ClientController@client_delete');
    Route::get('client/edit/{id}','ClientController@client_edit');
    Route::post('client/update',['as'=>'admin.client.update','uses'=>'ClientController@update_client']);
});


Route::get('background/articles', ['as'=> 'background.articles.index', 'uses' => 'background\ArticlesController@index']);
Route::post('background/articles', ['as'=> 'background.articles.store', 'uses' => 'background\ArticlesController@store']);
Route::get('background/articles/create', ['as'=> 'background.articles.create', 'uses' => 'background\ArticlesController@create']);
Route::put('background/articles/{articles}', ['as'=> 'background.articles.update', 'uses' => 'background\ArticlesController@update']);
Route::patch('background/articles/{articles}', ['as'=> 'background.articles.update', 'uses' => 'background\ArticlesController@update']);
Route::delete('background/articles/{articles}', ['as'=> 'background.articles.destroy', 'uses' => 'background\ArticlesController@destroy']);
Route::get('background/articles/{articles}', ['as'=> 'background.articles.show', 'uses' => 'background\ArticlesController@show']);
Route::get('background/articles/{articles}/edit', ['as'=> 'background.articles.edit', 'uses' => 'background\ArticlesController@edit']);


Route::get('background/tags', ['as'=> 'background.tags.index', 'uses' => 'Background\TagController@index']);
Route::post('background/tags', ['as'=> 'background.tags.store', 'uses' => 'Background\TagController@store']);
Route::get('background/tags/create', ['as'=> 'background.tags.create', 'uses' => 'Background\TagController@create']);
Route::put('background/tags/{tags}', ['as'=> 'background.tags.update', 'uses' => 'Background\TagController@update']);
Route::patch('background/tags/{tags}', ['as'=> 'background.tags.update', 'uses' => 'Background\TagController@update']);
Route::delete('background/tags/{tags}', ['as'=> 'background.tags.destroy', 'uses' => 'Background\TagController@destroy']);
Route::get('background/tags/{tags}', ['as'=> 'background.tags.show', 'uses' => 'Background\TagController@show']);
Route::get('background/tags/{tags}/edit', ['as'=> 'background.tags.edit', 'uses' => 'Background\TagController@edit']);


Route::get('background/posts', ['as'=> 'background.posts.index', 'uses' => 'Background\PostController@index']);
Route::post('background/posts', ['as'=> 'background.posts.store', 'uses' => 'Background\PostController@store']);
Route::get('background/posts/create', ['as'=> 'background.posts.create', 'uses' => 'Background\PostController@create']);
Route::put('background/posts/{posts}', ['as'=> 'background.posts.update', 'uses' => 'Background\PostController@update']);
Route::patch('background/posts/{posts}', ['as'=> 'background.posts.update', 'uses' => 'Background\PostController@update']);
Route::delete('background/posts/{posts}', ['as'=> 'background.posts.destroy', 'uses' => 'Background\PostController@destroy']);
Route::get('background/posts/{posts}', ['as'=> 'background.posts.show', 'uses' => 'Background\PostController@show']);
Route::get('background/posts/{posts}/edit', ['as'=> 'background.posts.edit', 'uses' => 'Background\PostController@edit']);
