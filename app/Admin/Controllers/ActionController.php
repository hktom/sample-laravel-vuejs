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
    protected $title = 'App\Action';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Action());

        $grid->column('id', __('Id'));
        $grid->column('document_num', __('Document num'));
        $grid->column('label', __('Label'));
        $grid->column('image', __('Image'));
        $grid->column('description', __('Description'));
        $grid->column('indicator', __('Indicator'));
        $grid->column('R', __('R'));
        $grid->column('A', __('A'));
        $grid->column('E', __('E'));
        $grid->column('T', __('T'));
        //$grid->column('total_cout_etat', __('Total cout etat'));
        //$grid->column('cout_externe', __('Cout externe'));
        //$grid->column('total_couts', __('Total couts'));
        //$grid->column('project_id', __('Project id'));
        //$grid->column('comment_id', __('Comment id'));
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

        $form->text('document_num', __('Document num'));
        $form->text('label', __('Label'));
        //$form->image('image', __('Image'));
        $form->textarea('description', __('Description'));
        $form->text('indicator', __('Indicator'));
        $form->switch('R', __('R'));
        $form->switch('A', __('A'));
        $form->switch('E', __('E'));
        $form->switch('T', __('T'));
        $form->text('total_cout_etat', __('Total cout etat'));
        $form->text('cout_externe', __('Cout externe'));
        $form->text('total_couts', __('Total couts'));
        $form->number('project_id', __('Project id'));
        $form->number('comment_id', __('Comment id'));

        return $form;
    }
}
