<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.pages.user.index');
    }

    public function addUser(Request $request)
    {
        if ($request->isMethod('post')) {
        }
        return view('admin.pages.user.add');
    }

    public function editUser(Request $request)
    {
        if ($request->isMethod('post')) {
        }
        return view('admin.pages.user.edit');
    }

    public function statusUser()
    {
    }

    public function deleteUser()
    {
    }
}
