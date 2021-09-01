@extends('layouts.cms.layout')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid px-8" id="kt_content">
    <x-panel :title="$title" createUrl="{{ route('cms.listings.galleries.create', $listing) }}">
        <table class="table table-stripped table-bordered detail-table">
            <thead>
                <th>ID</th>
                <th>Image</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($galleries as $gallery)
                <tr>
                    <td>{{ $gallery->id }}</td>
                    <td width="25%">
                        <img  width="100%" src="{{ $gallery->image->image_url }}" /> 
                    </td>
                    <td>
                        <x-button-group
                            editUrl="{{ route('cms.listings.galleries.edit', ['id' => $gallery, 'listing' => $listing]) }}"
                            deleteUrl="{{ route('cms.listings.galleries.destroy', ['id' => $gallery, 'listing' => $listing]) }}" >
                        </x-button-group>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $galleries->appends(request()->input())->links() }}
    </x-panel>
</div>
@endsection
