@extends('layouts.front.index')
@section('content')
<div class="container">
    <div class="breadcrumbs">
        <div class="wrap">
            <div class="wrap_float">
                <a href="{{ route('home') }}">Home</a>
                <span class="separator">/</span>
                <a href="#">{{ ucfirst($request->path()) }}</a>
            </div>
        </div>
    </div>
    <div class="page contacts-page full-width">
        <div class="wrap">
            <div class="wrap_float">
                <div class="page_head" id="_holder">
                    <h1 class="title">
                        This is who we are!
                    </h1>
                    <p class="subtitle">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/editor/front.js"></script>
@include('components.front.pagefooter')
@endsection