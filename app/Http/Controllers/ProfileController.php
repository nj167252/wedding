<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Profile;
use Session;
use Image;
use Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::all();

        return view('profiles.index')->withProfiles($profiles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate data
        $this->validate($request, [
            'name' => 'required|max:50',
            'party' => 'required|max:50',
            'bio' => 'required|min:10|max:500',
            'image' => 'required|image'
        ]);

        // Store data
        $profile = new Profile;

        $profile->name = $request->name;
        $profile->party = $request->party;
        $profile->bio = $request->bio;

        // Store our image
        if($request->hasFile('image')) {

            //Add photo
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' .  $filename);

            Image::make($image)->resize(500, 500)->save($location);

            $profile->image = $filename;
        }

        $profile->save();

        Session::flash('success', 'A new Profile was successfully saved!');

        // Redirect
        return redirect()->route('profiles.show', $profile->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Profile::find($id);

        return view('profiles.show')->withProfile($profile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::find($id);

        return view('profiles.edit')->withProfile($profile);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate data
        $this->validate($request, [
            'name' => 'required|max:50',
            'party' => 'required|max:50',
            'bio' => 'required|min:10|max:500',
            'image' => 'sometimes'
        ]);

        // Store data
        $profile = Profile::find($id);

        $profile->name = $request->input('name');
        $profile->party = $request->input('party');
        $profile->bio = $request->input('bio');

        // Store our image
        if($request->hasFile('image')) {

            // Add new photo
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' .  $filename);
            Image::make($image)->resize(500, 500)->save($location);
            $oldFilename = $profile->image;

            // Update the database
            $profile->image = $filename;

            // Delet old image
            Storage::delete($oldFilename);
        }

        $profile->save();

        Session::flash('success', 'A new Profile was successfully updated!');

        // Redirect
        return redirect()->route('profiles.show', $profile->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::find($id);
        Storage::delete($profile->image);
        
        $profile->delete();
        
        Session::flash('success', 'The Profile was successfully deleted!');
        
        return redirect()->route('profiles.index');
    }
}
