<?php $__env->startSection('content'); ?>
<div id="content">
 <div id="content-header">
		<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Echantillons</a> <a href="#" class="current">Consulter</a></div>
		<h1>Echantillons</h1>
		<?php if(Session::has('flash_message_error')): ?>
        <div class="alert alert-error alert-block" style="text-align: center;">
             <button type="button" class="close" data-dismiss="alert">×</button> 
             <strong><?php echo session('flash_message_error'); ?></strong>
        </div>
        <?php endif; ?>
        <?php if(Session::has('flash_message_success')): ?>
        <div class="alert alert-success alert-block" style="text-align: center;">
             <button type="button" class="close" data-dismiss="alert">×</button> 
             <strong><?php echo session('flash_message_success'); ?></strong>
        </div>
    <?php endif; ?>
	</div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Consulter la liste des échantillons</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th><strong>ID</strong></th>
                  <th><strong>Date Reçu</strong></th>
                  <th><strong>Nom Produit</strong></th>
                  <th><strong>Forme Galenique</strong></th>
                  <th><strong>Quantité Reçu</strong></th>
                  <th><strong>Quantité Livrée</strong></th>
                  <th><strong>Nom fournisseur</strong></th>
                  <th><strong>Date fabrication</strong></th>
                  <th><strong>Date Péremption</strong></th>
                  <th><strong>Action</strong></th>
                </tr>
              </thead>
              <tbody>
              	<?php $__currentLoopData = $echantillons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $echantillon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="gradeU">
                  <td><?php echo e($echantillon->id); ?></td>
                  <td><?php echo e($echantillon->dateRecu); ?></td>
                  <td><?php echo e($echantillon->nomProduit); ?></td>
                  <td><?php echo e($echantillon->formeGalenique); ?></td>
                  <td><?php echo e($echantillon->quantiteRecu); ?></td>
                  <td><?php echo e($echantillon->quantiteLivree); ?></td>
                  <td><?php echo e($echantillon->fournisseur); ?></td>
                  <td><?php echo e($echantillon->dateFab); ?></td>
                  <td><?php echo e($echantillon->dateExp); ?></td>
                  <td class="center"><a href="<?php echo e(url('/admin/modifier-echantillon/' .$echantillon->id)); ?>" class="btn btn-primary btn-mini">Modifier</a> <a href="#" class="btn btn-danger btn-mini">Supprimer</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout.admin_design', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>