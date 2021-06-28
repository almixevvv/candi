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
        @if (array_key_exists("helpText", $form->extra))
            <div class="alert alert-info" role="alert">
                {!! $form->extra['helpText'] !!}
            </div>
        @endif
        <x-form-generator-form :form="$form" />
    </x-panel>
</div>
@endsection

@push('extra-css')
<link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<style>
    .taglify {
        padding: 1%;
    }
</style>
@endpush

@push('extra-js')
<script src="https://unpkg.com/@yaireo/tagify"></script>
<script src="https://unpkg.com/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
@if (array_key_exists("uploadTo", $form->extra))
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    @include("vendor.ckfinder.setup")
    <script>
        let ckEditor = null
        const toolbar = ClassicEditor.defaultConfig.toolbar.items
        toolbar.splice(11, 1)
        toolbar.push("ckfinder")
        // toolbar.push("htmlembed")

        ClassicEditor.create(document.querySelector('.wysiwyg'), {
            toolbar: toolbar
        })
        .then((editor) => { ckEditor = editor })
        .catch(error => { console.log(error) })
    </script>
@endif
@if (array_key_exists('taglify', $form->extra))
<script>
    const taglifyData = JSON.parse('{!! $form->extra["taglify"]->toJson() !!}');
    const tagify = new Tagify(document.querySelector(".taglify-tags"), {
        whitelist: taglifyData.tags,
        dropdown : {
            classname     : "color-blue",
            enabled       : 1,
            maxItems      : 5,
            position      : "text",
            closeOnSelect : false,
            highlightFirst: true,
            searchKeys: ["name"]
        }
    });

    inputElm.addEventListener('change', onChange)

    function onChange(e) {
        // outputs a String
        console.log(e.target.value)
    }
</script>
@endif
@endpush
