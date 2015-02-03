<?php namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function show()
    {
        $slugs = func_get_args();

        dd($slugs);
    }
}