<?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
<a href="?mod=category&act=add" type="button" class="btn btn-primary">Thêm mới</a>
<?php } ?>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr style="
    background-color: var(--cl-primary);
    color: white;">
      <th scope="col">Mã danh mục</th>
      <th scope="col">Tên danh mục</th>
      <th scope="col">Thao tác</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr >
        <td><?= $row['maDMCV'] ?></td>
        <td><?= $row['tenDM'] ?></td>
        <td>
          <a  style="width: 55px;" href="?mod=category&act=detail&id=<?= $row['maDMCV'] ?>" class="btn btn-success">Xem</a>
          <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
          <a href="?mod=category&act=edit&id=<?= $row['maDMCV'] ?>" class="btn btn-warning">Sửa</a>
          <a href="?mod=category&act=delete&id=<?= $row['maDMCV'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
          <?php }?>
        </td>
      </tr>
    <?php } ?>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>