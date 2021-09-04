<?php

namespace App\Admin\Controllers;

use App\Models\Professions;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProfessionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Professions';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Professions());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        
        $grid->tools(function ($tools) {
            $tools->batch(function ($batch) {
                $batch->disableDelete();
            });
        });

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
        $show = new Show(Professions::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        
        $show->panel()
            ->tools(function ($tools) {
                $tools->disableDelete();
            });;

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Professions());

        $form->text('name', __('Name'));

        $form->tools(function (Form\Tools $tools) {
            // Disable `Delete` btn.
            $tools->disableDelete();
        });

        return $form;
    }
}
