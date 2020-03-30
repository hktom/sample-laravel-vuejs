<?php

namespace App\Admin\Controllers;

use App\User;
use App\Entreprise;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\PDO;
use Illuminate\Support\Facades\Request;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('entreprise.name', __('Entreprise'));
        $grid->column('created_at', __('Created at'));
        //$grid->column('email_verified_at', __('Email verified at'));
        //$grid->column('password', __('Password'));
        //$grid->column('remember_token', __('Remember token'));
        //$grid->column('updated_at', __('Updated at'));
        $grid->paginate(10);

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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('created_at', __('Created at'));
        //$show->field('updated_at', __('Updated at'));
        //$show->field('email_verified_at', __('Email verified at'));
        //$show->field('password', __('Password'));
        //$show->field('remember_token', __('Remember token'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User());

        $form->text('name', __('Name'))->rules("required|unique:users");
        $form->email('email', __('Email'));
        $form->select('entreprise_id')->options(function ($name) {
            $entreprise = 'App\Entreprise'::where('name', 'like', "%$name%")->first();
            if($entreprise)
            {
                return [$entreprise->id => $entreprise->name];
            }
        })->ajax('/admin/api/entreprises');

        return $form;
    }
}
