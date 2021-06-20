@extends('layouts.cms.layout')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid px-8" id="kt_content">
    <x-panel :title="$title" :backButton="true">
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                {!! implode('', $errors->all('<li>:message</li>')) !!}
            </div>
        @endif
        <div id="content">
            {!! $whoWeAre->contents !!}
        </div>
    </x-panel>
</div>
@endsection

@push('extra-js')
<script src="/js/editor/editor.js"></script>
@endpush
