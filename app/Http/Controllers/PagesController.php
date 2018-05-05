<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{

	public function getIndex()
	{

		return view('pages.welcome');

	}

	public function getParty()
	{

		return view('pages.party');
		
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