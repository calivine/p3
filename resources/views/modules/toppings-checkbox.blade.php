<li>
    <label for='{{ $field }}'>
        <input type='checkbox'
               name='topping[]'
               {{ (is_array(old('topping')) and in_array($field, old('topping'))) ? ' checked' : '' }}
               id='{{ $field }}'
               value='{{ $field }}' >
        {{ $field }}
    </label>
</li>