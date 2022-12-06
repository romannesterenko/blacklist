<?php

namespace App\Admin\Controllers;

use App\Models\Check;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CheckController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Check';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Check());
        $grid->model()->orderBy('id', 'desc');
        $grid->paginate(10);
        $grid->disableCreateButton();

        $grid->filter(function($filter){

            // Remove the default id filter
            $filter->disableIdFilter();

            // Add a column filter
            $filter->like('name', 'Имя/Фамилия');
            $filter->like('phone', 'Телефон');
            $filter->like('ip', 'IP');

        });


        $grid->id('ID')->sortable();
        $grid->column('name', __('Имя/Фамилия'));
        $grid->column('phone', __('Телефон'));
        $grid->column('ip', __('Ip пользователя'))->display(function ($ip){
            return "<a target='_blank' href='https://whatismyipaddress.com/ip/$ip'>$ip</a>";
        });
        $grid->column('created_at', __('Создана'))->display(function ($created_at){
            return date('d.m.Y H:i:s', strtotime($created_at));
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
        $show = new Show(Check::findOrFail($id));

        $show->field('name', __('Имя/Фамилия'));
        $show->field('phone', __('Телефон'));
        $show->field('created_at', __('Создана'));
        $show->field('ip', __('Ip пользователя'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Check());

        $form->text('name', __('Name'));
        $form->mobile('phone', __('Phone'));
        $form->ip('ip', __('Ip'));

        return $form;
    }
}
