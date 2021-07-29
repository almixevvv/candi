<table class="table table-stripped table-bordered detail-table">
    <thead>
        <th>ID</th>
        @foreach($title as $value)
            <th>{{ $value }}</th>
        @endforeach
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($tableData as $value)
            <tr>
                <td>
                    {!! $hasDetail 
                        ? "<a href='". route('cms.'. $path .'.show', $value). "'>". $value->id . "</a>" 
                        : $value->id !!}
                </td>
                @foreach($fields as $field)
                    @php 
                        $field = explode(".", $field);
                        $data = $value;
                    @endphp
                    @foreach ($field as $k => $f)
                        @php $data = $data->{$f}; @endphp
                    @endforeach
                    <td>{{ $data }}</td>
                @endforeach
                <td>
                    @if ($hasEdit or $hasDelete)
                        @include("components.button-group", [
                            "editUrl" => route('cms.'. $path .'.edit', $value),
                            "deleteUrl" => route('cms.'. $path .'.destroy', $value)
                        ])
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
