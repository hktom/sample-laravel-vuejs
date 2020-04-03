<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Illuminate\Http\Request;

class ApiController extends AdminController
{
    public function entreprises(Request $request)
    {
        $q = $request->get('q');
        return 'App\Entreprise'::where('name', 'like', "%$q%")->orWhere('id', $q)->paginate(null, ['id', 'name as text']);
    }

    public function projects(Request $request)
    {
        $q = $request->get('q');
        return 'App\Project'::where('name', 'like', "%$q%")->orWhere('id', $q)->paginate(null, ['id', 'name as text']);
    }

    public function states(Request $request)
    {
        $q = $request->get('q');
        return 'App\State'::where('name', 'like', "%$q%")->orWhere('id', $q)->paginate(null, ['id', 'name as text']);
    }

    public function poncs(Request $request)
    {
        $q = $request->get('q');
        return 'App\Ponc'::where('content', 'like', "%$q%")->orWhere('id', $q)->paginate(null, ['id', 'content as text']);
    }

    public function comments(Request $request)
    {
        $q = $request->get('q');
        return 'App\Comment'::where('content', 'like', "%$q%")->orWhere('id', $q)->paginate(null, ['id', 'content as text']);
    }

    public function actions(Request $request)
    {
        $q = $request->get('q');
        return 'App\Action'::where('name', 'like', "%$q%")->orWhere('id', $q)->paginate(null, ['id', 'name as text']);
    }


}
