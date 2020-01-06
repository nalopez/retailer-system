<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller {
    public function __construct() {
    	/*echo "<pre>";
    	var_dump(Auth::user());
    	echo "</pre>";die;
*/
        $this->middleware('auth');
    }

    public function renderHomepage(Request $request)
   	{
   		return view('home');
   	}
}