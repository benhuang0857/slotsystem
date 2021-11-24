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
    protected $title = '機台管理';

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
        $grid->column('name', __('機台名稱'));
        $grid->column('stream', __('視訊流位址'));
        $grid->column('image', __('機台照片'));
        $grid->column('status', __('機台狀態'));
        $grid->column('occupied', __('是否被占用'));
        $grid->column('created_at', __('建立時間'));
        $grid->column('updated_at', __('更新時間'));

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
        $show->field('name', __('機台名稱'));
        $show->field('stream', __('視訊流地址'));
        $show->field('image', __('機台照片'));
        $show->field('status', __('機台狀態'));
        $show->field('occupied', __('是否被占用'));
        $show->field('created_at', __('建立時間'));
        $show->field('updated_at', __('更新時間'));

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
        $form->text('stream', __('視訊流地址'));
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
