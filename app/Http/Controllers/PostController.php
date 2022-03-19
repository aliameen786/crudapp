<?php
  
namespace App\Http\Controllers;
  
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostCreate;
  
class PostController extends Controller
{
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
        //new post upload hogi //
        $post = Post::with('user')->latest()->get();
      
        return view('post.index',compact('post'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                //view jo he wo is page ko load krke yaha lkr araha he//

        return view('post.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //ye validation krha he//
    public function store(PostCreate $request)
    {
      
        $post = new Post();
        $post->title = $request->title; 
        $post->body = $request->body; 
        $post->user_id = auth()->id(); 
        $post->save(); 
       
        return redirect()->route('home')
                        ->with('success','Post created successfully.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $Post
     * @return \Illuminate\Http\Response
     */
      //ye fuction record diplay ke lye he//
    public function show(Post $post)
    {
        //view jo he wo is page ko load krke yaha lkr araha he//
        return view('post.show',compact('post'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      
         $post=Post::where('user_id', auth()->id())->findOrFail($id);
            return view('post.edit',compact('post'));

    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
           //update krygya to redirct hojyega post index par//
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
           
        $post=Post::findOrFail($id);
        $post->user_id=auth()->id();
        $post->title = $request->title; 
        $post->body = $request->body; 
        $post->save();
 
        // $post->update($request->all());
      
        return redirect()->route('posts.index')
                        ->with('success','Post updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //delete function //
         $post=Post::where('user_id', auth()->id())->findOrFail($id);
         $post->delete();
        return redirect()->route('posts.index')
                        ->with('success','Post deleted successfully');
    }
}