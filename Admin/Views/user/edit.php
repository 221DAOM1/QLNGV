<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=nguoidung&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="maTK" value="<?= $data['maTK']?>">
        <div class="form-group">
               <label for="">Họ tên</label>
               <input type="text" class="form-control" id="" placeholder="" name="hoTen" value="<?= $data['hoTen']?>">
           </div>
           <div class="form-group">
               <label for="">Tên Tài Khoản</label>
               <input type="text" class="form-control" id="" placeholder="" name="taiKhoan" value="<?= $data['taiKhoan']?>">
           </div>
           <div class="form-group">
               <label for="">Giới tính</label>
               <select id="" name="gioiTinh" class="form-control">
                    <option <?= ($data['gioiTinh'] == 'Nam')?'selected':''?> value="Nam"> Nam</option>
                    <option <?= ($data['gioiTinh'] == 'Nữ')?'selected':''?> value="Nữ"> Nữ</option>
                    <option <?= ($data['gioiTinh'] == 'Khác')?'selected':''?> value="Khác"> Khác</option>
               </select>
           </div>
           
           <div class="form-group">
               <label for="">Ngày sinh</label>
               <input type="text" class="form-control" id="" placeholder="" name="ngaySinh" value="<?= $data['ngaySinh']?>">
           </div>
           <div class="form-group">
               <label for="">CMND</label>
               <input type="text" class="form-control" id="" placeholder="" name="CMND" value="<?= $data['CMND']?>">
           </div>
           <div class="form-group">
               <label for="">Số Điện Thoại</label>
               <input type="text" class="form-control" id="" placeholder="" name="SDT" value="<?= $data['SDT']?>">
           </div>
           <div class="form-group">
               <label for="">Địa chỉ</label>
               <input type="text" class="form-control" id="" placeholder="" name="diaChi" value="<?= $data['diaChi']?>">
           </div>
           <div class="form-group">
               <label for="">Trạng Thái</label>
               <input type="text" class="form-control" id="" placeholder="" name="trangThai" value="<?= $data['trangThai']?>">
           </div>
           <div class="form-group">
               <label for="">Email</label>
               <input type="Email" class="form-control" id="" placeholder="" name="email" value="<?= $data['email']?>">
           </div>
           <div class="form-group">
           <div class="form-group">
               <label for="">Mã quyền</label>
               <select id="" name="maQuyen" class="form-control">
                    <option <?= ($data['maQuyen'] == '1')?'selected':''?> value="1"> Admin</option>
                    <option <?= ($data['maQuyen'] == '2')?'selected':''?> value="2"> Khách hàng</option>
                    <option <?= ($data['maQuyen'] == '3')?'selected':''?> value="3"> Quản trị viên</option>
                    <option <?= ($data['maQuyen'] == '4')?'selected':''?> value="4"> Nhân viên</option>
               </select>
           </div>
           </div>
           <button type="submit" class="btn btn-primary">Sửa</button>
    </form>
    </tbody>
</table>