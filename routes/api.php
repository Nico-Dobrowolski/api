<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/blog', function (Request $request) {

    return '
        [
            {"Titre":"Ansible","Description":"Deploy Api laravel & React App with powerfull Ansible"}
        ],
        [
            {"Titre":"Lab","Description":"This lab can be download here : https://github.com/Nico-Dobrowolski/ansible.git"}
        ]
    
    ';
});