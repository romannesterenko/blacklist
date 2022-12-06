<?php

namespace App\Admin\Controllers;

use App\Models\BlackList;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BlackListController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'BlackList';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BlackList());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('last_name', __('Last name'));
        $grid->column('phone', __('Phone'));
        $grid->column('post_doc', __('Post doc'));
        $grid->column('coment', __('Coment'));
        $grid->column('post', __('Post'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(BlackList::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('last_name', __('Last name'));
        $show->field('phone', __('Phone'));
        $show->field('post_doc', __('Post doc'));
        $show->field('coment', __('Coment'));
        $show->field('post', __('Post'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new BlackList());

        $form->text('name', __('Name'));
        $form->text('last_name', __('Last name'));
        $form->mobile('phone', __('Phone'));
        $form->text('post_doc', __('Post doc'));
        $form->textarea('coment', __('Coment'));
        $form->text('post', __('Post'));

        return $form;
    }
}
