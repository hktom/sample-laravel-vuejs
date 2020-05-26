<?php

namespace App\Http\Controllers\Api;

use App\Action;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ActionResource;
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
        return ActionResource::collection('App\Action'::OrderBy('project_id', 'ASC')->paginate(10));
    }


    // action search by word
    public function search_action(Request $request){
        $data=$request->all();
        $search=$data['search']['search'];
        $action=Action::where('label', 'like', "%$search%")->orWhere('short_description', 'like', "%$search%")->paginate(10);

        return ActionResource::collection($action);
    }

    // action filter by index
    public function index_by(Request $request)
    {

        $data = $request->all();
        $echelle_id = $data['echelle']['code'];
        $type_id = $data['type']['code'];
        $status_id = $data['status']['code'];
        $project_id = $data['project']['code'];
        $actor_id = $data['actor']['code'];

        $action = Action::whereHas('echelles', function ($query) use ($echelle_id) {
            $echelle_id > 0 ? $query->where('echelle_id', $echelle_id) : $query->where('echelle_id', '!=', 0);
        })
            ->whereHas('states', function ($query) use ($status_id) {
                $status_id > 0 ? $query->where('state_id', $status_id) :
                    $query->where('state_id', '!=', 0);
            })
            ->whereHas('types', function ($query) use ($type_id) {
                $type_id > 0 ? $query->where('type_id', $type_id) :
                    $query->where('type_id', '!=', 0);
            })
            ->whereHas('project', function ($query) use ($project_id) {
                $project_id > 0 ? $query->where('project_id', $project_id) :
                    $query->where('project_id', '!=', 0);
            })
            ->whereHas('authors', function ($query) use ($actor_id) {
                $actor_id > 0 ? $query->where('actor_id', $actor_id) :
                    $query->where('actor_id', '!=', 0);
            })->paginate(10);
            // ->orWhereHas('collaborators', function ($query) use ($actor_id) {
            //     $actor_id > 0 ? $query->where('actor_id', $actor_id) :
            //         $query->where('actor_id', '!=', 0);
            // })
            // ->orWhereHas('responsables', function ($query) use ($actor_id) {
            //     $actor_id > 0 ? $query->where('actor_id', $actor_id) :
            //         $query->where('actor_id', '!=', 0);
            // })
            // ->orWhereHas('realisators', function ($query) use ($actor_id) {
            //     $actor_id > 0 ? $query->where('actor_id', $actor_id) :
            //         $query->where('actor_id', '!=', 0);
            // })->paginate(10);

        return ActionResource::collection($action);
    }

    public function index_all()
    {
        return ActionResource::collection('App\Action'::OrderBy('project_id', 'ASC')->get());
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
    public function show($id)
    {
        return ActionResource::collection('App\Action'::where('slug', $id)->get());
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
