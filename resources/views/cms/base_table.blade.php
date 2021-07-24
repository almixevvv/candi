@extends('layouts.cms.layout')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid px-8" id="kt_content">
    <x-panel :title="$title" createUrl="{{ route('cms.'.$table['path'].'.create') }}">
        <x-table 
            :data="$table['data']"
            :title="$table['title']"
            :fields="$table['fields']"
            :path="$table['path']"
            :hasDetail="$table['hasDetail']"
            :hasEdit="$table['hasEdit']"
            :hasDelete="$table['hasDelete']"
        ></x-table>
        {{ $table['data']->appends(request()->input())->links() }}
    </x-panel>
</div>
@endsection
