<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    private $_users;

    public function __construct() {

        $this->_users = new User();
   }
    public function index() {
         
        $data = $this->_users->getAllUser();

        return view('admin.users.list', compact('data'));
    }
}
