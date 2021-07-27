@extends('layouts.front.index')
@section('content')

<link rel="stylesheet" href="./css/directory/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css">

<div class="container-fluid px-0">
    <div class="breadcrumbs">
        <div class="wrap">
            <div class="wrap_float">
                <a href="{{ route('home') }}">Home</a>
                <span class="separator">/</span>
                <a href="#">{{ ucfirst(request()->path()) }}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3 pb-5">

        <div class="row g-0">
            <div class="col-12">
                <div class="markdown who-we-are">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('extra-css')
<style>
    .filter-page.open {
        top: 0;
    }
    .filter-page {
        top: -50em;
    }

    .filter-button.open {
        bottom: 0;
    }

    .filter-button {
        bottom: -50em;
    }
</style>
@endpush


@push('extra-js')
<script>
    function openFilter() {
        $('#filterPage').addClass('open');
        $('#filterButton').addClass('open');
    }

    function closeFilter() {
        $('#filterPage').removeClass('open');
        $('#filterButton').removeClass('open');
    }
</script>
@endpush
