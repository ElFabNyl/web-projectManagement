<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\Api;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginIntegration(Request $request)
    {

            $postdata = [
                'email' => $request->email,
                'password' => $request->password
            ];
            // bon j'appelle l'API, et je lui passe les deux batards la.
            $retourApi = Api::post('user/login', $postdata);

            if(!$retourApi['status']) {
                return Response::json($retourApi);
            }
            // Je mets les infos du user en session
            Session::put("token", $retourApi["data"]["token"]);
            Session::put("user", $retourApi["data"]["user"]);
            Session::put("success", 'Your are successfully logged');
            Session::put("save_temp_order", "logged");

            $data = [
                'status' => $retourApi['status'],
            ];
                return Response::json($data);

    }

}
