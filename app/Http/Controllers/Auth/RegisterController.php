<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    private $_users;

    public function __construct() {

         $this->_users = new User();
    }
    public function create() {
        return view('auth.register');
    }

    public function store (RegisterRequest $request) {

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
        ];
        
        $this->_users->addUser($data);

        return redirect()->route('login')->with('succes', 'Đăng ký thành công');

    }
}
