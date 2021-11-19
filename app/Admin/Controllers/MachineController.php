<?php

namespace App\Admin\Controllers;

use App\Machine;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MachineController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Machine';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Machine());

        $grid->column('id', __('Id'));
        $grid->column('ip', __('Ip'));
        $grid->column('name', __('Name'));
        $grid->column('stream', __('Stream'));
        $grid->column('image', __('Image'));
        $grid->column('status', __('Status'));
        $grid->column('occupied', __('Occupied'));
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
        $show = new Show(Machine::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('ip', __('Ip'));
        $show->field('name', __('Name'));
        $show->field('stream', __('Stream'));
        $show->field('image', __('Image'));
        $show->field('status', __('Status'));
        $show->field('occupied', __('Occupied'));
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
        $form = new Form(new Machine());

        $form->text('ip', __('Ip'));
        $form->text('name', '機台名稱');
        $form->text('stream', __('Stream'));
        $form->image('image', '機台照片');
        $form->select('status', '機台狀態')->options([
            'off' => '未啟用',
            'on' => '啟用',
        ]);
        $form->select('occupied', '是否占用')->options([
            'true' => '使用中',
            'false' => '未使用',
        ]);
        return $form;
    }
}
