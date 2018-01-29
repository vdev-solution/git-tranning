<h3>Menu Chính</h3>
<ul class="nav nav-pills nav-stacked" style="background: #222;">
    <?php if ($logged = isLogged()): ?>
    <li><a href="index.php">Welcome <strong><?php echo $logged['fullname']; ?></strong></a></li>
    <li><a href="index.php?c=posts&m=add" >Đăng bài</a></li>
    <li><a href="index.php?c=auth&m=logout">Logout</a></li>
    <?php else: ?>
    <li><a href="index.php?c=auth&m=login">Login</a></li>
    <li><a href="index.php?c=auth&m=register">Register</a></li>
    <?php endif; ?>
</ul>
