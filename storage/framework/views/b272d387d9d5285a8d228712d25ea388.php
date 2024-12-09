<div>
    <?php if (isset($component)) { $__componentOriginal2b856153f5bd1d542273f7cfc4aad1d7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b856153f5bd1d542273f7cfc4aad1d7 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Layouts\Modal::resolve(['id' => 'updateModalToggle','title' => 'Add New tool'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.layouts.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Layouts\Modal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="col-12 mb-0">
            <label for="image" class="form-label">Name</label>
            <input type="text" id="name" class="form-control" placeholder="" wire:model="name" />
            <?php if (isset($component)) { $__componentOriginal45677cd16cb63ea4e3e0dfdd09ba5268 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45677cd16cb63ea4e3e0dfdd09ba5268 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Layouts\Error::resolve(['error' => 'name'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.layouts.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Layouts\Error::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal45677cd16cb63ea4e3e0dfdd09ba5268)): ?>
<?php $attributes = $__attributesOriginal45677cd16cb63ea4e3e0dfdd09ba5268; ?>
<?php unset($__attributesOriginal45677cd16cb63ea4e3e0dfdd09ba5268); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45677cd16cb63ea4e3e0dfdd09ba5268)): ?>
<?php $component = $__componentOriginal45677cd16cb63ea4e3e0dfdd09ba5268; ?>
<?php unset($__componentOriginal45677cd16cb63ea4e3e0dfdd09ba5268); ?>
<?php endif; ?>
        </div>
        <div class="col-12 mb-0">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" class="form-control ckeditor" placeholder="" wire:model="description" rows="5"></textarea>
            <?php if (isset($component)) { $__componentOriginal45677cd16cb63ea4e3e0dfdd09ba5268 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45677cd16cb63ea4e3e0dfdd09ba5268 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Layouts\Error::resolve(['error' => 'description'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.layouts.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Layouts\Error::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal45677cd16cb63ea4e3e0dfdd09ba5268)): ?>
<?php $attributes = $__attributesOriginal45677cd16cb63ea4e3e0dfdd09ba5268; ?>
<?php unset($__attributesOriginal45677cd16cb63ea4e3e0dfdd09ba5268); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45677cd16cb63ea4e3e0dfdd09ba5268)): ?>
<?php $component = $__componentOriginal45677cd16cb63ea4e3e0dfdd09ba5268; ?>
<?php unset($__componentOriginal45677cd16cb63ea4e3e0dfdd09ba5268); ?>
<?php endif; ?>
        </div>
        <div class="col-12 mb-0">
            <label for="image" class="form-label">Image</label>
            <input type="file" id="image" class="form-control" placeholder="" wire:model="image" />
            <div wire:loading wire:target="image" class="text-primary">Uploading...</div>
            <?php if (isset($component)) { $__componentOriginal45677cd16cb63ea4e3e0dfdd09ba5268 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45677cd16cb63ea4e3e0dfdd09ba5268 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Layouts\Error::resolve(['error' => 'image'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.layouts.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Layouts\Error::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal45677cd16cb63ea4e3e0dfdd09ba5268)): ?>
<?php $attributes = $__attributesOriginal45677cd16cb63ea4e3e0dfdd09ba5268; ?>
<?php unset($__attributesOriginal45677cd16cb63ea4e3e0dfdd09ba5268); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45677cd16cb63ea4e3e0dfdd09ba5268)): ?>
<?php $component = $__componentOriginal45677cd16cb63ea4e3e0dfdd09ba5268; ?>
<?php unset($__componentOriginal45677cd16cb63ea4e3e0dfdd09ba5268); ?>
<?php endif; ?>
        </div>
        <!--[if BLOCK]><![endif]--><?php if($image): ?>
            <div class="col-12 mb-0 my-3" style="text-align: center">
                <img src="<?php echo e($image->temporaryUrl()); ?>" height="100px">
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b856153f5bd1d542273f7cfc4aad1d7)): ?>
<?php $attributes = $__attributesOriginal2b856153f5bd1d542273f7cfc4aad1d7; ?>
<?php unset($__attributesOriginal2b856153f5bd1d542273f7cfc4aad1d7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b856153f5bd1d542273f7cfc4aad1d7)): ?>
<?php $component = $__componentOriginal2b856153f5bd1d542273f7cfc4aad1d7; ?>
<?php unset($__componentOriginal2b856153f5bd1d542273f7cfc4aad1d7); ?>
<?php endif; ?>
</div>
<?php /**PATH /home/mohamed-khater/Documents/projects/stc/active/bawarq.org/resources/views/dashboard/pages/tools/update.blade.php ENDPATH**/ ?>