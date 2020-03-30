<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use App\Project;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;

class HomeController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {
            $grid = new Grid(new Project);
            $grid->id("Id")->sortable();
            $grid->name("Nom");
            $grid->ca_principal("Code");
            $grid->created_at("Date de création")->sortable();
            $grid->disableCreateButton();
            $grid->disableExport();

            $content->header('Dashboard');
            $content->description('liste des projects actuels');
            $content->breadcrumb(
                ['text' => 'Dashboard', 'url' => '/'],
                ['text' => 'Actions', 'url' => '/admin/action'],
                ['text' => 'Budgets', 'url' => '/admin/budget']
            );

            $content->body($grid);
        });
    }

    public function create()
    {
        return Admin::content(function (Content $content) {
            $content->description('Nouveau projet');
            $content->row(function (Row $row) {
                $row->column(2, function(Column $column){

                });

                $row->column(8, function (Column $column) {
                    $form = new Form(new Project);
                    $form->display('id', 'ID');
                    $form->text('ca_principal', "Code du projet")->rules('required');
                    $form->text('name', "Nom du projet")->rules('required');;
                    $form->display('created_at', 'Created time');
                    $form->display('updated_at', 'Updated time');

                    $form->footer(function ($footer) {
                        $footer->disableReset();
                        $footer->disableViewCheck();
                        $footer->disableEditingCheck();
                        //$footer->disableSubmit();
                        $footer->disableCreatingCheck();

                    });
                    $column->append($form);
                });
            });
        });
    }
}

// return $content
//     ->title('Dashboard')
//     ->description('Liste des projects')
//     ->row(Dashboard::title())
//     ->row(function (Row $row) {

//         $row->column(4, function (Column $column) {
//             $column->append(Dashboard::environment());
//         });
//     });
