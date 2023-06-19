<div class="content">
    {{$slot}}
    <form method="post" action="{{ route('category.store') }}" enctype="mulpipart/form-data">
        @csrf
        <x-form.input label="Name" name="name" type="text" placeholder="Enter Category Name...."/>
        <x-form.input label="Type" name="type" type="text" placeholder="Enter Category Type...."/>

        <x-form.textarea label="Description" name="description" type="text"/>

        <x-form.image_uploder label="Image" name="image"/>

        <x-form.checkbox label="E-sale Enabled" name="e-sale" checked="checked"/>

        <x-form.checkbox label="Outdoor Enabled" name="outdoor"  checked="checked"/>

        <div class="ps-5">
            <div class="text-start">
                <button type="submit" class="btn btn-primary legitRipple">Save</button>
            </div>
        </div>
    </form>
</div>
