<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Profile;
use App\User;
use Image;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile', ['user' => Auth::user()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        
        return view('profileEdit', compact('user'));
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
        // Handle the user upload of avatar

        // Handle the user upload of avatar
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/img/profile/avatar/' . $filename));
            $user = Auth::user();
            $user->avatar = '/img/profile/avatar/'.$filename;
            $user->save();
        }
        
        $user = User::find($id);
        $user->update([
            'name' => request('name'),
            'email' => request('email')
        ]);

        $profile = Profile::where('user_id', $id);
        $profile->update([
            'user_id' => $id,
            'pro_sampulImg' => "img.jpg",
            'pro_tempatLahir' => request('ttl'),
            'pro_tglLahir' => request('date'),
            'pro_jenisKelamin' => request('gender'),
            'pro_telp' => request('phone'),
            'pro_alamat' => request('alamat'),
        ]);

        return redirect('/profile')->with(['update' => 'Data Profile anda berhasil di ubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
