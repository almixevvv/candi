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
                        <img src="{{ $blog->image->image_thumbnail }}" width="25%"
                            onclick="window.location.href = '{{ $blog->image->image_url }}'"
                            style="cursor:pointer"/>
                    </td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>{{ $blog->category->name }}</td>
                </tr>
                <tr>
                    <th>Is Featured</th>
                    <td>{{ $blog->is_featured ? "Yes" : "No" }}</td>
                </tr>
            </thead>
        </table>
        <h3 style="margin-top: 2em; margin-bottom: 2em">Content</h3>
        <div>{!! Markdown::convertToHtml($blog->content) !!}</div>
        @if ($blog->metadata)
            <h3 style="margin-top: 2em; margin-bottom: 2em">Metadata</h3>
            <div>
                <table class="table table-stripped table-bordered detail-table">
                    <tbody>
                        <tr>
                            <td>Meta Title</td>
                            <td>{{ $blog->metadata->title }}</td>
                        </tr>
                        <tr>
                            <td>Meta description</td>
                            <td>{{ $blog->metadata->description }}</td>
                        </tr>
                        <tr>
                            <td>Meta keywords</td>
                            <td>{{ $blog->metadata->keywords }}</td>
                        </tr>
                        <tr>
                            <td>Meta canonical</td>
                            <td>{{ $blog->metadata->canonical }}</td>
                        </tr>
                        <tr>
                            <td>Meta robots</td>
                            <td>{{ $blog->metadata->robots }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endif
    </x-panel>
</div>
@endsection
