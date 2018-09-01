<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Http\Resources\UsersCollection;

class UserController extends Controller
{
    public function index()
    {
        return new UsersCollection(User::paginate(5));
    }
}
