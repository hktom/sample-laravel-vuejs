<?php

namespace App\Admin\Controllers;

use App\Entreprise;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Http\Request;

class EntrepriseController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Organisations';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Entreprise());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'))->filter();
        $grid->column('email', __('Email'));
        $grid->column('created_at', __('Created at'));
        //$grid->column('image', __('Image'));
        //$grid->column('remember_token', __('Remember token'));
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
        $show = new Show(Entreprise::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('created_at', __('Created at'));
        //$show->field('image', __('Image'));
        //$show->field('remember_token', __('Remember token'));
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
        $form = new Form(new Entreprise());

        $form->text('name', __('Name'))->rules('required|unique:entreprises');
        $form->email('email', __('Email'));
        //$form->image('image', __('Image'));
        //$form->text('remember_token', __('Remember token'));

        return $form;
    }
}
