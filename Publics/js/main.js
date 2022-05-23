let productListFruits = document.getElementById('owl-fruilt-slider')
let productListDry = document.getElementById('owl-slider-dry')
let item = document.querySelector.bind(document)
let items= document.querySelectorAll.bind(document)
const listbtnAddCart = document.querySelectorAll('.add-cart')
let headerEl = document.getElementById('header')
var sticky = headerEl.offsetTop+200;
var rootElement = document.documentElement
console.log(listbtnAddCart);

const App = {
    defaulthref: listbtnAddCart.length != 0 ? listbtnAddCart[0].search.substring(0, listbtnAddCart[0].search.length - 1) : '',
    arrayValueCheckbox: [],
    arrayValuePrice: [],
    arrayIdHeart: [],
    arrayListFavorites : [],
    statusCheckbox: true,
    sliderProducts: function(element) {
        var $sliderList = $(`${element}`)
        
        if($sliderList!=null) {
            console.log($sliderList);
            $sliderList.trigger('destroy.owl.carousel');
            $sliderList.owlCarousel({
                margin:10,
                loop:true,
                nav:true,
                autoplay:true,
                autoplayTimeout:5000,
                autoplayHoverPause:true,
                responsive:{
                    400:{
                        items:2
                    },
                    600:{
                        items:3
                    },
                    800: {
                        item: 4
                    },
                    1000:{
                        items:5
                    }
                }
            });
        }
    },
    eventDom: function() {
        let _this = this;
        


        window.addEventListener('scroll',()=> {
            // console.log(window.pageYOffset);
            if (window.pageYOffset >= sticky) {
                headerEl.classList.add("sticky")
                item('.box-button-top').classList.add('show-back')
            } else {
                headerEl.classList.remove("sticky");
                item('.box-button-top').classList.remove('show-back')
            }
        })

        // 
        const btnPaypal = item('.btn-paypel')
        if(btnPaypal!=null) {
            btnPaypal.addEventListener('click', function(e){
                e.preventDefault();
                item('.pay-error__note p').style.display = 'block';
            })
        }

        // click to top
        item('.box-button-top').addEventListener("click", function() {
            rootElement.scrollTo({
                top: 0,
                behavior: "smooth"
              })
        })
        
        if(item('.btn-rating')){
            item('.btn-rating').addEventListener("click", function() {
                Toastify({
                    text: "Bạn vừa đánh giá sản phẩm",
                    duration: 3000,
                    destination: "https://github.com/apvarun/toastify-js",
                    newWindow: true,
                    close: true,
                    gravity: "top", // `top` or `bottom`
                    position: "right", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    style: {
                        background: "linear-gradient(to right, #00b09b, #96c93d)",
                    },
                    onClick: function(){} // Callback after click
                }).showToast();

                setTimeout(function(){
                    window.location.href = 'http://localhost/doancuoiky/WebFood/?act=home'
                },3000)
            })
        }

        // Click bar menu
        let iconDown = document.getElementById('icon-down-mobile')
        let listMenuDown = document.querySelector('.nav-item__down-mobile')
        let barMenu = document.querySelector('.bar-menu.category-action')
        let iconDonws = document.querySelectorAll('.nav-item__down-item-mobile .fa-chevron-down')
        
        let listMenuDownItem = document.querySelectorAll('.nav-list__down-mobile')
        iconDown.addEventListener("click", function() {
            listMenuDown.classList.toggle('nav-item__down-mobile-active');
            this.classList.toggle('icon-down-mobile-active')
            
        })

        barMenu.addEventListener('click', function() {
            item('.header-nav-mobile').classList.toggle('header-nav-mobile-active')
            item('.overlay-nav-mobile').classList.toggle('overlay-nav-mobile-active')
        })
        item('.overlay-nav-mobile').addEventListener("click", function(){
            item('.overlay-nav-mobile').classList.toggle('overlay-nav-mobile-active')
            item('.header-nav-mobile').classList.toggle('header-nav-mobile-active')
        })

        iconDonws.forEach((iconDonw,index) => {
            iconDonw.addEventListener('click', function() {
                listMenuDownItem[index].classList.toggle('nav-item__down-item-mobile-active')
                iconDonw.classList.toggle('icon-down-mobile-active')
            })
        });

        // Active nav link
        const currentLocation = location.href
        const menuItems = items('.nav-list__item .nav-list__item-link')
        for (let i = 0; i < menuItems.length; i++) {
            if(menuItems[i].href === currentLocation){
                menuItems[i].className = 'active'
            }
        }

        // Click tab order table
        const listTab = items('.tab-order__item')
        const listTab_table = items('.table.table-cart.table-order')
        listTab.forEach((element,index) => {
            element.addEventListener('click', function() {
                listTab.forEach(element => {
                    element.classList.remove('active');
                });
                this.classList.add('active');
                listTab_table.forEach(element => {
                    element.classList.remove('active');
                });
                listTab_table[index].classList.add('active');
            })
        });

        // Checkbox
        const listCheckbox = items('.toggle__input')
        
        listCheckbox.forEach((element, index) => {
            console.log(element.getAttribute("id"));
            element.addEventListener('click',function(){
                let valueCheck = this.value
                var listValue = _this.arrayValueCheckbox
                this.classList.toggle('checkbox-checked')

                let valuePrice = this.getAttribute("id")
                var listValuePrice = _this.arrayValuePrice

                console.log("day la truong hop ngoai if ",listValue);
                if(this.classList.contains('checkbox-checked')) {
                    if(listValue.length == 0){
                        listValue.push(valueCheck)
                        console.log("day la truong hop bang 0",listValue);
                        _this.renderUICheckbox(listValue)
                        localStorage.setItem('listValue',JSON.stringify(listValue))

                        // listValuePrice
                        listValuePrice.push(valuePrice)
                        localStorage.setItem('listValuePrice',JSON.stringify(listValuePrice))
                    } else {
                        listValue = JSON.parse(localStorage.getItem('listValue'))
                        listValue.push(valueCheck)
                        console.log("day truong hop khac 0",listValue);
                        _this.renderUICheckbox(listValue)
                        localStorage.setItem('listValue',JSON.stringify(_this.unique(listValue)))

                        // listValuePrice
                        listValuePrice = JSON.parse(localStorage.getItem("listValuePrice"))
                        listValuePrice.push(valuePrice)
                        localStorage.setItem('listValuePrice',JSON.stringify(_this.unique(listValuePrice)))
                    }
                }else{
                    const newListValue = JSON.parse(localStorage.getItem('listValue'))
                    let filterResult = newListValue.filter(function(element){
                        return element !== valueCheck;
                      });
                    console.log("day truong hop uncheck vi tri", filterResult);
                    localStorage.setItem('listValue',JSON.stringify(_this.unique(filterResult)))
                    _this.renderUICheckbox(filterResult)

                    // listValuePrice
                    const newListValuePrice = JSON.parse(localStorage.getItem('listValuePrice'))
                    let filterResultPrice = newListValuePrice.filter(function(element){
                        return element != valuePrice
                    })
                    localStorage.setItem('listValuePrice',JSON.stringify(_this.unique(filterResultPrice)))
                    
                }
            })
        });


        // remove checkbox
        const elRemoveAll = item('.filter__remove')
        if(elRemoveAll!==null) {
            elRemoveAll.addEventListener('click',() => {
                // item('.pagination').style.display = 'block'
                const listValue = []
                const listValuePrice = []
                localStorage.setItem('listValue', JSON.stringify(listValue))
                localStorage.setItem('listValuePrice', JSON.stringify(listValuePrice))
    
                listCheckbox.forEach((element, index) => {
                    element.checked = false
                    element.classList.remove('checkbox-checked')
                })
                _this.renderUICheckbox([])
            })
        } 
    },
    renderUICheckbox: function(arr) {
        let elFilterSelected = item('.filter__conterner__selected')
        let elFilterList = item('.filter-container__selected-filter-list ul')
        if(arr.length > 0) {
            elFilterSelected.classList.remove('filter__hiddent')
            rootElement.scrollTo({
                top: 0,
                behavior: "smooth"
            })
            let newArr = this.unique(arr)
            var htmls = newArr.map((value) => {
                return `
                <li class="filter-container__selected-filter-item">
                    <span class="filter-selected__item">
                        ${value}
                    </span>
                </li>
                `
            }).join('')
            elFilterList.innerHTML = htmls
            
        } else {
            elFilterSelected.classList.add('filter__hiddent')
            rootElement.scrollTo({
                top: 0,
                behavior: "smooth"
            })
        }
    },
    getList: function() {
        const listValuePrice =JSON.parse(localStorage.getItem('listValuePrice'))
        return listValuePrice
    },
    unique: function(arr) {
        var newArr = []
        newArr = arr.filter(function (item) {
          return newArr.includes(item) ? '' : newArr.push(item)
        })
        return newArr
      },
    // Slider thumb detail
    productDetailSlider: function() {
        const listThumbnailDetails = document.querySelectorAll('.product-detail-left__list-thumb ul li')
        const listThumbnails = document.querySelectorAll('.product-detail-left__list-thumb ul li img')
        const productThumbnail = document.querySelector('#product-detail-left__thumbnail img')
        listThumbnailDetails.forEach((itemThumbnail, index) => {
            listThumbnailDetails[0].classList.add('active')
            itemThumbnail.addEventListener('click', () => {
                for (let index = 0; index < listThumbnailDetails.length; index++) {
                    listThumbnailDetails[index].classList.remove('active')
                }
                itemThumbnail.classList.add('active')
                productThumbnail.src = listThumbnails[index].src
                let stringSrc = 'url("'+ `${listThumbnails[index].src}` + '")'
                console.log(stringSrc);
                item('.js-image-zoom__zoomed-image').style.backgroundImage = stringSrc
                console.log(item('.js-image-zoom__zoomed-image').style.backgroundImage);
            })
        });
    },
    addCart: function() {
        const listbtnAddCart = document.querySelectorAll('.btn-add-cart')
        const modelAddCart = document.querySelector('.model-add-cart')
        const style = 'top: 40px;'
        console.log(modelAddCart);
        listbtnAddCart.forEach(btnAddCart => {
            btnAddCart.addEventListener('click',function(e){
                console.log(btnAddCart.href);
                Toastify({
                    text: "Bạn vừa thêm sản phẩm vào giỏ hàng",
                    duration: 4000,
                    destination: "https://github.com/apvarun/toastify-js",
                    newWindow: true,
                    close: true,
                    gravity: "top", // `top` or `bottom`
                    position: "right", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    style: {
                        background: "linear-gradient(to right, #00b09b, #96c93d)",
                    },
                    onClick: function(){} // Callback after click
                }).showToast();
                setTimeout(function(){
                    window.location.href = btnAddCart.href
                },1000)
                e.preventDefault()
            //    clearInterval(idTime)
            })
        });
    },
    quantityCart: function() {
        const btnMinus = item('.custom-quantity .btn-minus')
        const btnPlus = item('.custom-quantity .btn-plus')
        let qtyInputEl = item('.qty-input')
        const listbtnAddCart = document.querySelectorAll('.add-cart')
        const _this = this
        let valueInput = qtyInputEl.value
        
        const soLuongMax = item('#so-luong-max').value
        if(soLuongMax <=1) {
            btnMinus.style.pointerEvents = 'none'
            btnPlus.style.pointerEvents = 'none'
        }
        btnMinus.addEventListener('click', function(e) {
            e.preventDefault()
            valueInput == 1 ? valueInput = 1 : valueInput--
            if(valueInput < soLuongMax) {
                item('#number-over').style.display = 'none'
            }
            qtyInputEl.value = `${valueInput}`
            // console.log(_this.defaulthref + '' + valueInput);
            if(listbtnAddCart[0]) {
                listbtnAddCart[0].href = _this.defaulthref + '' + valueInput
            }
        })
        btnPlus.addEventListener('click', function(e) {
            e.preventDefault()
            valueInput == soLuongMax ? valueInput = soLuongMax : valueInput++
            if(valueInput === soLuongMax) {
                item('#number-over').style.display = 'block'
            }
            qtyInputEl.value = `${valueInput}`
            // console.log(_this.defaulthref + '' + valueInput);
            if(listbtnAddCart[0]) {
                listbtnAddCart[0].href = _this.defaulthref + '' + valueInput
            }
        })
    },
    // addFavorite: function() {
    //     let elListIcon = items('.icon-heart-element')
    //     console.log(elListIcon);
    //     let elCountHeart = item('.heart-icon__count').innerText
    //     console.log('day la yeu thich', elCountHeart);
    //     let _this = this
    //     let arrayIdHeart = _this.arrayIdHeart
    //     if(arrayIdHeart.length ===0) {
    //         arrayIdHeart = JSON.parse(localStorage.getItem("data-heart"))
    //     }
    //     console.log(arrayIdHeart);
    //     elListIcon.forEach(item => {
    //         item.addEventListener('click', function(){
    //             if(item.classList.contains('icon-heart-element--active')) {
    //                 Toastify({
    //                     text: "Bạn đã xóa sản phẩm khỏi danh mục yêu thích",
    //                     duration: 4000,
    //                     destination: "https://github.com/apvarun/toastify-js",
    //                     newWindow: true,
    //                     close: true,
    //                     gravity: "top", // `top` or `bottom`
    //                     position: "right", // `left`, `center` or `right`
    //                     stopOnFocus: true, // Prevents dismissing of toast on hover
    //                     style: {
    //                         background: "linear-gradient(to right, #00b09b, #96c93d)",
    //                     },
    //                     onClick: function(){} // Callback after click
    //                 }).showToast();
    //             }else {
    //                 Toastify({
    //                     text: "Bạn vừa thêm sản phẩm vào danh mục yêu thích",
    //                     duration: 4000,
    //                     destination: "https://github.com/apvarun/toastify-js",
    //                     newWindow: true,
    //                     close: true,
    //                     gravity: "top", // `top` or `bottom`
    //                     position: "right", // `left`, `center` or `right`
    //                     stopOnFocus: true, // Prevents dismissing of toast on hover
    //                     style: {
    //                         background: "linear-gradient(to right, #00b09b, #96c93d)",
    //                     },
    //                     onClick: function(){} // Callback after click
    //                 }).showToast();
    //             }
    //             item.classList.toggle('icon-heart-element--active')
    //             var animalType = item.getAttribute("data-heart");
    //             arrayIdHeart.push(animalType);
    //             console.log(arrayIdHeart);
    //             localStorage.setItem("data-heart", JSON.stringify(_this.unique(arrayIdHeart)));
    //         })
    //     })
    //     _this.getListProductFavorites()
    // },
    // getListProductFavorites: function() {
    //     let listProductFavorites = JSON.parse(localStorage.getItem("dulieu"));
    //     let _this = this
    //     let listId = JSON.parse(localStorage.getItem("data-heart"))
    //     for (let i = 0; i < listId.length; i++) {
    //         console.log(listId[i]);
    //         for (let j = 0; j < listProductFavorites.length; j++) {
    //             if(listProductFavorites[j].MaSP === listId[i]){
    //                 _this.arrayListFavorites.push(listProductFavorites[j]);
    //                 console.log(listProductFavorites[j]);
    //             }
    //         }
    //     }
    //     _this.renderIUFavorite(_this.arrayListFavorites)
    //     _this.addFavorite()
    // },
    // renderIUFavorite: function(arr) {
    //     let elMainFavorite = item("#main-favorite")
    //     console.log(elMainFavorite);
    //     console.log('day la arrayListFavorites',arr);
    //     item(".heart-icon__count").innerText = arr.length;
    //     var htmls = arr.map((item) => {
    //         return `
    //         <div class="product-main col col-md-4" style="margin-right:0;">
    //             <form action="" method="post">
    //                 <div class="product-fruits__thumb">
    //                     <a href="?act=detail&sp=${item.MaSP}">
    //                         <img src="./public/images/${item.hinhanh}" alt="Product Title">
    //                     </a>
    //                     <div class="icon-heart-product">
    //                         <i data-heart="${item.MaSP}" class="icon-heart-element icon-heart-element--active far fa-heart"></i>
    //                     </div>
    //                 </div>
    //                 <div class="product-fruits__infos">
    //                     <h2 class="tilte-name-product">${item.TenSP}</h2>
    //                     <span class="price-text">${item.DonGia} VNĐ</span>
    //                     <a href="?act=cart&xuli=add&id=${item.MaSP}"
    //                         class="button-add-product btn-add-cart" 
    //                         value="${item.MaSP}"
    //                         name="add-button"
    //                     >Cho vào giỏ</a>
    //                 </div>
    //             </form>
    //         </div>
    //         `
    //     })
    //     if(elMainFavorite!=null){
    //         elMainFavorite.innerHTML = htmls.join('');
    //     }
    // },
    start: function() {
        this.sliderProducts('#owl-fruilt-slider')
        this.sliderProducts('#owl-slider-dry')
        this.sliderProducts('#product-sale-slider')
        this.sliderProducts('#owl-slider-cate')
        // this.addFavorite()
        this.eventDom()
        this.productDetailSlider()
        this.addCart()
        this.quantityCart()
        // this.startCount()
        console.log(this.arrayValueCheckbox)
    }  
}
 
App.start()

/* Change password js */
var checkbox = document.getElementById("radio-changePass")
  
    checkbox.onchange = function()
    {
        var container_inforC
        hange_show = document.getElementsByClassName("container-inforChange--show");
        container_inforChange_show.style = "hidden"; 
    }



