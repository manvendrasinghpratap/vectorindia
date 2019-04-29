<?php $__env->startSection('content'); ?>
	<link type="text/css" rel="stylesheet" href="<?php echo asset('public/css/select2.css'); ?>" />
<!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
<div class="page-content">
  <div class="row">
	 <div class="col-lg-12">
					<div class="panel panel-blue">
					   <div class="panel-heading"><?php echo e(trans('message.addnewnews')); ?> </div>
					   <div class="panel-body pan">
						  <?php echo e(Form::open(['method'=>'post','url'=>'storenewLatestnews','files'=>'true','class'=>'form-horizontal','role'=>'form'])); ?>

								 <div class="form-body pal">
											<div class="form-group <?php echo e($errors->has('heading') ? 'has-error' : ''); ?>">
											<label for="heading" class="col-md-3 control-label"><?php echo e(trans('message.heading')); ?><span class='require'>*</span></label>
											<div class="col-md-9">
											<div class="input-icon"><i class="fa fa-user"></i>
											<?php echo e(Form::text('heading', '', array('class' => 'form-control','placeholder'=> trans('message.heading'), 'rows'=>"4" ,'cols'=>"50"))); ?>

											<span class="text-danger"><?php echo e($errors->first('address')); ?></span>
											</div>
											</div>
											</div>
											<div class="form-group <?php echo e($errors->has('description') ? 'has-error' : ''); ?>">
											<label for="description" class="col-md-3 control-label"><?php echo e(trans('message.description')); ?><span class='require'>*</span></label>
											<div class="col-md-9">
											<div class="input-icon"><i class="fa fa-user"></i>
											<?php echo e(Form::textarea('description', '', array('class' => 'form-control','placeholder'=> trans('message.description'),'required'=>true,'type'=>'email'))); ?>

											<span class="text-danger"><?php echo e($errors->first('description')); ?></span>
											</div>
											</div>
											</div>
											<div class="form-group <?php echo e($errors->has('writtenby') ? 'has-error' : ''); ?>">
											<label for="writtenby" class="col-md-3 control-label"><?php echo e(trans('message.writtenby')); ?><span class='require'>*</span></label>
											<div class="col-md-9">
											<div class="input-icon"><i class="fa fa-user"></i>
											<?php echo e(Form::text('wrtten_by', '', array('class' => 'form-control','placeholder'=> trans('message.writtenby'),'required'=>true))); ?>

											<span class="text-danger"><?php echo e($errors->first('wrtten_by')); ?></span>
											</div>
											</div>
											</div>
											<!-- image name begin -->
											<div class="form-group <?php echo e($errors->has('imagename') ? 'has-error' : ''); ?>">
												<label for="name" class="col-md-3 control-label"><?php echo e(trans('message.imagename')); ?><span class='require'>*</span></label>
												<div class="col-md-9">
													<div class="input-icon">
														<input type="file" class="form-control" name="imagename"/>
														<span class="text-danger"><?php echo e($errors->first('imagename')); ?></span>
													</div>
												</div>
											</div>
											<!-- Image Name Ends -->
									</div>
								 <div class="form-actions">
									 <div class="col-md-offset-3 col-md-9">
										 <button type="submit" class="btn btn-primary"><?php echo e(trans('message.submit')); ?></button>&nbsp;
										 <button type="reset" class="btn btn-green"><?php echo e(trans('message.reset')); ?></button>
										 <?php echo link_to(URL::previous(), trans('message.cancel'), ['class' => 'btn btn-default']); ?>

									 </div>
								 </div>
								 <?php echo e(Form::close()); ?>

							</div>
					   </div>
					</div>
				 </div>
				 </div>
	 </div>
  </div>
</div>
               <!--END CONTENT-->
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vectorindia\resources\views/admin/latestnews/create.blade.php ENDPATH**/ ?>