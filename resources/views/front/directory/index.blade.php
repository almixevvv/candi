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
                <a href="#">{{ ucfirst($request->path()) }}</a>
            </div>
        </div>
    </div>

    <livewire:directories
        categoryID="{{ request()->get('category_id') }}"
        tag="{{ request()->get('tag') }}"
    />
</div>
@endsection
