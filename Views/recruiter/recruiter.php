<section class="main">
    <div class="container">
        <div class="page-content-recruiter">
            <div style="background-color: #28a745; height: 30px; padding-top: 5px">
                <h1 style="text-align: center; color: white;">Đăng thông tin công việc</h1>
            </div>
            <hr>
            <?php if (isset($_COOKIE['msg2'])) { ?>
                <div class="alert alert-success">
                    <strong>Thông báo</strong> <?= $_COOKIE['msg2'] ?>
                </div>
            <?php } ?>
            <form id="table" action="?act=work&xuli=store" method="POST" enctype="multipart/form-data">
                <fieldset class="form-group" style="text-align: left;">
                    <label>Tên công việc</label>
                    <span class="required" style="color: red">*</span>
                    <input type="text" name="tenCV" class="form-control form-control-lg" placeholder="Tên công việc" required />
                </fieldset>
                <fieldset class="form-group" style="text-align: left;">
                    <label>Loại công việc </label>
                    <span class="required" style="color: red">*</span>
                    <select required id="maDMCV" class="form-control" name="maDMCV">
                        <option value="" disabled selected>Chọn loại công việc</option>
                        <?php foreach ($data_category as $row) { ?>
                            <option value="<?= $row['maDMCV'] ?>"><?= $row['tenDM'] ?></option>
                        <?php } ?>
                    </select>
                </fieldset>
                <fieldset class="form-group" style="text-align: left;">
                    <label>Khu vực</label>
                    <span class="required" style="color: red">*</span>
                    <select required id="khuVuc" class="form-control" name="khuVuc">
                        <option value="" disabled selected>Chọn khu vực</option>
                        <?php foreach ($data_district as $row) { ?>
                            <option value="<?= $row['idQuan'] ?>"><?= $row['tenQuan'] ?></option>
                        <?php } ?>
                    </select>
                </fieldset>
                <p class="recruiter_check_text" style="text-align: left;">Điều kiện làm việc</p>
                <hr>
                <fieldset class="form-group" style="text-align: left;">
                    <label>Số lượng người làm</label>
                    <span class="required" style="color: red">*</span>
                    <input required type="text" name="soLuong" class="form-control form-control-lg" placeholder="Số lượng người làm" />
                </fieldset>
                <fieldset class="form-group" style="text-align: left;">
                    <label>Trình độ học vấn</label>
                    <select class="form-control" name="trinhDoHV">
                        <option>12/12</option>
                        <option>Đại học</option>
                        <option>Không cần</option>
                    </select>
                </fieldset>
                <fieldset class="form-group" style="text-align: left;">
                    <label>Thời gian làm việc</label>
                    <span class="required" style="color: red">*</span>
                    <input required type="text" name="time" class="form-control form-control-lg" placeholder="Thời gian làm việc" />
                </fieldset>
                <fieldset class="form-group" style="text-align: left;">
                    <label>Giới tính yêu cầu</label>
                    <select class="form-control" name="gioiTinhYC">
                        <option>Mọi giới tính</option>
                        <option>Nam</option>
                        <option>Nữ</option>
                    </select>
                </fieldset>
                <fieldset class="form-group" style="text-align: left;">
                    <label>Chức vụ người làm</label>
                    <input type="text" name="chucVu" class="form-control form-control-lg" placeholder="Chức vụ người làm" />
                </fieldset>
                <fieldset class="form-group" style="text-align: left;">
                    <label>Lương nhân viên theo ngày</label>
                    <span class="required" style="color: red">*</span>
                    <input required type="text" name="luong" class="form-control form-control-lg" placeholder="Lương nhân viên" />
                </fieldset>
                <fieldset class="form-group" style="text-align: left;">
                    <label>Địa chỉ làm việc</label>
                    <span class="required" style="color: red">*</span>
                    <input required type="text" name="diaChi" class="form-control form-control-lg" placeholder="Địa chỉ làm việc" />
                </fieldset>
                <fieldset class="form-group" style="text-align: left;">
                    <label>Mô tả</label>
                    <input type="text" name="moTa" class="form-control form-control-lg" placeholder="Mô tả" />
                </fieldset>
                <fieldset class="form-group" style="text-align: left;">
                    <label>Hình ảnh chính</label>
                    <input type="file" class="form-control" id="" placeholder="" name="hinhAnhChinh">
                </fieldset>
                <fieldset class="form-group" style="text-align: left;">
                    <label>Hình ảnh 2</label>
                    <input type="file" class="form-control" id="" placeholder="" name="hinhAnh1">
                </fieldset>
                <fieldset class="form-group" style="text-align: left;">
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