<option value='{{ $field }}' {{ (old('flavor') == $field) ? 'selected' : '' }}>
    {{ $text }}
</option>