<?php $__env->startSection('content'); ?>
	<link type="text/css" rel="stylesheet" href="<?php echo asset('public/css/select2.css'); ?>" />
<!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
<div class="page-content">
  <div class="row">
	 <div class="col-lg-12">
					<div class="panel panel-blue">
					   <div class="panel-heading"><?php echo e(trans('message.addnewaddress')); ?> </div>
					   <div class="panel-body pan">
						  <?php echo e(Form::open(['method'=>'post','url'=>'storenewAddress','files'=>'true','class'=>'form-horizontal','role'=>'form'])); ?>

								 <div class="form-body pal">
											<div class="form-group <?php echo e($errors->has('address') ? 'has-error' : ''); ?>">
											<label for="address" class="col-md-3 control-label"><?php echo e(trans('message.address')); ?><span class='require'>*</span></label>
											<div class="col-md-9">
											<div class="input-icon"><i class="fa fa-user"></i>
											<?php echo e(Form::textarea('address', '', array('class' => 'form-control','placeholder'=> trans('message.address'), 'rows'=>"4" ,'cols'=>"50"))); ?>

											<span class="text-danger"><?php echo e($errors->first('address')); ?></span>
											</div>
											</div>
											</div>
											<div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
											<label for="email" class="col-md-3 control-label"><?php echo e(trans('message.email')); ?><span class='require'>*</span></label>
											<div class="col-md-9">
											<div class="input-icon"><i class="fa fa-user"></i>
											<?php echo e(Form::text('email', '', array('class' => 'form-control','placeholder'=> trans('message.email'),'required'=>true,'type'=>'email'))); ?>

											<span class="text-danger"><?php echo e($errors->first('email')); ?></span>
											</div>
											</div>
											</div>
											<div class="form-group <?php echo e($errors->has('mobile') ? 'has-error' : ''); ?>">
											<label for="mobile" class="col-md-3 control-label"><?php echo e(trans('message.mobile')); ?><span class='require'>*</span></label>
											<div class="col-md-9">
											<div class="input-icon"><i class="fa fa-user"></i>
											<?php echo e(Form::text('mobile', '', array('class' => 'form-control','placeholder'=> trans('message.mobile'),'required'=>true))); ?>

											<span class="text-danger"><?php echo e($errors->first('mobile')); ?></span>
											</div>
											</div>
											</div>
											<div class="form-group <?php echo e($errors->has('phoneno') ? 'has-error' : ''); ?>">
											<label for="phoneno" class="col-md-3 control-label"><?php echo e(trans('message.phoneno')); ?><span class='require'>*</span></label>
											<div class="col-md-9">
											<div class="input-icon"><i class="fa fa-user"></i>
											<?php echo e(Form::text('phoneno', '', array('class' => 'form-control','placeholder'=> trans('message.phoneno'),'required'=>true))); ?>

											<span class="text-danger"><?php echo e($errors->first('phoneno')); ?></span>
											</div>
											</div>
											</div>
											<div class="form-group <?php echo e($errors->has('googlemapsrc') ? 'has-error' : ''); ?>">
											<label for="googlemapsrc" class="col-md-3 control-label"><?php echo e(trans('message.googlemapsrc')); ?><span class='require'>*</span></label>
											<div class="col-md-9">
											<div class="input-icon"><i class="fa fa-user"></i>
											<?php echo e(Form::text('googlemapsrc', '', array('class' => 'form-control','placeholder'=> trans('message.googlemapsrc'),'required'=>true))); ?>

											<span class="text-danger"><?php echo e($errors->first('googlemapsrc')); ?></span>
											</div>
											</div>
											</div>
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

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vectorindia\resources\views/admin/address/create.blade.php ENDPATH**/ ?>