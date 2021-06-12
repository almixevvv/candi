@extends('layouts.front.index')
@section('content')

<link rel="stylesheet" href="./css/directory/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css">

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

        <div class="container-fluid px-0 d-block d-lg-none">
            <div class="row mx-0 g-0">
                <div class="col-12">
                    <div class="border-top border-bottom">
                        <div class="d-flex justify-content-center py-2" id="openFilter">
                            <h5 class="text-center font-weight-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                                Filter
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid px-0 directory-container mt-3 pb-5">

            <div class="row mx-0 g-0">

                <div class="col-lg-3 d-none d-lg-block px-4">

                    <div class="container mx-2 mt-3 bg-light rounded border p-3 mr-5">
                        <div class="pb-2">
                            <div class="filter-form d-flex justify-content-between">
                                <div>
                                    <span class="fw-bolder">Establishment Type</span>
                                </div>
                            </div>

                            <div class="filter-form mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="restFilter">
                                    <label class="form-check-label" for="restFilter">
                                      Restaurant
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="qckFilter">
                                    <label class="form-check-label" for="qckFilter">
                                      Quick Bites
                                    </label>
                                </div>
    
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="dstFilter">
                                    <label class="form-check-label" for="dstFilter">
                                      Dessert
                                    </label>
                                </div>
    
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="catFilter">
                                    <label class="form-check-label" for="catFilter">
                                      Coffee & Tea
                                    </label>
                                </div>
                            </div>

                            <div class="border-top filter-form mt-2 pt-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <span class="fw-bolder">Restaurant Features</span>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="dlvFilter">
                                    <label class="form-check-label" for="dlvFilter">
                                      Delivery
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="tktFilter">
                                    <label class="form-check-label" for="tktFilter">
                                      Takeout
                                    </label>
                                </div>
    
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="tblFilter">
                                    <label class="form-check-label" for="tblFilter">
                                      Table Service
                                    </label>
                                </div>
    
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rsvFilter">
                                    <label class="form-check-label" for="rsvFilter">
                                      Reservation
                                    </label>
                                </div>
                            </div>

                            <div class="border-top filter-form mt-2 pt-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <span class="fw-bolder">Meals</span>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="brkFilter">
                                    <label class="form-check-label" for="brkFilter">
                                      Breakfast
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="brhFilter">
                                    <label class="form-check-label" for="brhFilter">
                                      Brunch
                                    </label>
                                </div>
    
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="lnchFilter">
                                    <label class="form-check-label" for="lnchFilter">
                                      Lunch
                                    </label>
                                </div>
    
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="dnrFilter">
                                    <label class="form-check-label" for="dnrFilter">
                                      Dinner
                                    </label>
                                </div>
                            </div>

                            <div class="border-top filter-form mt-2 pt-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <span class="fw-bolder">Reservation</span>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="onlFilter">
                                    <label class="form-check-label" for="onlFilter">
                                      Online Reservation
                                    </label>
                                </div>
                            </div>

                            <div class="border-top filter-form mt-2 pt-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <span class="fw-bolder">Price</span>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="chpFilter">
                                    <label class="form-check-label" for="chpFilter">
                                      Cheap Eats
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="mdrFilter">
                                    <label class="form-check-label" for="mdrFilter">
                                      Mid-Range
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="fndFilter">
                                    <label class="form-check-label" for="fndFilter">
                                      Fine Dining
                                    </label>
                                </div>
                            </div>

                            <div class="border-top filter-form mt-2 pt-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <span class="fw-bolder">Cuisine</span>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="asnFilter">
                                    <label class="form-check-label" for="asnFilter">
                                      Asian
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="indFilter">
                                    <label class="form-check-label" for="indFilter">
                                      Indonesian
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="intFilter">
                                    <label class="form-check-label" for="intFilter">
                                      Internasional
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="seaFilter">
                                    <label class="form-check-label" for="seaFilter">
                                      Seafood
                                    </label>
                                </div>
                            </div>

                            <div class="border-top filter-form mt-2 pt-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <span class="fw-bolder">Dishes</span>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="saladFilter">
                                    <label class="form-check-label" for="saladFilter">
                                      Salad
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="fishFilter">
                                    <label class="form-check-label" for="fishFilter">
                                      Fish
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="burgFilter">
                                    <label class="form-check-label" for="burgFilter">
                                      Burger
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="saladFilter">
                                    <label class="form-check-label" for="saladFilter">
                                      Salad
                                    </label>
                                </div>
                            </div>

                            <div class="border-top filter-form mt-2 pt-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <span class="fw-bolder">Price</span>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="restFilter">
                                    <label class="form-check-label" for="restFilter">
                                      Restaurant
                                    </label>
                                </div>
                            </div>

                            <div class="border-top filter-form mt-2 pt-2">
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <span class="fw-bolder">Dieatary Restriction</span>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="vgfFilter">
                                    <label class="form-check-label" for="vgfFilter">
                                      Vegetarian Friendly
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="vgoFilter">
                                    <label class="form-check-label" for="vgoFilter">
                                      Vegan Options
                                    </label>
                                </div>
    
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="hllFilter">
                                    <label class="form-check-label" for="hllFilter">
                                      Halal
                                    </label>
                                </div>
    
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="kshFilter">
                                    <label class="form-check-label" for="kshFilter">
                                      Kosher
                                    </label>
                                </div>
                            </div>

                            <div class="border-top border-bottom filter-form mt-2 pt-2 pb-2">
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <span class="fw-bolder">Good For</span>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="fmlFilter">
                                    <label class="form-check-label" for="fmlFilter">
                                      Families with Children
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="kdsFilter">
                                    <label class="form-check-label" for="kdsFilter">
                                      Kids
                                    </label>
                                </div>
    
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="lrgFilter">
                                    <label class="form-check-label" for="lrgFilter">
                                      Large Groups
                                    </label>
                                </div>
    
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="locFilter">
                                    <label class="form-check-label" for="locFilter">
                                      Local Cuisines
                                    </label>
                                </div>
                            </div>
                        </div>
        
                    </div>


                </div>

                <div class="col-12 col-lg-9">
                    <div class="row mx-0 g-0">
                        <div class="col-12">
                            <div class="d-inline-flex justify-content-between directory-list px-3 pt-3">
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
                                        <div class="rating-holder" aria-label="4.5 of 5 bubbles. 387 reviews">
                                          <svg class="rating-bubble" viewBox="0 0 68 12" width="68" height="12" aria-label="" title="">
                                              <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="scale(0.5)"></path>
                                              <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(14 0) scale(0.5)"></path>
                                              <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(28 0) scale(0.5)"></path>
                                              <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(42 0) scale(0.5)"></path>
                                              <path d="M 12 0C5.389 0 0 5.389 0 12c0 6.62 5.389 12 12 12 6.62 0 12-5.379 12-12S18.621 0 12 0zm0 2a9.984 9.984 0 0110 10 9.976 9.976 0 01-10 10z" transform="translate(56 0) scale(0.5)"></path>
                                            </svg>
                                            <span class="DrjyGw-P _26S7gyB4 _14_buatE _1dimhEoy">
                                                <span class="_1pFNzDPe">387</span>
                                            </span>
                                        </div>
                                      <div class="tags-holder">
                                          <span class="text-truncate">Seafood, Europian, A... </span>
                                          <i class="fas fa-circle"></i>
                                          <span>$$ - $$$</span>
                                      </div>
                                        <a href="#" class="btn btn-primary btn-order">Order Online</a>
                                    </div>
                                </div>
        
                                <div class="card card-content">
                                    <div class="card-image-container">
                                        <div class="image-holder">
                                            <img src="https://media-cdn.tripadvisor.com/media/photo-s/0d/e3/89/d8/ribeye-steak-australian.jpg" class="card-img-top" alt="Restaurant">
                                        </div>
                                    </div>
                                    <div class="card-body position-relative">
                                      <h5 class="card-title">Nourish Cafe</h5>
                                      <div class="rating-holder" aria-label="4.5 of 5 bubbles. 387 reviews">
                                        <svg class="rating-bubble" viewBox="0 0 68 12" width="68" height="12" aria-label="" title="">
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(14 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(28 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(42 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.389 0 0 5.389 0 12c0 6.62 5.389 12 12 12 6.62 0 12-5.379 12-12S18.621 0 12 0zm0 2a9.984 9.984 0 0110 10 9.976 9.976 0 01-10 10z" transform="translate(56 0) scale(0.5)"></path>
                                          </svg>
                                          <span class="DrjyGw-P _26S7gyB4 _14_buatE _1dimhEoy">
                                              <span class="_1pFNzDPe">387</span>
                                          </span>
                                      </div>
                                    <div class="tags-holder">
                                        <span>Seafood, Europian, A... </span>
                                        <i class="fas fa-circle"></i>
                                        <span>$$ - $$$</span>
                                    </div>
                                      <a href="#" class="btn btn-primary btn-order">Order Online</a>
                                    </div>
                                </div>
        
                                <div class="card card-content">
                                    <div class="card-image-container">
                                        <div class="image-holder">
                                            <img src="https://media-cdn.tripadvisor.com/media/photo-s/0f/d2/30/09/caper-dusted-seared-tuna.jpg" class="card-img-top" alt="La Brizza">
                                        </div>
                                    </div>
                                    <div class="card-body position-relative">
                                      <h5 class="card-title">Nourish Cafe</h5>
                                      <div class="rating-holder" aria-label="4.5 of 5 bubbles. 387 reviews">
                                        <svg class="rating-bubble" viewBox="0 0 68 12" width="68" height="12" aria-label="" title="">
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(14 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(28 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(42 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.389 0 0 5.389 0 12c0 6.62 5.389 12 12 12 6.62 0 12-5.379 12-12S18.621 0 12 0zm0 2a9.984 9.984 0 0110 10 9.976 9.976 0 01-10 10z" transform="translate(56 0) scale(0.5)"></path>
                                          </svg>
                                          <span class="DrjyGw-P _26S7gyB4 _14_buatE _1dimhEoy">
                                              <span class="_1pFNzDPe">387</span>
                                          </span>
                                      </div>
                                    <div class="tags-holder">
                                        <span>Seafood, Europian, A... </span>
                                        <i class="fas fa-circle"></i>
                                        <span>$$ - $$$</span>
                                    </div>
                                      <a href="#" class="btn btn-primary btn-order">Order Online</a>
                                    </div>
                                </div>

                                <div class="card card-content">
                                    <div class="card-image-container">
                                        <div class="image-holder">
                                            <img src="https://media-cdn.tripadvisor.com/media/photo-s/0f/d2/30/09/caper-dusted-seared-tuna.jpg" class="card-img-top" alt="La Brizza">
                                        </div>
                                    </div>
                                    <div class="card-body position-relative">
                                      <h5 class="card-title">Nourish Cafe</h5>
                                      <div class="rating-holder" aria-label="4.5 of 5 bubbles. 387 reviews">
                                        <svg class="rating-bubble" viewBox="0 0 68 12" width="68" height="12" aria-label="" title="">
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(14 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(28 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(42 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.389 0 0 5.389 0 12c0 6.62 5.389 12 12 12 6.62 0 12-5.379 12-12S18.621 0 12 0zm0 2a9.984 9.984 0 0110 10 9.976 9.976 0 01-10 10z" transform="translate(56 0) scale(0.5)"></path>
                                          </svg>
                                          <span class="DrjyGw-P _26S7gyB4 _14_buatE _1dimhEoy">
                                              <span class="_1pFNzDPe">387</span>
                                          </span>
                                      </div>
                                    <div class="tags-holder">
                                        <span>Seafood, Europian, A... </span>
                                        <i class="fas fa-circle"></i>
                                        <span>$$ - $$$</span>
                                    </div>
                                      <a href="#" class="btn btn-primary btn-order">Order Online</a>
                                    </div>
                                </div>

                                <div class="card card-content">
                                    <div class="card-image-container">
                                        <div class="image-holder">
                                            <img src="https://media-cdn.tripadvisor.com/media/photo-s/0f/d2/30/09/caper-dusted-seared-tuna.jpg" class="card-img-top" alt="La Brizza">
                                        </div>
                                    </div>
                                    <div class="card-body position-relative">
                                      <h5 class="card-title">Nourish Cafe</h5>
                                      <div class="rating-holder" aria-label="4.5 of 5 bubbles. 387 reviews">
                                        <svg class="rating-bubble" viewBox="0 0 68 12" width="68" height="12" aria-label="" title="">
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(14 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(28 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(42 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.389 0 0 5.389 0 12c0 6.62 5.389 12 12 12 6.62 0 12-5.379 12-12S18.621 0 12 0zm0 2a9.984 9.984 0 0110 10 9.976 9.976 0 01-10 10z" transform="translate(56 0) scale(0.5)"></path>
                                          </svg>
                                          <span class="DrjyGw-P _26S7gyB4 _14_buatE _1dimhEoy">
                                              <span class="_1pFNzDPe">387</span>
                                          </span>
                                      </div>
                                    <div class="tags-holder">
                                        <span>Seafood, Europian, A... </span>
                                        <i class="fas fa-circle"></i>
                                        <span>$$ - $$$</span>
                                    </div>
                                      <a href="#" class="btn btn-primary btn-order">Order Online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mx-0 g-0">
                        <div class="col-12">
                            <div class="d-flex justify-content-between directory-list px-3 pt-3">
                                <div>
                                    <a>Outdoor Setting</a>
                                </div>
                                <div class="text-end">
                                    <a href="#">See All</a>
                                </div>
                            </div>
                            <div class="d-flex directory-content">
                                <div class="card card-content">
                                    <div class="card-image-container">
                                        <div class="image-holder">
                                            <img src="https://media-cdn.tripadvisor.com/media/photo-s/09/2c/65/23/fat-chow-temple-hill.jpg" class="card-img-top" alt="Restaurant">
                                        </div>
                                    </div>
                                    <div class="card-body position-relative">
                                    <h5 class="card-title">Nourish Cafe</h5>
                                    <div class="rating-holder" aria-label="4.5 of 5 bubbles. 387 reviews">
                                        <svg class="rating-bubble" viewBox="0 0 68 12" width="68" height="12" aria-label="" title="">
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(14 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(28 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(42 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.389 0 0 5.389 0 12c0 6.62 5.389 12 12 12 6.62 0 12-5.379 12-12S18.621 0 12 0zm0 2a9.984 9.984 0 0110 10 9.976 9.976 0 01-10 10z" transform="translate(56 0) scale(0.5)"></path>
                                        </svg>
                                        <span class="DrjyGw-P _26S7gyB4 _14_buatE _1dimhEoy">
                                            <span class="_1pFNzDPe">387</span>
                                        </span>
                                    </div>
                                    <div class="tags-holder">
                                        <span>Seafood, Europian, A... </span>
                                        <i class="fas fa-circle"></i>
                                        <span>$$ - $$$</span>
                                    </div>
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
                                    <div class="rating-holder" aria-label="4.5 of 5 bubbles. 387 reviews">
                                        <svg class="rating-bubble" viewBox="0 0 68 12" width="68" height="12" aria-label="" title="">
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(14 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(28 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(42 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.389 0 0 5.389 0 12c0 6.62 5.389 12 12 12 6.62 0 12-5.379 12-12S18.621 0 12 0zm0 2a9.984 9.984 0 0110 10 9.976 9.976 0 01-10 10z" transform="translate(56 0) scale(0.5)"></path>
                                        </svg>
                                        <span class="DrjyGw-P _26S7gyB4 _14_buatE _1dimhEoy">
                                            <span class="_1pFNzDPe">387</span>
                                        </span>
                                    </div>
                                    <div class="tags-holder">
                                        <span>Seafood, Europian, A... </span>
                                        <i class="fas fa-circle"></i>
                                        <span>$$ - $$$</span>
                                    </div>
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
                                    <div class="rating-holder" aria-label="4.5 of 5 bubbles. 387 reviews">
                                        <svg class="rating-bubble" viewBox="0 0 68 12" width="68" height="12" aria-label="" title="">
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(14 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(28 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(42 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.389 0 0 5.389 0 12c0 6.62 5.389 12 12 12 6.62 0 12-5.379 12-12S18.621 0 12 0zm0 2a9.984 9.984 0 0110 10 9.976 9.976 0 01-10 10z" transform="translate(56 0) scale(0.5)"></path>
                                        </svg>
                                        <span class="DrjyGw-P _26S7gyB4 _14_buatE _1dimhEoy">
                                            <span class="_1pFNzDPe">387</span>
                                        </span>
                                    </div>
                                    <div class="tags-holder">
                                        <span>Seafood, Europian, A... </span>
                                        <i class="fas fa-circle"></i>
                                        <span>$$ - $$$</span>
                                    </div>
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
                                    <div class="rating-holder" aria-label="4.5 of 5 bubbles. 387 reviews">
                                        <svg class="rating-bubble" viewBox="0 0 68 12" width="68" height="12" aria-label="" title="">
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(14 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(28 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(42 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.389 0 0 5.389 0 12c0 6.62 5.389 12 12 12 6.62 0 12-5.379 12-12S18.621 0 12 0zm0 2a9.984 9.984 0 0110 10 9.976 9.976 0 01-10 10z" transform="translate(56 0) scale(0.5)"></path>
                                        </svg>
                                        <span class="DrjyGw-P _26S7gyB4 _14_buatE _1dimhEoy">
                                            <span class="_1pFNzDPe">387</span>
                                        </span>
                                    </div>
                                    <div class="tags-holder">
                                        <span>Seafood, Europian, A... </span>
                                        <i class="fas fa-circle"></i>
                                        <span>$$ - $$$</span>
                                    </div>
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
                                    <div class="rating-holder" aria-label="4.5 of 5 bubbles. 387 reviews">
                                        <svg class="rating-bubble" viewBox="0 0 68 12" width="68" height="12" aria-label="" title="">
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(14 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(28 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(42 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.389 0 0 5.389 0 12c0 6.62 5.389 12 12 12 6.62 0 12-5.379 12-12S18.621 0 12 0zm0 2a9.984 9.984 0 0110 10 9.976 9.976 0 01-10 10z" transform="translate(56 0) scale(0.5)"></path>
                                        </svg>
                                        <span class="DrjyGw-P _26S7gyB4 _14_buatE _1dimhEoy">
                                            <span class="_1pFNzDPe">387</span>
                                        </span>
                                    </div>
                                    <div class="tags-holder">
                                        <span>Seafood, Europian, A... </span>
                                        <i class="fas fa-circle"></i>
                                        <span>$$ - $$$</span>
                                    </div>
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
                                    <div class="rating-holder" aria-label="4.5 of 5 bubbles. 387 reviews">
                                        <svg class="rating-bubble" viewBox="0 0 68 12" width="68" height="12" aria-label="" title="">
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(14 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(28 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(42 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.389 0 0 5.389 0 12c0 6.62 5.389 12 12 12 6.62 0 12-5.379 12-12S18.621 0 12 0zm0 2a9.984 9.984 0 0110 10 9.976 9.976 0 01-10 10z" transform="translate(56 0) scale(0.5)"></path>
                                        </svg>
                                        <span class="DrjyGw-P _26S7gyB4 _14_buatE _1dimhEoy">
                                            <span class="_1pFNzDPe">387</span>
                                        </span>
                                    </div>
                                    <div class="tags-holder">
                                        <span>Seafood, Europian, A... </span>
                                        <i class="fas fa-circle"></i>
                                        <span>$$ - $$$</span>
                                    </div>
                                    <a href="#" class="btn btn-primary btn-order">Order Online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mx-0 g-0 d-none d-lg-block">
                        <div class="col-12">
                            <div class="d-flex justify-content-between directory-list px-3 pt-3">
                                <div>
                                    <p>Browse by Food</p>
                                </div>
                            </div>
                            <div class="d-flex directory-content">
                                <div class="card card-content-2 card-content">
                                    <div class="card-image-container-2 card-image-container">
                                        <div class="image-holder">
                                            <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/c3/b4/22/breakfast-meal-type.jpg" class="card-img-top" alt="Restaurant">
                                        </div>
                                    </div>
                                    <div class="card-body position-relative">
                                    <h5 class="card-title">Seafood</h5>
                                    </div>
                                </div>

                                <div class="card card-content-2 card-content">
                                    <div class="card-image-container-2 card-image-container">
                                        <div class="image-holder">
                                            <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/c3/b4/7e/brunch-meal-type.jpg" class="card-img-top" alt="Restaurant">
                                        </div>
                                    </div>
                                    <div class="card-body position-relative">
                                    <h5 class="card-title">Cafe</h5>
                                    </div>
                                </div>

                                <div class="card card-content-2 card-content">
                                    <div class="card-image-container-2 card-image-container">
                                        <div class="image-holder">
                                            <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/c3/b4/a3/lunch-meal-type.jpg" class="card-img-top" alt="Restaurant">
                                        </div>
                                    </div>
                                    <div class="card-body position-relative">
                                    <h5 class="card-title">Barbeque</h5>
                                    </div>
                                </div>

                                <div class="card card-content-2 card-content">
                                    <div class="card-image-container-2 card-image-container">
                                        <div class="image-holder">
                                            <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/c3/b4/ca/dinner-meal-type.jpg" class="card-img-top" alt="Restaurant">
                                        </div>
                                    </div>
                                    <div class="card-body position-relative">
                                    <h5 class="card-title">Indian</h5>
                                    </div>
                                </div>

                                <div class="card card-content-2 card-content">
                                    <div class="card-image-container-2 card-image-container">
                                        <div class="image-holder">
                                            <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/c3/b4/ca/dinner-meal-type.jpg" class="card-img-top" alt="Restaurant">
                                        </div>
                                    </div>
                                    <div class="card-body position-relative">
                                    <h5 class="card-title">Pizza</h5>
                                    </div>
                                </div>

                                <div class="card card-content-2 card-content">
                                    <div class="card-image-container-2 card-image-container">
                                        <div class="image-holder">
                                            <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/c3/b4/ca/dinner-meal-type.jpg" class="card-img-top" alt="Restaurant">
                                        </div>
                                    </div>
                                    <div class="card-body position-relative">
                                    <h5 class="card-title">Steakhouse</h5>
                                    </div>
                                </div>

                                <div class="card card-content-2 card-content">
                                    <div class="card-image-container-2 card-image-container">
                                        <div class="image-holder">
                                            <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/c3/b4/ca/dinner-meal-type.jpg" class="card-img-top" alt="Restaurant">
                                        </div>
                                    </div>
                                    <div class="card-body position-relative">
                                    <h5 class="card-title">Indonesian</h5>
                                    </div>
                                </div>

                            
                            </div>
                        </div>
                    </div>

                    <div class="row mx-0 g-0 d-block d-lg-none">
                        <div class="col-12">
                            <div class="d-flex justify-content-between directory-list px-3 pt-3">
                                <div>
                                    <p>Browse by Meal</p>
                                </div>
                            </div>
                            <div class="d-flex directory-content">
                                <div class="card card-content-2 card-content">
                                    <div class="card-image-container-2 card-image-container">
                                        <div class="image-holder">
                                            <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/c3/b4/22/breakfast-meal-type.jpg" class="card-img-top" alt="Restaurant">
                                        </div>
                                    </div>
                                    <div class="card-body position-relative">
                                    <h5 class="card-title">Breakfast</h5>
                                    </div>
                                </div>

                                <div class="card card-content-2 card-content">
                                    <div class="card-image-container-2 card-image-container">
                                        <div class="image-holder">
                                            <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/c3/b4/7e/brunch-meal-type.jpg" class="card-img-top" alt="Restaurant">
                                        </div>
                                    </div>
                                    <div class="card-body position-relative">
                                    <h5 class="card-title">Brunch</h5>
                                    </div>
                                </div>

                                <div class="card card-content-2 card-content">
                                    <div class="card-image-container-2 card-image-container">
                                        <div class="image-holder">
                                            <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/c3/b4/a3/lunch-meal-type.jpg" class="card-img-top" alt="Restaurant">
                                        </div>
                                    </div>
                                    <div class="card-body position-relative">
                                    <h5 class="card-title">Lunch</h5>
                                    </div>
                                </div>

                                <div class="card card-content-2 card-content">
                                    <div class="card-image-container-2 card-image-container">
                                        <div class="image-holder">
                                            <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/c3/b4/ca/dinner-meal-type.jpg" class="card-img-top" alt="Restaurant">
                                        </div>
                                    </div>
                                    <div class="card-body position-relative">
                                    <h5 class="card-title">Dinner</h5>
                                    </div>
                                </div>

                            
                            </div>
                        </div>
                    </div>

                    <div class="row mx-0 g-0">
                        <div class="col-12">
                            <div class="d-flex justify-content-between directory-list px-3 pt-3">
                                <div>
                                    <p>Online Reservation</p>
                                </div>
                                <div class="text-end">
                                    <a href="#">See All</a>
                                </div>
                            </div>
                            <div class="d-flex directory-content">
                                <div class="card card-content">
                                    <div class="card-image-container ">
                                        <div class="image-holder">
                                            <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Restaurant">
                                        </div>
                                    </div>
                                    <div class="card-body position-relative">
                                    <h5 class="card-title">Nourish Cafe</h5>
                                    <div class="rating-holder" aria-label="4.5 of 5 bubbles. 387 reviews">
                                        <svg class="rating-bubble" viewBox="0 0 68 12" width="68" height="12" aria-label="" title="">
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(14 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(28 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(42 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.389 0 0 5.389 0 12c0 6.62 5.389 12 12 12 6.62 0 12-5.379 12-12S18.621 0 12 0zm0 2a9.984 9.984 0 0110 10 9.976 9.976 0 01-10 10z" transform="translate(56 0) scale(0.5)"></path>
                                        </svg>
                                        <span class="DrjyGw-P _26S7gyB4 _14_buatE _1dimhEoy">
                                            <span class="_1pFNzDPe">387</span>
                                        </span>
                                    </div>
                                    <div class="tags-holder">
                                        <span>Seafood, Europian, A... </span>
                                        <i class="fas fa-circle"></i>
                                        <span>$$ - $$$</span>
                                    </div>
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
                                    <div class="rating-holder" aria-label="4.5 of 5 bubbles. 387 reviews">
                                        <svg class="rating-bubble" viewBox="0 0 68 12" width="68" height="12" aria-label="" title="">
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(14 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(28 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(42 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.389 0 0 5.389 0 12c0 6.62 5.389 12 12 12 6.62 0 12-5.379 12-12S18.621 0 12 0zm0 2a9.984 9.984 0 0110 10 9.976 9.976 0 01-10 10z" transform="translate(56 0) scale(0.5)"></path>
                                        </svg>
                                        <span class="DrjyGw-P _26S7gyB4 _14_buatE _1dimhEoy">
                                            <span class="_1pFNzDPe">387</span>
                                        </span>
                                    </div>
                                    <div class="tags-holder">
                                        <span>Seafood, Europian, A... </span>
                                        <i class="fas fa-circle"></i>
                                        <span>$$ - $$$</span>
                                    </div>
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
                                    <div class="rating-holder" aria-label="4.5 of 5 bubbles. 387 reviews">
                                        <svg class="rating-bubble" viewBox="0 0 68 12" width="68" height="12" aria-label="" title="">
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(14 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(28 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(42 0) scale(0.5)"></path>
                                            <path d="M 12 0C5.389 0 0 5.389 0 12c0 6.62 5.389 12 12 12 6.62 0 12-5.379 12-12S18.621 0 12 0zm0 2a9.984 9.984 0 0110 10 9.976 9.976 0 01-10 10z" transform="translate(56 0) scale(0.5)"></path>
                                        </svg>
                                        <span class="DrjyGw-P _26S7gyB4 _14_buatE _1dimhEoy">
                                            <span class="_1pFNzDPe">387</span>
                                        </span>
                                    </div>
                                    <div class="tags-holder">
                                        <span>Seafood, Europian, A... </span>
                                        <i class="fas fa-circle"></i>
                                        <span>$$ - $$$</span>
                                    </div>
                                    <a href="#" class="btn btn-primary btn-order">Order Online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="container-fluid filter-page px-0" id="filterPage">
        <div class="container-fluid px-0">
            <div class="d-flex justify-content-between pt-3 border-bottom px-3 pb-2">
                <div class="text-start">
                    <span>Reset</span>
                </div>
                <div class="text-center">
                    <span>Filter</span>
                </div>
                <div class="text-end">
                    <span>
                        <i class="fas fa-times" id="closeFilter"></i>
                    </span>
                </div>
            </div>

            <div class="filter-inner px-3 pt-4">

                <div class="pb-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span>Establishment Type</span>
                        </div>
                        <div class="text-end">
                            <span>See All</span>
                        </div>
                    </div>

                    <div class="regular-grid filter-holder">
                        <span>
                            <button>
                                <span>Restaurant</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Quick Bites</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Dessert</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Coffee & Tea</span>
                            </button>
                        </span>
                    </div>
                </div>

                <div class="pb-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span>Restaurant Features</span>
                        </div>
                        <div class="text-end">
                            <span>See All</span>
                        </div>
                    </div>
                    <div class="regular-grid filter-holder">
                        <span>
                            <button>
                                <span>Delivery</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Takeout</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Table Service</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Reservation</span>
                            </button>
                        </span>
                    </div>
                </div>

                <div class="pb-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span>Meals</span>
                        </div>
                        <div class="text-end">
                            <span>See All</span>
                        </div>
                    </div>
                    <div class="regular-grid filter-holder">
                        <span>
                            <button>
                                <span>Breakfast</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Brunch</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Lunch</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Dinner</span>
                            </button>
                        </span>
                    </div>
                </div>
    
                <div class="pb-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span>Reservation</span>
                        </div>
                        <div class="text-end">
                            <span>See All</span>
                        </div>
                    </div>
                    <div class="full-grid filter-holder">
                        <span>
                            <button>
                                <span>Online Reservations</span>
                            </button>
                        </span>
                    </div>
                </div>
    
                <div class="pb-2">
                    <div class="d-flex justify-content-between">
                        <div class="text-start">
                            <span>Price</span>
                        </div>
                    </div>
                    <div class="price-grid filter-holder">
                        <span>
                            <button class="px-1">
                                <div>
                                    <span>$</span>
                                </div>
                                <div>
                                    <span>Cheap Eats</span>
                                </div>
                            </button>
                        </span>
                        <span>
                            <button>
                                <div>
                                    <span>$$ - $$$</span>
                                </div>
                                <div>
                                    <span>Mid Range</span>
                                </div>
                            </button>
                        </span>
                        <span>
                            <button>
                                <div>
                                    <span>$$$$</span>
                                </div>
                                <div>
                                    <span>Fine Dining</span>
                                </div>
                            </button>
                        </span>
                    </div>
                </div>
    
                <div class="pb-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span>Cuisine</span>
                        </div>
                        <div class="text-end">
                            <span>See All</span>
                        </div>
                    </div>
                    <div class="regular-grid filter-holder">
                        <span>
                            <button>
                                <span>Asian</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Indonesian</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Internasional</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Seafood</span>
                            </button>
                        </span>
                    </div>
                </div>
    
                <div class="pb-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span>Dishes</span>
                        </div>
                        <div class="text-end">
                            <span >See All</span>
                        </div>
                    </div>
                    <div class="regular-grid filter-holder">
                        <span>
                            <button>
                                <span>Salad</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Fish</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Burger</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Beef</span>
                            </button>
                        </span>
                    </div>
                </div>
    
                <div class="pb-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span>Dietary Restriction</span>
                        </div>
                        <div class="text-end">
                            <span >See All</span>
                        </div>
                    </div>
                    <div class="regular-grid filter-holder">
                        <span>
                            <button>
                                <span>Vegetarian Friendly</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Vegan Options</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Halal</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Kosher</span>
                            </button>
                        </span>
                    </div>
                </div>
    
                <div class="pb-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span>Good For</span>
                        </div>
                        <div  class="text-end">
                            <span>See All</span>
                        </div>
                    </div>
                    <div class="regular-grid filter-holder">
                        <span>
                            <button>
                                <span>Families with Children</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Kids</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Large Groups</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Local Cuisines</span>
                            </button>
                        </span>
                    </div>
                </div>
    


            </div>

            <div class="filter-button">
                <div class="d-flex justify-content-center">
                    <button class="w-100 py-1 rounded">
                        <span>Apply</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
@include('components.front.pagefooter')
@endsection