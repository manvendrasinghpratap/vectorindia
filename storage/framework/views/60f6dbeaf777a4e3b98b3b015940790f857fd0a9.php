<?php $__env->startSection('content'); ?>
<style>
.form-actions{
	background: none;
}
</style>
	<link type="text/css" rel="stylesheet" href="<?php echo asset('public/css/select2.css'); ?>" />
<!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
<div class="page-content">
  <div class="row">
	 <div class="col-lg-12">
					<div class="panel panel-blue">
					   <div class="panel-heading"><?php echo e(trans('message.editnews')); ?></div>
					   <div class="panel-body pan">
							 <?php echo e(Form::open(['method'=>'post','url'=>'updatetestimonials','files'=>'true','class'=>'form-horizontal','role'=>'form'])); ?>

							 <?php echo e(Form::hidden('id', @$testimonialDetails['id'], array('name'=>'id'))); ?>

							 <div class="form-body pal">
										<div class="form-group <?php echo e($errors->has('heading') ? 'has-error' : ''); ?>">
											<label for="heading" class="col-md-3 control-label"><?php echo e(trans('message.heading')); ?><span class='require'>*</span></label>
											<div class="col-md-9">
											<div class="input-icon"><i class="fa fa-user"></i>
											<?php echo e(Form::text('heading', $testimonialDetails['heading'], array('class' => 'form-control','placeholder'=> trans('message.heading'), 'rows'=>"4" ,'cols'=>"50"))); ?>

											<span class="text-danger"><?php echo e($errors->first('address')); ?></span>
											</div>
											</div>
											</div>
											<div class="form-group <?php echo e($errors->has('sub_heading') ? 'has-error' : ''); ?>">
											<label for="heading" class="col-md-3 control-label"><?php echo e(trans('message.sub_heading')); ?><span class='require'>*</span></label>
											<div class="col-md-9">
											<div class="input-icon"><i class="fa fa-user"></i>
											<?php echo e(Form::text('sub_heading', $testimonialDetails['sub_heading'], array('class' => 'form-control','placeholder'=> trans('message.sub_heading'), 'rows'=>"4" ,'cols'=>"50"))); ?>

											<span class="text-danger"><?php echo e($errors->first('sub_heading')); ?></span>
											</div>
											</div>
											</div>
											<div class="form-group <?php echo e($errors->has('description') ? 'has-error' : ''); ?>">
											<label for="description" class="col-md-3 control-label"><?php echo e(trans('message.description')); ?><span class='require'>*</span></label>
											<div class="col-md-9">
											<div class="input-icon"><i class="fa fa-user"></i>
											<?php echo e(Form::textarea('description', $testimonialDetails['description'], array('class' => 'form-control','placeholder'=> trans('message.description'),'required'=>true,'type'=>'email'))); ?>

											<span class="text-danger"><?php echo e($errors->first('description')); ?></span>
											</div>
											</div>
											</div>
											<div class="form-group <?php echo e($errors->has('writtenby') ? 'has-error' : ''); ?>">
											<label for="writtenby" class="col-md-3 control-label"><?php echo e(trans('message.writtenby')); ?><span class='require'>*</span></label>
											<div class="col-md-9">
											<div class="input-icon"><i class="fa fa-user"></i>
											<?php echo e(Form::text('written_by', $testimonialDetails['written_by'], array('class' => 'form-control','placeholder'=> trans('message.writtenby'),'required'=>true))); ?>

											<span class="text-danger"><?php echo e($errors->first('written_by')); ?></span>
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
											<div style="margin-bottom: 70px;">
														<label for="name" class="col-md-3 control-label"><?php echo e(trans('message.existingimagename')); ?></label>
														<div class="col-md-9">
																	<?php	if($testimonialDetails['imagename']==''){
																	$imagename= 'default.jpg';
																	}elseif(file_exists('public/storage/'.$testimonialDetails['imagename'])){
																	$imagename= $testimonialDetails['imagename'];
																	}else{
																	$imagename= 'default.jpg';
																	}
																	?>
                                 <img class="shield-img" src="<?php echo e(url('public/storage/'.$imagename)); ?>" alt="" style="width: 150px;height: 80px;">
														</div>
											</div>


											<!-- Image Name Ends -->
									</div>
								 <div class="form-actions">
									 <div class="col-md-offset-3 col-md-9">
										 <button type="submit" class="btn btn-primary"><?php echo e(trans('message.update')); ?></button>&nbsp;
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
               <!--END CONTENT-->
  <?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo asset('public/js/select2.min.js'); ?>"></script>
	<script type="text/javascript">//<![CDATA[
        $(function(){
            $("#bank_type_id").select2({closeOnSelect:false});
            $("#branch_head_category_designation_id").select2({closeOnSelect:false});
            $("#pincode_state_city_mapping_id").select2({closeOnSelect:false});
            $("#bank_type_idds").select2({closeOnSelect:false});
        });//]]>

	</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\manvendra\Ampps\www\vectorindia\resources\views/admin/testimonial/edit.blade.php ENDPATH**/ ?>