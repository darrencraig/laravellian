<?php namespace App\Http\Controllers\Website;

use Illuminate\Routing\Controller;

class HomeController extends Controller {

	/**
	 * Create a new controller instance.
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return response("Home");
	}

}
