
<a href="?mod=congviec&act=xetduyet&id=<?= $data['0']['maCV'] ?>" 
class="btn btn-success">Duyệt công việc</a>
<a href="?mod=congviec&act=delete&id=<?= $data['0']['maCV'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>

<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr style="
    background-color: var(--cl-primary);
    color: white; text-align: center;  ">
            <th scope="col">Tên công việc</th>
            <th scope="col">Địa chỉ làm việc</th>
            <th scope="col">Số lượng người</th>
            <th scope="col">Trình độ học vấn</th>
            <th scope="col">Yêu cầu giới tính</th>
            <th scope="col">Chức vụ</th>
            <th scope="col">Lương</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Thời gian</th>
            <th scope="col">Mô tả</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row) { ?>
            <tr>
                <td><?= $row['tenCV'] ?></td>
                <td><?= $row['tenQuan'] ?></td>
                <td><?= $row['soLuong'] ?></td>
                <td><?= $row['trinhDoHV'] ?></td>
                <td><?= $row['gioiTinhYC'] ?></td>
                <td><?= $row['chucVu'] ?></td>
                <td><?= $row['luong'] ?></td>
                <td><?= $row['diaChi'] ?></td>
                <td><?= $row['thoiGianDang'] ?></td>
                <td><?= $row['moTa'] ?></td>
            </tr>
        <?php } ?>
</table>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>