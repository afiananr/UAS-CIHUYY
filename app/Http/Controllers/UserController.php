<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->back()->with('success', 'User berhasil dihapus');
    }
}
