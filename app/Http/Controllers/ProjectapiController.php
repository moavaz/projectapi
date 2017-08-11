<?php

namespace App\Http\Controllers;

use App\projectapi;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProjectapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|unique',
            'studentid' => 'required|unique',
            'contactno' => 'required|unique',
    ]);
        $post = new Projectapi;
        $post->firstname = $request->firstname;
        $post->lastname = $request->lastname;
        $post->email = $request->email;
        $post->studentid = $request->studentid;
        $post->contactno = $request->contactno;
        $post->save();

        return redirect()->route('posts.show',$post->id );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\projectapi  $projectapi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Projectapi::find($id);
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\projectapi  $projectapi
     * @return \Illuminate\Http\Response
     */
    public function edit(projectapi $projectapi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\projectapi  $projectapi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, projectapi $projectapi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\projectapi  $projectapi
     * @return \Illuminate\Http\Response
     */
    public function destroy(projectapi $projectapi)
    {
        //
    }
}
