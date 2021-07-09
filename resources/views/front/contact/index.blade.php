@extends('layouts.front.index')
@section('content')

<link rel="stylesheet" href="./css/contact/contact.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css">

<style>
    .btn-secondary {
        background-color: #23a8e4;
        border: #23a8e4;
    }

    .contact-card i {
        color: #23a8e4;
    }
</style>

<div class="container float-none">
    <div class="breadcrumbs">
        <div class="wrap">
            <div class="wrap_float">
                <a href="{{ route('home') }}">Home</a>
                <span class="separator">/</span>
                <a href="#">{{ ucfirst($request->path()) }}</a>
            </div>
        </div>
    </div>
    <div class="page contacts-page full-width">

        <div class="container-fluid px-0 mb-3">
            <div class="d-flex justify-content-around flex-column flex-md-row">
                
                <div class="contact-container">
                    <div class="contact-card mx-0 lg-mx-2">
                        <a href="{{ $_profile->gmaps }}" target="_blank">
                            <i class="fas fa-map-marker-alt"></i>
                        </a>
                        <div class="contact-bottom">
                            <span>
                                <h5>Home</h5>
                            </span>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <span>
                            <a href="{{ $_profile->gmaps }}">{{ $_profile->address }}</a>
                            {{-- {{ $_profile->address }} --}}
                        </span>
                    </div>
                </div>

                <div class="contact-container even">
                    <div class="contact-card mx-0 lg-mx-2">
                        <a href="https://api.whatsapp.com/send?phone={{ $_profile->phone_number }}" target="_blank">
                            <i class="fas fa-phone-square-alt"></i>
                        </a>
                        <div class="contact-bottom">
                            <h5>Phone</h5>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <span>
                            <a href="https://api.whatsapp.com/send?phone={{ $_profile->phone_number }}" target="_blank">
                                {{ Str::phoneFormat($_profile->phone_number) }}
                            </a>
                            {{-- {{ $_profile->phone_number }} --}}
                        </span>
                    </div>
                </div>

                <div class="contact-container odd">
                    <div class="contact-card mx-0 lg-mx-2">
                        <a href="mailto:{{ $_profile->email }}?" target="_blank">
                           <i class="fas fa-envelope"></i> 
                        </a>
                        <div class="contact-bottom">
                            <h5>Email</h5>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <span>
                            <a href=mailto:candi@gmail.com?>{{ $_profile->email }}</a>
                            {{-- {{ $_profile->email }} --}}
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
                            {{ $_profile->open_day_range }} </br>
                            {{ $_profile->open_hour_range }}
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
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    {!! implode('', $errors->all('<li>:message</li>')) !!}
                </div>
            @endif
            @if(session()->has('message'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('message') }}
                </div>
            @endif
            <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="form-container">
                <div class="row">
                     <div class="col-12">
                        <div class="contact-input">
                            <div class="user-box">
                                 <select name="purpose" id="cars" class="">
                                    <option value="" selected="">Select Purpose</option>
                                    <option value="Kerjasama">Kerja Sama</option>
                                    <option value="Saran">Kritik dan Saran</option>
                                  </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="contact-input">
                            <div class="user-box">
                                <textarea name="name" id="contactName" required></textarea>
                                <label>Your Name</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="contact-input">
                            <div class="user-box">
                                <textarea name="email" id="contactEmail" ></textarea>
                                <label>Your Email</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="contact-input">
                            <div class="user-box">
                                <textarea name="message" id="contactMessage" ></textarea>
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
                        <button type="submit" class="btn btn-secondary mt-5">Send Message</button>
                        {{-- <a href="{{ url('/contacts') }}" type="button" class="btn btn-secondary mt-5">Send Message</a> --}}
                    </div>
                </div>

            </div>
        </form>
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
