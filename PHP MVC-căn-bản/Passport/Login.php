<?php
$error = array();
 
if (is_admin()){
    redirect(base_url('All/?m=common&a=Information'));
}
 
if (is_submit('login'))
{    
    $username = input_post('username');
    $password = input_post('password');
     
    if (empty($username)){
        $error['username'] = 'Bạn chưa nhập tên đăng nhập';
    }
     
    if (empty($password)){
        $error['password'] = 'Bạn chưa nhập mật khẩu';
    }
     
    if (!$error)
    {
        include_once('All/Information.php');
         
        $user = db_user_get_by_username($username);

        if (empty($user)){
            $error['username'] = 'Tên đăng nhập không đúng';
        }
        else if ($user['password'] != md5($password)){
            $error['password'] = 'Mật khẩu bạn nhập không đúng';
        }
         
        if (!$error){
            set_logged($user['username'], $user['level']);
            redirect(base_url('All/?m=common&a=Information'));
        }
    }
}
 
?>
 
<h1>Trang đăng nhập!</h1>
<form method="post" action="<?php echo base_url('Passport/?m=common&a=Login'); ?>">
    <table>
        <tr>
            <td>Username</td>
            <td>
                <input type="text" name="username" value=""/>
                <?php show_error($error, 'username'); ?>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="password" name="password" value=""/>
                <?php show_error($error, 'password'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="request_name" value="login"/>
            </td>
            <td>
                <input type="submit" name="login-btn" value="Đăng nhập"/>
            </td>
        </tr>
    </table>
</form>