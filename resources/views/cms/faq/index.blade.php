@extends('layouts.cms.layout')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid px-8" id="kt_content">
    <x-panel :title="$title" createUrl="{{ route('cms.faq.create') }}">
        <table class="table table-stripped table-bordered detail-table">
            <thead>
                <th>ID</th>
                <th>Question</th>
                <th>Answer</th>
                <th>Position</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($faqs as $faq)
                    <tr>
                        <td>{{ $faq->id }}</td>
                        <td>{{ $faq->question }}</td>
                        <td>{{ $faq->answer }}</td>
                        <td>{{ $faq->position }}</td>
                        <td>
                            <x-button-group 
                                editUrl="{{ route('cms.faq.edit', $faq) }}"
                                deleteUrl="{{ route('cms.faq.destroy', $faq) }}" 
                            />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $faqs->appends(request()->input())->links() }}
    </x-panel>
</div>
@endsection
