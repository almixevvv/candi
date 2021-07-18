@extends('layouts.cms.layout')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid px-8" id="kt_content">
    <x-panel :title="$title" :filterButton="true" :form="$modalForm">
        <div class="row">
            <div class="col">&nbsp;</div>
            <div class="col-md-4">
                <a href="{{ route('cms.subscriptions.export') }}" class="btn btn-success" style="float:right" target="_blank">
                    Export subscribed users
                </a>
            </div>
        </div>
        <br><br>
        <table class="table table-stripped table-bordered detail-table">
            <thead>
                <th>ID</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($subscriptions as $subscription)
                <tr>
                    <td>
                        {{ $subscription->id }}
                    </td>
                    <td>{{ $subscription->email }}</td>
                    <td>{{ $subscription->status->description }}</td>
                    <td>
                        <a href="{{ route('cms.subscriptions.destroy', ["id" => $subscription->id]) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $subscriptions->appends(request()->input())->links() }}
    </x-panel>
</div>
@endsection
