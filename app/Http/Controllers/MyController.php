<?php

namespace otunremmywrites\Http\Controllers;

use Illuminate\Http\Request;

use otuncontroller\Http\Requests;
use otunremmywrites\Http\Controllers\Controller;

class MyController extends Controller
{
    //
    public function index()
    {
        echo 'index';
    }
    public function create()        //get
    {
        echo 'create';
    }
    public function store(Request $request)     //post
    {
        echo 'store';
    }
    public function show($id)
    {
        echo 'show';
    }
    public function edit($id)
    {
        echo 'edit';
    }
    public function update(Request $request, $id)
    {
        echo 'update';
    }
    public function destroy($id)
    {
        echo 'destroy';
    }
}
