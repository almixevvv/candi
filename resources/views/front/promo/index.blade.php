@extends('layouts.front.index')
@section('content')
<div class="container-fluid">
    <div class="breadcrumbs">
        <div class="wrap">
            <div class="wrap_float">
                <a href="{{ route('home') }}">Home</a>
                <span class="separator">/</span>
                <a href="#">{{ ucfirst(request()->path()) }}</a>
            </div>
        </div>
    </div>
    <x-directory-categories />
    <div class="page contacts-page full-width">
        <div class="wrap">
            <div class="wrap_float">
                <div class="page_head">
                    <div class="gridywrap" >

                      <livewire:promotion-page />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
