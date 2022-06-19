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
      <th scope="col">Danh mục</th>
      <th scope="col">Tên công việc</th>
      <th scope="col">Khu vực</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Mô tả</th>
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
        <td><?= $row['tenDM'] ?></td>
        <td><?= $row['tenCV'] ?></td>
        <td><?= $row['tenQuan'] ?></td>
        <td><?= $row['diaChi'] ?></td>
        <td><?= $row['moTa'] ?></td>
        <td><?= $row['thoiGianDang'] ?></td>
        <td>
          <a style="width: 118px;" href="?mod=congviec&act=chitiet&id=<?= $row['maCV'] ?>&tt=<?=$row['tinhTrang']?>" class="btn btn-success" >Xem chi tiết</a>
          <?php if($row['tinhTrang']==0) {?>
          <form id ="table" action="?mod=congviec&act=xetduyet&idcv=<?= $row['maCV']; ?>" method="POST" enctype="multipart/form-data">
              <div class="btn-recruiter">
                  <button class="btn btn-success" type="submit" form="table" style="width: 66px;background: red;">Duyệt</button>
              </div>
          </form>
          <?php } ?>
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