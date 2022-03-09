<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\BlogController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/blogs', function () {
    return response()->json([
        ['titre' => 'Ansible', 'description' => 'Deploy API Laravel & React App','url'=>'https://www.ansible.com/hs-fs/hubfs/Images/blog-social/blog_ansible-and-kubernetes-c.png?width=1024&name=blog_ansible-and-kubernetes-c.png'],
        ['titre' => 'Lab', 'description' => 'This lab is available here  https://github.com/Nico-Dobrowolski/ansible.git', 'url' => 'https://opensource.com/sites/default/files/styles/image-full-size/public/lead-images/science_experiment_beaker_lab.png?itok=plKWRhlU']
    ]);
});

Route::get('/tasks ', function () {
    return response()->json([
        "Know how to use Ansible",
        "Present the first lab",
        "Present the second lab",
        "Realise the conclusion",
    ]);
});

