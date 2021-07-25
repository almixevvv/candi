@extends('layouts.cms.layout')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid px-8" id="kt_content">
    <x-panel :title="$title" createUrl="{{ route('cms.promotions.create') }}">
        <table class="table table-stripped table-bordered detail-table">
            <thead>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Valid Until</th>
                <th>Cashback</th>
                <th>Discount Percentage</th>
                <th>Discount Value</th>
                <th>Is Active</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($promotions as $promotion)
                <tr>
                    <td>
                        {{ $promotion->id }}
                    </td>
                    <td>
                        @if ($promotion->image)
                            <img src="{{ $promotion->image->image_thumbnail }}" />
                        @endif
                    </td>
                    <td>{{ $promotion->title }}</td>
                    <td>{{ $promotion->valid_until }}</td>
                    <td>{{ $promotion->cashback ?? 0 }}%</td>
                    <td>{{ $promotion->discount_percentage ?? 0 }}%</td>
                    <td>Rp {{ number_format($promotion->discount_value ?? 0) }}</td>
                    <td>{{ $promotion->is_active ? "Yes" : "No" }}</td>
                    <td>
                        <x-button-group editUrl="{{ route('cms.promotions.edit', $promotion) }}" deleteUrl="{{ route('cms.promotions.destroy', $promotion) }}" />
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $promotions->appends(request()->input())->links() }}
    </x-panel>
</div>
@endsection
