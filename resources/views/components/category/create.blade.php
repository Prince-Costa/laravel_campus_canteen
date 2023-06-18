<div class="content">
    {{$slot}}
    <form action="">
        <x-form.input name="Name" type="text" placeholder="Enter Category Name...."/>
        <x-form.input name="Type" type="text" placeholder="Enter Category Type...."/>

        <x-form.textarea name="Description" type="text"/>

        <x-form.image_uploder name="Image"/>

        <div class="form-group row">
            <label class="col-form-label col-lg-2">E-sale Enabled</label>
            <div class="col-lg-10">
                <div class="form-check form-check-switchery form-check-switchery-double">
                    <label class="form-check-label">
                        Enable
                        <input type="checkbox" class="form-check-input-switchery" checked="Enable" data-fouc="" data-switchery="true" style="display: none;">
                        Disable
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-form-label col-lg-2">Outdoor Enabled</label>
            <div class="col-lg-10">
                <div class="form-check form-check-switchery form-check-switchery-double">
                    <label class="form-check-label">
                        Enable
                        <input type="checkbox" class="form-check-input-switchery" checked="Enable" data-fouc="" data-switchery="true" style="display: none;">
                        Disable
                    </label>
                </div>
            </div>
        </div>

        <div class="ps-5">
            <div class="text-start">
                <button type="submit" class="btn btn-primary legitRipple">Save</button>
            </div>
        </div>
    </form>
</div>
