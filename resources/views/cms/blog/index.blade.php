@extends('layouts.cms.layout')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid px-8" id="kt_content">
    <x-panel :title="$title" createUrl="{{ route('cms.blog.create') }}">
        <table class="table table-stripped table-bordered detail-table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <td>
                            <a href="{{ route('cms.blog.show', $blog) }}">{{ $blog->id }}</a>
                        </td>
                        <td>{{ $blog->title }}</td>
                        <td>
                            <img src="{{ $blog->image->image_thumbnail }}" width="25%" />
                        </td>
                        <td>
                            <x-button-group 
                                editUrl="{{ route('cms.blog.edit', $blog) }}"
                                deleteUrl="{{ route('cms.blog.destroy', $blog) }}" 
                            />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $blogs->appends(request()->input())->links() }}
    </x-panel>
</div>
@endsection
