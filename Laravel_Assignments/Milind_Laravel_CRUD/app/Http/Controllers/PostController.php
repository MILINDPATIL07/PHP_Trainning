<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Post::latest()->paginate(2);
        $datanew['newdata'] = "";
    
        return view('posts.index',compact('data','datanew'))
            ->with('i', (request()->input('page', 1) - 1) * 2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|min:2|max:8',
            'lname' => 'required|min:4|max:8',
            'gender' => 'required',
            'designation'=>'required',
            'email' => 'required|email|unique:posts',
            'description' => 'required|max:50',
        ],[
                'fname.required' => '.First Name is Required',
                'lname.required' => 'Last Name is Required',
                'fname.min' => 'Minimum 4 charachers Required!',
                'fname.max' => 'Maximum 8 charachers Required!',
                'lname.min' => 'Minimum 4 charachers Required!',
                'lname.max' => 'Maximum 8 charachers Required!',                              
                'email.required' => 'Email is required!',
                'gender.required' => 'Gender is required!',
                'email.unique' => 'Email is already exists!'
                //'fname.unique' => 'fname is already exists!!'

            ]);
    
        Post::create($request->all());
     
        return redirect()->route('posts.index')
                        ->with('success','Record Created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //echo $post->id; exit;
        $request->validate([
            'fname' => 'required|min:2|max:8',
            'lname' => 'required|min:4|max:8',
            'gender' => 'required',
            'designation'=>'required',
            'email' => 'required|unique:posts,email,'.$post->id.',id',
            'description' => 'required|max:50',           
            
        ],[
            'fname.required' => 'First Name is required',
            'lname.required' => 'Last Name is required',
            'fname.min' => 'Minimum 4 charachers Require!!',
            'fname.max' => 'Maximum 8 charachers Require!!',
            'lname.min' => 'Minimum 4 charachers Require!!',
            'lname.max' => 'Maximum 8 charachers Require!!',                              
            'email.required' => 'Email is required',
            'gender.required' => 'Gender is required',
            'email.unique' => 'Email is already exists!!'
            ]);        
       
         //$request_data['gender'] = 'active'; 
        //  echo "<pre>";
        //  print_r($request->all());
        //  echo "</pre>";
        //  exit;
         $request_data = $request->all();
         $post->update($request_data);
    
        return redirect()->route('posts.index')
                        ->with('success','Record Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
    
        return redirect()->route('posts.index')
                        ->with('success','Record Deleted Successfully');
    }
}
