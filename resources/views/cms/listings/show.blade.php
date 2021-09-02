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
                    <th>Slug (Url)</th>
                    <td>{{ $listing->slug }}</td>
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
                    <th>Gallery</th>
                    <td><a href="{{ route('cms.listings.galleries.index', $listing) }}" class="btn btn-primary">Modify Gallery</a></td>
                </tr>
                <tr>
                    <th>Details</th>
                    <td>{!! $listing->details !!}</td>
                </tr>
                <tr>
                    <th>Area</th>
                    <td>{{ $listing->province->name }} / {{ $listing->city->name }} / {{ $listing->district->name }}</td>
                </tr>
            </tbody>
        </table>
        @if ($listing->image_360_url)
            <h3 style="margin-top: 2em; margin-bottom: 2em">360 Image</h3>
            @include('cms.includes.image_360', ["imageUrl" => $listing->image_360_url])
        @endif

        <h3 style="margin-top: 2em; margin-bottom: 2em">FAQ</h3>
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('cms.listings.add_faq', $listing) }}" class="btn btn-primary">Change FAQ Data</a>
            </div>
            <div class="col-md-12">
                @if ($listing->faqs->count())
                    <table class="table table-stripped table-bordered detail-table">
                        <thead>
                            <th>No. </th>
                            <th>Question</th>
                            <th>Answer</th>
                        </thead>
                        <tbody>
                            @foreach($listing->faqs as $faq)
                                <tr>
                                    <td>{{ $faq->position }}</td>
                                    <td>{{ $faq->question }}</td>
                                    <td>{{ $faq->answer }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
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
