@extends('layouts.cms.login')

@section('content')
<!--begin::Form-->
<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="{{ route('cms.login.process') }}" method="POST">
    @csrf
    <!--begin::Heading-->
    <div class="text-center mb-10">
        <!--begin::Title-->
        <h1 class="text-dark mb-3">Sign In to <span>Candi CMS</span></h1>
        <!--end::Title-->
    </div>
    <!--begin::Heading-->
    <!--begin::Input group-->
    <div class="fv-row mb-10">
        <!--begin::Label-->
        <label class="form-label fs-6 fw-bolder text-dark">Username</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input class="form-control form-control-lg form-control-solid" type="text" name="username" autocomplete="off" />
        <!--end::Input-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="fv-row mb-7">
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack mb-2">
            <!--begin::Label-->
            <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
            <!--end::Label-->
            <!--begin::Link-->
            <a href="{{ route('cms.reset.index') }}" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
            <!--end::Link-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Input-->
        <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
        <!--end::Input-->
    </div>
    <!--end::Input group-->

    <!--end::Form-->

    <!--begin::Actions-->
    <div class="text-center">
        <!--begin::Submit button-->
        <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary fw-bolder me-3 my-2">
            <span class="indicator-label">Sign In</span>
            <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
        <!--end::Submit button-->
    </div>

    <div class="text-gray-400 fw-bold fs-4 mt-7"> Not supposed to be here? </br>
        <a href="authentication/flows/dark/sign-up.html" class="link-primary fw-bolder">Back to front page</a>
    </div>

    <!--end::Actions-->
</form>
<!--end::Form-->
@endsection
