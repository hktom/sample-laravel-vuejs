<?php

namespace App\Admin\Controllers;

use App\Action;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ActionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Action';
    protected $description = [
        //    'index'  => 'Actions',
        //        'show'   => 'Show',
        //        'edit'   => 'Edit',
        'create' => 'nouveau',
    ];


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Action());

        $grid->column('code', __('Code'));
        $grid->column('label', __('Label'));
        $grid->column('state.name', __('Status'));
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

         //$grid->column('id', __('Id'));
        //$grid->column('image', __('Image'));
        //$grid->column('indicator', __('Indicator'));
        //$grid->column('description', __('Description'));
        //$grid->column('total_cout_etat', __('Total cout etat'));
        //$grid->column('cout_externe', __('Cout externe'));
        //$grid->column('total_couts', __('Total couts'));
        //$grid->column('project_id', __('Project id'));
        //$grid->column('comment_id', __('Comment id'));
        //$grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Action::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('document_num', __('Document num'));
        $show->field('label', __('Label'));
        $show->field('image', __('Image'));
        $show->field('description', __('Description'));
        $show->field('indicator', __('Indicator'));
        $show->field('R', __('R'));
        $show->field('A', __('A'));
        $show->field('E', __('E'));
        $show->field('T', __('T'));
        $show->field('total_cout_etat', __('Total cout etat'));
        $show->field('cout_externe', __('Cout externe'));
        $show->field('total_couts', __('Total couts'));
        //$show->field('project_id', __('Project id'));
        //$show->field('comment_id', __('Comment id'));
        $show->field('created_at', __('Created at'));
        //$show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Action());

        $this->_select("project", $form)->creationRules('required');
        $form->text('code', __('code'))->creationRules('required|unique:actions');
        $form->text('label', __('Label'))->creationRules('required|unique:actions');

        $form->multipleSelect("authors", "Auteur")->options('App\Actor'::all()->pluck('name', 'id'));
        $form->multipleSelect("collaborators", "Collaborateurs")->options('App\Actor'::all()->pluck('name', 'id'));

        //$form->image('image', __('Image'));
        $form->textarea('short_description', __('Apercu'));
        $form->ckeditor('description', __('Description'));
        $form->textarea('indicator', __('Indicator'));

        $form->multipleSelect("types", "Type")->options('App\Type'::all()->pluck('name', 'id'));
        $form->multipleSelect("states", "Status")->options('App\State'::all()->pluck('name', 'id'));
        $form->multipleSelect("echelles", "Echelles")->options('App\Echelle'::all()->pluck('name', 'id'));

        // $form->hasMany('caracteristics', "Caracteristiques",  function (Form\NestedForm $form) {
        //     $form->text('type')->creationRules("nullable");
        //     $form->text('state', 'status')->creationRules("nullable");
        //     $form->text('echelle')->creationRules("nullable");
        // });

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

        // $form->hasMany('implementations', "Mise en oeuvre",  function (Form\NestedForm $form) {
        //     $form->text('responsable')->creationRules("nullable");
        //     $form->text('realisator', 'Realisateur')->creationRules("nullable");
        // });

        $form->multipleSelect("projects", "Champs liés")->options('App\Project'::all()->pluck('name', 'id'));

        $form->multipleSelect("actions", "Actions liées")->options('App\Action'::all()->pluck('label', 'id'));
        $form->divider();

        $form->switch('R', __('R'));
        $form->switch('A', __('A'));
        $form->switch('E', __('E'));
        $form->switch('T', __('T'));
        $this->_select("type", $form);
        $this->_select("comment", $form);
        // $this->_select("state", $form);
        // $form->divider();
        // $form->text('total_cout_etat', __('Total cout etat'));
        // $form->text('cout_externe', __('Cout externe'));
        // $form->text('total_couts', __('Total couts'));
        $form->divider();
        $form->image("image")->move('public/storage/')->uniqueName();

        return $form;
    }

    public function _boolean($grid, $b){

        return $grid->column("$b", __("$b"))->display(function ($v) {
            if($v==1)
            {
                return "<span style='color:blue'>X</span>";
            }
            else
            {
                return "<span style='color:blue'></span>";
            }

        });
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

        if($select=="organisation"){
            return   $form->select('entreprise_id', "Organisation")->options(function ($name) {
                $d = 'App\Actor'::where('name', 'like', "%$name%")->orWhere('id', $name)->first();
                if ($d) {
                    return [$d->id => $d->name];
                }
            })->ajax('/admin/api/actors');
        }
    }
}
