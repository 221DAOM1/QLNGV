<section id="main">
    <div class="container">
        <div class="break-crumb">
            <div class="break-crumb__head">
                <div class="home">
                    <a href="#">
                        <span>Trang chủ</span>
                    </a>
                        <span class="mr_lr">&nbsp;/ Công việc tuyển dụng&nbsp;</span>
                </div>
                <div>
                    <?php if(count($data_help)!=0) {?>
                    <strong>
                        <span id="danhmuc">/<?= $data_help[0]['tenQuan'] ?></span>
                    </strong>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="product__content">
            <div class="container">
                <div class="row">
                    <div class="nav-left col-lg-3">
                        <div class="nav-left__category">
                            <h1 style="color: var(--cl-primary);">Danh mục</h1>
                            <ul class="nav-left-category__list">
                                <li class="category__item"><a href="?act=home">Trang chủ</a> </li>
                                <li class="category__item">
                                    <a href="?act=detailhelp&xuli=listcategory&id=1">Hải châu</a>
                                </li>
                                <li class="category__item"><a href="?act=detailhelp&xuli=listcategory&id=2">Cẩm lệ</a></li>
                                <li class="category__item"><a href="?act=detailhelp&xuli=listcategory&id=3">Thanh Khê</a></li>
                                <li class="category__item"><a href="?act=detailhelp&xuli=listcategory&id=4">Liên Chiểu</a></li>
                                <li class="category__item"><a href="?act=detailhelp&xuli=listcategory&id=5">Ngũ Hành Sơn</a></li>
                                <li class="category__item"><a href="?act=detailhelp&xuli=listcategory&id=3">Sơn Trà</a></li>
                                <li class="category__item"><a href="?act=detailhelp&xuli=listcategory&id=4">Hòa Vang</a></li>
                                <li class="category__item"><a href="?act=detailhelp&xuli=listcategory&id=5">Hoàng Sa</a></li>
                            </ul>
                        </div>

                        <div class="nav-left__filter-product">
                            <div class="nav-left__filter-head">
                                <h2>Lọc người giúp việc</h2>
                                <span>Để tìm kiếm nhanh hơn</span>
                            </div>
                            <div class="filter-product__collocation">
                                <h1>Sắp xếp</h1>
                                <ul class="filter-product__collocation">
                                    <li class="filter-collocation__item">
                                        <input type ="radio" name ="radio" class="input-filter__radio" value="asc" id="asc" onclick="filterProduct('asc','tenCV', '<?php echo $cate?>')">
                                        <label for="asc">Tên A - Z</label><br></li>
                                    <li class="filter-collocation__item">
                                        <input type ="radio" name ="radio" class="input-filter__radio" value="desc" id="desc" onclick="filterProduct('desc','tenCV','<?php echo $cate?>')">
                                        <label for="desc">Tên Z - A</label><br></li>
                                    </li>
                                    <li class="filter-collocation__item">
                                        <input type ="radio" name ="radio" class="input-filter__radio" value="news" id="news" onclick="filterProduct('desc','thoiGianDang','<?php echo $cate?>')">
                                        <label for="news">Mới nhất</label><br></li>
                                    </li>
                                    <li class="filter-collocation__item">
                                        <input type ="radio" name ="radio" id="old" class="input-filter__radio" value="old" onclick="filterProduct('Asc','thoiGianDang','<?php echo $cate?>')">
                                        <label for="old">Cũ nhất</label><br></li>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter__conterner__selected filter__hiddent">
                                <div class="wrapper-filter__head">
                                    <span class="filter__conterner__title-head">
                                        <i class="fa fa-arrow-left"></i>
                                        Bạn chọn
                                    </span>
                                    <div class="filter__remove">
                                        Bỏ hết
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </div>
                                <div class="filter-container__selected-filter-list">
                                    <ul>
                
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-list col-lg-9" >
                        <div class="container">
                            
                            <div class="row" id="product-list-main">
                            <?php 
                                for ($i = 0; $i < (count($data_help)); $i++) {
                            ?>
                                <div class="col-product__itemm col col-6 col-md-4 col-lg-4 col-sm-6">
                                    <form action="" >
                                        
                                        <div class="product-imgg">
                                            <a href="?act=detailhelp&tk=<?=$data_help[$i]['maTK']?>" style="display: block;">
                                                <img src="./Publics/images/<?php echo $data_help[$i]['hinhAnh'] ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="product-fruits__infos">
                                            <h2 class="tilte-name-product-t"><?= $data_help[$i]['hoTen']?></h2>
                                            <div style="margin-top: 10px;">
                                                <span class="price-new"><?= $data_help[$i]['ngaySinh'] ?></span>
                                            </div>
                                            <div style="margin-bottom: 10px;">
                                                <span class="price-new">Làm việc tại: <?= $data_help[$i]['tenQuan'] ?></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            
                            <?php } ?>
                        
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>