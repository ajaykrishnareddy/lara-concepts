<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\Services\DemoOne;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DemoOne $customprovider)
    {
       $name = $customprovider->getName();   
       echo $customprovider->getStringLength($name);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //one to one
        // $user = \App\User::find(1);
        // $phone  = \App\Phone::find(4);
        // dd($phone->user->email);

        ///one to many
        // $post = \App\Post::find(2);
        // dd($post->comments);

        //one to many
        // $c = \App\Comment::find(3);
        // dd($c->post);

        //many to many
        $user = \App\User::first();
        
        $roles = \App\Role::all();
        // $user->roles()->syncWithoutDetaching([
        //     1 => [
        //         'name' => 'Ajay Krishna Reddy'
        //     ]
        // ]);
        // dd($user->roles[0]->pivot->name);
        $c = \App\Country::find(1);
        dd($c->cities);
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
        //
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
        //
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
