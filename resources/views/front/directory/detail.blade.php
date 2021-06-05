@extends('layouts.front.index')
@section('content')
<style type="text/css">
  .ui_button.primary {
    border-color: #000;
    border-radius: 3px;
    background-color: #000;
    color: #fff;
}
.ui_button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    position: relative;
    display: inline-block;
    padding: 8px 16px;
    font-weight: 700;
    font-family: inherit;
    border: 1px solid transparent;
    border-radius: 2px;
    background-clip: padding-box;
    box-sizing: border-box;
    font-size: 14px;
    line-height: 18px;
    text-align: center;
    text-decoration: none;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    cursor: pointer;
    transition: background-color .2s;
}
.w3-light-grey,.w3-hover-light-grey:hover,.w3-light-gray,.w3-hover-light-gray:hover{color:#000!important;background-color:#f1f1f1!important}
.w3-black,.w3-hover-black:hover{color:#fff!important;background-color:#000!important}
.search {
  
  width: 100%;
  height: 30px;
}

/* Search 1 - bg change*/
.demo-1{
  width: 100%;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
}
.demo-1 input#search{
  width: 100%;
  height: 30px;
  background: rgba(0,0,0,0.3);
  border: none;
  font-size: 10pt;
  float: left;
  color: #CCCCCC;
  padding-left: 45px;
  
  -webkit-transition: all .55s ease;
  -moz-transition: all .55s ease;
  -ms-transition: all .55s ease;
  -o-transition: all .55s ease;
  transition: all .55s ease;
}

.demo-1 input#search::-webkit-input-placeholder {
   color: #FFFFFF;
}
.demo-1 input#search:-moz-placeholder { /* Firefox 18- */
   color: #FFFFFF;  
}
.demo-1 input#search::-moz-placeholder {  /* Firefox 19+ */
   color: #FFFFFF;  
}
.demo-1 input#search:-ms-input-placeholder {  
   color: #FFFFFF;  
}

.demo-1 .icon{
  position: absolute;
  top: -4%;
  margin-left: 17px;
  margin-top: 5px;
  z-index: 1;
  color: #4f5b66;
}

  /* ANIMATION EFFECTS SEARCH ENGINE */
  .demo-1 input#search:focus, .demo-1 input#search:active{
    outline:none;
    background: #2b303b;
  }

