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
        'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis mollitia libero assumenda et distinctio, sit autem praesentium voluptate iure eius voluptatibus nisi dignissimos quisquam iusto molestiae. Laudantium ducimus enim quibusdam quas. Voluptas nisi quisquam reiciendis quidem iure, autem, est quasi non dolorem odit odio voluptate magni placeat minima dicta qui repellendus nemo ut beatae nihil laboriosam, necessitatibus dolores ea. Dolore iste obcaecati deserunt amet, aut animi dolorem quam. Minima, ducimus ad. Totam delectus quaerat unde laborum illo sint doloremque. Minima architecto labore iure libero autem hic! Magnam, amet. Consequuntur rem hic vero natus at quisquam voluptatibus ipsam quod sint sequi autem, nulla, amet ea aut reiciendis optio voluptates ut illo eius dicta distinctio culpa adipisci cumque! Quasi natus distinctio est nihil. Reprehenderit voluptatibus placeat obcaecati! Dolor repudiandae dolorum inventore ex numquam ullam consequuntur, corporis natus veritatis. Ratione voluptatem quaerat doloremque saepe non odit modi, distinctio enim nobis ipsam harum vero repudiandae, ex reprehenderit suscipit labore, aperiam aliquam impedit inventore id ipsum. Magnam esse ipsa iusto, facere quaerat aliquam! Deserunt quidem vel quia dolor asperiores consequuntur ratione fugiat accusantium labore aspernatur, velit vitae veritatis pariatur iure cumque odit sequi! Quod excepturi rem doloremque ipsum beatae porro. Sit eum perspiciatis in repellendus?',

        'title' => 'Home Page'
    ];

    return view('home', $data);
});

Route::get('/about', function () {
    $title = 'About Page';
    $message = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis mollitia libero assumenda et distinctio, sit autem praesentium voluptate iure eius voluptatibus nisi dignissimos quisquam iusto molestiae. Laudantium ducimus enim quibusdam quas. Voluptas nisi quisquam reiciendis quidem iure, autem, est quasi non dolorem odit odio voluptate magni placeat minima dicta qui repellendus nemo ut beatae nihil laboriosam, necessitatibus dolores ea. Dolore iste obcaecati deserunt amet, aut animi dolorem quam. Minima, ducimus ad. Totam delectus quaerat unde laborum illo sint doloremque. Minima architecto labore iure libero autem hic! Magnam, amet. Consequuntur rem hic vero natus at quisquam voluptatibus ipsam quod sint sequi autem, nulla, amet ea aut reiciendis optio voluptates ut illo eius dicta distinctio culpa adipisci cumque! Quasi natus distinctio est nihil. Reprehenderit voluptatibus placeat obcaecati! Dolor repudiandae dolorum inventore ex numquam ullam consequuntur, corporis natus veritatis. Ratione voluptatem quaerat doloremque saepe non odit modi, distinctio enim nobis ipsam harum vero repudiandae, ex reprehenderit suscipit labore, aperiam aliquam impedit inventore id ipsum. Magnam esse ipsa iusto, facere quaerat aliquam! Deserunt quidem vel quia dolor asperiores consequuntur ratione fugiat accusantium labore aspernatur, velit vitae veritatis pariatur iure cumque odit sequi! Quod excepturi rem doloremque ipsum beatae porro. Sit eum perspiciatis in repellendus?';

    return view('about', compact('title', 'message'));
});

Route::get('/contacts', function () {
    return view('contacts');
});
