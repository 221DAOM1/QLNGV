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
                    <?php if(count($data_work)!=0) {?>
                    <strong>
                        <span id="danhmuc">/ <?= $data_work[0]['tenDM'] ?></span>
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
                                <li class="category__item"><a href="?act=detailwork&xuli=listcategory&id=1">Chăm sóc trẻ em</a></li>
                                <li class="category__item"><a href="?act=detailwork&xuli=listcategory&id=2">Dọn dẹp nhà</a></li>
                                <li class="category__item"><a href="?act=detailwork&xuli=listcategory&id=3">Chăm sóc người già</a></li>
                                <li class="category__item"><a href="?act=detailwork&xuli=listcategory&id=4">Giúp việc theo giờ hành chính</a></li>
                                <li class="category__item"><a href="?act=detailwork&xuli=listcategory&id=5">Giúp việc tết nguyên đám</a></li>
                            </ul>
                        </div>

                        <div class="nav-left__filter-product">
                            <div class="nav-left__filter-head">
                                <h2>Lọc công việc</h2>
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
                                        <input type ="radio" name ="radio" class="input-filter__radio" value="price-asc" id="price_asc" onclick="filterProduct('asc','luong','<?php echo $cate?>')">
                                        <label for="price_asc">Lương từ thấp đến cao</label><br></li>
                                    </li>
                                    <li class="filter-collocation__item">
                                        <input type ="radio" name ="radio" class="input-filter__radio" value="price-desc" id="price_desc" onclick="filterProduct('desc','luong','<?php echo $cate?>')">
                                        <label for="price_desc">Lương từ cao đến thấp</label><br></li>
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
                        <div class="nav-left__filter-product">
                            <div class="filter-product__price">
                                <h1>Theo lương</h1>
                                <label style="padding: 15px 0;"><span>Lương: </span> 
                                <input type="text" id="amount" readonly  style="border: none;"/></label>
                                <input type="hidden" id="amount2" name="shop" />
                                <div id="slider-range"></div></br>
                                <button type="submit" class="btn btn-search-product">Tìm kiếm</button>
                            </div>
                        </div>
                        <div class="nav-left__filter-product">
                        </div>
                    </div>
                    <div class="product-list col-lg-7" >
                        
                        <div class="container">
                            
                            <?php 
                            for ($i = 0; $i < (count($data_work)); $i++) {
                            ?> 
                            <div class="work_new_content">    
                                <a href="?act=detailwork&cv=<?=$data_work[$i]['maCV']?>" style="display: block;">
                                    <div style="display: flex;">
                                        <div class="work_new_content_img">
                                            <img style="width:150px;height:150px;" src="./Publics/images/<?php echo $data_work[$i]['tenHinh'] ?>" alt="">
                                        </div>
                                        <div class="work_new_content_right">
                                            <p class="work_new_name"><?= $data_work[$i]['tenCV'] ?></p>
                                            <p class="work_new_detail">Khu vực làm việc: <?= $data_work[$i]['tenQuan'] ?></p>
                                            <p class="work_new_detail">Mô tả: <?= $data_work[$i]['moTa'] ?></p>
                                            <p class="work_new_detail">Người tuyển dụng: <?= $data_work[$i]['hoTen'] ?></p>
                                            <p class="work_new_detail">Số lượng người làm: <?= $data_work[$i]['soLuong'] ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php } ?>
                      
                        </div>
                    </div>
                    <div class="col col-lg-2" style="visibility: visible; -webkit-animation-name: fadeInDown; animation-name: fadeInDown;">
                        <p class="link-btn big-a">
                            <a href="" class="btn btn-success">Đăng tin tuyển dụng
                                <i class="fa fa-chevron-circle-right"></i>
                            </a>
                        </p>
                        <p class="link-btn big-a">
                            <a href="" class="btn btn-success">Đăng tin tìm việc
                                <i class="fa fa-chevron-circle-right"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>