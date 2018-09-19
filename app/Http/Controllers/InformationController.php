<?php

namespace App\Http\Controllers;

use App\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{

    public function index(){
        return Information::all();
    }

    public function show($id)
    {
        $lang = LaravelLocalization::getCurrentLocale();
        return $lang;
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }
}
