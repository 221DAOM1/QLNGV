<?php

function getKey()
{
    $link = mysqli_connect("localhost", "root", "", "gtngv");
    if (isset($_REQUEST["term"])) {
        // Chuẩn bị câu lệnh SQL SELECT
        $sql = "SELECT * FROM congviec, hinhanhcv,quanhuyen WHERE congviec.maCV = hinhanhcv.maCV and quanhuyen.idQuan=congviec.khuVuc and tenCV LIKE ? GROUP by congviec.maCV";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Liên kết biến đến câu lệnh đã chuẩn bị như là tham số
            mysqli_stmt_bind_param($stmt, "s", $param_term);

            // Thiết lập các tham số
            $param_term = '%' . $_REQUEST["term"] . '%';
            // Cố gắng thực thi câu lệnh đã chuẩn bị
            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);

                // Kiểm tra số lượng row trong kết quả
                if (mysqli_num_rows($result) > 0) {
                    // Tìm nạp các hàng kết quả dưới dạng mảng kết hợp
                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                        <a href="?act=detailwork&cv=<?php echo $row["maCV"] ?>" class="search-results__link">
                            <img src="./Publics/images/<?php echo $row["tenHinh"] ?>" alt="">
                            <div class="box-desc">
                                <p class="title-name-result"><?php echo $row["tenCV"] ?></p>
                                <p class="price-name-result"><?php echo $row["tenQuan"] ?></p>
                            </div>
                        </a>
                    <?php } ?>
                    <a href="?act=search&keyword=<?php echo $param_term ?>" class="result-count">
                        Xem tất cả
                        <span class="count-item">(<?php echo mysqli_num_rows($result) ?>)</span>
                    </a>
                <?php
                } else { ?>
                    <p style="text-align:center; padding: 12px 0;">Không có kết quả tìm kiếm</p>
                <?php } ?>
<?php
            } else {
                echo "ERROR: Không thể thực thi câu lệnh $sql. " . mysqli_error($link);
            }
        }
        return rtrim($param_term, '%');
        // Đóng câu lệnh
        mysqli_stmt_close($stmt);
    }
    // Đóng kết nối
    mysqli_close($link);
}

getKey()
?>