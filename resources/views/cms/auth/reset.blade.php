@extends('layouts.cms/login')

@section('content')
<!--begin::Form-->
<form class="form w-100" novalidate="novalidate" id="kt_password_reset_form">
    <!--begin::Heading-->
    <div class="text-center mb-10">
        <!--begin::Title-->
        <h1 class="text-dark mb-3">Forgot Password ?</h1>
        <!--end::Title-->
        <!--begin::Link-->
        <div class="text-gray-400 fw-bold fs-4">Enter your email to reset your password.</div>
        <!--end::Link-->
    </div>
    <!--begin::Heading-->
    <!--begin::Input group-->
    <div class="fv-row mb-10">
        <label class="form-label fw-bolder text-gray-900 fs-6">Email</label>
        <input class="form-control form-control-solid" type="email" placeholder="" name="email" autocomplete="off" />
    </div>
    <!--end::Input group-->
    <!--begin::Actions-->
    <div class="d-flex flex-wrap justify-content-center pb-lg-0">
        <button type="button" id="kt_password_reset_submit" class="btn btn-lg btn-primary fw-bolder me-4">
            <span class="indicator-label">Submit</span>
            <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
        <a href="{{ route('cms.login.index') }}" class="btn btn-lg btn-light-primary fw-bolder">Cancel</a>
    </div>
    <!--end::Actions-->
</form>
<!--end::Form-->
@endsection
