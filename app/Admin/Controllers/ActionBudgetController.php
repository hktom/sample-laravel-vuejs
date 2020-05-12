<?php

namespace App\Admin\Controllers;

use App\Action;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use App\Http\Controllers\Controller;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ActionBudgetController extends Controller
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

    public function index(){
        return Admin::content(function (Content $content) {
            $content->header('Actions Budgetaires');
            $content->description('liste des actions');
            $content->breadcrumb(
                ['text' => 'Dashboard', 'url' => '/'],
                ['text' => 'Actions', 'url' => '/admin/action'],
                ['text' => 'Budgets', 'url' => '/admin/budget']
            );

            $grid = new Grid(new Action());
            $grid->id("Id")->sortable();
            $grid->label("Titre");
            $grid->acquiredstates("Total Etat Acquis")->display(function ($items) {

                $items = array_map(function ($item) {
                    //return "{$item['fonction31']}";
                    $total=$item['fonction31']+$item['fonction36']+$item['rpt_20_23']+$item['ivest'];
                    return "<b>$total</b>";
                }, $items);

                return join('&nbsp;', $items);
            });

            $grid->disableCreateButton();
            $grid->disableExport();
            $content->body($grid);
        });
    }

    public function show($id){
        return Admin::content(function (Content $content) use ($id) {
            $action=Action::findOrFail($id);
            //id new state
            $state_id=$action["newstates"][0]->id;
            $newstates='App\NewState'::findOrFail($state_id);

            $content->header('Action Details');
            $content->description("Detail budgetaire de l' action");
            $content->view('admin.action.index', ['data' => $action, 'state'=>$newstates]);

            // $content->body(Admin::show(Action::findOrFail($id), function (Show $show) {

            //     $show->label('Title');
            //     $show->row(function(Row $row) {
            //         $row->column('4', 'foo');
            //         $row->column('4', 'bar');
            //         $row->column('4', 'baz');
            //     });
            //     //$show->id('ID');
            //     // $show->content();
            //     // $show->rate();
            //     // $show->created_at();
            //     // $show->updated_at();
            //     // $show->release_at();

            // }));
        });
    }

    public $table_array=<<<EOF
    <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">Source</th>
      <th scope="col">Fonct31</th>
      <th scope="col">Fonct36</th>
      <th scope="col">ivest</th>
      <th scope="col">rpt_20_23</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th></th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
EOF;

}
