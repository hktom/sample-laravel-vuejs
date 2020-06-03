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
        $search=$data['search']['search'];


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
            ->where(function($subQuery) use ($actor_id){

                $subQuery->orWhereHas('authors', function ( $query ) use ($actor_id){
                    $actor_id > 0 ? $query->where('actor_id', $actor_id):
                    $query->where('actor_id', '!=', 0);
                })
                ->orWhereHas('collaborators', function ($query) use ($actor_id) {
                    $actor_id > 0 ? $query->where('actor_id', $actor_id):
                    $query->where('actor_id', '!=', 0);
                })
                ->orWhereHas('responsables', function ($query) use ($actor_id) {
                    $actor_id > 0 ? $query->where('actor_id', $actor_id):
                    $query->where('actor_id', '!=', 0);
                })
                ->orWhereHas('realisators', function ($query) use ($actor_id) {
                    $actor_id > 0 ? $query->where('actor_id', $actor_id):
                    $query->where('actor_id', '!=', 0);
                });
            })
            ->where(function ($subQuery) use ($search) {
                $search!=null ? $subQuery->where('label', 'like', "%$search%") :
                $subQuery->where('label', '!=', null);
            })
            ->paginate(10);

        return ActionResource::collection($action);
    }

    public function index_all()
    {
        return ActionResource::collection('App\Action'::OrderBy('project_id', 'ASC')->get());
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

}
