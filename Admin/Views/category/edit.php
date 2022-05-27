<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=category&act=update" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Mã danh mục</label>
            <input type="text" class="form-control" id="" placeholder="" name="maDMCV" value="<?= $data['maDMCV'] ?>">
        </div>
        <div class="form-group">
            <label for="">Tên danh mục</label>
            <input type="text" class="form-control" id="" placeholder="" name="tenDM" value="<?= $data['tenDM'] ?>">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh danh mục</label>
            <input type="file" name = "hinhAnh" class="form-control form-control-lg edit" placeholder=""/>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</table>