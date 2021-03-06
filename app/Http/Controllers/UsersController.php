<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')) {
            $users = \App\User::where('name','LIKE','%' .$request->cari. '%')
                            ->orWhere('email', 'like','%'.$request->cari.'%')
                            ->orWhere('address', 'like','%'.$request->cari.'%')
                            ->orWhere('address', 'like','%'.$request->cari.'%')
                            ->orWhere('born', 'like','%'.$request->cari.'%')
                            ->orWhere('hobby', 'like','%'.$request->cari.'%')
            ->paginate(3); 

        } else {
            $users = \App\User::paginate(3); 
        }

        //$users = User::all();

        return view('index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
            'address' => 'required',
            'age' => 'required',
            'born' => 'required',
            'hobby' => 'required',
        ]);

        User::create($request->all());
        return redirect('/')->with('success','Data berhasil diinput');
        // return $request->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->born = $request->born;
        $user->hobby = $request->hobby;
        $user->address = $request->address;
        $user->password = $request->password;

        $user->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return view('update',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      
        $user = \App\User::findOrFail($request->id);
        // $user = \App\User::findOrFail($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->born = $request->born;
        $user->hobby = $request->hobby;
        $user->address = $request->address;
        $user->password = $request->password;
        
        $user->save();  
        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user = \App\User::findOrFail($user->id);
        $user->delete();

        return redirect('/');   
    }
}
