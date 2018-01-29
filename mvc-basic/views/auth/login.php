<h3>Đăng nhập hệ thống</h3>
<?php if (isset($error)): ?>
<div class="alert alert-error">
    <?php echo $error; ?>
</div>
<?php endif; ?>
<form method="post" action="">
  <div class="form-group">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="Email" name="email" />
    </div>
  </div>
  <div class="form-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
      <input type="password" id="inputPassword" placeholder="Password" name="password" />
    </div>
  </div>
  <div class="form-group">
    <div class="controls">
      <button type="submit" class="btn btn-success">Sign in</button>
    </div>
  </div>
</form>