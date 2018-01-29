<h3>Thêm bài mới</h3>
<form id="frmPayment" method="post" action="">
  <div class="form-group">
    <label class="control-label" for="inputName">Tiêu đề</label>
    <div class="controls">
      <textarea type="text" cols="80" id="inputName" name="title"> </textarea>
    </div>
  </div>
  <label class="control-label" for="inputCate">Mục đăng</label>
  <select class="form-group" name="category_id">
  <option>Blog_A</option>
  <option>Blog_B</option>
  <option>Blog_C</option>
</select>
  <div class="form-group">
    <label class="control-label" for="inputTotal">Nội dung bài viết</label>
    <div class="controls">
      <textarea id="inputTotal" cols="80" rows="8" name="text"> </textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="controls">
      <button type="submit" class="btn btn-success">Save</button>
    </div>
  </div>
</form>
