<?php
if (!is_admin()){
    redirect(base_url('Passport'), array('m' => 'common', 'a' => 'Login'));
}
?>
 
<?php 
$error = array();
 
?>
 
<h1>Thêm thành viên</h1>
 
<div class="controls">
    <a class="button" onclick="$('#main-form').submit()" href="#">Lưu</a>
</div>
 
<form id="main-form" method="post" action="<?php echo create_link(base_url('/'), array('m' => 'user', 'a' => 'add')); ?>">
    <input type="hidden" name="request_name" value="add_user"/>
    <table cellspacing="0" cellpadding="0" class="form">
        <tr>
            <td>Họ tên</td>
            <td>
                <input type="text" name="fullname" value="<?php echo input_post('fullname'); ?>" class="long" />
                <?php show_error($error, 'fullname'); ?>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="text" name="email" value="<?php echo input_post('email'); ?>" class="long" />
                <?php show_error($error, 'email'); ?>
            </td>
        </tr>
        <tr>
            <td width="200px">Tên đăng nhập</td>
            <td>
                <input type="text" name="username" value="<?php echo input_post('username'); ?>" />
                <?php show_error($error, 'username'); ?>
            </td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td>
                <input type="password" name="password" value="<?php echo input_post('password'); ?>" />
                <?php show_error($error, 'password'); ?>
            </td>
        </tr>
        <tr>
            <td>Nhập lại mật khẩu</td>
            <td>
                <input type="password" name="re-password" value="<?php echo input_post('re-password'); ?>" />
                <?php show_error($error, 're-password'); ?>
            </td>
        </tr>
    </table>
</form>