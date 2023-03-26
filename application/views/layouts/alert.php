<?php
   $success = $this->session->flashdata('succes');
   $warning = $this->session->flashdata('warning');
   $error = $this->session->flashdata('error');

   if ($success){
       $alert_status = 'alert-success';
       $status = 'success';
       $message = $success;
   }
   if ($warning){
        $alert_status = 'alert-warning';
        $status = 'warning';
        $message = $warning;
   }
   if($error){
        $alert_status = 'alert-error';
        $status = 'error';
        $message = $error;
   }
 ?>
 <?php if($success || $warning || $error): ?>
<div class="row">
    <div class="col-md-12">
        <div class="alert <?= $alert_status ?> alert-dismissble fade show" role="alert">
            <strong><?= $status ?></strong> <?= $message ?>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="close">
               <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
<?php endif; ?>