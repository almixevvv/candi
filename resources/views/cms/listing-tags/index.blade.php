@extends('layouts.cms.layout')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid px-8" id="kt_content">
    <x-panel :title="$title" createUrl="{{ route('cms.listing-tags.create') }}"  :filterButton="true" :form="$modalForm">
        <table class="table table-stripped table-bordered detail-table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Tags</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($listingTags as $listingTag)
                    <tr>
                        <td>
                            <a href="{{ route('cms.listing-tags.show', $listingTag) }}">
                                {{ $listingTag->id }}
                            </a>
                        </td>
                        <td>{{ $listingTag->name }}</td>
                        <td>{{ $listingTag->tags->map(fn ($value) => $value->name)->join(", ") }}</td>
                        <td>
                            <x-button-group 
                                editUrl="{{ route('cms.listing-tags.edit', $listingTag) }}"
                                deleteUrl="{{ route('cms.listing-tags.destroy', $listingTag) }}" 
                            />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $listingTags->appends(request()->input())->links() }}
    </x-panel>
</div>
@endsection
