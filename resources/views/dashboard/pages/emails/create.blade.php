<div>
    <x-dashboard.layouts.modal :id="'createModalToggle'" :title="'Add New Email'">
        <div class="col-12 mb-0">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" class="form-control" placeholder="" wire:model="email" />
            <x-dashboard.layouts.error :error="'email'" />
        </div>
    </x-dashboard.layouts.modal>
</div>
