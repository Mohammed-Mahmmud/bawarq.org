<div>
    <x-dashboard.layouts.modal :id="'createModalToggle'" :title="'Add New tools'">
        <div class="col-12 mb-0">
            <label for="image" class="form-label">Name</label>
            <input type="text" id="name" class="form-control" placeholder="" wire:model="name" />
            <x-dashboard.layouts.error :error="'name'" />
        </div>
        <div class="col-12 mb-0">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" class="form-control ckeditor" placeholder="" wire:model="description" rows="5"></textarea>
            <x-dashboard.layouts.error :error="'description'" />
        </div>
        <div class="col-12 mb-0">
            <label for="image" class="form-label">Image</label>
            <input type="file" id="image" class="form-control" placeholder="" wire:model="image" />
            <div wire:loading wire:target="image" class="text-primary">Uploading...</div>
            <x-dashboard.layouts.error :error="'image'" />
        </div>
        @if ($image)
            <div class="col-12 mb-0 my-3" style="text-align: center">
                <img src="{{ $image->temporaryUrl() }}" height="100px">
            </div>
        @endif
    </x-dashboard.layouts.modal>
</div>
