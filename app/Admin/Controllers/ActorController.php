<?php

namespace App\Admin\Controllers;

use App\Actor;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ActorController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Les acteurs';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Actor());

        $grid->column('id', __('Id'));
        //$grid->column('entreprise_id', __('Entreprise id'));
        $grid->column('sigle', __('Sigle'));
        $grid->column('name', __('Name'));
        $this->_boolean($grid, "is_a_person");
        $grid->column('created_at', __('Created at'));
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
        $show = new Show(Actor::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('entreprise_id', __('Entreprise id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('logo', __('Logo'));
        $show->field('description', __('Description'));
        $show->field('is_a_person', __('Is a person'));
        $show->field('email_verified_at', __('Email verified at'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Actor());

        $form->text('name', __('Nom'))->creationRules("required|unique:actors");
        $form->text('sigle', __('Sigle'))->creationRules("nullable|required|unique:actors");
        //$form->email('email', __('Email'));
        //$form->text('logo', __('Logo'));
        $form->text('description', __('Description'));
        $form->switch('is_a_person', __("Est-il une personne"));
        $this->_select($form);
        return $form;
        //"is_a_person", false
    }

    public function _select($form)
    {
        return   $form->select('entreprise_id', "Organisation")->options(function ($name) {
            $d = 'App\Actor'::where('name', 'like', "%$name%")->orWhere('id', $name)->first();
            if ($d) {
                return [$d->id => $d->name];
            }
        })->ajax('/admin/api/actors');
    }

    public function _boolean($grid, $b){

        return $grid->column("$b", __("Type"))->display(function ($v) {
            if($v==1)
            {
                return "<span>Agent</span>";
            }
            else
            {
                return "<span>Organisation</span>";
            }

        });
    }

}
