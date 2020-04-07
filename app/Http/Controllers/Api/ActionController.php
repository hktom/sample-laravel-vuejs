<?php

namespace App\Http\Controllers\Api;

use App\Action;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use Illuminate\Support\Facades\Validator;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProjectResource::collection('App\Project'::OrderBy('id', 'DESC')->paginate(20));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data=$this->validateForm($request->all());
        // try {
        //         $post=new Post();
        //         $post->title=$data['title'];
        //         $post->content=$data['content'];
        //         $post->folder_id=$data['folder_id'];
        //         $post->user_id=auth()->user()->id;
        //         //$post->user_id=1;

        //         if($post->save())
        //         {
        //             foreach ($data['themes'] as $variable) {

        //                 $postTheme=new PostTheme();
        //                 $postTheme->theme_id=$variable['value'];
        //                 $postTheme->post_id=$post->id;
        //                 $postTheme->save();

        //             }

        //         }

        //     return response()->json(['satus'=>200])->setStatusCode(200);

        // } catch (\Throwable $th) {
        //     return response()->json([$th->getMessage()])->setStatusCode(500);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Action  $action
     * @return \Illuminate\Http\Response
     */
    public function show(Action $action)
    {
        //return PostResource::collection(Post::where('id', $id)->get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Action  $action
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Action $action)
    {
    //     $data=$this->validateForm($request->all());

    //     try {
    //         $post=Post::find($id);
    //         $post->title=$data['title'];
    //         $post->content=$data['content'];
    //         $post->folder_id=$data['folder_id'];
    //         $post->user_id=auth()->user()->id;
    //         //$post->themes->delete();
    //         // $post->themes()->detach();

    //         if($post->save())
    //         {
    //             PostTheme::where('post_id', $id)->delete();
    //             foreach ($data['themes'] as $variable) {

    //                 $postTheme=new PostTheme();
    //                     $postTheme->theme_id=$variable['value'];
    //                     $postTheme->post_id=$post->id;
    //                     $postTheme->save();


    //                 }

    //         }

    //     return response()->json(['satus'=>200])->setStatusCode(200);

    // } catch (\Throwable $th) {
    //     return response()->json([$th->getMessage()])->setStatusCode(500);
    // }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Action  $action
     * @return \Illuminate\Http\Response
     */
    public function destroy(Action $action)
    {
        // try {
        //     PostTheme::where('post_id', $id)->delete();
        //     Post::where('id', $id)->delete();
        //     return PostResource::collection(Post::OrderBy('id', 'DESC')->paginate(10));

        // } catch (\Throwable $th) {

        //     return response()->json(['data'=>$th->getMessage()])->setStatusCode(500);
        // }

    }

    public function validateForm(array $data)
    {
        return Validator::make($data, [
            "title" => "required|min:6|string",
            "content" => "nullable|min:6|string",
            "folder_id" => "required|integer",
            "themes" => "required|array",
            "image" => "nullable|min:6|string",

        ])->validate();
    }
}
