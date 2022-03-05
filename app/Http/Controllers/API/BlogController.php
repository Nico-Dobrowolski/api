<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        return response()->json([
            ['titre' => 'Ansible', 'description' => 'Deploy API Laravel & React App'],
            ['titre' => 'Lab', 'description' => 'This lab is available here  https://github.com/Nico-Dobrowolski/ansible.git']
        ]);
    }
}
