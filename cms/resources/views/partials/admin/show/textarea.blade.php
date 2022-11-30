<div class="field">
    <label class="label">{{ __('admin.fields.' . $resource . '.' . $attribute) }}</label>
    <div class="control">
        <textarea readonly name="{{ $attribute }}" class="textarea" rows="{{ $rows ?? 10 }}">{{ ${$resource}->$attribute ?? old($attribute) }}</textarea>
    </div>
</div>

