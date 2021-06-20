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
        <x-form-generator-form :form="$form" />
    </x-panel>
</div>
@endsection

@push('extra-js')
@if (array_key_exists("uploadTo", $form->extra))
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    @include("vendor.ckfinder.setup")
    <script>
        let ckEditor = null
        const toolbar = ClassicEditor.defaultConfig.toolbar.items
        toolbar.splice(11, 1)
        toolbar.push("ckfinder")

        ClassicEditor.create(document.querySelector('.wysiwyg'), {
            toolbar: toolbar
        }).then((editor) => {
            ckEditor = editor
        }).catch(error => {
            console.log(error)
        })
    </script>
@endif
@endpush
