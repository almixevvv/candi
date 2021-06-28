@extends('layouts.cms.layout')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid px-8" id="kt_content">
    <x-panel :title="$title" :backButton="true">
        <table class="table table-stripped table-bordered detail-table">
            <tbody>
                <tr>
                    <th>Image</th>
                    <td>
                        @if ($listing->getImages()->first())
                            <img src="{{ $listing->getImages()->first()->image_thumbnail }}" width="100%"
                                onclick="window.location.href='{{ $listing->getImages()->first()->image_url }}'" style="cursor:pointer"/>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>ID</th>
                    <td>{{ $listing->id }}</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>{{ $listing->title }}</td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>{{ $listing->category->name }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>
                        {{ $listing->address }} 
                        (<a href="https://www.google.com/maps/search/?api=1&query={{ $listing->lat }},{{ $listing->long }}" target="_blank">
                            Show on Map
                        </a>)
                    </td>
                </tr>
                <tr>
                    <th>Lat</th>
                    <td>{{ $listing->lat }}</td>
                </tr>
                <tr>
                    <th>Long</th>
                    <td>{{ $listing->long }}</td>
                </tr>
                <tr>
                    <th>Price Range</th>
                    <td>Rp {{ number_format($listing->low_price) . " - ". number_format($listing->high_price) }}</td>
                </tr>
            </tbody>
        </table>
    </x-panel>
</div>
@endsection
