<?php if (1==1) { ?>
<a href="?mod=nguoidung&act=add" type="button" class="btn btn-primary">Thêm mới</a>
<?php } ?>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<hr>
<table class="table table-bordered acountTable" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr style="
    background-color: var(--cl-primary);
    color: white;">
      <th class="th-firt" scope="col">Mã TK</th>
      <th scope="col">Mã quyền</th>
      <th scope="col">Tài khoản</th>
      <th scope="col">Mật khẩu</th>
      <th scope="col">Họ tên</th>
      <th class="th-firt" scope="col">Giới tính</th>
      <th scope="col">CMND</th>
      <th scope="col">SDT</th>
      <th scope="col">Email</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Hình ảnh</th>
      <th>Thao tác</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($data as $row) { ?>
      <tr>
        <th class="th-firt" scope="row"><?= $row['maTK'] ?></th>
        <td>
          <?php
          if ($row['maQuyen'] == 1) {
            echo 'Quản trị viên';
          } else {
            if ($row['maQuyen'] == 2) {
              echo 'Khách hàng';
            } else {
                if ($row['maQuyen'] == 3) {
                  echo 'Người giúp việc';
                }
                else {
                    if ($row['maQuyen'] == 4) {
                      echo 'Nhân viên';
                  }
                }
            }
          }
          ?>
        </td>
        <td><?= $row['taiKhoan'] ?></td>
        <td><?= $row['matKhau'] ?></td>
        <td><?= $row['hoTen'] ?></td>
        <td class="th-firt"><?= $row['gioiTinh'] ?></td>
        <td><?= $row['CMND'] ?></td>
        <td><?= $row['SDT'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['diaChi'] ?></td>
        <td><?= $row['hinhAnh'] ?></td>
        
        <td>
          <a href="?mod=nguoidung&act=detail&id=<?= $row['maTK'] ?>" type="button" class="btn btn-success">Xem</a>
          <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
          <a href="?mod=nguoidung&act=edit&id=<?= $row['maTK'] ?>" type="button" class="btn btn-warning">Sửa</a>
          <a href="?mod=nguoidung&act=delete&id=<?= $row['maTK'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
          <?php }?>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>