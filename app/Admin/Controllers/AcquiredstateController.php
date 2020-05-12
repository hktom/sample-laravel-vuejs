<?php

namespace App\Admin\Controllers;

use App\Acquiredstate;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AcquiredstateController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Etats Acquis';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Acquiredstate());

        $grid->column('id', __('Id'));
        $grid->column('action.label', "Action");
        $grid->column('fonction31', __('Fonct 31'))->display(function ($fonction31) {
            return $fonction31>0?$fonction31:"0";
        });
        $grid->column('fonction36', __('Fonct 36'))->display(function ($fonction36) {
            return $fonction36>0?$fonction36:"0";
        });
        $grid->column('invest', __('Invest'))->display(function ($invest) {
            return $invest>0?$invest:"0";
        });
        $grid->column('rpt_20_23', __('RPT 20 23'))->display(function ($rpt_20_23) {
            return $rpt_20_23>0?$rpt_20_23:"0";
        });
        //$grid->column('created_at', __('Created at'));

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
        $show = new Show(Acquiredstate::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('sourcefinancing', __('Sourcefinancing'));
        $show->field('fonction31', __('Fonction31'));
        $show->field('fonction36', __('Fonction36'));
        $show->field('ivest', __('Ivest'));
        $show->field('rpt_20_23', __('Rpt 20 23'));
        $show->field('total', __('Total'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('action_id', __('Action id'));
        $show->field('actor_id', __('Actor id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Acquiredstate());
        $this->_select($form)->creationRules('required|unique:acquiredstates');
        $form->multipleSelect("actors", "Source de financement")->options('App\Actor'::all()->pluck('sigle', 'id'));
        //$form->number('action_id', __('Action id'));

        $form->decimal('fonction31', __('Fonction31'));
        $form->decimal('fonction36', __('Fonction36'));
        $form->decimal('ivest', __('Ivest'));
        $form->decimal('rpt_20_23', __('Rpt 20 23'));
        //$form->decimal('total', __('Total'));
        //$form->number('actor_id', __('Actor id'));
        //$form->number('sourcefinancing', __('Sourcefinancing'));

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
