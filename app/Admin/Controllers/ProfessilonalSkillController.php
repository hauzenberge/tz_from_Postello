<?php

namespace App\Admin\Controllers;

use App\Models\ProfessionSkill;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

use App\Models\Professions;
use App\Models\Skills;

class ProfessilonalSkillController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ProfessionSkill';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProfessionSkill());

        $grid->column('id', __('Id'));
        
        $grid->column('profession')->display(function () {
            return Professions::find($this->profession_id)->name;
        });

        $grid->column('skill')->display(function () {
            return Skills::find($this->skill_id)->name;
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
        $show = new Show(ProfessionSkill::findOrFail($id));

        $show->field('id', __('Id'));
        
        $show->profession()->as(function () {
            return Professions::find($this->profession_id)->name;
        });

        $show->skill()->as(function () {
            return Skills::find($this->skill_id)->name;
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
        $form = new Form(new ProfessionSkill());

        $form->select('profession_id', __('Profession'))
        ->options(Professions::all()->pluck('name', 'id'))
        ->rules('required');

        $form->select('skill_id', __('Skill'))
        ->options(Skills::all()->pluck('name', 'id'))
        ->rules('required');

        return $form;
    }
}
