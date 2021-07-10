@extends('layouts.cms.layout')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid px-8" id="kt_content">
    <x-panel :title="$title" createUrl="{{ route('cms.purposes.create') }}">
        <table class="table table-stripped table-bordered detail-table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($purposes as $purpose)
                <tr>
                    <td>{{ $purpose->id }}</td>
                    <td>{{ $purpose->name }}</td>
                    <td>
                        <x-button-group editUrl="{{ route('cms.purposes.edit', $purpose) }}" deleteUrl="{{ route('cms.purposes.destroy', $purpose) }}" />
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $purposes->appends(request()->input())->links() }}
    </x-panel>
</div>
@endsection
