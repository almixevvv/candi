@extends('layouts.front.index')

@push('extra-css')
<link rel="stylesheet" href="./css/contact/contact.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css">
<style>
    select option {
        padding: 2em;
    }
</style>
@endpush

@section('content')

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
                <a href="#">{{ ucfirst(request()->path()) }}</a>
            </div>
        </div>
    </div>
    <div class="page contacts-page full-width">

        <div class="container-fluid mb-3">
            <div class="row" style="margin-left: auto; margin-right: auto">
                <div class="contact-container col-md-3 col-6">
                    <div class="contact-card mx-0 lg-mx-2">
                        <a href="{{ $_profile->maps }}" target="_blank">
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
                            <a href="{{ $_profile->maps }}">{{ $_profile->address }}</a>
                        </span>
                    </div>
                </div>

                <div class="contact-container col-md-3 col-6">
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
                        </span>
                    </div>
                </div>

                <div class="contact-container col-md-3 col-6">
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
                            <a href="mailto:{{ $_profile->email }}?">{{ $_profile->email }}</a>
                        </span>
                    </div>
                </div>

                <div class="contact-container col-md-3 col-6">
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
                                    <select name="purpose_id" id="cars" class="">
                                        <option value="" selected="">Select Purpose</option>
                                        @foreach($purposes as $purpose)
                                            <option value="{{ $purpose->id }}">{{ $purpose->name }}</option>
                                        @endforeach
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
                            <button type="submit" class="btn btn-primary-candi mt-5">Send Message</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
