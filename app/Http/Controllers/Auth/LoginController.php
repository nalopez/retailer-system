<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function renderLoginPage(Request $request)
    {
        /*echo "<pre>";
        var_dump($request->session()->has('user'));
        echo "</pre>"; die;*/

        // Check if current user is authenticated
        if (Auth::check()) {
            // redirect to homepage
            return redirect('homepage');
        }

        return view('login');
    }

    public function verifyLogin(Request $request)
    {           
        $loginData = $request->only('email', 'password');
        $response = 'NOT OK';
        if (empty($loginData['email']) || empty($loginData['password']) ) {
            return response($response, Response::HTTP_OK);
        }

        /*$user = User::where('email', $loginData['email'])
                ->where('password', $loginData['password'])
                ->take(1)
                ->get()
                ->toArray();

        if (count($user) === 1) {
            $response = 'OK';
            $user = $user[0];

            // Start session
            $request->session()->put('user', $user);
        }*/


        /*echo "<pre>";
        var_dump(Hash::make('nicanix23'));
        echo "</pre>";
*/

        if (Auth::attempt($loginData)) {
            // Authentication passed
            $response = 'OK';
            return redirect()->intended('home');
        }

        return response($response, Response::HTTP_OK);
    }

    
}
