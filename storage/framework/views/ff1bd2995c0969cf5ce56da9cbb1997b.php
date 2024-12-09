 <form wire:submit.prevent="logout">
     <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
     <button type="submit" class="dropdown-item"><i class="bx bx-power-off me-2"></i>
         <span class="align-middle">Log Out</span></button>
 </form>
<?php /**PATH /home/mohamed-khater/Documents/projects/stc/active/bawarq.org/resources/views/dashboard/auth/admin-logout-component.blade.php ENDPATH**/ ?>