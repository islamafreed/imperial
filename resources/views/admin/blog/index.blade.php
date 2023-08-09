@extends('admin_layouts.blog')

@section('title') Blogs @endsection

@section('styles')

@stop

@section('content')

<!-- Basic Examples -->
      <div class="row clearfix">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
               <div class="header">
                  <h2>
                     Blog
                  </h2>
                  <ul class="header-dropdown m-r--5">
                     <li>
                        <a href="{{ route('admin.add-blog') }}" class="btn btn-success"><i class="fa fa-plus"></i> Add new</a>
                     </li>
                  </ul>
               </div>
               <div class="body">
                  <div class="table-responsive">
                     <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Blog Name</th>
                              <th>Author Name</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tfoot>
                           <tr>
                              <th>#</th>
                              <th>Blog Name</th>
                              <th>Author Name</th>
                              <th>Action</th>
                           </tr>
                        </tfoot>
                        <tbody>
                           @php  $i=1 @endphp
                           @foreach($blogs as $blog)
                           <tr>
                              <td>{{ $i }}</td>
                              <td>
                                 {{ ucwords($blog->name) }}
                              </td>
                              <td>
                                 {{ ucwords($blog->author_name) }}
                              </td>
                              <td>
                                 <div class="btn-group">

                                    <a href="{{ route('admin.edit-blog',Crypt::encrypt($blog->id)) }}" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>

                                    <a href="{{ route('admin.show-blog',Crypt::encrypt($blog->id)) }}" class="btn btn-sm btn-info" data-toggle="tooltip" title="Details"><i class="fa fa-eye"></i></a>

                                    <a href="{{ route('admin.delete-blog',Crypt::encrypt($blog->id)) }}" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure')"><i class="fa fa-trash"></i></a>

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