<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\Api;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

/**
 * Class RegisterController
 * @package App\Http\Controllers
 */
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
     * @return JsonResponse
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

        if(!$response['status'] && $response['error'] > 0) {

            return Response::json($response);
        }

        return Response::json($response);

    }

}
