<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome',["fs8"=>"hey brother"]);
});

Route::get('/nav', function () {
    return view('nav',);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/form', function () {
    // dd(session()->all());
    return view('form');
});
Route::post('/form', function () {
        //validations
        request()->validate([
            'name' => 'required|max:30',

        ]);

            $name = request('name');
            $email = request('email');
            $city = request('city');
            $validation = request()->validate([

                'photo'=>'required'
               ]);
           
           
               $image = request()->photo; // $image = request('image')
           
                   // $image->getClientOriginalName() : nom orignal de la photo
           
               $file_name = time() . '.'. $image->getClientOriginalExtension();
               $image->move(public_path('public'), $file_name);

            //  $upload= request()->file('photo');
            // $upload= request()->photo;
            // if (request()->file('photo')->isValid()) {
            //     $message = "YEES";
            //    return view('form2 ',compact('name','email','city','message'));
            // }

            // return view('form2 ',compact('name','email','city'));
        });

Route::get('/form2', function () {
    
    return view('form2');
});

Route::post('/form2', function () {

    //traitements
    $name = request('name');
    $email = request('email');
    $city = request('city');
    request()->session()->put('name', $name);
    Cookie::queue('name', $name, 30);
    // Cookie::queue('email', $email, 30);
   
    return view('form2',compact('name','email','city'));
});


