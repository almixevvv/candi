@extends('layouts.front.index', ['title' => $whoweare->metadata?->title])

@once
@push('metadata')
    @if ($whoweare->metadata)
        @include('front.meta', ["metadata" => $whoweare->metadata])
    @endif
@endpush
@endonce

@section('content')
<div class="container">
    <div class="breadcrumbs">
        <div class="wrap">
            <div class="wrap_float">
                <a href="{{ route('home') }}">Home</a>
                <span class="separator">/</span>
                <a href="#">{{ ucfirst(request()->path()) }}</a>
            </div>
        </div>
    </div>
    <div class="page contacts-page full-width">
        <div class="wrap">
            <div class="wrap_float">
                <div class="page_head" id="_holder">
                    <div class="markdown who-we-are">
                        {!! $content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/editor/front.js"></script>
@endsection
