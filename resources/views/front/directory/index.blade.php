@extends('layouts.front.index')
@section('content')

<link rel="stylesheet" href="./css/directory/main.css">

<div class="container-fluid px-0">
    <div class="breadcrumbs">
        <div class="wrap">
            <div class="wrap_float">
                <a href="#">Home</a>
                <span class="separator">/</span>
                <a href="#">Travel List Right Sidebar</a>
            </div>
        </div>
    </div>
    <div class="page contacts-page full-width">

        <div class="container-fluid px-0">
            <div class="row mx-0 g-0">
                <div class="col-12">
                    <div class="border-top border-bottom">
                        <div class="d-flex justify-content-center py-2">
                            <h5 class="text-center font-weight-bold">
                                <svg style="width: 8%;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                                Filter
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .directory-content {
                display: flex;
                padding-top: 13px;
                padding-left: 8px;
                overflow-x: scroll;
                overflow-y: hidden;
                -webkit-overflow-scrolling: touch;
                -ms-overflow-style: none;
                position: relative;
                scrollbar-width: none;
            }

            .card-content {
                -webkit-flex-grow: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                -webkit-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                margin-left: 8px;
                min-width: 0;
                flex-basis: 66%;
            }

            .card-content {
                position: relative;
            }

            .card-image-container {
                position: relative;
                height: 160px;
                width: 100%;
            }

            .card-image-container .image-holder {
                background-color: #faf1ed;
                background-position: 50%;
                background-repeat: no-repeat;

                height: 100%;
                width: 100%;
                position: relative;
            }

            .card-img, .card-img-bottom, .card-img-top {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .card-content h5 {
                display: block;
                font-size: 14px;
                line-height: 18px;
                font-weight: 700;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .btn-order {
                color: rgb(255 255 255 / 93%);
                background-color: rgba(11, 176, 201, 0.933);;
                border: 1px solid rgba(11, 176, 201, 0.933);
                border-radius: 18px;
                line-height: 18px;
                font-size: 14px;
                font-weight: 700;
                padding: 8px 16px;
            }

            
        </style>

        <div class="container-fluid px-0 directory-container mt-3 pb-5">
            <div class="row mx-0 g-0">
                <div class="col-12">
                    <div class="d-flex justify-content-between directory-list px-3 pt-2">
                        <div>
                            <p>Delivery Available</p>
                        </div>
                        <div class="text-end">
                            <a href="#">See All</a>
                        </div>
                    </div>
                    <div class="d-flex directory-content">
                        <div class="card card-content">
                            <div class="card-image-container">
                                <div class="image-holder">
                                    <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Restaurant">
                                </div>
                            </div>
                            <div class="card-body position-relative">
                              <h5 class="card-title">Nourish Cafe</h5>
                              <a href="#" class="btn btn-primary btn-order">Order Online</a>
                            </div>
                        </div>

                        <div class="card card-content">
                            <div class="card-image-container">
                                <div class="image-holder">
                                    <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Restaurant">
                                </div>
                            </div>
                            <div class="card-body position-relative">
                              <h5 class="card-title">Nourish Cafe</h5>
                              <a href="#" class="btn btn-primary btn-order">Order Online</a>
                            </div>
                        </div>

                        <div class="card card-content">
                            <div class="card-image-container">
                                <div class="image-holder">
                                    <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1267&q=80" class="card-img-top" alt="La Brizza">
                                </div>
                            </div>
                            <div class="card-body position-relative">
                              <h5 class="card-title">Nourish Cafe</h5>
                              <a href="#" class="btn btn-primary btn-order">Order Online</a>
                            </div>
                        </div>

                        {{-- <div class="card card-content" style="width: 18rem;">
                            
                            <div class="card-body">
                              <h5 class="card-title">The Mediteranian</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                        <div class="card card-content" style="width: 18rem;">
                            
                            <div class="card-body">
                              <h5 class="card-title">La Brizza</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div> --}}
                        {{-- <div class="Tu970R9Q _1FPHoAYb">
                            <div class="_1m-zmplc _2dSbfHm2">
                                <div class="_4XSC4VsR">
                                    <div class="_1HwoWvBJ">
                                        <div class="_15aaPtHM D1m_VFgO _2a-PzfE-">
                                            <span class="_1YkiZl2_ _2geKhlYH">
                                                <span class="_1tvInqmQ _1T_s6QZp">
                                                    <svg viewBox="0 0 24 24" width="1em" height="1em" class="_3nS1tofR iG08Yf8B">
                                                        <path d="M12 2C6.487 2 2 6.487 2 12c0 5.515 4.487 10 10 10 5.515 0 10-4.485 10-10 0-5.513-4.485-10-10-10zm4.688 10.911c-.975 1.188-4.687 4.434-4.687 4.434S8.258 14.1 7.29 12.903c-1.14-1.411-1.12-3.241.049-4.351.611-.58 1.42-.898 2.279-.898s1.668.318 2.279.898l.096.092.09-.087a3.296 3.296 0 012.278-.897c.86 0 1.669.318 2.277.897 1.201 1.139 1.219 2.929.05 4.354z"></path>
                                                    </svg>
                                                </span>
                                                <span class="_1tvInqmQ xIyKWMUr">
                                                    <svg viewBox="0 0 24 24" width="1em" height="1em" class="_3nS1tofR iG08Yf8B">
                                                        <path d="M14.361 8.768c-.574 0-1.111.211-1.516.594l-.854.812-.861-.819c-.401-.382-.939-.592-1.513-.592s-1.111.21-1.514.593c-.876.832-.589 2.059.048 2.847.726.896 2.961 2.89 3.845 3.667.878-.779 3.098-2.771 3.831-3.665.662-.808.936-2 .047-2.844a2.182 2.182 0 00-1.513-.593z"></path>
                                                        <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm4.688 10.911c-.975 1.188-4.687 4.435-4.687 4.435s-3.743-3.247-4.711-4.442c-1.141-1.411-1.12-3.241.049-4.351.61-.58 1.419-.898 2.279-.898s1.668.319 2.278.898l.096.091.09-.086a3.291 3.291 0 012.278-.897c.86 0 1.668.317 2.279.897 1.2 1.138 1.218 2.927.049 4.353z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="/Restaurant_Review-g1219108-d20000538-Reviews-Nourish_Cafe-Ungasan_Nusa_Dua_Peninsula_Bali.html">
                                            <div class="YAmFZwDA">
                                                <div class="ZVAUHZqh" style="height: 100%; width: 100%; position: relative;">
                                                    <img class="_1a4WY7aS RcPVTgNb" src="https://media-cdn.tripadvisor.com/media/photo-s/1c/03/9b/46/delicious-beetroot-latte.jpg" alt="" style="height: 100%; width: 100%; object-fit: cover;">
                                                    <div class="_1a4WY7aS"></div>
                                                </div>
                                                <div class="_1S2SRKze">
                                                    <div class="_2IkR4tZQ _2mEHwikS">
                                                        <span class="DrjyGw-P _26S7gyB4 _1dimhEoy">Sponsored</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="_2zpBCQF-">
                                        <a href="/Restaurant_Review-g1219108-d20000538-Reviews-Nourish_Cafe-Ungasan_Nusa_Dua_Peninsula_Bali.html" class="_3ghemSIy">Nourish Cafe</a>
                                        <a href="/Restaurant_Review-g1219108-d20000538-Reviews-Nourish_Cafe-Ungasan_Nusa_Dua_Peninsula_Bali.html">
                                            <div class="zTTYS8QR" aria-label="4.5 of 5 bubbles. 9 reviews">
                                                <svg class="zWXXYhVR" viewBox="0 0 68 12" width="68" height="12" aria-label="" title="">
                                                    <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="scale(0.5)"></path>
                                                    <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(14 0) scale(0.5)"></path>
                                                    <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(28 0) scale(0.5)"></path>
                                                    <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(42 0) scale(0.5)"></path>
                                                    <path d="M 12 0C5.389 0 0 5.389 0 12c0 6.62 5.389 12 12 12 6.62 0 12-5.379 12-12S18.621 0 12 0zm0 2a9.984 9.984 0 0110 10 9.976 9.976 0 01-10 10z" transform="translate(56 0) scale(0.5)"></path>
                                                </svg>
                                                <span class="DrjyGw-P _26S7gyB4 _14_buatE _1dimhEoy">
                                                    <span class="_1pFNzDPe">9</span>
                                                </span>
                                            </div>
                                        </a>
                                        <div class="_2aNTqajR">
                                            <span class="_1EJwJc7S">Pizza, Cafe, Healthy</span>
                                            <span class="l8xh6q-c"></span>
                                            <span class="_2dGTp24u">$</span>
                                        </div>
                                        <a href="/Restaurant_Review-g1219108-d20000538-Reviews-Nourish_Cafe-Ungasan_Nusa_Dua_Peninsula_Bali.html">
                                            <div class="_6V39QIvi">
                                                <button class="_3L3LNeQW _22upaSQN _2_0uiZjW _1ZikuLgb _1C95-Ec1" type="button">Order Online</button>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </div> --}}
                </div>
                </div>
            </div>
        </div>


        {{-- <div class="wrap">
            <div class="destinations">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="section_content" style="padding-left:10%;padding-right:5%;">
                            <div class="box_image">
                                <a href="/home" class="logo">
                                    <img src="/images/icon-restaurant.svg" alt="" >
                                </a>
                                <label >Restaurant</label>
                            </div>
                            
                            <div class="box_image">
                                <a href="/'home" class="logo">
                                    <img src="/images/icon-cafe.svg" alt="" >
                                </a>
                                <label >Cafe</label>
                            </div>
                            
                            <div class="box_image">
                                <a href="/home" class="logo">
                                    <img src="/images/icon-bar.svg" alt="" >
                                </a>
                                <label >Bar</label>
                            </div>
                                   
                            <div class="box_image2" >
                                <a href="/home" class="logo">
                                    <img src="/images/icon-tour.svg" alt="" >
                                </a>
                                <label >Tour Attraction</label>
                            </div>
                            
                            <div class="box_image">
                                <a href="/home" class="logo">
                                    <img src="/images/icon-hotel.svg" alt="" >
                                </a>
                                <label >Hotel & Resort</label>
                            </div>
                            
                            <div class="box_image">
                                <a href="/home" class="logo">
                                    <img src="/images/icon-shopping.svg" alt="" >
                                </a>
                                <label >Shopping Center</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}


        {{-- <div class="wrap">
            <div class="wrap_float">
                <div class="page_head">
                    <div class="gridywrap" >
                        <div class="gridy-1 " style="padding-left:5%;padding-right:5%; ">
                       
                            <div class="gridy-3 " style="height: 50%;padding: 0px;">
                                  <img src="https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016" style="width: 100%;">
                            </div>
                             <div class="gridy-3" style="box-shadow: inset 0 0 0 0px #fff;">
                                    <label style="font-size: 17px;font-weight: bolder;">Covid-19</label>
                                    <br>
                                    <div>
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Restaurant yang melakukan tindakan pencegahan </div>
                                    </div>
                                    
                            </div>
                            <hr >
                            <div class="gridy-3" style="box-shadow: inset 0 0 0 0px #fff;">
                                    <label style="font-size: 17px;font-weight: bolder;">Jenis Properti</label>
                                    <br>
                                    <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Restaurant </div>
                                    </div>
                                    <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Makan Cepat</div>
                                    </div>
                                    <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Makanan Penutup </div>
                                    </div>
                                    <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Kopi & Teh </div>
                                    </div>
                                    
                            </div>
                            <hr >
                            <div class="gridy-3" style="box-shadow: inset 0 0 0 0px #fff;">
                                    <label style="font-size: 17px;font-weight: bolder;">Keunggulan Restaurant</label>
                                    <br>
                                     <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Pengiriman </div>
                                    </div>
                                    <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Bawa Pulang </div>
                                    </div>
                                    <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Pelayanan di Meja  </div>
                                    </div>
                                    <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Reservasi  </div>
                                    </div>
                                    
                            </div>
                            <hr >
                            <div class="gridy-3" style="box-shadow: inset 0 0 0 0px #fff;">
                                    <label style="font-size: 17px;font-weight: bolder;">Makanan</label>
                                    <br>
                                     <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Sarapan </div>
                                    </div>
                                    <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Brunch </div>
                                    </div>
                                    <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Makan Siang  </div>
                                    </div>
                                    <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Makan Malam </div>
                                    </div>
                                    
                            </div>
                            <hr >
                            <div class="gridy-3" style="box-shadow: inset 0 0 0 0px #fff;">
                                    <label style="font-size: 17px;font-weight: bolder;">Reservasi</label>
                                    <br>
                                     <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Reservasi Online </div>
                                    </div>
                                    
                            </div>
                            <hr >
                            <div class="gridy-3" style="box-shadow: inset 0 0 0 0px #fff;">
                                    <label style="font-size: 17px;font-weight: bolder;">Harga</label>
                                    <br>
                                     <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Makanan Murah </div>
                                    </div>
                                    <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Kelas Menengah </div>
                                    </div>
                                    <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Restaurant Mewah  </div>
                                    </div>
                            </div>
                            <hr >
                            <div class="gridy-3" style="box-shadow: inset 0 0 0 0px #fff;">
                                    <label style="font-size: 17px;font-weight: bolder;">Masakan</label>
                                    <br>
                                     <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Asia </div>
                                    </div>
                                    <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Indonesia </div>
                                    </div>
                                    <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Internasional  </div>
                                    </div>
                            </div>
                            <hr >
                            <div class="gridy-3" style="box-shadow: inset 0 0 0 0px #fff;">
                                    <label style="font-size: 17px;font-weight: bolder;">Hidangan</label>
                                    <br>
                                     <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Salad </div>
                                    </div>
                                    <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Ikan </div>
                                    </div>
                                    <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Jus & Smoothie </div>
                                    </div>
                            </div>
                            <hr >
                            <div class="gridy-3" style="box-shadow: inset 0 0 0 0px #fff;">
                                    <label style="font-size: 17px;font-weight: bolder;">Batasan Menu Makanan</label>
                                    <br>
                                     <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Sesuai untuk vegetarian </div>
                                    </div>
                                    <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Pilihan Vegan </div>
                                    </div>
                                    <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Halal </div>
                                    </div>
                            </div>
                            <hr >
                            <div class="gridy-3" style="box-shadow: inset 0 0 0 0px #fff;">
                                    <label style="font-size: 17px;font-weight: bolder;">Cocok untuk</label>
                                    <br>
                                     <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Keluarga dengan anak-anak </div>
                                    </div>
                                    <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Anak-anak </div>
                                    </div>
                                    <div style="margin-bottom: 3px;">
                                        <div style="width: 10%;"><input type="checkbox" name=""></div>
                                        <div style="width: 90%;">Grup Besar </div>
                                    </div>
                            </div>
                           
                        
                      </div>
                      <div class="gridy-2" style="background-color: #fff;box-shadow: inset 0 0 0 0px #fff;">
                        <div style="width: 70%;">780 hasil cocok dengan penyaring AndaKosongkan semua penyaring</div>
                        <div style="width: 30%;">Urut berdasarkan: </div>
                      

                        <div class="gridy-3" style="margin-top: 30px; box-shadow: inset 0 0 0 0px #fff;" >
                            <div class="gridy-1" style="padding: 0px;">
                                <img src="https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016" style="width: 100%;">
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               <a href="/detail_directory">1. Title Image</a>
                               <hr>
                            </div>

                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;" >
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                        <div class="gridy-3" style="margin-top: 30px;box-shadow: inset 0 0 0 0px #fff;">
                            <div class="gridy-1" style="padding: 0px;">
                                <img src="https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016" style="width: 100%;">
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               <a href="/detail_directory">1. Title Image</a>
                               <hr>
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                      
                         <div class="gridy-3" style="margin-top: 30px;box-shadow: inset 0 0 0 0px #fff;">
                            <div class="gridy-1" style="padding: 0px;">
                                <img src="https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016" style="width: 100%;">
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               <a href="/detail_directory">1. Title Image</a>
                               <hr>
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                       <div class="gridy-3" style="margin-top: 30px;box-shadow: inset 0 0 0 0px #fff;">
                            <div class="gridy-1" style="padding: 0px;">
                                <img src="https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016" style="width: 100%;">
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               <a href="/detail_directory">1. Title Image</a>
                               <hr>
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                       <div class="gridy-3" style="margin-top: 30px;box-shadow: inset 0 0 0 0px #fff;">
                            <div class="gridy-1" style="padding: 0px;">
                                <img src="https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016" style="width: 100%;">
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               <a href="/detail_directory">1. Title Image</a>
                               <hr>
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                       <div class="gridy-3" style="margin-top: 30px;box-shadow: inset 0 0 0 0px #fff;">
                            <div class="gridy-1" style="padding: 0px;">
                                <img src="https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016" style="width: 100%;">
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               <a href="/detail_directory">1. Title Image</a>
                               <hr>
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                       <div class="gridy-3" style="margin-top: 30px;box-shadow: inset 0 0 0 0px #fff;">
                            <div class="gridy-1" style="padding: 0px;">
                                <img src="https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016" style="width: 100%;">
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               <a href="/detail_directory">1. Title Image</a>
                               <hr>
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                       <div class="gridy-3" style="margin-top: 30px;box-shadow: inset 0 0 0 0px #fff;">
                            <div class="gridy-1" style="padding: 0px;">
                                <img src="https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016" style="width: 100%;">
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               <a href="/detail_directory">1. Title Image</a>
                               <hr>
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                       <div class="gridy-3" style="margin-top: 30px;box-shadow: inset 0 0 0 0px #fff;">
                            <div class="gridy-1" style="padding: 0px;">
                                <img src="https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016" style="width: 100%;">
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               <a href="/detail_directory">1. Title Image</a>
                               <hr>
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                       <div class="gridy-3" style="margin-top: 30px;box-shadow: inset 0 0 0 0px #fff;">
                            <div class="gridy-1" style="padding: 0px;">
                                <img src="https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016" style="width: 100%;">
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               <a href="/detail_directory">1. Title Image</a>
                               <hr>
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                       <div class="gridy-3" style="margin-top: 30px;box-shadow: inset 0 0 0 0px #fff;">
                            <div class="gridy-1" style="padding: 0px;">
                                <img src="https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016" style="width: 100%;">
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               <a href="/detail_directory">1. Title Image</a>
                               <hr>
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                       <div class="gridy-3" style="margin-top: 30px;box-shadow: inset 0 0 0 0px #fff;">
                            <div class="gridy-1" style="padding: 0px;">
                                <img src="https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016" style="width: 100%;">
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               <a href="/detail_directory">1. Title Image</a>
                               <hr>
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                       <div class="gridy-3" style="margin-top: 30px;box-shadow: inset 0 0 0 0px #fff;">
                            <div class="gridy-1" style="padding: 0px;">
                                <img src="https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016" style="width: 100%;">
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               <a href="/detail_directory">1. Title Image</a>
                               <hr>
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                       <div class="gridy-3" style="margin-top: 30px;box-shadow: inset 0 0 0 0px #fff;">
                            <div class="gridy-1" style="padding: 0px;">
                                <img src="https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016" style="width: 100%;">
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               <a href="/detail_directory">1. Title Image</a>
                               <hr>
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                       <div class="gridy-3" style="margin-top: 30px;box-shadow: inset 0 0 0 0px #fff;">
                            <div class="gridy-1" style="padding: 0px;">
                                <img src="https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016" style="width: 100%;">
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               <a href="/detail_directory">1. Title Image</a>
                               <hr>
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                      

                      </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@include('components.front.pagefooter')
@endsection