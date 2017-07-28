<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Portfolio;

use Illuminate\Support\Facades\Mail;

use Redirect;

use Session;

use Illuminate\Support\Facades\Input;

use Validator;

class PortfolioController extends Controller
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

    public function createPortfolio()
    {
        //
        return view('admin.newWork');
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
        //
        $portfolioTitle = Input::get('portfolioTitle');
        $portfolioSubtitle = Input::get('portfolioSubtitle');
        $portfolioSiteLink = Input::get('portfolioSiteLink');
        $portfolioFile = Input::file('portfolioFile');

        $rules = array(
            'portfolioTitle' => 'required',
            'portfolioSubtitle' => 'required',
            'portfolioSiteLink' => 'required',
            'portfolioFile' => 'required|max:10000|mimes:doc,docx,jpeg,png,jpg'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            # code...

            $messages = $validator->messages();
            return Redirect::route('createPortfolio')->withInput()->withErrors($validator);
        }
        elseif ($validator->passes()) {
            # code...
            //echo "success validator";

            // checking file is valid
            if (Input::file('portfolioFile')->isValid()) {
                # code...

                //getting image extension
                $extension = Input::file('portfolioFile')->getClientOriginalExtension();

                //renaming
                $filename = rand(11111, 99999).'.'.$extension;

                $destinationPath = 'admin/portfolios';
                //it means projectfolder/public/up_file

                //uploading file to given pass
                $portfolioFile->move($destinationPath, $filename);

                $post = new Portfolio();
                $post->title = $portfolioTitle;
                $post->subtitle = $portfolioSubtitle;
                $post->site_link = $portfolioSiteLink;
                $post->images = $filename;
                $post->save();

                Session::flash('success', 'The blog post was successfully uploaded!');

                return Redirect::route('createPortfolio');
            }
            else {
                # code...

                return Redirect::route('createPortfolio');
            }

        }
    }

    public function allPortfolios(){

        $posts = Portfolio::select('*')->paginate(2);

        return view('admin.portfolios')->with('posts', $posts);
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
    public function editPortfolio($id)
    {
      // find the post in the databse and save as a variable
      $post = Portfolio::find($id);

      // returns the view and pass the in the var we previously created
      return view('admin.portfolio-edit')->with('post', $post);
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
      'subtitle' => 'required',
      'site_link' => 'required'
    ));

    //store in the databse

    $post = Portfolio::find($id);

    $title = $request->input('title');
    $subtitle = $request->input('subtitle');
    $site_link = $request->input('site_link');

    $post->title = $title;
    $post->subtitle = $subtitle;
    $post->site_link = $site_link;
    $post->save();

    //redirect to another page

    Session::flash('success', 'The blog post was successfully updated!');

    return redirect()->route('createPortfolio');
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
