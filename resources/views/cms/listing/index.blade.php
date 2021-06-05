@extends('layouts.cms.layout')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">{{ $pageName }}</h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container">
            <!--begin::Row-->
            <div class="row gy-5 gx-xl-8">
                <!--begin::Col-->
                <div class="col-xxl-4">
                    <!--begin::List Widget 3-->
                    <form action="#">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        
                        <div class="card mb-5 mb-xl-10">
                            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_listing_profile_details" aria-expanded="true" aria-controls="kt_listing_profile_details">
                                <div class="card-title m-0">
                                    <h3 class="fw-bolder m-0">Listing Details</h3>
                                </div>
                            </div>
    
                            <div id="kt_listing_profile_details" class="collapse show px-5">
                                
                                <!--begin::Body-->
                                <div class="card-body pt-2">
    
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Thumbnails</label>
                                        <div class="col-lg-8">
                                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(assets/media/avatars/blank.png)">
                                                <div class="image-input-wrapper w-200px h-125px" style="background-image: url(assets/media/avatars/150-2.jpg)"></div>
                                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="avatar_remove" />
                                                    </label>
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                            </div>
                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                        </div>
                                    </div>
    
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Name</label>
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-12 fv-row">
                                                    <input type="text" name="lname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Listing Name" value="Best Seafood in Town" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-bold fs-6">Category</label>
                                        <div class="col-lg-8 fv-row">
                                            <select name="lcategory" aria-label="Select a Category" data-control="select2" data-placeholder="Select a category.." class="form-select form-select-solid form-select-lg">
                                                <option value="">Select a currency..</option>
                                                <option data-kt-flag="flags/united-states.svg" value="USD">
                                                <b>USD</b>&#160;-&#160;USA dollar</option>
                                                <option data-kt-flag="flags/united-kingdom.svg" value="GBP">
                                                <b>GBP</b>&#160;-&#160;British pound</option>
                                                <option data-kt-flag="flags/australia.svg" value="AUD">
                                                <b>AUD</b>&#160;-&#160;Australian dollar</option>
                                                <option data-kt-flag="flags/japan.svg" value="JPY">
                                                <b>JPY</b>&#160;-&#160;Japanese yen</option>
                                                <option data-kt-flag="flags/sweden.svg" value="SEK">
                                                <b>SEK</b>&#160;-&#160;Swedish krona</option>
                                                <option data-kt-flag="flags/canada.svg" value="CAD">
                                                <b>CAD</b>&#160;-&#160;Canadian dollar</option>
                                                <option data-kt-flag="flags/switzerland.svg" value="CHF">
                                                <b>CHF</b>&#160;-&#160;Swiss franc</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-bold fs-6">Contacts</label>
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-4 fv-row">
                                                    <input type="text" name="lwebsite" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Listing Website" />
                                                </div>
                                                <div class="col-lg-4 fv-row">
                                                    <input type="number" name="lphone" class="form-control form-control-lg form-control-solid" placeholder="Listing phone" />
                                                </div>
                                                <div class="col-lg-4 fv-row">
                                                    <input type="email" name="lemail" class="form-control form-control-lg form-control-solid" placeholder="Listing Email" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Address</label>
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-12 fv-row">
                                                    <textarea name="laddress" cols="30" rows="2" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card mb-5 mb-xl-10">
                            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_listing_pricing" aria-expanded="true" aria-controls="kt_listing_pricing">
                                <div class="card-title m-0">
                                    <h3 class="fw-bolder m-0">Listing Features</h3>
                                </div>
                            </div>
    
                            <div id="kt_listing_pricing" class="collapse show px-5">
                                
                                <div class="card-body pt-2">

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Details</label>
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-12 fv-row">
                                                    <textarea name="ldetail" cols="30" rows="2" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Features List</label>
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-12 fv-row">
                                                    <input class="form-control form-control-solid" value="css, html, javascript" id="kt_tagify_features"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Features Cuisines</label>
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-12 fv-row">
                                                    <input class="form-control form-control-solid" value="css, html, javascript" id="kt_tagify_cuisines"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Listing Price</label>
                                        <div class="col-lg-8">
                                            <div class="mb-0">
                                                <div id="kt_slider_basic"></div>
                                            
                                                <div class="pt-14">
                                                    <div class="fw-bold mb-2">Min: <span id="kt_slider_basic_min"></span></div>
                                                    <div class="fw-bold mb-2">Max: <span id="kt_slider_basic_max"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col-12">

                                <div class="d-flex flex-row justify-content-end bd-highlight mb-3">
                                    <button type="reset" class="btn btn-white btn-active-light-primary me-2">Discard</button>
                                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                                </div>
                            </div>

                        </div>

                    </form>

                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->
@endsection