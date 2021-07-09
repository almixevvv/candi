@extends('layouts.cms.layout')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid px-8" id="kt_content">
    <x-panel :title="$title" createUrl="{{ route('cms.listings.create') }}">
        <table class="table table-stripped table-bordered detail-table">
            <thead>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Address</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($listings as $listing)
                <tr>
                    <td>
                        <a href="{{ route('cms.listings.show', $listing) }}">{{ $listing->id }}</a>
                    </td>
                    <td>
                        @if ($listing->image)
                        <img src="{{ $listing->image->image_thumbnail }}" />
                        @endif
                    </td>
                    <td>{{ $listing->title }}</td>
                    <td>{{ $listing->address }}</td>
                    <td>
                        <x-button-group editUrl="{{ route('cms.listings.edit', $listing) }}" deleteUrl="{{ route('cms.listings.destroy', $listing) }}" />
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $listings->appends(request()->input())->links() }}
    </x-panel>
</div>
@endsection