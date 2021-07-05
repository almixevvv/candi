@extends('layouts.front.index')
@section('content')
<div class="container-fluid">
    <div class="breadcrumbs">
        <div class="wrap">
            <div class="wrap_float">
                <a href="{{ route('home') }}">Home</a>
                <span class="separator">/</span>
                <a href="#">{{ ucfirst($request->path()) }}</a>
            </div>
        </div>
    </div>
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
    <div class="page contacts-page full-width">
        <div class="wrap">
            <div class="wrap_float">
                <div class="page_head">
                    <div class="gridywrap" >

                      <div class="gridy-3" style="background-color: #fff;box-shadow: inset 0 0 0 0px #fff;">
                        <div style="width: 70%;">780 hasil cocok dengan penyaring AndaKosongkan semua penyaring</div>
                        <div style="width: 30%;">Urut berdasarkan: </div>
                      

                        <div class="gridy-3" style="margin-top: 30px; box-shadow: inset 0 0 0 0px #fff;" >
                            <div class="gridy-1" style="padding: 0px;text-align: center;">
                                 <div style="position: absolute;top: 62%;background-color: #30ddd4;width:auto;right: 30px;font-size: 24px;border-radius: 50%;padding:15px;color: #fff;font-weight: bolder;">20%</div>
                                <img src="https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016" style="width: 100%; height: 200px;">
                                <br><br>

                                <label style="font-weight: bolder;font-size: 32px;">250.000</label>
                                <label style="font-weight: bolder;font-size: 24px;text-decoration: line-through;color:#8a8787;">500.000</label>
                            </div>

                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               <a href="/detail_directory">1. Title Image</a>
                               <hr>
                            </div>
                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff; padding-top: 0px;" >
                               <label>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                           </label>
                            </div>
                        </div>


                        <div class="gridy-3" style="margin-top: 30px; box-shadow: inset 0 0 0 0px #fff;" >
                            <div class="gridy-1" style="padding: 0px;text-align: center;">
                                 <div style="position: absolute;top: 62%;background-color: #30ddd4;width:auto;right: 30px;font-size: 24px;border-radius: 50%;padding:15px;color: #fff;font-weight: bolder;">20%</div>
                                <img src="https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016" style="width: 100%; height: 200px;">
                                <br><br>

                                <label style="font-weight: bolder;font-size: 32px;">250.000</label>
                                <label style="font-weight: bolder;font-size: 24px;text-decoration: line-through;color:#8a8787;">500.000</label>
                            </div>

                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               <a href="/detail_directory">1. Title Image</a>
                               <hr>
                            </div>

                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff; padding-top: 0px;" >
                               <label>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                           </label>
                            </div>
                        </div>

                        
                        <div class="gridy-3" style="margin-top: 30px; box-shadow: inset 0 0 0 0px #fff;" >
                            <div class="gridy-1" style="padding: 0px;text-align: center;">
                                 <div style="position: absolute;top: 62%;background-color: #30ddd4;width:auto;right: 30px;font-size: 24px;border-radius: 50%;padding:15px;color: #fff;font-weight: bolder;">20%</div>
                                <img src="https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016" style="width: 100%; height: 200px;">
                                <br><br>

                                <label style="font-weight: bolder;font-size: 32px;">250.000</label>
                                <label style="font-weight: bolder;font-size: 24px;text-decoration: line-through;color:#8a8787;">500.000</label>
                            </div>

                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                               <a href="/detail_directory">1. Title Image</a>
                               <hr>
                            </div>

                            <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff; padding-top: 0px;" >
                               <label>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                           </label>
                            </div>
                        </div>
                       
                      

                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.front.pagefooter')
@endsection