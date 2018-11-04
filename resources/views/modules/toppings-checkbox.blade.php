<li>
    <label for='{{ $field }}'>{{ $text }}</label>
    <input type='checkbox'
           name='topping[]'
           {{ (is_array(old('topping')) and in_array($field, old('topping'))) ? ' checked' : '' }} id='{{ $field }}' value='{{ $field }}' >
</li>