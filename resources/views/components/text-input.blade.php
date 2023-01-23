@props(['textInput', 'inputType', 'inputValue'])


<label for="{{ $textInput }}" class="form-label">{{ $textInput }}:</label>
<input type="{{ $inputType }}" class="form-control @error($textInput) is-invalid @enderror"
    placeholder="{{ $textInput }}" id="{{ $textInput }}"
    name="{{ $textInput == 'Kamernummer' ? ($textInput = 'kamer_id') : $textInput }}"
    value="{{ isset($inputValue) ? $inputValue : old($textInput) }}">

@error($textInput)
    <div class="invalid-feedback">
        {{ $errors->first($textInput) }}
    </div>
@enderror