</style>
<div class="container">
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
        <div class="wrap">
            <div class="wrap_float">
                <div class="page_head">
                    <div class="gridywrap" >
                      <div class="gridy-3 " style="padding:0px;background-color: #fff;box-shadow: inset 0 0 0 0px #fff;">
                           <div class="gridy-1 gridyhe-1">
                              <div class="gridimg" style="background-image: url(https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016)">&nbsp;</div>
                            </div>
                            <div class="gridy-1 gridyhe-1">
                              <div class="gridimg" style="background-image: url(https://unsplash.imgix.net/photo-1417722009592-65fa261f5632?q=75&fm=jpg&s=553e7d8a753f4d7b2a4161dcbe9d9801)">&nbsp;</div>
                            </div>
                            <div class="gridy-1 gridyhe-1">
                              <div class="gridimg" style="background-image: url(https://unsplash.imgix.net/photo-1417722009592-65fa261f5632?q=75&fm=jpg&s=553e7d8a753f4d7b2a4161dcbe9d9801)">&nbsp;</div>
                            </div>
                      </div>
                      <div class="gridy-3 " style="padding: 0px; background-color: #fff;box-shadow: inset 0 0 0 0px #fff;">
                          <div class="gridy-1" style="box-shadow: inset 0 0 0 0px #fff;background-color: #fff;">
                            <div class="gridy-3 gridyhe-1" style="background-color: #fff;">
                              <label style="font-weight: bolder;">Penilaian dan Ulasan</label>

                            </div>
                          </div>
                          <div class="gridy-1" style="box-shadow: inset 0 0 0 0px #fff;background-color: #fff;">
                            <div class="gridy-3 gridyhe-1" style="background-color: #fff;">
                             
                            </div>
                          </div>
                          <div class="gridy-1" style="box-shadow: inset 0 0 0 0px #fff;background-color: #fff;">
                            <div class="gridy-3 gridyhe-1" style="background-color: #fff;">
                              
                            </div>
                          </div>
                      </div>
                      <div class="gridy-3" style="text-align: center;">
                        <span>Apakah ada Hotel atau tempat liburan disini </span>
                      </div>
                      <div class="gridy-3" style="padding-left:1px;padding-right:1px;padding-top:20px;box-shadow: inset 0 0 0 0px #fff;background-color: #fff;">
                        <div class="gridy-2" style="padding-left:1px;padding-right:1px;padding-top:20px;background-color: #fff;">
                           <div class="gridy-3" style="box-shadow: inset 0 0 0 0px #fff;background-color: #fff;">
                             <span style="font-size: 1.5em;font-weight: bolder;float: left;">Ulasan (1111)</span>
                             <button class="ui_button primary" style="float: right;">Tulis Ulasan</button>
                           </div>
                           <div class="gridy-3" style="box-shadow: inset 0 0 0 0px #fff; background-color: #fff;font-size: 14px;">
                            <hr>
                            <div class="gridy-4" style="box-shadow: inset 0 0 0 0px #fff;background-color: #fff;">
                              <label style="font-weight: bold;">Peringkat Dari Wisatawan</label><br>
                              <!-- peringkat luar biasa -->
                              <input type="checkbox" name=""> Luar Biasa
                              <div class="w3-light-grey">
                                <div class="w3-black " style="height:14px;width:70%">
                                  
                                </div>
                              </div><br> <br>
                              <!-- peringkat luar biasa -->
                              <input type="checkbox" name=""> Sangat Bagus
                              <div class="w3-light-grey">
                                <div class="w3-black" style="height:14px;width:40%"></div>
                              </div><br> <br>
                              <!-- peringkat luar biasa -->
                              <input type="checkbox" name=""> Rata-Rata
                              <div class="w3-light-grey">
                                <div class="w3-black" style="height:14px;width:10%"></div>
                              </div><br> <br>
                              <!-- peringkat luar biasa -->
                              <input type="checkbox" name=""> Buruk
                              <div class="w3-light-grey">
                                <div class="w3-black" style="height:14px;width:0%"></div>
                              </div><br><br>
                              <!-- peringkat luar biasa -->
                              <input type="checkbox" name=""> Sangat Buruk
                              <div class="w3-light-grey">
                                <div class="w3-black" style="height:14px;width:0%"></div>
                              </div><br><br>
                            </div>
                            <div class="gridy-4" style="box-shadow: inset 0 0 0 0px #fff;background-color: #fff;">
                              <label style="font-weight: bold;">Jenis Wisatawan</label><br>
                              <input type="checkbox" name=""> Keluarga <br>
                              <input type="checkbox" name=""> Pasangan <br>
                              <input type="checkbox" name=""> Individu <br>
                              <input type="checkbox" name=""> Bisnis <br>
                              <input type="checkbox" name=""> Teman <br>

                            </div>
                            <div class="gridy-4" style="box-shadow: inset 0 0 0 0px #fff;background-color: #fff;">
                              <label style="font-weight: bold;">Bulan Tertentu</label><br>
                              <input type="checkbox" name=""> Mar-Mei <br>
                              <input type="checkbox" name=""> Jun-Agu <br>
                              <input type="checkbox" name=""> Sep-Nov <br>
                              <input type="checkbox" name=""> Des-Feb <br>

                            </div>
                            <div class="gridy-4" style="box-shadow: inset 0 0 0 0px #fff;background-color: #fff;">
                             <label style="font-weight: bold;">Bahasa</label><br>
                              <input type="radio" name="bahasa"> Semua Bahasa <br>
                              <input type="radio" name="bahasa"> Indonesia <br>
                              <input type="radio" name="bahasa"> Inggris <br>
                              <input type="radio" name="bahasa"> Belanda <br>
                            </div>
                            
                           </div> 
                           <div class="gridy-3" style="box-shadow: inset 0 0 0 0px #fff;background-color: #fff;">
                             <hr>
                             <label for="" style="font-weight:bold;">Lihat opini wisatawan</label>
                             <br>
                             <div class="demo-1 search">
                                <form>
                                    <span class="icon"><i class="fa fa-search"></i></span>
                                <input type="search" id="search" placeholder="Cari Ulasan" />
                                  </form>
                              </div>
                           </div>
                           <!-- -------------------------- start content -->
                           <div class="gridy-3" style="box-shadow: inset 0 0 0 0px #fff;background-color: #fff;">
                             <hr>
                             <div class="gridy-1 gridyhe-1" style="height:250px;">
                                <div class="gridimg" style="background-image: url(https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016)">&nbsp;</div>
                             </div>
                             <div class="gridy-2 gridyhe-1" style="height:250px;">
                                Content
                             </div>
                           </div>
                          <!-- -------------------------- end content -->
                          <!-- -------------------------- start content -->
                          <div class="gridy-3" style="box-shadow: inset 0 0 0 0px #fff;background-color: #fff;">
                             <hr>
                             <div class="gridy-1 gridyhe-1" style="height:250px;">
                                <div class="gridimg" style="background-image: url(https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016)">&nbsp;</div>
                             </div>
                             <div class="gridy-2 gridyhe-1" style="height:250px;">
                                Content
                             </div>
                           </div>
                          <!-- -------------------------- end content -->
                          <!-- -------------------------- start content -->
                          <div class="gridy-3" style="box-shadow: inset 0 0 0 0px #fff;background-color: #fff;">
                             <hr>
                             <div class="gridy-1 gridyhe-1" style="height:250px;">
                                <div class="gridimg" style="background-image: url(https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016)">&nbsp;</div>
                             </div>
                             <div class="gridy-2 gridyhe-1" style="height:250px;">
                                Content
                             </div>
                           </div>
                          <!-- -------------------------- end content -->
                     
                          
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