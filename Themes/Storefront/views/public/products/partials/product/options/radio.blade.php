<div class="form-group row {{ $errors->has("options.{$option->id}") ? 'has-error' : '' }}">
    <label class="col-sm-4">
        {{ option_name($option) }}
    </label>

    <div class="col-sm-8">
        @foreach ($option->values as $value)
            <div class="radio">
                <input type="radio"
                    name="options[{{ $option->id }}]"
                    value="{{ $value->id }}"
                    id="option-{{ $option->id }}-value-{{ $value->id }}"
                    {{ old("options.{$option->id}") == $value->id ? 'checked' : '' }}
                >

                <label for="option-{{ $option->id }}-value-{{ $value->id }}">
                    {{ option_value($product, $value) }}
                </label>
            </div>
        @endforeach

        {!! $errors->first("options.{$option->id}", '<span class="help-block">:message</span>') !!}
    </div>
</div>
