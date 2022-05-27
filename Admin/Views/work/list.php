<a href="?mod=congviec&id=1" type="button" class="btn btn-primary">Đã duyệt</a>
<a href="?mod=congviec&id=0" type="button" class="btn btn-danger">Chưa duyệt</a>
<?php if (isset($_COOKIE['msg2'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg2'] ?>
  </div>
<?php } ?>
<hr>
<table class="table table-bordered acountTable" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr style="
    background-color: var(--cl-primary);
    color: white;">
      <th class="th-firt" scope="col">Mã CV</th>
      <th scope="col">Mã TK</th>
      <th scope="col">Tên danh mục</th>
      <th scope="col">Tên công việc</th>
      <th scope="col">Khu vực</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Trình độ học vấn</th>
      <th scope="col">Giới tính yêu cầu</th>
      <th scope="col">Chức vụ</th>
      <th scope="col">Lương</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Thời gian</th>
      <th scope="col">Mô tả</th>
      <th scope="col">Tình trạng</th>
      <th scope="col">Thời gian đăng</th>
      <th>Thao tác</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($data as $row) { ?>
      <tr>
        <th class="th-firt" scope="row"><?= $row['maCV'] ?></th>
        <td><?= $row['maTK'] ?></td>
        <td>
          <?php
          if ($row['maDMCV'] == 1) {
            echo 'Chăm sóc trẻ em';
          } else {
            if ($row['maDMCV'] == 2) {
              echo 'Dọn dẹp nhà';
            } else {
                if ($row['maDMCV'] == 3) {
                  echo 'Chăm sóc người già';
                }
            }
          }
          ?>
        </td>
        <td><?= $row['tenCV'] ?></td>
        <td><?= $row['khuVuc'] ?></td>
        <td><?= $row['soLuong'] ?></td>
        <td><?= $row['trinhDoHV'] ?></td>
        <td><?= $row['gioiTinhYC'] ?></td>
        <td><?= $row['chucVu'] ?></td>
        <td><?= $row['luong'] ?></td>
        <td><?= $row['diaChi'] ?></td>
        <td><?= $row['time'] ?></td>
        <td><?= $row['moTa'] ?></td>
        <td><?= $row['tinhTrang'] ?></td>
        <td><?= $row['thoiGianDang'] ?></td>
        <td>
          <a href="?mod=congviec&act=chitiet&id=<?= $row['maCV'] ?>&tt=<?=$row['tinhTrang']?>" class="btn btn-success" >Xem chi tiết</a>
          <a href="?mod=congviec&act=delete&id=<?= $row['maCV'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" 
          class="btn btn-danger <?php if($row['tinhTrang']!=0) echo 'btn-remove-none';?>">Xóa</a>
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