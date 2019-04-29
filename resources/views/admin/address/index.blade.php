@extends('admin.layouts.index')
@section('content')
   <link type="text/css" rel="stylesheet" href="{!! asset('public/vendors/DataTables/media/css/jquery.dataTables.css')!!}" />
   <link type="text/css" rel="stylesheet" href="{!! asset('public/vendors/DataTables/extensions/TableTools/css/dataTables.tableTools.min.css')!!}" />
   <link type="text/css" rel="stylesheet" href="{!! asset('public/vendors/DataTables/media/css/dataTables.bootstrap.css')!!}" />
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
                           <div class="caption">{{trans('message.address') }}</div>
                           <div class="actions">
                              <a href="{{ url(key($listing)) }}" class="btn btn-info btn-sm">
                                 <i class="fa fa-plus"></i>&nbsp;
                                 {{trans('message.addnewaddress') }}
                              </a>&nbsp;
                           </div>
                        </div>
                           @include('admin.common.flash_mesage')
                        <div class="portlet-body pan">
                           <table id="table_id" class="table table-hover table-striped table-bordered table-advanced tablesorter display">
                              <thead>
                              <tr>
                                <th width="20%">{{ trans('message.address')}}</th>
                                <th width="9%">{{ trans('message.email')}}</th>
                                <th width="9%">{{ trans('message.mobile')}}</th>
                                <th width="9%">{{ trans('message.phoneno')}}</th>
                                <th width="20%">{{ trans('message.googlemapsrc')}}</th>
                                 <th width="5%">{{ trans('message.action')}}</th>
                              </tr>
                              <tbody>
                              @if($addresses->count()>0)
                                 @foreach($addresses as $row)
                                 <tr id="hide_{{ $row->id }}">
                                       <td><p> <?php echo  nl2br(e($row->address)); ?></td>
                                       <td>{{ @$row->email }}</td>
                                       <td>{{ @$row->mobile }}</td>
                                       <td>{{ @$row->phoneno }}</td>
                                       <td>{{ wordwrap($row->googlemapsrc, 50, "\n", 15)  }}</td>
                                       <td>
                                          <a class="btn btn-default btn-xs edit" href="{{ URL::to('editaddress',[encodeParam($row->id) ])}}" title="Edit Address"> <i class="fa fa-edit"></i></a>
                                          <button type="button" class="btn btn-default btn-xs confirmDelete" data-siteurl ="{{ url('/')}}" data-tablename="skills" data-record-id="{{ $row->id }}" data-record-title="Are you sure you want to delete this Main Skill ?" data-toggle="modal" data-target="modal-confirm" data-succuss="Main Skill deleted successfully">
                                             <i class="fa fa-trash-o "></i></button>
                                       </td>
                                    </tr>
                                 @endforeach
                              @endif
                              </tbody>
                              </thead>
                           </table>
                        </div>
                        </div>
                        <div style="float:right;">
                        @if($addresses->count()>0)
                           {{ $addresses->links() }}
                        @endif
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
<!--LOADING SCRIPTS FOR PAGE-->
@push('scripts')
   <script src="{!! asset('public/js/jquery.dataTables.min.js') !!}"></script>
@endpush
