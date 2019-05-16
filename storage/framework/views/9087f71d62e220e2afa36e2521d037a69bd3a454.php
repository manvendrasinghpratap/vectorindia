<?php $__env->startSection('content'); ?>
   <link type="text/css" rel="stylesheet" href="<?php echo asset('public/vendors/DataTables/media/css/jquery.dataTables.css'); ?>" />
   <link type="text/css" rel="stylesheet" href="<?php echo asset('public/vendors/DataTables/extensions/TableTools/css/dataTables.tableTools.min.css'); ?>" />
   <link type="text/css" rel="stylesheet" href="<?php echo asset('public/vendors/DataTables/media/css/dataTables.bootstrap.css'); ?>" />
<!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
   <div class="page-content">
      <div class="row">
         <div class="col-lg-12">
            <div class="portlet box">
               <div class="portlet-body">
                  <div class="row mbm">
                     <div class="col-lg-12">
                        <div class="portlet portlet-white">
                        <div class="portlet-header pam mbn">
                           <div class="caption"><?php echo e(trans('message.sponsor')); ?></div>
                           <div class="actions">
                              <a href="<?php echo e(url(key($listing))); ?>" class="btn btn-info btn-sm">
                                 <i class="fa fa-plus"></i>&nbsp;
                                 <?php echo e(trans('message.addnewsponsor')); ?>

                              </a>&nbsp;
                           </div>
                        </div>
                           <?php echo $__env->make('admin.common.flash_mesage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="portlet-body pan">
                           <table id="table_id" class="table table-hover table-striped table-bordered table-advanced tablesorter display">
                              <thead>
                              <tr>
                                 <th width="10%"><?php echo e(trans('message.sub_heading')); ?></th>
                                 <th width="10%"><?php echo e(trans('message.sub_heading2')); ?></th>
                                <th width="10%"><?php echo e(trans('message.heading')); ?></th>
                                <th width="20%"><?php echo e(trans('message.description')); ?></th>
                                <th width="10%"><?php echo e(trans('message.banner')); ?></th>
                                 <th width="5%"><?php echo e(trans('message.action')); ?></th>
                              </tr>
                              <tbody>
                              <?php if($sponsor->count()>0): ?>
                                 <?php $__currentLoopData = $sponsor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <tr id="hide_<?php echo e($row->id); ?>">
                                       <td><?php echo e(@$row->sub_heading); ?></td>
                                       <td><?php echo e(@$row->sub_heading2); ?></td>
                                       <td><?php echo e(@$row->heading); ?></td>
                                       <td><p title="<?php echo  nl2br(e($row->description)); ?>"><?php echo  str_limit(nl2br(e($row->description)), 450,'....'); ?> </p></td>
                                       <td>
                                       <?php	if($row['imagename']==''){
	 																			$imagename= 'default.jpg';
	 																		}elseif(file_exists('public/storage/'.$row['imagename'])){
	 																			$imagename= $row['imagename'];
	 																		}else{
	 																			$imagename= 'default.jpg';
	 																		}
	 																		 ?>
                                       <img class="shield-img" src="<?php echo e(url('public/storage/'.$imagename)); ?>" alt="" style="width: 150px;height: 80px;"></td>
                                       <td>
                                          <a class="btn btn-default btn-xs edit" href="<?php echo e(URL::to('editsponsor',[encodeParam($row->id) ])); ?>" title="Edit Sponsor"> <i class="fa fa-edit"></i></a>
                                          <button type="button" class="btn btn-default btn-xs confirmDelete" data-siteurl ="<?php echo e(url('/')); ?>" data-tablename="sponsors" data-record-id="<?php echo e($row->id); ?>" data-record-title="Are you sure you want to delete this Sponsor ?" data-toggle="modal" data-target="modal-confirm" data-succuss="Sponsor deleted successfully">
                                             <i class="fa fa-trash-o "></i>
                                          </button>
                                       </td>
                                    </tr>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <?php endif; ?>
                              </tbody>
                              </thead>
                           </table>
                        </div>
                        </div>
                        <div style="float:right;">
                        <?php if($sponsor->count()>0): ?>
                        <?php endif; ?>
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
<!--LOADING SCRIPTS FOR PAGE-->
<?php $__env->startPush('scripts'); ?>
   <script src="<?php echo asset('public/js/jquery.dataTables.min.js'); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\manvendra\Ampps\www\vectorindia\resources\views/admin/sponsor/index.blade.php ENDPATH**/ ?>