@extends('admin_layouts.front')

@section('title') Check Date Availability @endsection

@section('styles')

@stop

@section('content')

<!-- Basic Examples -->
<div class="row clearfix">
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
       <div class="header">
          <h2>
             Check Date Availability
          </h2>
          <ul class="header-dropdown m-r--5">
             <li>
                <a href="{{ route('admin.add-booked-date') }}" class="btn btn-success"><i class="fa fa-plus"></i> Add booked date </a>
             </li>
          </ul>
       </div>
       <div class="body">
          <div class="table-responsive">
             <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                <thead>
                   <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone no</th>
                      <th>Request Date</th>
                      <th>Action</th>
                   </tr>
                </thead>
                <tfoot>
                   <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone no</th>
                      <th>Request Date</th>
                      <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                   @php  $i=1 @endphp
                   @foreach($bookings as $booking)
                   <tr>
                      <td>{{ $i }}</td>
                      <td>
                         {{ ucwords($booking->name) }}
                      </td>
                      <td>
                         {{ $booking->email }}
                      </td>
                      <td>
                         {{ $booking->phone_no }}
                      </td>
                      <td>
                      	{{ date('d-M, Y', strtotime($booking->booking_date)) }}
                      </td>
                      <td>
                      	<div class="btn-group">
 
                            <a href="{{ route('admin.show-check-date-availability',Crypt::encrypt($booking->id)) }}" class="btn btn-sm btn-info" data-toggle="tooltip" title="Details"><i class="fa fa-eye"></i></a>
     
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