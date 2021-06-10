<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Display icons page
     *
     * @return \Illuminate\View\View
     */
    public function icons()
    {
        return view('pages.icons');
    }

    /**
     * Display maps page
     *
     * @return \Illuminate\View\View
     */
    public function maps()
    {
        return view('pages.maps');
    }

    /**
     * Display tables page
     *
     * @return \Illuminate\View\View
     */
    public function tables()
    {
        return view('pages.tables');
    }
    /**
     * Display message page
     *
     * @return \Illuminate\View\View
     */
    public function all_message()
    {
        return view('pages.all_message');
    }
    /**
     * Display institution page
     *
     * @return \Illuminate\View\View
     */
    public function all_institution()
    {
        return view('pages.all_institution');
    }
    /**
     * Display ads page
     *
     * @return \Illuminate\View\View
     */
    public function all_ads()
    {
        return view('pages.all_ads');
    }

    /**
     * Display notifications page
     *
     * @return \Illuminate\View\View
     */
    public function notifications()
    {
        return view('pages.notifications');
    }

    /**
     * Display rtl page
     *
     * @return \Illuminate\View\View
     */
    public function rtl()
    {
        return view('pages.rtl');
    }

    /**
     * Display typography page
     *
     * @return \Illuminate\View\View
     */
    public function typography()
    {
        return view('pages.typography');
    }

    /**
     * Display upgrade page
     *
     * @return \Illuminate\View\View
     */
    public function upgrade()
    {
        return view('pages.upgrade');
    }


    public function create_message()
    {
        return view('pages.create_message');
    }
}