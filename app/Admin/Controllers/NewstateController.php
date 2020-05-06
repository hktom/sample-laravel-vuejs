<?php

namespace App\Admin\Controllers;

use App\Newstate;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NewstateController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Etats Nouveaux';
    public $periods=["2021"=>"2021", "2022"=>"2022", "2023"=>"2023"];

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Newstate());

        $grid->column('id', __('Id'));
        //$grid->column('action_id', __('Action id'));
        $grid->column('action.label', "Action");
        $grid->column('created_at', __('Created at'));
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
        $show = new Show(Newstate::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('action_id', __('Action id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Newstate());
        //$form->display('id', 'ID');

        $this->_select($form)->creationRules('required|unique:newstates');

        $form->multipleSelect("actors", "Source de financement")->options('App\Actor'::all()->pluck('sigle', 'id'));

        $form->hasMany('fonct31', "Fonct31",  function (Form\NestedForm $form) {
            $form->select('label', 'Année')->options($this->periods);
            $form->decimal('amount', 'Somme')->default(0);
        });

        $form->hasMany('fonct36', "Fonct36",  function (Form\NestedForm $form) {
            $form->select('label', 'Année')->options($this->periods);
            $form->decimal('amount', 'Somme')->default(0);
        });

        $form->hasMany('invests', "Invest",  function (Form\NestedForm $form) {
            $form->select('label', 'Année')->options($this->periods);
            $form->decimal('amount', 'Somme')->default(0);
        });

        $form->hasMany('rhs', "RH",  function (Form\NestedForm $form) {
            $form->select('label', 'Année')->options($this->periods);
            $form->decimal('amount', 'Somme')->default(0);
        });

        $form->hasMany('others', "Autre",  function (Form\NestedForm $form) {
            $form->text('nature', 'Nature');
            $form->select('label', 'Année')->options($this->periods);
            $form->decimal('amount', 'Somme')->default(0);
        });

        return $form;
    }

    public function _select($form)
    {
        return $form->select('action_id', "Action")->options(function ($name) {
            $d = 'App\Action'::Where('id', $name)->orWhere("label", "like", "%$name%")->first();
            if ($d) {
                return [$d->id => $d->label];
            }
        })->ajax('/admin/api/actions');
    }
}
