
<?php include_once('Layout/Header.php'); ?>
<?php if (is_admin()){ ?>
    <div>
        Xin chào <?php echo get_current_username(); ?> |
        <a href="<?php echo base_url('All/?m=common&a=Login'); ?>">Logout</a>
    </div>
<?php } ?>
<?php include_once('Layout/Footer.php'); ?>