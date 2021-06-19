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
                    <div class="card card-xxl-stretch mb-xl-3 pt-11 px-2">
                        <!--begin::Body-->
                        <div class="card-body pt-2">
                            <div id="whoareweEditor">
                            </div>

                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            
                            <div id="_field" style="display: none;">
                                {{ $content }}
                            </div>

                            <div class="row">
                                <div class="col-2">
                                    <a href="#" id="btnSave" class="btn btn-bg-primary btn-text-white btn-active-color-dark">Save Page</a>
                                </div>
                                <div class="col-4">
                                    <a href="#" id="btnDraft" class="btn btn-bg-secondary btn-text-white btn-active-color-dark">Save as Draft</a>
                                </div>
                            </div>

                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end:List Widget 3-->
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
<script src="/js/editor/editor.js"></script>
@endsection
