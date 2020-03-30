<?php

namespace App\Admin\Controllers;

use App\Project;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProjectController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Project';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Project());

        $grid->column('id', __('Id'));
        $grid->column('ca_principal', __('Code'));
        $grid->column('name', __('Name'));
        $grid->column('created_at', __('Date création'));
        //$grid->column('image', __('Image'));
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
        $show = new Show(Project::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('ca_principal', __('Code'));
        $show->field('name', __('Name'));
        $show->field('created_at', __('Date création'));
        //$show->field('image', __('Image'));
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
        $form = new Form(new Project());
        $form->setTitle("Nouveau")->rules('required');
        $form->text('ca_principal', __('Code'))->rules('required|unique:projects');
        $form->text('name', __('Name'));
        //$form->image('image', __('Image'));

        return $form;
    }
}
