@extends('layouts.cms.layout')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid px-8" id="kt_content">
    <x-panel :title="$title" :filterButton="true" :form="$modalForm">
        <table class="table table-stripped table-bordered detail-table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Purpose</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->purpose->name }}</td>
                    <td>
                        {{--  --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $contacts->appends(request()->input())->links() }}
    </x-panel>
</div>
@endsection
