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
        $show->textarea('vision', __('Vision'));
        $show->ckeditor('intro', __('Introduction'));
        $show->ckeditor('context', __('Contexte'));
        $show->textarea('to_know', __('Pour connaitre'));
        $show->textarea('to_enrich', __('Pour enrichir'));
        $show->textarea('to_value', __('Pour valoriser'));
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
        $form->setTitle("Nouveau");
        $form->text('ca_principal', __('Code'))->creationRules("required|unique:projects");
        $form->text('name', __('Name'))->creationRules("required|unique:projects");
        $form->textarea('vision', __('Vision'));
        $form->ckeditor('intro', __('Introduction'));
        $form->ckeditor('context', __('Contexte'));
        $form->textarea('to_know', __('Pour connaitre'));
        $form->textarea('to_enrich', __('Pour enrichir'));
        $form->textarea('to_value', __('Pour valoriser'));
        $form->multipleSelect("actors", "Contributeurs")->options('App\Actor'::all()->pluck('name', 'id'));

        $form->multipleSelect("news", "Nouveautés")->options('App\Action'::all()->pluck('code', 'id'));

        $form->multipleSelect("purchases", "Poursuivre & renforcer les actions existantes")->options('App\Action'::all()->pluck('code', 'id'));

        $form->divider();
        $form->image("image")->move('public/storage/')->uniqueName();
        $form->image("icon")->move('public/storage/')->uniqueName();
        $form->color('color', __('Coleur'))->default('#ccc');

        return $form;
    }
}
