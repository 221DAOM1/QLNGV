<section id="slider">
    <div class="container">
        <ul class="slider-list">
            <?php 
                foreach($data_banner as $banner) {
                    ?>
                    <li class="slider-list__item ">
                        <a href="">
                            <img src="./Publics/<?php echo $banner['hinhAnh'] ?>" alt="">
                        </a>
                    </li>
            <?php } ?>                        
        </ul>
    </div>
</section>
<script src="./Publics/js/countdown.js"></script>
