<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Validator;
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
        $profile = Profile::all();
        return view('profile.index', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        // validate data
        $validator = Validator::make($input, [
            'nama' => 'required|min:2|max:50',
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // validasi untuk data yang apabila gagal, maka akan keluar error data tidak valid
        if($validator->fails())
        {
            return 'Data tidak Valid';
        }
        //kondisi input foto(file)
        if($request->hasFile('photo'))
        {
            $destination_path = 'public/images/profile';
            $image = $request->file('photo');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('photo')->storeAs($destination_path, $image_name);
            $input['photo'] = $image_name; //untuk nama ke database
        }

        Profile::create($input);
        return redirect('/profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::find($id);
        return view('profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profile = Profile::findOrFail($id);
        $data = $request->all();

        $input = $request->all();
        
        $validator = Validator::make($input, [
            'nama' => 'required|min:2|max:50',
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // validasi untuk data yang apabila gagal, maka akan keluar error data tidak valid
        if($validator->fails())
        {
            return 'Data tidak Valid';
        }
        //kondisi input foto(file)
        if($request->hasFile('photo'))
        {
            $destination_path = 'public/images/profile';
            $image = $request->file('photo');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('photo')->storeAs($destination_path, $image_name);
            $data['photo'] = $image_name; //untuk nama ke database
        }

        $profile->update($data);
        // dd($profile);
        return redirect('/profile');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }

    public function delete($id)
    {
        $profile = Profile::findOrFail($id);
        $profile->delete();
        return back();
    }
}
