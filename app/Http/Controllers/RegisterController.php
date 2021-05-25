<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\Api;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    /**
     *
     */
    public function index()
    {
        return view('auth.register');
    }


    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation,
        ];

        $response = Api::post('user/register',$data);

    }

}
