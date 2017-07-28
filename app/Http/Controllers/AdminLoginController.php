<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use Illuminate\Support\Facades\Mail;

use Redirect;

use Session;

use Illuminate\Support\Facades\Input;

use Validator;

class AdminLoginController extends Controller
{

  public function showLoginForm(){
    return view('admin.login');
  }

}

?>
