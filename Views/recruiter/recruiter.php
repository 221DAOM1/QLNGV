<section id="main">
    <div class="container">
        <div class="page-content-recruiter">
            <h1>Đăng thông tin công việc</h1>
            <hr>
            <?php if (isset($_COOKIE['msg2'])) { ?>
                <div class="alert alert-success">
                    <strong>Thông báo</strong> <?= $_COOKIE['msg2'] ?>
                </div>
            <?php } ?>
            <form id ="table" action="?act=work&xuli=store" method="POST" enctype="multipart/form-data">
                <fieldset class="form-group">
                    <label>Tên công việc</label>
                    <span class="required">*</span>
                    <input type="text" name="tenCV" class="form-control form-control-lg" placeholder="Tên công việc"/>
                </fieldset>
                <fieldset class="form-group">
                    <label>Loại công việc</label>
                    <select id="maDMCV" class="form-control" name="maDMCV">
                        <?php foreach ($data_category as $row) { ?>
                        <option value="<?= $row['maDMCV'] ?>"><?= $row['tenDM'] ?></option>
                        <?php } ?> 
                    </select>
                </fieldset>
                <p class="recruiter_check_text">Điều kiện làm việc</p>
                <hr>
                <fieldset class="form-group">
                    <label>Số lượng người làm</label>
                    <input type="text" name="soLuong" class="form-control form-control-lg" placeholder="Số lượng người làm"/>
                </fieldset>
                <fieldset class="form-group">
                    <label>Trình độ học vấn</label>
                    <select class="form-control" name="trinhDoHV">
                        <option>12/12</option>
                        <option>Đại học</option>
                        <option>Bỏ qua</option>
                    </select>
                </fieldset>
                <fieldset class="form-group">
                    <label>Thời gian làm việc</label>
                    <input type="text" name="time" class="form-control form-control-lg" placeholder="Thời gian làm việc"/>
                </fieldset>
                <fieldset class="form-group">
                    <label>Giới tính yêu cầu</label>
                    <select class="form-control" name="gioiTinhYC">
                        <option>Mọi giới tính</option>
                        <option>Nam</option>
                        <option>Nữ</option>
                    </select>
                </fieldset>
                <fieldset class="form-group">
                    <label>Chức vụ người làm</label>
                    <input type="text" name="chucVu" class="form-control form-control-lg" placeholder="Chức vụ người làm"/>
                </fieldset>
                <fieldset class="form-group">
                    <label>Lương nhân viên</label>
                    <input type="text" name="luong" class="form-control form-control-lg" placeholder="Lương nhân viên"/>
                </fieldset>
                <fieldset class="form-group">
                    <label>Địa chỉ làm việc</label>
                    <input type="text" name="diaChi" class="form-control form-control-lg" placeholder="Địa chỉ làm việc"/>
                </fieldset>
                <fieldset class="form-group">
                    <label>Mô tả</label>
                    <input type="text" name="moTa" class="form-control form-control-lg" placeholder="Mô tả"/>
                </fieldset>
                <fieldset class="form-group">
                    <label>Hình ảnh chính</label>
                    <input type="file" class="form-control" id="" placeholder="" name="hinhAnhChinh">
                </fieldset>
                <fieldset class="form-group">
                    <label>Hình ảnh 2</label>
                    <input type="file" class="form-control" id="" placeholder="" name="hinhAnh1">
                </fieldset>
                <fieldset class="form-group">
                    <label>Hình ảnh 3</label>
                    <input type="file" class="form-control" id="" placeholder="" name="hinhAnh2">
                </fieldset>
                <div class="btn-recruiter">
                    <button class="btn-confirm" type="submit" form="table">Xác nhận</button>
                </div>
        </form>
        </div>
    </div>
</section>