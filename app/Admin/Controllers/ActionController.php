<?php

namespace App\Admin\Controllers;

use App\Action;
use Encore\Admin\Controllers\AdminController;
use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Action';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */

    public function index(){
        return Admin::content(function (Content $content) {
            $content->header('Actions');
            $content->description('liste des actions');
            $content->breadcrumb(
                ['text' => 'Dashboard', 'url' => '/'],
                ['text' => 'Actions', 'url' => '/admin/actions'],
                ['text' => 'Etats Acquis', 'url' => '/admin/acquiredstates'],
                ['text' => 'Etats Nouveaux', 'url' => '/admin/newstates']
            );
            $content->body($this->grid());
        });
    }

    public function show($id){
        return Admin::content(function (Content $content) use ($id) {
            $action=Action::findOrFail($id);
            $content->header('Actions '.$action["label"]);
            $content->description('Action Details');
            $content->breadcrumb(
                ['text' => 'Dashboard', 'url' => '/'],
                ['text' => 'Actions', 'url' => '/admin/actions'],
                ['text' => 'Etats Acquis', 'url' => '/admin/acquiredstates'],
                ['text' => 'Etats Nouveaux', 'url' => '/admin/newstates']
            );
            //id new state
            $state_id=$action["newstates"][0]->id;
            $newstates='App\NewState'::findOrFail($state_id);

            $content->header('Action Details');
            $content->description("Detail budgetaire de l' action");
            $content->view('admin.action.index', ['data' => $action, 'state'=>$newstates]);
        });
    }

    public function create(){
        return Admin::content(function (Content $content){
            $content->header('Nouvelle Action');
            $content->description('.');
            $content->breadcrumb(
                ['text' => 'Dashboard', 'url' => '/'],
                ['text' => 'Actions', 'url' => '/admin/actions'],
                ['text' => 'Etats Acquis', 'url' => '/admin/acquiredstates'],
                ['text' => 'Etats Nouveaux', 'url' => '/admin/newstates']
            );
            $content->body($this->form(0));
        });
    }

    public function edit($id){
        return Admin::content(function (Content $content) use ($id){
            $content->header('Modifier Action');
            $content->description('.');
            $content->breadcrumb(
                ['text' => 'Dashboard', 'url' => '/'],
                ['text' => 'Actions', 'url' => '/admin/actions'],
                ['text' => 'Etats Acquis', 'url' => '/admin/acquiredstates'],
                ['text' => 'Etats Nouveaux', 'url' => '/admin/newstates']
            );
            $content->body($this->form('edit')->edit($id));
        });
    }


    public function update($id){
        return $this->form('edit')->update($id);
    }

    public function store(){
        return $this->form('edit')->store();
    }

    public function destroy($id){
        return $this->form('edit')->destroy($id);

    }

    public function form($id)
    {
        $action = $id==0?new Action():Action::findOrFail($id);
        $form = new Form($action);
        $form->text('orientation', __('Orientation'));
        $this->_select("project", $form)->creationRules('required');
        $form->text('code', __('code'))->creationRules('required|unique:actions');
        $form->text('label', __('Label'))->creationRules('required|unique:actions');

        $form->multipleSelect("authors", "Auteur")->options('App\Actor'::all()->pluck('name', 'id'));
        $form->multipleSelect("collaborators", "Collaborateurs")->options('App\Actor'::all()->pluck('name', 'id'));


        $form->ckeditor('short_description', __('Apercu'));
        $form->ckeditor('description', __('Description'));
        $form->ckeditor('indicator', __('Indicator'));

        $form->multipleSelect("types", "Type")->options('App\Type'::all()->pluck('name', 'id'));
        $form->multipleSelect("states", "Status")->options('App\State'::all()->pluck('name', 'id'));
        $form->multipleSelect("echelles", "Echelles")->options('App\Echelle'::all()->pluck('name', 'id'));

        $form->divider();
        $form->hasMany('calendars', "Calendrier",  function (Form\NestedForm $form) {
            $form->text('year_2020', '2020')->creationRules("nullable");
            $form->text('year_2021', '2021')->creationRules("nullable");
            $form->text('year_2022', '2022')->creationRules("nullable");
            $form->text('year_2023', '2023')->creationRules("nullable");
        });

        $form->divider();

        $form->multipleSelect("responsables", "Responsables")->options('App\Actor'::all()->pluck('name', 'id'));
        $form->multipleSelect("realisators", "Realisateurs")->options('App\Actor'::all()->pluck('name', 'id'));

        $form->multipleSelect("projects", "Champs liés")->options('App\Project'::all()->pluck('ca_principal', 'id'));

        $form->multipleSelect("actions", "Actions liées")->options('App\Action'::all()->pluck('code', 'id'));
        $form->divider();
        $form->decimal('cout_externe', __('Cout Externe'));
        $form->divider();
        $form->switch('R', __('R'));
        $form->switch('A', __('A'));
        $form->switch('E', __('E'));
        $form->switch('T', __('T'));
        $this->_select("type", $form);
        $this->_select("comment", $form);
        $form->divider();
        $form->image("image")->move('public/storage/')->uniqueName();

        $form->divider();
        $form->hasMany('files', "Fichier",  function (Form\NestedForm $form) {
            $form->text('name', 'Titre')->creationRules("nullable|unique:files");
            $form->radio('type', 'Type')->options(['pdf' => 'PDF', 'word'=> 'Word'])->default('pdf');
            $form->file("location" ,"Location")->move('public/storage/')->uniqueName();
        });

        return $form;
    }

    public function _select($select, $form)
    {
        if ($select == "project") {
            return   $form->select('project_id', "Project")->options(function ($name) {
                $d = 'App\Project'::where('name', 'like', "%$name%")->orWhere('id', $name)->first();
                if ($d) {
                    return [$d->id => $d->name];
                }
            })->ajax('/admin/api/projects');
        }

        if ($select == "type") {


            return $form->select('ponc_id', "Type Action")->options(function ($name) {
                $d = 'App\Ponc'::where('content', 'like', "%$name%")->orWhere('id', $name)->first();
                if ($d) {
                    return [$d->id => $d->content];
                }
            })->ajax('/admin/api/poncs');
        }

        if ($select == "state") {
            return          $form->select('state_id', "Statut Action")->options(function ($name) {
                $d = 'App\State'::where('name', 'like', "%$name%")->orWhere('id', $name)->first();
                if ($d) {
                    return [$d->id => $d->name];
                }
            })->ajax('/admin/api/states');
        }

        if ($select == "comment") {
            return $form->select('comment_id', "Commentaire")->options(function ($name) {
                $d = 'App\Comment'::where('content', 'like', "%$name%")->orWhere('id', $name)->first();
                if ($d) {
                    return [$d->id => $d->content];
                }
            })->ajax('/admin/api/comments');
        }

        if ($select == "organisation") {
            return   $form->select('entreprise_id', "Organisation")->options(function ($name) {
                $d = 'App\Actor'::where('name', 'like', "%$name%")->orWhere('id', $name)->first();
                if ($d) {
                    return [$d->id => $d->name];
                }
            })->ajax('/admin/api/actors');
        }
    }

    public function grid()
    {
        $grid = new Grid(new Action());

        $grid->filter(function($filter){

            // Remove the default id filter
            $filter->disableIdFilter();

            // Add a column filter
            $filter->like('label', 'Label');


        });

        $grid->column('code', __('Code'));
        $grid->column('label', __('Label'));
        $this->_boolean($grid, "R");
        $this->_boolean($grid, "A");
        $this->_boolean($grid, "E");
        $this->_boolean($grid, "T");
        $grid->column("authors", "Elaboré par")->display(function ($authors) {

            $authors = array_map(function ($authors) {
                return "<span class=''>{$authors['name']}</span>";
            }, $authors);

            return join('&nbsp;', $authors);
        });

        $grid->column('created_at', __('Created at'));
        return $grid;
    }

    public function _boolean($grid, $b)
    {

        return $grid->column("$b", __("$b"))->display(function ($v) {
            if ($v == 1) {
                return "<span style='color:blue'>X</span>";
            } else {
                return "<span style='color:blue'></span>";
            }
        });
    }
}
