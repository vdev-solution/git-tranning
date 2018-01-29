<h3>Đăng ký hệ thống</h3>
<?php if (isset($error)): ?>
<div class="alert alert-error">
    <?php echo $error; ?>
</div>
<?php endif; ?>
<form class="form-horizontal" method="post" action="">
  <div class="control-group">
    <label class="control-label" for="inputName">Fullname</label>
    <div class="controls">
      <input type="text" id="inputName" name="fullname" value="<?php echo (isset($postData) ? $postData['fullname'] : ''); ?>" />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
      <input type="text" id="inputEmail" name="email" value="<?php echo (isset($postData) ? $postData['email'] : ''); ?>" />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
      <input type="password" id="inputPassword"  name="password" />
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-primary">Register</button>
    </div>
  </div>
</form>