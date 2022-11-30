<div class="field">
    <label class="label">{{ __('admin.fields.' . $resource . '.' . $attribute) }}</label>
    <div class="control">
        <textarea id="tiny" name="{{ $attribute }}" class="form-control" rows="{{ $rows ?? 10 }}">{{ ${$resource}->$attribute ?? old($attribute) }}</textarea>
    </div>
</div>



