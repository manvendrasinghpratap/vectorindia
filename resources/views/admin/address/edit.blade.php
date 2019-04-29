@extends('admin.layouts.index')
@section('content')
	<link type="text/css" rel="stylesheet" href="{!! asset('public/css/select2.css')!!}" />
<!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
<div class="page-content">
  <div class="row">
	 <div class="col-lg-12">
					<div class="panel panel-blue">
					   <div class="panel-heading">{{trans('message.editmainskill')}}</div>
					   <div class="panel-body pan">
							 {{ Form::open(['method'=>'post','url'=>'updateaddress','files'=>'true','class'=>'form-horizontal','role'=>'form'])}}
							 {{ Form::hidden('id', @$addressDetails['id'], array('name'=>'id')) }}
 								 <div class="form-body pal">
 											<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
 											<label for="address" class="col-md-3 control-label">{{ trans('message.address')}}<span class='require'>*</span></label>
 											<div class="col-md-9">
 											<div class="input-icon"><i class="fa fa-user"></i>
 											{{ Form::textarea('address', @$addressDetails['address'], array('class' => 'form-control','placeholder'=> trans('message.address'),'required'=>true, 'rows'=>"4" ,'cols'=>"50")) }}
 											<span class="text-danger">{{ $errors->first('address') }}</span>
 											</div>
 											</div>
 											</div>
 											<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
 											<label for="email" class="col-md-3 control-label">{{ trans('message.email')}}<span class='require'>*</span></label>
 											<div class="col-md-9">
 											<div class="input-icon"><i class="fa fa-user"></i>
 											{{ Form::text('email', @$addressDetails['email'], array('class' => 'form-control','placeholder'=> trans('message.email'),'required'=>true,'type'=>'email')) }}
 											<span class="text-danger">{{ $errors->first('email') }}</span>
 											</div>
 											</div>
 											</div>
 											<div class="form-group {{ $errors->has('mobile') ? 'has-error' : '' }}">
 											<label for="mobile" class="col-md-3 control-label">{{ trans('message.mobile')}}<span class='require'>*</span></label>
 											<div class="col-md-9">
 											<div class="input-icon"><i class="fa fa-user"></i>
 											{{ Form::text('mobile', @$addressDetails['mobile'], array('class' => 'form-control','placeholder'=> trans('message.mobile'),'required'=>true)) }}
 											<span class="text-danger">{{ $errors->first('mobile')}}</span>
 											</div>
 											</div>
 											</div>
 											<div class="form-group {{ $errors->has('phoneno') ? 'has-error' : '' }}">
 											<label for="phoneno" class="col-md-3 control-label">{{ trans('message.phoneno')}}<span class='require'>*</span></label>
 											<div class="col-md-9">
 											<div class="input-icon"><i class="fa fa-user"></i>
 											{{ Form::text('phoneno', @$addressDetails['phoneno'], array('class' => 'form-control','placeholder'=> trans('message.phoneno'),'required'=>true)) }}
 											<span class="text-danger">{{ $errors->first('phoneno')}}</span>
 											</div>
 											</div>
 											</div>
 											<div class="form-group {{ $errors->has('googlemapsrc') ? 'has-error' : '' }}">
 											<label for="googlemapsrc" class="col-md-3 control-label">{{ trans('message.googlemapsrc')}}<span class='require'>*</span></label>
 											<div class="col-md-9">
 											<div class="input-icon"><i class="fa fa-user"></i>
 											{{ Form::text('googlemapsrc', @$addressDetails['googlemapsrc'], array('class' => 'form-control','placeholder'=> trans('message.googlemapsrc'),'required'=>true)) }}
 											<span class="text-danger">{{ $errors->first('googlemapsrc')}}</span>
 											</div>
 											</div>
 											</div>
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
