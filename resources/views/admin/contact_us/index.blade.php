@extends('admin_layouts.front')

@section('title') Contact Us @endsection

@section('styles')

@stop

@section('content')

<!-- Basic Examples -->
<div class="row clearfix">
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
       <div class="header">
          <h2>
             Contact Us
          </h2>
          
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
                      <th>Message</th>
                   </tr>
                </thead>
                <tfoot>
                   <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone no</th>
                      <th>Message</th>
                  </tr>
                </tfoot>
                <tbody>
                   @php  $i=1 @endphp
                   @foreach($contact_uss as $contact_us)
                   <tr>
                      <td>{{ $i }}</td>
                      <td>
                         {{ ucwords($contact_us->name) }}
                      </td>
                      <td>
                         {{ $contact_us->email }}
                      </td>
                      <td>
                         {{ $contact_us->phone_no }}
                      </td>
                      <td>
                      	{!! $contact_us->message !!}
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