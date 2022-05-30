<section class="main">
    <div class="container">
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
            <th scope="col">Tên danh mục</th>
            <th scope="col">Tên công việc</th>
            <th scope="col">Trình độ học vấn</th>
            <th scope="col">Giới tính yêu cầu</th>
            <th scope="col">Chức vụ</th>
            <th scope="col">Lương</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Thời gian</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Thời gian đăng</th>
            <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $row) { ?>
            <tr>
                <td>
                <?php
                if ($row['maDMCV'] == 1) {
                    echo 'Chăm sóc trẻ em';
                } else {
                    if ($row['maDMCV'] == 2) {
                    echo 'Dọn dẹp nhà';
                    } else {
                        if ($row['maDMCV'] == 3) {
                        echo 'Chăm sóc người già';
                        }
                    }
                }
                ?>
                </td>
                <td><?= $row['tenCV'] ?></td>
                <td><?= $row['trinhDoHV'] ?></td>
                <td><?= $row['gioiTinhYC'] ?></td>
                <td><?= $row['chucVu'] ?></td>
                <td><?= $row['luong'] ?></td>
                <td><?= $row['diaChi'] ?></td>
                <td><?= $row['time'] ?></td>
                <td><?= $row['moTa'] ?></td>
                <td><?= $row['thoiGianDang'] ?></td>
                <td>
                <a href="?act=ratehelp&xuli=chitiet&id=<?= $row['maCV'] ?>" class="btn btn-success" >Xem người đã làm</a>
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
    </div>
</section>