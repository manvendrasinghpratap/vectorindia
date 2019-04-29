@extends('admin.layouts.index')
@section('content')
<style>
.form-actions{
	background: none;
}
</style>
	<link type="text/css" rel="stylesheet" href="{!! asset('public/css/select2.css')!!}" />
<!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
<div class="page-content">
  <div class="row">
	 <div class="col-lg-12">
					<div class="panel panel-blue">
					   <div class="panel-heading">{{trans('message.editnews')}}</div>
					   <div class="panel-body pan">
							 {{ Form::open(['method'=>'post','url'=>'updateLatestnews','files'=>'true','class'=>'form-horizontal','role'=>'form'])}}
							 {{ Form::hidden('id', @$newsDetails['id'], array('name'=>'id')) }}
							 <div class="form-body pal">
										<div class="form-group {{ $errors->has('heading') ? 'has-error' : '' }}">
											<label for="heading" class="col-md-3 control-label">{{ trans('message.heading')}}<span class='require'>*</span></label>
											<div class="col-md-9">
											<div class="input-icon"><i class="fa fa-user"></i>
											{{ Form::text('heading', $newsDetails['heading'], array('class' => 'form-control','placeholder'=> trans('message.heading'), 'rows'=>"4" ,'cols'=>"50")) }}
											<span class="text-danger">{{ $errors->first('address') }}</span>
											</div>
											</div>
											</div>
											<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
											<label for="description" class="col-md-3 control-label">{{ trans('message.description')}}<span class='require'>*</span></label>
											<div class="col-md-9">
											<div class="input-icon"><i class="fa fa-user"></i>
											{{ Form::textarea('description', $newsDetails['description'], array('class' => 'form-control','placeholder'=> trans('message.description'),'required'=>true,'type'=>'email')) }}
											<span class="text-danger">{{ $errors->first('description') }}</span>
											</div>
											</div>
											</div>
											<div class="form-group {{ $errors->has('writtenby') ? 'has-error' : '' }}">
											<label for="writtenby" class="col-md-3 control-label">{{ trans('message.writtenby')}}<span class='require'>*</span></label>
											<div class="col-md-9">
											<div class="input-icon"><i class="fa fa-user"></i>
											{{ Form::text('written_by', $newsDetails['written_by'], array('class' => 'form-control','placeholder'=> trans('message.writtenby'),'required'=>true)) }}
											<span class="text-danger">{{ $errors->first('written_by')}}</span>
											</div>
											</div>
											</div>
											<!-- image name begin -->
											<div class="form-group {{ $errors->has('imagename') ? 'has-error' : '' }}">
														<label for="name" class="col-md-3 control-label">{{ trans('message.imagename')}}<span class='require'>*</span></label>
														<div class="col-md-9">
																<div class="input-icon">
																		<input type="file" class="form-control" name="imagename"/>
																		<span class="text-danger">{{ $errors->first('imagename') }}</span>
																</div>
														</div>
											</div>
											<div style="margin-bottom: 70px;">
														<label for="name" class="col-md-3 control-label">{{ trans('message.existingimagename')}}</label>
														<div class="col-md-9">
																	<?php	if($newsDetails['imagename']==''){
																	$imagename= 'default.jpg';
																	}elseif(file_exists('public/storage/'.$newsDetails['imagename'])){
																	$imagename= $newsDetails['imagename'];
																	}else{
																	$imagename= 'default.jpg';
																	}
																	?>
                                 <img class="shield-img" src="{{url('public/storage/'.$imagename)}}" alt="" style="width: 150px;height: 80px;">
														</div>
											</div>

											
											<!-- Image Name Ends -->
									</div>
								 <div class="form-actions">
									 <div class="col-md-offset-3 col-md-9">
										 <button type="submit" class="btn btn-primary">{{ trans('message.update') }}</button>&nbsp;
										 {!! link_to(URL::previous(), trans('message.cancel'), ['class' => 'btn btn-default']) !!}
									 </div>
								 </div>
 								 {{ Form::close() }}
					   </div>
					</div>
				 </div>
				</div>
	 </div>
  </div>
</div>
               <!--END CONTENT-->
  @endsection
@push('scripts')
	<script src="{!! asset('public/js/select2.min.js') !!}"></script>
	<script type="text/javascript">//<![CDATA[
        $(function(){
            $("#bank_type_id").select2({closeOnSelect:false});
            $("#branch_head_category_designation_id").select2({closeOnSelect:false});
            $("#pincode_state_city_mapping_id").select2({closeOnSelect:false});
            $("#bank_type_idds").select2({closeOnSelect:false});
        });//]]>

	</script>
@endpush
