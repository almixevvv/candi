@extends('layouts.front.index')
@section('content')

<link rel="stylesheet" href="./css/contact/contact.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css">

<div class="container float-none">
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

        <div class="container-fluid px-0 mb-3">
            <div class="d-flex justify-content-around flex-column flex-md-row">
                
                <div class="contact-container">
                    <div class="contact-card mx-0 lg-mx-2">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="contact-bottom">
                            <span>
                                <h5>Home</h5>
                            </span>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <span>
                            426 East Avenue, 7th floor, New York, NY 07102
                        </span>
                    </div>
                </div>

                <div class="contact-container even">
                    <div class="contact-card mx-0 lg-mx-2">
                        <i class="fas fa-phone-square-alt"></i>
                        <div class="contact-bottom">
                            <h5>Phone</h5>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <span>
                            (021) 731 - 9564
                        </span>
                    </div>
                </div>

                <div class="contact-container odd">
                    <div class="contact-card mx-0 lg-mx-2">
                        <i class="fas fa-envelope"></i>
                        <div class="contact-bottom">
                            <h5>Email</h5>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <span>
                            contact@candi.id
                        </span>
                    </div>
                </div>

                <div class="contact-container">
                    <div class="contact-card mx-0 lg-mx-2">
                        <i class="fas fa-clock"></i>
                        <div class="contact-bottom">
                            <h5>Hours</h5>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <span>
                            Monday - Friday </br>
                            10:00 AM - 6:00 PM
                        </span>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="container-fluid" id="contactForm">
            <div class="contact-form d-flex justify-content-center text-center">
                <span class="contact-heading">
                    Contact Us
                </span>
            </div>

            <div class="form-container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="contact-input">
                            <div class="user-box">
                                <input type="text" name="userName" required>
                                <label>Your Name</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="contact-input">
                            <div class="user-box">
                                <input type="email" name="userEmail" required>
                                <label>Your Email</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="contact-input">
                            <div class="user-box">
                                <textarea name="userContact" id="userContact" required></textarea>
                                <label>Your Messages</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="user-box">
                            <input class="w-auto" type="checkbox" name="checkbox" id="contactCheck"> 
                            <label class="checkbox-label position-relative" for="contactCheck">I agree that my submitted data is being collected and stored.</label>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <button type="button" class="btn btn-secondary mt-5">Send Message</button>
                    </div>
                </div>

            </div>
        </div>

        {{-- <div class="wrap">
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
        </div> --}}
    </div>
</div>
@include('components.front.pagefooter')
@endsection