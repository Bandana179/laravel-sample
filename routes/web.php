<?php

// use Illuminate\Support\Facades\Route;
// use  App\Http\Controllers\DemoController;
// use  App\Http\Controllers;
use App\Http\Controllers\RegistrationController;
use App\Students;
use App\Http\Controllers\StudentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/demo', function(){
//         echo "hello world";
// });

// Route::post('/test', function(){
//     echo "Testing the Route";
// });

// Route::get('/demo', function(){
//     return view('demo');
// });
// Route::get('/demo/{name}/{id?}', function($name, $id=null){
//     // echo $name;
//     // echo $id;
//     $data=compact('name', 'id');
//     // print_r($data);
//     return view('demo')->with($data);
// });

// Route::get('/{name?}', function($name=null){
//     $demo="<h2>Hello World</h2>";
//     $data=compact('name','demo');
//     return view('home')->with($data);

// });

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/about', function(){
//     return view('about');
// });

// Route::get('/course', function(){
//     return view('courses');
// });

// Route::get('/', [DemoController::class, 'index']);

// Route::get ('/about', [DemoController::class , 'about']);

// Route::get('/course', SingleActionController::class);

// Route::resource('photos', PhotoController::class);

Route::get('/register ' , [RegistrationController::class , 'index']);

Route::post('/register', [RegistrationController::class, 'register']);

Route::get('/students', function(){
    $students=Students::all();
    echo '<pre>';
    print_r($students->toArray());
});

Route::get('/student/create', [StudentController::class, 'index'])->name('student.create');
Route::post('/student', [StudentController::class, 'store']);

Route::get('/student',[StudentController::class, 'view']);

Route::get('/', function () {
     return view('index');
});

Route::get('/student/delete/{id}', [StudentController::class, 'delete'])->name('student.delete');

Route::get('/student/edit/{id}',[StudentController::class, 'edit'])->name('student.edit');
Route::get('/student/update/{id}',[StudentController::class, 'update'])->name('student.update');