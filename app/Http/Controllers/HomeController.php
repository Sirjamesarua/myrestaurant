<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $posts=Post::orderBy('id','desc')->paginate(10);
        return view('home')->with('posts',$posts);    }

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
        $this->validate($request,[
            'title'=>'required',
            'content'=>'required',
            //'images'=>'required',
        ]);



            //TINKER
            $post = new Post;
            $post->title = $request->input('title');
            $post->content = $request->input('content');

        if($request->hasFile('images')){

            $filepathArray=array();
            $cover_image=$request->file('images');
            foreach ($cover_image as $cover_images) {
                    
                //get file name with extension
                $filenameWithExt=$cover_images->getClientOriginalName();

                //get just file name
                $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);

                //get just ext
                $extension=$cover_images->getClientOriginalExtension();

                //filename to store in database
                $fileNameToStore=$filename.'_'.time().'.'.$extension;

                if(preg_match('/\s/', $fileNameToStore)){
                     $fileNameToStore= preg_replace('/\s/', 
                        '_',$fileNameToStore);
                }

                //upload image
                $path=$cover_images->storeAs('public/images/',$fileNameToStore);

                  $filepathArray[]=$fileNameToStore;
            }
            $post->images=implode(" ",$filepathArray);

            //DELETE IMAGE IF DATA IS MISSING IN DATABASE
            if(!isset($post->images,$post->title,$post->content)){
                foreach($filepathArray as $singlepath){
                    $post_imagepath=public_path().'\storage\images\\'.$singlepath;
                    unlink($post_imagepath); 
                }
            } 


        }

            $post->save();
        

        //REDIRECTING
        return redirect('/home')->with('success','post created');

       // return 143;
/*

        $post= new Post;
        $post->title=$request->input('title');
        $post->content=$request->input('content');
        $post->images="hijfjlkf";

        $post->save();
        return Redirect('/home');*/
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
        $post= Post::find($id);
        return view('posts.edit')->with('post',$post);
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
        
        if($request->hasFile('images')){

            //TINKER
            $post = Post::find($id);
            $post->title = $request->input('title');
            $post->content = $request->input('content');

            $filepathArray=array();
            $cover_image=$request->file('images');
            foreach ($cover_image as $cover_images) {
                    
                //get file name with extension
                $filenameWithExt=$cover_images->getClientOriginalName();

                //get just file name
                $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);

                //get just ext
                $extension=$cover_images->getClientOriginalExtension();

                //filename to store in database
                $fileNameToStore=$filename.'_'.time().'.'.$extension;

                if(preg_match('/\s/', $fileNameToStore)){
                     $fileNameToStore= preg_replace('/\s/', 
                        '_',$fileNameToStore);
                }

                //upload image
                $path=$cover_images->storeAs('public/images/',$fileNameToStore);

                  $filepathArray[]=$fileNameToStore;
            }
            $post->images=implode(" ",$filepathArray);

            //DELETE IMAGE IF DATA IS MISSING IN DATABASE
            if(!isset($post->images,$post->title,$post->content)){
                foreach($filepathArray as $singlepath){
                    $post_imagepath=public_path().'\storage\images\\'.$singlepath;
                    unlink($post_imagepath); 
                }
            } 

            $post->save();

        }

        //REDIRECTING
        return redirect('/home')->with('success','post created');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =Post::find($id);


                $filepathArray=explode(" ",$post->images );
                foreach( $filepathArray as $singlefile){
                    $post_imagepath=public_path().'\storage\images\\'.$singlefile;
                    //$post_imagepath=public_path().'\storage\cover_images\\'.$post->cover_image;
                    unlink($post_imagepath); 
                   //unlink('/storage/cover_images/p.jpg');
                  // Storage::delete('/storage/cover_images/'.$post->cover_image);
                }

        $post->delete();
        return back();
    }
}
