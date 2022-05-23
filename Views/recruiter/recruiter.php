<section id="main">
    <div class="container">
        <div class="page-content-recruiter">
            <h1>Đăng thông tin công việc</h1>
            <hr>
            <?php if (isset($_COOKIE['msg'])) { ?>
                <div class="alert alert-success">
                    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
                </div>
            <?php } ?>
            <form action="" method="post" id="form1">
            <fieldset class="form-group">
                <label>Tên công việc</label>
                <span class="required">*</span>
                <input type="text" name="" class="form-control form-control-lg" placeholder="Tên công việc"/>
            </fieldset>
            <fieldset class="form-group">
                <label>Loại công việc</label>
                <span class="required">*</span>
                <input type="text" name="" class="form-control form-control-lg" placeholder="Loại công việc"/>
            </fieldset>
            <p class="recruiter_check_text">Điều kiện làm việc</p>
            <hr>
            <fieldset class="form-group">
                <label>Số lượng người làm</label>
                <input type="text" name="" class="form-control form-control-lg" placeholder="Số lượng người làm"/>
            </fieldset>
            <fieldset class="form-group">
                <label>Trình độ học vấn</label>
                <input type="text" name="" class="form-control form-control-lg" placeholder="Trình độ học vấn"/>
            </fieldset>
            <fieldset class="form-group">
                <label>Thời gian làm việc</label>
                <input type="text" name="" class="form-control form-control-lg" placeholder="Thời gian làm việc"/>
            </fieldset>
            <fieldset class="form-group">
                <label>Giới tính yêu cầu</label>
                <input type="text" name="" class="form-control form-control-lg" placeholder="Giới tính yêu cầu"/>
            </fieldset>
            <fieldset class="form-group">
                <label>Chức vụ người làm</label>
                <input type="text" name="" class="form-control form-control-lg" placeholder="Chức vụ người làm"/>
            </fieldset>
            <fieldset class="form-group">
                <label>Lương nhân viên</label>
                <input type="text" name="" class="form-control form-control-lg" placeholder="Lương nhân viên"/>
            </fieldset>
            <fieldset class="form-group">
                <label>Địa chỉ làm việc</label>
                <input type="text" name="" class="form-control form-control-lg" placeholder="Địa chỉ làm việc"/>
            </fieldset>
            <fieldset class="form-group">
                <label>Mô tả</label>
                <input type="text" name="" class="form-control form-control-lg" placeholder="Trình độ học vấn"/>
            </fieldset>
            <div class="btn-recruiter">
                <button class="btn-confirm" name="submit" type="submit" form="form1" >Xác nhận</button>
                <button class="btn-cancel">Hủy</button>
            </div>
        </form>
        </div>
    </div>
</section>