<option value='{{ $field }}' {{ (old('flavor') == $field) ? 'selected' : '' }}>
    {{ $field }}
</option>