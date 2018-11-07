<li>
    <label id='label-checkbox'>
        <input type='checkbox'
               name='topping[]' {{ (is_array(old('topping')) and in_array($field, old('topping'))) ? ' checked' : '' }}
               value='{{ $field }}'>
        {{ $field }}
    </label>
</li>