@extends('layouts.cms.layout')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid px-8" id="kt_content">
    <x-panel :title="$title" :backButton="true">
        <table class="table table-stripped table-bordered detail-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <td>{{ $blog->id }}</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>{{ $blog->title }}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>
                        <img src="{{ $blog->getImages()->first()->image_thumbnail }}" width="25%"
                            onclick="window.location.href = '{{ $blog->getImages()->first()->image_url }}'"
                            style="cursor:pointer"/>
                    </td>
                </tr>
            </thead>
        </table>
        <h3 style="margin-top: 2em; margin-bottom: 2em">Content</h3>
        <div>{!! $blog->content !!}</div>
    </x-panel>
</div>
@endsection
