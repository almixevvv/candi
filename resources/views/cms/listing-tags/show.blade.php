@extends('layouts.cms.layout')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid px-8" id="kt_content">
    <x-panel :title="$title" :backButton="true">
        <table class="table table-stripped table-bordered detail-table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $listingTagCategory->id }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $listingTagCategory->name }}</td>
                </tr>
            </tbody>
        </table>
        <div class="row" style="margin-top: 3em">
            <div class="col-md-9">
                <h3>Tags</h3>
            </div>
            <div class="col-md-3">
                <a href="{{ route('cms.listing-tags.tags.create', ['tagID' => $listingTagCategory]) }}" class="btn btn-sm btn-primary">Add New Tag</a>
            </div>
        </div>
        <table class="table table-stripped table-bordered detail-table" style="margin-top: 1em">
            <thead>
                <th width="75%">Name</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($listingTagCategory->tags as $tag)
                    <tr>
                        <td>{{ $tag->name }}</td>
                        <td>
                            <x-button-group 
                                editUrl="{{ route('cms.listing-tags.tags.edit', ['tagID' => $listingTagCategory->id, 'id' => $tag->id]) }}"
                                deleteUrl="{{ route('cms.listing-tags.tags.destroy', ['tagID' => $listingTagCategory->id, 'id' => $tag->id]) }}" 
                            />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-panel>
</div>
@endsection
