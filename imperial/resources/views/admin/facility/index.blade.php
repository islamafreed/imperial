@extends('admin_layouts.front')

@section('title') Facilities @endsection

@section('styles')
<style type="text/css">
    .bg_res_img {
        height: 100px;
        width: 140px;
    }
</style>
@stop

@section('content')

<!-- Basic Examples -->
      <div class="row clearfix">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
               <div class="header">
                  <h2>
                     Facilities
                  </h2>
                  <ul class="header-dropdown m-r--5">
                     <li>
                        <a href="{{ route('admin.add-facility-img') }}" class="btn btn-success"><i class="fa fa-plus"></i> Add new</a>
                     </li>
                  </ul>
               </div>
               <div class="body">
                  <div class="table-responsive">
                     <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Caption</th>
                              <th>Title</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tfoot>
                           <tr>
                              <th>#</th>
                              <th>Caption</th>
                              <th>Title</th>
                              <th>Action</th>
                           </tr>
                        </tfoot>
                        <tbody>
                           @php  $i=1 @endphp
                           @foreach($facilities as $facility)
                           <tr>
                              <td>{{ $i }}</td>
                              <td>
                              	{{ ucwords($facility->caption) }}
                              </td>
                              <td>
                                 {{ ucwords($facility->title) }}
                              </td>
                              <td>
                                 <div class="btn-group">

                                    <a href="{{ route('admin.edit-facility-img',Crypt::encrypt($facility->id)) }}" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>

                                    <a href="{{ route('admin.show-facility-img',Crypt::encrypt($facility->id)) }}" class="btn btn-sm btn-info" data-toggle="tooltip" title="Details"><i class="fa fa-eye"></i></a>

                                    <a href="{{ route('admin.delete-facility-img',Crypt::encrypt($facility->id)) }}" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure')"><i class="fa fa-trash"></i></a>

                                 </div>
                              </td>
                           </tr>
                           @php $i++ @endphp
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- #END# Basic Examples -->

@endsection


@section('scripts')

@stop