<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Display the index page.
     *
     * @return view
     */
    public function index()
    {
		return view('pages.index');
    }
    
    /**
     * Display the work page.
     *
     * @return view
     */
    public function work()
    {
		return view('pages.work');
    }
    
    /**
     * Display the services page.
     *
     * @return view
     */
    public function services()
    {
		return view('pages.services');
    }
    
    /**
     * Display the brand page.
     *
     * @return view
     */
    public function brand()
    {
		return view('pages.brand');
    }
    
    /**
     * Display the marketing page.
     *
     * @return view
     */
    public function marketing()
    {
		return view('pages.marketing');
    }
    
    /**
     * Display the web page.
     *
     * @return view
     */
    public function web()
    {
		return view('pages.web');
    }
    
    /**
     * Display the ui page.
     *
     * @return view
     */
    public function ui()
    {
		return view('pages.ui');
    }
    
    /**
     * Display the about page.
     *
     * @return view
     */
    public function about()
    {
		return view('pages.about');
    }
    
    /**
     * Display the contact page.
     *
     * @return view
     */
    public function contact()
    {
		return view('pages.contact');
    }
    
    /**
     * Display the hire page.
     *
     * @return view
     */
    public function hire()
    {
		return view('pages.hire');
    }
}
