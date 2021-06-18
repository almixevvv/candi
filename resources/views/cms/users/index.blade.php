@extends('layouts.cms.layout')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid px-8" id="kt_content">
    <x-panel :title="$title" createUrl="{{ route('cms.users.create') }}">
        <table class="table table-stripped table-bordered detail-table">
            <thead>
                <th>ID</th>
                <th>Username</th>
                <th>Roles</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->roles->map(fn ($value) => $value->name)->join(', ') }}</td>
                        <td>{{ $user->status->description }}</td>
                        <td>
                            <x-button-group 
                                editUrl="{{ route('cms.users.edit', $user) }}"
                                deleteUrl="{{ route('cms.users.destroy', $user) }}" 
                            />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-panel>
</div>
@endsection
