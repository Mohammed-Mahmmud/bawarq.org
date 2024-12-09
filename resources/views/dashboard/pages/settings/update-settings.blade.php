<div>
    <form wire:submit.prevent="submit">
        <div class="card mb-4">
            <div class="card-body">
                @if (session()->has('message'))
                    <div class="alert alert-primary success-alert">{{ session('message') }}
                    </div>
                @endif
                <div class="row g-3">
                    <div class="col-md-12">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" wire:model="title" id="title" placeholder="title" />
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label for="description" class="form-label">description</label>
                        <textarea type="text" class="form-control" rows = "15" wire:model="description" id="description"
                            placeholder="description"></textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary me-2">Save</button>
        </div>
    </form>
</div>
