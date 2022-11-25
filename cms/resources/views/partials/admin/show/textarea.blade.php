<div class="field">
    <label class="label">{{ __('admin.fields.' . $resource . '.' . $attribute) }}</label>
    <script src="{{}}"></script>
    <div class="control">
        <textarea readonly name="{{ $attribute }}" class="textarea" rows="{{ $rows ?? 10 }}">{{ ${$resource}->$attribute ?? old($attribute) }}</textarea>
    </div>
</div>
<div id="tinymcs-icons">
    <svg xmlns="http://www.w3.org/2000/svg">
       
    </svg>
</div>