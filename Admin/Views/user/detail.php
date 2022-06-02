<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <h2>Mã tài khoản: <?=$data['maTK']?></h2>
    <?php if($data['maQuyen']==1)
    { ?>
        <h2>Quyền: Admin </h2>
    <?php }
    else if($data['maQuyen']==2){ ?>
        <h2>Quyền: Khách hàng </h2>
    <?php } 
    else if($data['maQuyen']==3) { ?>
        <h2>Quyền: Giúp việc </h2>
    <?php }
    else if($data['maQuyen']==4) { ?>
        <h2>Quyền: Nhân viên </h2>
    <?php }?>
    <h2>Họ tên: <?=$data['hoTen']?></h2>
    <h2>Giới Tính: <?=$data['gioiTinh'] ?></h2>
    <h2>Ngày sinh: <?=$data['ngaySinh'] ?></h2>
    <h2>CMND: <?=$data['CMND'] ?></h2>
    <h2>Email: <?=$data['email'] ?></h2>
    <h2>Số Điện Thoại: <?=$data['SDT'] ?></h2>
    <h2>Địa Chỉ: <?=$data['diaChi']?></h2>
    <h2>Trạng Thái: <?=$data['trangThai'] ?></h2>
</table>