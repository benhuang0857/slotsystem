<?php

namespace App\Admin\Controllers;

use App\Wallet;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class WalletController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Wallet';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Wallet());

        $grid->column('id', __('Id'));
        $grid->column('wsid', __('Wsid'));
        $grid->column('balance', __('Balance'));
        $grid->column('status', __('Status'));
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
        $show = new Show(Wallet::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('wsid', __('Wsid'));
        $show->field('balance', __('Balance'));
        $show->field('status', __('Status'));
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
        $form = new Form(new Wallet());

        $form->text('wsid', __('Wsid'));
        $form->number('balance', __('Balance'));
        $form->text('status', __('Status'))->default('on');

        return $form;
    }
}
