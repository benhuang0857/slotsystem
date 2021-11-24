<?php

namespace App\Admin\Controllers;

use App\Member;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Wallet;

class MemberController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '會員管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Member());

        $grid->column('id', __('Id'));
        //$grid->column('wsid', __('Wsid'));
        $grid->column('name', __('姓名'));
        $grid->column('phone', __('電話'));
        //$grid->column('password', __('Password'));
        $grid->column('status', __('帳號狀態'));
        //$grid->column('remember_token', __('Remember token'));
        $grid->column('created_at', __('建立時間'));
        //$grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Member::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('wsid', __('Wsid'));
        $show->field('name', __('姓名'));
        $show->field('phone', __('電話'));
        $show->field('password', __('密碼'));
        $show->field('status', __('帳號狀態'));
        $show->field('remember_token', __('Remember token'));
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
        $form = new Form(new Member());

        $form->text('wsid', '錢包ID')->default(uniqid());
        $form->text('name', '姓名');
        $form->mobile('phone', '電話')->options(['mask' => '9999999999']);
        $form->password('password', '密碼');
        $form->select('status', '帳號狀態')->options([
            'off' => '未啟用',
            'on' => '啟用',
        ]);
        $form->saving(function (Form $form) {

            if ($form->password == null)
            {
                $form->password = $form->model()->password;
            }
            if ($form->password && $form->model()->password != $form->password) {
                $form->password = bcrypt($form->password);
            }

            $wsid = Wallet::where('wsid', $form->wsid)->first();
            if( $wsid == null )
            {
                $wallet = new Wallet();
                $wallet->wsid = $form->wsid;
                $wallet->save();
            }
            
        });

        return $form;
    }
}
