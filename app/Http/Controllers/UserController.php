<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.index', ['users' => User::get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       if(!Auth::user()->is_admin){
            return redirect(route('users.index'));
       }

       return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserCreateRequest $request)
    {
        if(!Auth::user()->is_admin){
            return redirect(route('users.index'));
       }

       $data = $request->validated();

       $user  = User::create($data);

       return view('users.index', ['users' => User::get()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
       return view('users.show',['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        if(!Auth::user()->is_admin && !Auth::user()->id !== $user->id){

            return redirect(route('users.index'));
        }

        return view('users.edit',['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserEditRequest $request, User $user)
    {
        

        if(!Auth::user()->is_admin && !Auth::user()->id !== $user->id){
            return redirect(route('users.index'));
       }

       $data = $request->validated();

       $user->update($data);

       

       if(isset($data['new_password'])){
        $user->password = $data['new_password'];
        $user->save();
       }

       return view('users.index', ['users' => $user]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if(!Auth::user()->is_admin){
            abort(403, 'Nemate dopustenje');
        }
       
       $user->delete();

       return redirect()->route('users.index');
    }

}
