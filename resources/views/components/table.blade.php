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
                        $parsedOption = explode("|", $field); 
                        $option = count($parsedOption) > 1 ? $parsedOption[1] : null;
                        $field = explode(".", $parsedOption[0]);
                        $data = $value;
                    @endphp
                    @foreach ($field as $k => $f)
                        @php $data = $data->{$f}; @endphp
                    @endforeach
                    @if ($option)
                        @if ($option == "image")
                            <td><img src="{{ $data }}" width="50%" /></td>
                        @endif
                    @else
                        <td>{{ $data }}</td>
                    @endif
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
