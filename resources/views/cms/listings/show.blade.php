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
                        <img src="{{ $listing->image->image_url }}" width="25%" onclick="window.location.href='{{ $listing->image->image_url }}'" style="cursor:pointer" />
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
                <tr>
                    <th>Details</th>
                    <td>{!! Markdown::convertToHtml($listing->details) !!}</td>
                </tr>
            </tbody>
        </table>
        @if ($listing->metadata)
        <h3 style="margin-top: 2em; margin-bottom: 2em">Metadata</h3>
        <div>
            <table class="table table-stripped table-bordered detail-table">
                <tbody>
                    <tr>
                        <td>Meta Title</td>
                        <td>{{ $listing->metadata->title }}</td>
                    </tr>
                    <tr>
                        <td>Meta description (char count: {{ strlen($listing->metadata->description) }})</td>
                        <td>{{ $listing->metadata->description }}</td>
                    </tr>
                    <tr>
                        <td>Meta keywords</td>
                        <td>{{ $listing->metadata->keywords }}</td>
                    </tr>
                    <tr>
                        <td>Meta canonical</td>
                        <td>{{ $listing->metadata->canonical }}</td>
                    </tr>
                    <tr>
                        <td>Meta robots</td>
                        <td>{{ $listing->metadata->robots }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endif
    </x-panel>
</div>
@endsection