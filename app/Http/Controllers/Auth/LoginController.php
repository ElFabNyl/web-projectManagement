<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

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

  /**
     * * je commence par créer la fonction qui va me servir à faire des requetes vers l'API
     * @param [Array] $data : Paramètres
     * @param [String] $url : le endpoint
     * @param [boolean] $raw : Permettant de savoir si on doit renvoyer les données brutes ou pas
     *
     * @return ..... les données.
     * 
     */
    public static function callApi($params,$url, $raw=false)
    {
        $credentials = base64_encode('staff:~nbX}#%4j*YZ+Jk{9q');

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($curl, CURLOPT_ENCODING, "");
        curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
       

        $data = curl_exec($curl);

        $err = curl_error($curl);
        curl_close($curl);

        if($raw){
            return $data;
            exit();
        }

        $response = json_decode($data, true);

        if ($err) {
            $response = (array)$response;
            return $response['error'] = $err;
        }else {
            return (array)$response;
        }
    }

  // la fonction qui va gerer donc les choses...
  public function loginIntegration(Request $request){

     //l'api gere déjà la validation donc, je m'en fou... yiiiiiiiihaaaaa
    // try {
    // } catch (\Throwable $th) {
    //     //throw $th; 
    // }

     
         $postdata = [ 
             'email' =>$request->email,
             'password' => $request->password ];
    
    
    // bon j'appelle l'API, et je lui passe les deux batards la.

    $retourApi= self::callApi($postdata, 'http://127.0.0.1:2222/api/user/login',); dd($retourApi);

    
    
    // return Http::get('http://127.0.0.1:2222/api/user/login')->body();




    
  }
 
}
