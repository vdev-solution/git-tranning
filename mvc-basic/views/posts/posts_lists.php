<h3>Bài đăng</h3>
<table class="table table-bordered">
    <tr>
        <th class="col-md-1">Stt</th>
        <th class="col-md-5">Tiêu đề</th>
        <th class="col-md-4">Nội dung</th>
        <th class="col-md-2">Người đăng</th>
    </tr>
    <?php
        $i = 0;
        foreach ($post as $p):
        $i++;
    ?>
    <tr>
        <td class="text-center"><?php echo $i; ?></th>
        <td><a href = "index.php?c=posts&m=view&key=<?php echo $p['post_id']; ?>"><?php echo $p['title']; ?></a></td>
        <td><?php echo $p['text']; ?></td>
        <td><?php echo $p['user_id']; ?></td>
    </tr>
    <?php        
        endforeach;
        if ($i):
    ?>
    <?php else: ?>
    <tr>
        <td colspan="4" class="text-center"><strong>Chưa có bài đăng nào.</strong></td>
    </tr>
    <?php endif; ?>
</table>