<section class="main">
    <div class="container">
        <?php if(count($data)!=0) {?>
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
            <th scope="col">Tình trạng ứng tuyển</th>
            <th scope="col">Khách hàng xác nhận</th>
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
                    <?php if($row['tinhTrangUngTuyen']==1) {
                        echo 'Đã duyệt';
                    } else {
                        echo 'Chờ xử lý';
                    }
                    ?>
                </td>
                <td>
                    <?php if($row['khXacNhan']==1) {
                        echo 'Đã duyệt';
                    } else {
                        echo 'Chờ xử lý';
                    }
                    ?>
                </td>
                <td>
                <input style="display: none;" type="text" name="maCV" class="form-control form-control-lg" value="<?= $data_user[0]['maCV']?>"/>
                <a href="?act=confirmhelp&xuli=detailwork&id=<?= $row['maCV'] ?>" class="btn btn-success" >Xem chi tiết công việc</a>
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
        <?php } 
            else{ ?>
                <img src="./Publics/images/iconnull.png" style="width: 500px;">
            <?php } ?>
    </div>
</section>