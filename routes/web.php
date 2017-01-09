<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','Front@index');
Route::get('/products','Front@products');
Route::get('/products/details/{id}','Front@product_details');
Route::get('/products/categories','Front@product_categories');
Route::get('/products/brands','Front@product_brands');
Route::get('/blog','Front@blog');
Route::get('/blog/post/{id}','Front@blog_post');
Route::get('/contact-us','Front@contact_us');
Route::get('/login','Front@login');
Route::get('/logout','Front@logout');
Route::get('/cart','Front@cart');
Route::get('/checkout','Front@checkout');
Route::get('/search/{query}','Front@search');
Route::get('blade', function(){
    $drinks = array('Vodka', 'Gin', 'Brandy');
    return view('page', ['name'=>'The Raven', 'day'=>'Friday', 'drinks'=>$drinks]);
});
Route::get('/insert', function(){
    App\Category::create(['name'=>'Music']);
    return 'category added';
});
Route::get('/read', function(){
    $category = new App\Category();

    $data = $category->all(['name', 'id']);

    foreach($data as $list){
        echo '<p>'. $list->id . ' ' . $list->name. ''.'</p>';
    }
});
Route::get('/update', function(){
    $category = App\Category::find(1);
    $category->name = 'HEAVY METAL';
    $category->save();

    $data = $category->all(['name', 'id']);

    foreach($data as $list){
        echo $list->id . ' ' . $list->name . '';
    }
});
Route::post('/cart', 'Front@cart');