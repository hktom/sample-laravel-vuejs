<?php

namespace App\Admin\Controllers;

use App\State;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class StateController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = "Etat de l'action";

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new State());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        //$grid->column('created_at', __('Created at'));
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
        $show = new Show(State::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'))->rules("required|unique");
        //$show->field('created_at', __('Created at'));
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
        $form = new Form(new State());

        $form->text('name', __('Name'));

        return $form;
    }
}
