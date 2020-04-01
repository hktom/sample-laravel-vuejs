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

        $this->_select("project", $form);
        $form->text('code', __('code'));
        $form->text('label', __('Label'));

        $form->multipleSelect("authors", "Auteur")->options('App\User'::all()->pluck('name', 'id'));
        $form->multipleSelect("collaborators", "Collaborateurs")->options('App\User'::all()->pluck('name', 'id'));

        $form->multipleSelect("realisators", "Realisateurs")->options('App\Entreprise'::all()->pluck('name', 'id'));

        $form->multipleSelect("Responsables", "Responsables")->options('App\Entreprise'::all()->pluck('name', 'id'));

        //$form->image('image', __('Image'));
        $form->ckeditor('description', __('Description'));
        $form->text('indicator', __('Indicator'));
        $form->switch('R', __('R'));
        $form->switch('A', __('A'));
        $form->switch('E', __('E'));
        $form->switch('T', __('T'));
        $this->_select("state", $form);
        $this->_select("type", $form);
        $this->_select("comment", $form);
        $form->divider();
        $form->text('total_cout_etat', __('Total cout etat'));
        $form->text('cout_externe', __('Cout externe'));
        $form->text('total_couts', __('Total couts'));

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
                $d = 'App\Project'::where('name', 'like', "%$name%")->first();
                if ($d) {
                    return [$d->id => $d->name];
                }
            })->ajax('/admin/api/projects');
        }

        if ($select == "type") {


            return $form->select('ponc_id', "Type Action")->options(function ($name) {
                $d = 'App\Ponc'::where('content', 'like', "%$name%")->first();
                if ($d) {
                    return [$d->id => $d->content];
                }
            })->ajax('/admin/api/poncs');
        }

        if ($select == "state") {
            return          $form->select('state_id', "Statut Action")->options(function ($name) {
                $d = 'App\State'::where('name', 'like', "%$name%")->first();
                if ($d) {
                    return [$d->id => $d->name];
                }
            })->ajax('/admin/api/states');
        }

        if ($select == "comment") {
            return $form->select('comment_id', "Commentaire")->options(function ($name) {
                $d = 'App\Comment'::where('content', 'like', "%$name%")->first();
                if ($d) {
                    return [$d->id => $d->content];
                }
            })->ajax('/admin/api/comments');
        }
    }
}
