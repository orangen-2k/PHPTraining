<?php include_once('Layout/header.php'); ?>
<h1>Trang đăng ký</h1>
<form method="post" action="<?php echo base_url('?m=common&a=Register'); ?>">
    <table>
        <tr>
            <td>Full name</td>
            <td>
                <input type="text" name="fullname" value=""/>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="text" name="email" value=""/>
            </td>
        </tr>
        <tr>
            <td>Username</td>
            <td>
                <input type="text" name="username" value=""/>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="password" name="password" value=""/>
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="request_name" value="loregistergin"/>
            </td>
            <td>
                <input type="submit" name="register-btn" value="Đăng ký"/>
            </td>
        </tr>
    </table>
<a href="<?php echo base_url('?m=common&a=Login'); ?>">Đăng nhập</a>
</form>
<?php include_once('Layout/footer.php'); ?>