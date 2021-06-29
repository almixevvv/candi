@extends('layouts.cms.layout')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid px-8" id="kt_content">
    <x-panel :title="$title" createUrl="{{ route('cms.listing-categories.create') }}">
        <table class="table table-stripped table-bordered detail-table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Icon</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($listingCategories as $listingCategory)
                    <tr>
                        <td>
                            <a href="{{ route('cms.listing-categories.show', $listingCategory) }}">{{ $listingCategory->id }}</a>
                        </td>
                        <td>{{ $listingCategory->name }}</td>
                        <td>
                            @if ($listingCategory->image)
                                <img src="{{ $listingCategory->image->image_thumbnail }}" />
                            @endif
                        </td>
                        <td>
                            <x-button-group 
                                editUrl="{{ route('cms.listing-categories.edit', $listingCategory) }}"
                                deleteUrl="{{ route('cms.listing-categories.destroy', $listingCategory) }}" 
                            />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $listingCategories->appends(request()->input())->links() }}
    </x-panel>
</div>
@endsection
