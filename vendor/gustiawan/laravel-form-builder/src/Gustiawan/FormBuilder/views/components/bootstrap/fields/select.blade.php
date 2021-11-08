<select name="{{ $field['name'] }}" id="{{ $field['name'] }}" 
    class="form-control {{ $field['class'] }}" 
    {{ $field['required'] ? "required" : "" }}
    {{ $field['readonly'] ? "readonly" : "" }}
    {{ $field['disabled'] ? "disabled" : "" }}
    @if ($field['load'])
        onchange="loadDataFor(this, '{{ $field['load']['field'] }}', '{{ $field['load']['url'] }}')"
    @endif
>
    <option value="">Select</option>
    @foreach($field['choices'] as $value => $choice)
        <option value="{{ $value }}" {{ (old($field['name']) ?? $field['value']) == $value ? "selected" : "" }} >{{ $choice }}</option>
    @endforeach
</select>
