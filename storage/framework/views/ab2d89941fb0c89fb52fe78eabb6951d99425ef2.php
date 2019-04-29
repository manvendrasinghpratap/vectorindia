<?php $__env->startSection('content'); ?>
	<link type="text/css" rel="stylesheet" href="<?php echo asset('public/css/select2.css'); ?>" />
<!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
<div class="page-content">
  <div class="row">
	 <div class="col-lg-12">
					<div class="panel panel-blue">
					   <div class="panel-heading"><?php echo e(trans('message.addnewemplyee')); ?></div>
					   <div class="panel-body pan">
						  <?php echo e(Form::open(['method'=>'post','url'=>'updateSettings','files'=>'true','class'=>'form-horizontal','role'=>'form'])); ?>

							 <div class="form-body pal">
								 <!-- For id section begin -->
								 <div class="form-group <?php echo e($errors->has('empid') ? 'has-error' : ''); ?>">
								   <label for="firstname" class="col-md-3 control-label"><?php echo e(trans('message.id')); ?></label>
								   <div class="col-md-9">
									  <div class="input-icon">
									  <?php echo e(Form::text('empid', '', array('class' => 'form-control','placeholder'=>trans('message.id')))); ?>

										  <span class="text-danger"><?php echo e($errors->first('firstname')); ?></span>
									  </div>
								   </div>
								</div>

					 <div class="form-group <?php echo e($errors->has('pro') ? 'has-error' : ''); ?>">
						 <label for="name" class="col-md-3 control-label"><?php echo e(trans('message.pro')); ?><span class='require'>*</span></label>
						 <div class="col-md-9">
							<div class="input-icon">
							 <?php echo e(Form::textarea('pro', '', array('rows' => 4, 'cols' => 54,'class' => 'form-control','placeholder'=>trans('message.pro')))); ?>

								<span class="text-danger"><?php echo e($errors->first('pro')); ?></span>
							</div>
						 </div>
					</div>
					<div class="form-group <?php echo e($errors->has('versus') ? 'has-error' : ''); ?>">
						<label for="name" class="col-md-3 control-label"><?php echo e(trans('message.versus')); ?><span class='require'>*</span></label>
						<div class="col-md-9">
						 <div class="input-icon">
						 <?php echo e(Form::textarea('versus', '', array('rows' => 4, 'cols' => 54,'class' => 'form-control','placeholder'=>trans('message.versus')))); ?>

							 <span class="text-danger"><?php echo e($errors->first('versus')); ?></span>
						 </div>
						</div>
				 </div>
				 <div class="form-group <?php echo e($errors->has('description') ? 'has-error' : ''); ?>">
					 <label for="name" class="col-md-3 control-label"><?php echo e(trans('message.description')); ?><span class='require'>*</span></label>
					 <div class="col-md-9">
						<div class="input-icon">
						<?php echo e(Form::textarea('description', '', array('rows' => 4, 'cols' => 54,'class' => 'form-control','placeholder'=>trans('message.description')))); ?>

							<span class="text-danger"><?php echo e($errors->first('description')); ?></span>
						</div>
					 </div>
				</div>
				<div class="form-group <?php echo e($errors->has('avatar') ? 'has-error' : ''); ?>">
					<label for="name" class="col-md-3 control-label"><?php echo e(trans('message.avatar')); ?><span class='require'>*</span></label>
					<div class="col-md-9">
					 <div class="input-icon">
						 <input type="file" class="form-control" name="profilepic"/>
						 <span class="text-danger"><?php echo e($errors->first('avatar')); ?></span>
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
               <!--END CONTENT-->
  <?php $__env->stopSection(); ?>
	<?php $__env->startPush('scripts'); ?>
		<script src="<?php echo asset('public/js/jquery.dataTables.min.js'); ?>" charset="utf-8"></script>
		<script src="<?php echo asset('public/js/dataTables.buttons.min.js'); ?>" charset="utf-8"></script>
		<script src="<?php echo asset('public/js/dataTables.bootstrap.min.js'); ?>" charset="utf-8"></script>
		<script src="<?php echo asset('public/js/jszip.min.js'); ?>" charset="utf-8"></script>
		<script src="<?php echo asset('public/js/buttons.html5.min.js'); ?>" charset="utf-8"></script>
		<script type="text/javascript">
			$(document).ready(function() {
		var table = $('#example').DataTable({
			dom: 'Bfrtip',
			buttons: [
			{
				extend: 'excel',
				text: 'Export excel',
				className: 'exportExcel',
				filename: 'Export excel',
				exportOptions: {
					modifier: {
						page: 'all'
					}
				}
			},
]
		});

	});
	$('#subskill').on('change', function() {
				var subskill =  $(this).find(":selected").val();
				if (window.location.search.indexOf('subskill') > -1)
						window.location.href = window.location.href.split('?')[0] + "?subskill="+ subskill;
				 else
						window.location.href = window.location.href.split('?')[0] + "?subskill="+ subskill;
				});
  $(function () {
		$("#startdate").datepicker({ format: "yyyy-mm-dd" }).val();
		$("#enddate").datepicker({ format: "yyyy-mm-dd" }).val();
  });
 </script>
	<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vectorindia\resources\views/admin/setting/create.blade.php ENDPATH**/ ?>