<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Demo blog</title>
    <link rel="stylesheet" href="./styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/css/styles.css">
    <script type="text/javascript" src="./styles/js/jquery.js"></script>
</head>
<body>
  <div class='container'>
    <div class='row'>
    <div class='col-md-12'>
        <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                <?php if ($logged = isLogged()): ?>
                <li class="active"><a href="index.php">Demo blog</a></li>
                    <?php foreach ($category as $cate): ?>
                <li><a href = "index.php?c=posts&m=lists&cate=<?php echo $cate['category_id']; ?>"><?php echo $cate['category_name'];?></a> </li>
                    <?php endforeach;  ?>
                <?php else: ?>
                <li class="active"><a href="index.php">Demo blog</a></li> 
                <?php endif; ?>
            </ul>

        </nav>
    </div>
    <div id='content'>
        <div class='col-md-9'>
            <?php include ROOT . DS . 'views' . DS . $template_file; ?>
        </div>
        <div class='col-md-3'>
            <?php include ROOT . DS . 'views' . DS . 'blocks' . DS . 'sidebar.php'; ?>
        </div>
    </div>
    <div class="col-md-12 text-center">
        <footer>
            2018 Intership tranning <a href="">XXX</a> 
        </footer>    
    </div>

    </div>
</div>

</body>
</html>
