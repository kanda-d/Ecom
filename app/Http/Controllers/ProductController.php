<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProductController extends Controller
{
    function index()
    {
            return "Welcome to Product";
    }
}
