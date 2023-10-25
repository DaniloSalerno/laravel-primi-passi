<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = [
        'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis mollitia libero assumenda et distinctio, sit autem praesentium voluptate iure eius voluptatibus nisi dignissimos quisquam iusto molestiae. Laudantium ducimus enim quibusdam quas. Voluptas nisi quisquam reiciendis quidem iure, autem, est quasi non dolorem odit odio voluptate magni placeat minima dicta qui repellendus nemo ut beatae nihil laboriosam, necessitatibus dolores ea. Dolore iste obcaecati deserunt amet, aut animi dolorem quam. Minima, ducimus ad. Totam delectus quaerat unde laborum illo sint doloremque. Minima architecto labore iure libero autem hic! Magnam, amet.',

        'title' => 'Home Page'
    ];

    return view('home', $data);
})->name('home');

Route::get('/about', function () {
    $title = 'About Page';
    $message = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis mollitia libero assumenda et distinctio, sit autem praesentium voluptate iure eius voluptatibus nisi dignissimos quisquam iusto molestiae. Laudantium ducimus enim quibusdam quas. Voluptas nisi quisquam reiciendis quidem iure, autem, est quasi non dolorem odit odio voluptate magni placeat minima dicta qui repellendus nemo ut beatae nihil laboriosam, necessitatibus dolores ea. Dolore iste obcaecati deserunt amet, aut animi dolorem quam. Minima, ducimus ad. Totam delectus quaerat unde laborum illo sint doloremque. Minima architecto labore iure libero autem hic! Magnam, amet.';

    return view('about', compact('title', 'message'));
})->name('about');

Route::get('/contacts', function () {
    $data = [
        'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis mollitia libero assumenda et distinctio, sit autem praesentium voluptate iure eius voluptatibus nisi dignissimos quisquam iusto molestiae. Laudantium ducimus enim quibusdam quas. Voluptas nisi quisquam reiciendis quidem iure, autem, est quasi non dolorem odit odio voluptate magni placeat minima dicta qui repellendus nemo ut beatae nihil laboriosam, necessitatibus dolores ea. Dolore iste obcaecati deserunt amet, aut animi dolorem quam. Minima, ducimus ad. Totam delectus quaerat unde laborum illo sint doloremque. Minima architecto labore iure libero autem hic! Magnam, amet.',

        'title' => 'Contacts Page'
    ];
    return view('contacts', $data);
})->name('contacts');
