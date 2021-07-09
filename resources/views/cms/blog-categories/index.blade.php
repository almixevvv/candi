@extends('layouts.cms.layout')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid px-8" id="kt_content">
    <x-panel :title="$title" createUrl="{{ route('cms.blog-categories.create') }}" :filterButton="true" :form="$modalForm">
        <table class="table table-stripped table-bordered detail-table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($blogCategories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <x-button-group 
                                editUrl="{{ route('cms.blog-categories.edit', $category) }}"
                                deleteUrl="{{ route('cms.blog-categories.destroy', $category) }}" 
                            />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $blogCategories->appends(request()->input())->links() }}
    </x-panel>
</div>
@endsection
