
<a href="?mod=candidate&act=chitiet&id=<?= $data[0]['maCV'] ?>&tt=1" type="button" class="btn btn-primary">Ứng viên đã duyệt</a>
<a href="?mod=candidate&act=chitiet&id=<?= $data[0]['maCV'] ?>&tt=0" type="button" class="btn btn-danger">Ứng viên chưa duyệt</a>
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
      <th class="th-firt" scope="col">Mã TK</th>
      <th scope="col">Họ tên</th>
      <th scope="col">Giới tính</th>
      <th scope="col">Ngày sinh</th>
      <th scope="col">CMND</th>
      <th scope="col">SĐT</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Thời gian muốn làm</th>
      <th scope="col">Trình độ học vấn</th>
      <th scope="col">Khu vực muốn làm</th>
      <th scope="col">Sở thích</th>
      <th scope="col">Ghi chú</th>
      <th>Thao tác</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($data as $row) { ?>
      <tr>
        <th class="th-firt" scope="row"><?= $row['maCV'] ?></th>
        <th class="th-firt" scope="row"><?= $row['maTK'] ?></th>
        <td><?= $row['hoTen'] ?></td>
        <td><?= $row['gioiTinh'] ?></td>
        <td><?= $row['ngaySinh'] ?></td>
        <td><?= $row['CMND'] ?></td>
        <td><?= $row['SDT'] ?></td>
        <td><?= $row['diaChi'] ?></td>
        <td><?= $row['thoiGian'] ?></td>
        <td><?= $row['trinhDoHV'] ?></td>
        <td><?= $row['tenQuan'] ?></td>
        <td><?= $row['soThich'] ?></td>
        <td><?= $row['ghiChu'] ?></td>
        <td>
          <a style="width: 110px;" href="?mod=candidate&act=chitiethelp&id=<?= $row['maTK']?>" class="btn btn-success" >Xem chi tiết</a>
          <?php if($row['tinhTrangUngTuyen']==0) { ?>
          
          <form id ="table" action="?mod=candidate&act=xetduyet&idcv=<?= $data['0']['maCV']; ?>&idtk=<?= $data['0']['maTK']; ?>" method="POST" enctype="multipart/form-data">
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