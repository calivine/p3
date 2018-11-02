<option value='{{ $field }}' {{ (old('quantity') == $field) ? 'selected' : '' }}>
    {{ $text }}
</option>