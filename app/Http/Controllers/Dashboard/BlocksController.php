<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class BlocksController extends Controller
{
    public function showDescription(){
        return view('dashboard.pages.demo.description');
    }
    public function showForms(){
        return view('dashboard.pages.demo.forms');
    }
    public function showContainers(){
        return view('dashboard.pages.demo.container');
    }
    public function showTables(){
        return view('dashboard.pages.demo.tables');
    }
}
