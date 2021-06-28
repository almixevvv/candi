@extends('layouts.cms.layout')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid px-8" id="kt_content">
    <x-panel :title="$title" :backButton="true">
        <table class="table table-stripped table-bordered detail-table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $listingCategory->id }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $listingCategory->name }}</td>
                </tr>
                <tr>
                    <th>Icon</th>
                    <td>
                        @if ($listingCategory->getImages()->first())
                            <img src="{{ $listingCategory->getImages()->first()->image_url }}" />
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </x-panel>
</div>
@endsection
