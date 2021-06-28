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
        <div id="wysiwyg" ></div>
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
@if (array_key_exists("uploadTo", $form->extra))
    <script src="{{ asset('js/ckeditor/build/ckeditor.js') }}"></script>
    @include("vendor.ckfinder.setup")
    <script>
        let ckeditor = null
        ClassicEditor.create(document.querySelector('.wysiwyg'),  {
				toolbar: {
					items: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'alignment', 'blockQuote', 
                        '|', 'fontSize', 'fontFamily', 'subscript', 'superscript', 
                        '|', 'outdent', 'indent', 
                        '|', 'undo', 'redo', '-', 'strikethrough', 'underline', 'horizontalLine', 
                        '|', 'specialCharacters', 'insertTable', 
                        '|', 'htmlEmbed', 'CKFinder'],
					shouldNotGroupWhenFull: true
				},
				language: 'en',
				licenseKey: '',
			})
            .then((editor) => {ckeditor = editor})
            .catch(error => { console.log(error) })
    </script>
@endif

@if (array_key_exists('taglify', $form->extra))
<script src="https://unpkg.com/@yaireo/tagify"></script>
<script src="https://unpkg.com/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
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
</script>
@endif
@endpush
