<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;
use App\Profile;
use Session;
use Mail;

class PagesController extends Controller
{

	public function getIndex()
	{

		$events = Event::orderBy('date', 'desc')->get();
        
    return view('pages.welcome')->withEvents($events);

	}

	public function getParty()
	{

		$profiles = Profile::orderBy('name', 'asc')->get();

		return view('pages.party')->withProfiles($profiles);
		
	}

	public function getGallery()
	{

		return view('pages.gallery');
		
	}

	public function getLocation()
	{

		return view('pages.location');
		
	}

	public function getContact()
	{

		return view('pages.contact');
		
	}

}