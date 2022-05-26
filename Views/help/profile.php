<section id="main">
    <div class="container">
        <div class="page-content-recruiter">
            <h1>Cập nhật thông tin ứng viên</h1>
            <hr>
            <?php if (isset($_COOKIE['msg2'])) { ?>
                <div class="alert alert-success">
                    <strong>Thông báo</strong> <?= $_COOKIE['msg2'] ?>
                </div>
            <?php } ?>
            <form id ="table" action="?act=help&xuli=store" method="POST" enctype="multipart/form-data">
                <fieldset class="form-group">
                    <label>Thời gian đề xuất muốn làm</label>
                    <span class="required">*</span>
                    <input type="text" name="thoiGian" class="form-control form-control-lg" placeholder="Thời gian"/>
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
                    <label>Khu vực muốn làm</label>
                    <input type="text" name="khuVucLamViec" class="form-control form-control-lg" placeholder="Địa chỉ"/>
                </fieldset>
                <fieldset class="form-group">
                    <label>Sở thích</label>
                    <input type="text" name="soThich" class="form-control form-control-lg" placeholder="Sở thích"/>
                </fieldset>
                <fieldset class="form-group">
                    <label>Ghi chú</label>
                    <input type="text" name="ghiChu" class="form-control form-control-lg" placeholder="Ghi chú"/>
                </fieldset>
                
                <div class="btn-recruiter">
                    <button class="btn-confirm" type="submit" form="table">Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
</section>