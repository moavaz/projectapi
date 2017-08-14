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
        $post = Projectapi::all();
        return json_encode($post);
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
       /* $this->validate($request, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|unique',
            'studentid' => 'required|unique',
            'contactno' => 'required|unique',
            ]); */
        $post = new Projectapi;
        $post->firstname = $request->firstname;
        $post->lastname = $request->lastname;
        $post->email = $request->email;
        $post->image = $request->image;
        $post->studentid = $request->studentid;
        $post->contactno = $request->contactno;
        $post->save();

        if($post->save()){
            return json_encode(array('Status is ' => true,'id'=> $post->id));
        }
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
        $post = Projectapi::findorFail($id);
        return json_encode($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\projectapi  $projectapi
     * @return \Illuminate\Http\Response
     */
    public function edit($id/*projectapi $projectapi*/)
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
    public function update(Request $request, $id/*projectapi $projectapi*/)
    {
        //validate
     /*   $this->validate($request, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|unique',
            'studentid' => 'required|unique',
            'contactno' => 'required|unique',
        ]); */
        $post = Projectapi::find($id);
        $post->firstname = $request->input('firstname');
        $post->lastname = $request->input('lastname');
        $post->email = $request->input('email');
        $post->image = $request->input('image');
        $post->studentid = $request->input('studentid');
        $post->contactno = $request->input('contactno');
        $post->save();

        if ($post->save()) {

            return json_encode(array('Status is updated ' => true, 'id' => $post->id));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\projectapi  $projectapi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id/*projectapi $projectapi*/)
    {
        //
        $post = Projectapi::findorFail($id);
        if($post->delete()){
            return json_encode(array('status is'=>true,'id'=> $post->id));
        }
       /* $post->delete();
        return redirect()::route('posts.index');*/
    }
}
