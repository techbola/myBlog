<?php

  Route::get('/', function () {
      return view('homepage');
  });

  Route::get('admin/login', 'Adminauth\AuthController@showLoginForm')->name('admin.login');
  Route::post('admin/login', 'Adminauth\AuthController@login')->name('admin.login.submit');

  Route::group(['middleware' => ['admin']], function(){
    
    Route::get('admin/dashboard', 'Admin\AdminController@dashboard')->name('addPost');
    Route::get('admin/logout', 'Adminauth\AuthController@logout');

    Route::post('admin/dashboard', array(
        'uses' => 'PostController@store',
        'as' => 'storePost'
    ));

    Route::get('admin/all-posts', array(
        'uses' => 'PostController@allPosts',
        'as' => 'allPosts'
    ));

    Route::get('admin/{post}/edit', array(
        'uses' => 'PostController@editPost',
        'as' => 'editPost'
    ));

    Route::post('admin/{post}', array(
        'uses' => 'PostController@update',
        'as' => 'updatePost'
    ));

    Route::get('admin/add-portfolio', array(
        'uses' => 'PortfolioController@createPortfolio',
        'as' => 'createPortfolio'
    ));

    Route::post('admin/add-portfolio', array(
        'uses' => 'PortfolioController@store',
        'as' => 'addPortfolio'
    ));

    Route::get('admin/all-portfolios', array(
        'uses' => 'PortfolioController@allPortfolios',
        'as' => 'allPortfolios'
    ));

    Route::get('admin/{portfolio}/portfolio-edit', array(
        'uses' => 'PortfolioController@editPortfolio',
        'as' => 'editPortfolio'
    ));

    Route::post('admin/{portfolio}', array(
        'uses' => 'PortfolioController@update',
        'as' => 'updatePortfolio'
    ));


  });
