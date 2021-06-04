@extends('layouts.front.index')
@section('content')
<style>
    .input_bottom{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: none;
        border-bottom: 2px solid #908d8d;
        background-color:transparent;
        color:black;       }
    .input_bottom::placeholder {
        color: #908d8d;
        opacity: 1; /* Firefox */
        font-size:23px;
        font-family:Comfortaa;
        }
    .select_option{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: none;
        border: 2px solid #908d8d;
        background-color:transparent;
        color:black;       
    }
    .button_contact{
        padding: 18px 19px !important;
        line-height: 1em;
        font-size: 12px;
        background-color: #f4f4f2!important;
        color: #222222!important;
        border:1px solid black;
    }
    .button_contact:hover{
       box-shadow:3px 3px;
    }
   
    
</style>
<div class="container">
    <div class="breadcrumbs">
        <div class="wrap">
            <div class="wrap_float">
                <a href="/">Home</a>
                <span class="separator">/</span>
                <a href="#">Contact Us</a>
            </div>
        </div>
    </div>
    <div class="page contacts-page full-width">
        <div class="wrap">
            <div class="wrap_float">
                <div class="page_head">
                   <div class="gridywrap ">
                        <div class="gridy-3 " style="text-align:center;padding:5%">
                            <label for="" style="font-weight:bold; font-size:3em;">CONTACT US</label><br>
                            <select name="" id="" class="select_option" style="width:40%;float:left;">
                                <option value="">Cooperation</option>
                                <option value="">Complaint</option>
                                <option value="">Proposition</option>
                            </select>
                            <br>
                            <input type="text" class="input_bottom" style="clear:both;width:40%;float:left;" placeholder="Name">
                            <input type="email" class="input_bottom" style="width:40%;float:right;" placeholder="Email">
                            <textarea name="" id="" cols="30" rows="10" class="input_bottom" placeholder="Message"></textarea><br>
                            <input type="checkbox" style="clear:both;float:left;"> <label for="" style="float:left;">I agree that my submitted data is being collected and stored.</label>
                            <br><br>
                            <button class="button_contact">Send Message</button>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.front.pagefooter')
@endsection