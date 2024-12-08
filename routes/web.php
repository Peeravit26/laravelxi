<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('homepage', function () {
    return "<h1>This is home page</h1>";
});

Route::get("/blog/{id}", function ($id) {
    return "<h1>This is blog page :{$id}</h1>";
});

Route::get("/hello", function () {	
    return view("hello");
});


Route::get('/greeting', function () {

	$name = 'James';
$last_name = 'Mars';

return view('greeting', compact('name','last_name') );
});

Route::get('/bootstrap-example', function () {
    return view('bootstrap-example');
});


Route::get('/bootstrap-example', function () {
    return view('bootstrap-example');
});

Route::get( "/gallery" , function(){
    $name = 'Peeravit';
    $last_name = 'srirat';
    $antn = 'ant';
	$ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    $birdn = 'bird';
    $bird = "https://images.indianexpress.com/2021/03/falcon-anthony-mackie-1200.jpg"; 
    $catn = 'cat';
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    $godn = 'god';
    $god = "https://www.blackoutx.com/wp-content/uploads/2021/04/Thor.jpg"; 
    $spidern = 'spider';
    $spider = "https://icdn5.digitaltrends.com/image/spiderman-far-from-home-poster-2-720x720.jpg"; 
    

return view("test/index", compact('name','last_name','antn','birdn','catn','godn','spidern',"ant","bird","cat","god","spider") );
});


Route::get("/gallery/ant", function () {
    $name = 'Peeravit';
    $last_name = 'srirat';
    
    $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    return view("test/ant", compact('name','last_name','ant',"ant"));
});

Route::get("/gallery/bird", function () {
    $name = 'Peeravit';
    $last_name = 'srirat';
    
    $bird = "https://images.indianexpress.com/2021/03/falcon-anthony-mackie-1200.jpg";
    return view("test/bird", compact('name','last_name','bird',"bird"));
});

Route::get("/gallery/cat", function () {
    $name = 'Peeravit';
    $last_name = 'srirat';
    
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    return view("test/cat", compact('name','last_name','cat',"cat"));
});

