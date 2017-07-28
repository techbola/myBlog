<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use Illuminate\Support\Facades\Mail;

use Redirect;

use Session;

use Illuminate\Support\Facades\Input;

use Validator;

class PostController extends Controller
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

    public function store()
    {
        $title = Input::get('title');
        $category = Input::get('category');
        $content = Input::get('content');
        $file = Input::file('fileInput');

        $rules = array(
            'title' => 'required',
            'category' => 'required',
            'content' => 'required',
            'fileInput' => 'required|max:10000|mimes:doc,docx,jpeg,png,jpg'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            # code...

            $messages = $validator->messages();
            return Redirect::route('addPost')->withInput()->withErrors($validator);
        }
        elseif ($validator->passes()) {
            # code...
            //echo "success validator";

            // checking file is valid
            if (Input::file('fileInput')->isValid()) {
                # code...

                //getting image extension
                $extension = Input::file('fileInput')->getClientOriginalExtension();

                //renaming
                $filename = rand(11111, 99999).'.'.$extension;

                $destinationPath = 'admin/posts';
                //it means projectfolder/public/up_file

                //uploading file to given pass
                $file->move($destinationPath, $filename);

                $post = new Post();
                $post->title = $title;
                $post->category = $category;
                $post->content = $content;
                $post->images = $filename;
                $post->save();

                Session::flash('success', 'The blog post was successfully uploaded!');

                return Redirect::route('addPost');
            }
            else {
                # code...

                return Redirect::route('addPost');
            }

        }

    }

    public function allPosts(){

        $posts = Post::select('*')->paginate(2);

        return view('admin.posts')->with('posts', $posts);
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
    public function editPost($id)
    {
        // find the post in the databse and save as a variable
        $post = Post::find($id);

        // returns the view and pass the in the var we previously created
        return view('admin.edit')->with('post', $post);
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
      //validate the data

    $this->validate($request, array(
      'title' => 'required',
      'content' => 'required'
    ));

    //store in the databse

    $post = Post::find($id);

    $title = $request->input('title');
    $content = $request->input('content');

    $post->title = $title;
    $post->content = $content;
    $post->save();

    //redirect to another page

    Session::flash('success', 'The blog post was successfully updated!');

    return redirect()->route('addPost');
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
