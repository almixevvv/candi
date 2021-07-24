@extends('layouts.cms.layout')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid px-8" id="kt_content">
    <x-panel :title="$title" :backButton="True">
        <livewire:listing-rating :listing="$listing"/>
    </x-panel>
</div>

@endsection
