@extends('admin.layouts.index')
@section('content')
	<link type="text/css" rel="stylesheet" href="{!! asset('public/css/select2.css')!!}" />
<!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
<div class="page-content">
  <div class="row">
	 <div class="col-lg-12">
					<div class="panel panel-blue">
					   <div class="panel-heading">{{ trans('message.addnewbanner')}} </div>
					   <div class="panel-body pan">
						  {{ Form::open(['method'=>'post','url'=>'storenewBanner','files'=>'true','class'=>'form-horizontal','role'=>'form'])}}
								 <div class="form-body pal">
											<div class="form-group {{ $errors->has('sub_heading1') ? 'has-error' : '' }}">
											<label for="heading" class="col-md-3 control-label">{{ trans('message.sub_heading1')}}<span class='require'>*</span></label>
												<div class="col-md-9">
													<div class="input-icon"><i class="fa fa-user"></i>
													{{ Form::text('sub_heading', '', array('class' => 'form-control','placeholder'=> trans('message.sub_heading'), 'rows'=>"4" ,'cols'=>"50")) }}
													<span class="text-danger">{{ $errors->first('sub_heading') }}</span>
													</div>
												</div>
											</div>
											<div class="form-group {{ $errors->has('mainheading') ? 'has-error' : '' }}">
												<label for="heading" class="col-md-3 control-label">{{ trans('message.mainheading')}}<span class='require'>*</span></label>
												<div class="col-md-9">
													<div class="input-icon"><i class="fa fa-user"></i>
														{{ Form::text('heading', '', array('class' => 'form-control','placeholder'=> trans('message.mainheading'), 'rows'=>"4" ,'cols'=>"50")) }}
														<span class="text-danger">{{ $errors->first('heading') }}</span>
													</div>
												</div>
											</div>
											<div class="form-group {{ $errors->has('sub_heading2') ? 'has-error' : '' }}">
											<label for="heading" class="col-md-3 control-label">{{ trans('message.sub_heading2')}}<span class='require'>*</span></label>
												<div class="col-md-9">
													<div class="input-icon"><i class="fa fa-user"></i>
													{{ Form::text('sub_heading2', '', array('class' => 'form-control','placeholder'=> trans('message.sub_heading2'), 'rows'=>"4" ,'cols'=>"50")) }}
													<span class="text-danger">{{ $errors->first('sub_heading2') }}</span>
													</div>
												</div>
											</div>
											<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
											<label for="description" class="col-md-3 control-label">{{ trans('message.description')}}<span class='require'>*</span></label>
											<div class="col-md-9">
											<div class="input-icon"><i class="fa fa-user"></i>
											{{ Form::textarea('description', '', array('class' => 'form-control','placeholder'=> trans('message.description'),'required'=>true,'type'=>'email')) }}
											<span class="text-danger">{{ $errors->first('description') }}</span>
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
											<!-- Image Name Ends -->
									</div>
								 <div class="form-actions">
									 <div class="col-md-offset-3 col-md-9">
										 <button type="submit" class="btn btn-primary">{{ trans('message.submit') }}</button>&nbsp;
										 <button type="reset" class="btn btn-green">{{ trans('message.reset') }}</button>
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
</div>
               <!--END CONTENT-->
  @endsection
