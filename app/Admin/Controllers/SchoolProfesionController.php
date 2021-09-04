<?php

namespace App\Admin\Controllers;

use App\Models\SchoolProfession;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

use App\Models\Professions;
use App\Models\Schools;

class SchoolProfesionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'SchoolProfession';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SchoolProfession());

        $grid->column('id', __('Id'));

        $grid->column('profession')->display(function () {
            return Professions::find($this->profession_id)->name;
        });

        $grid->column('School')->display(function () {
            return Schools::find($this->school_id)->name;
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
        $show = new Show(SchoolProfession::findOrFail($id));

        $show->field('id', __('Id'));

        $show->profession()->as(function () {
            return Professions::find($this->profession_id)->name;
        });

        $show->school()->as(function () {
            return Schools::find($this->school_id)->name;
        });

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new SchoolProfession());

        $form->select('profession_id', __('Profession'))
        ->options(Professions::all()->pluck('name', 'id'))
        ->rules('required');

        $form->select('school_id', __('School'))
        ->options(Schools::all()->pluck('name', 'id'))
        ->rules('required');

        return $form;
    }
}
