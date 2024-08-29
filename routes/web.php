<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


// Route::get('/praveen', function () {
//     return '<h1>Praveen kumar</h1>';
// });


// Route::get('/about', function () {
//     return '<h1>about-us</h1>';
// });


// Route::get('/contact', function () {
//     return '<h1>contact-us</h1>';
// });

// //passing integer data
// Route::get('/blog/{id}', function ($id) {
//     return "<h1>this is blog page {$id}</h1>";
// });

// //passing string data
// Route::get('/pages/{id}', function ($id) {
//     if($id=='first'){
//         return "<h1>this is first page {$id}</h1>";
//     }else if($id=='second'){
//         return "<h1>this is second page {$id}</h1>";
//     }else{
//         return "<h1>invalid page {$id}</h1>";
//     }
   
// });

// //passing multiple parameter data
// Route::get('/user/{id}/{name}', function ($id,$name) {
//     return "<h1>User id: {$id} User Name:{$name}</h1>";
// });

// //regular expresssion constraint
// Route::get('/users/{name}', function ($name) {
//     return "<h1>welcome {$name}</h1>";
// })->where("name","[A-Za-z]+");


// //regular expresssion constraint
// Route::get('/student/{id}', function ($id) {
//     return "<h1>student id {$id}</h1>";
// })->where("id","[0-9]+");

// //passing multiple parameter data
// Route::get('/userid/{id}/{name}', function ($id,$name) {
//     return "<h1>User id: {$id} User Name:{$name}</h1>";
// })->where(
//     ['id'=>"[0-9]+"],
//     ['name'=>"[a-z]+"]
// );

//regular expression with helper methods

Route::get('/userid/{id}/{name}', function ($id,$name) {
    return "<h1>User id: {$id} User Name:{$name}</h1>";
})->whereNumber(
    'id'
)->whereAlpha(
    'name'
);