<div class="form-group row">
    <label class="col-form-label col-lg-2">{{ $label }}</label>
    <div class="col-lg-10">
        <div class="form-check form-check-switchery form-check-switchery-double">
            <label class="form-check-label">
                Enable
                <input type="checkbox" class="form-check-input-switchery" name="{{ $name }}" checked="{{ $checked }}" data-fouc="" data-switchery="true" style="display: none;">
                Disable
            </label>
        </div>
    </div>
</div>
