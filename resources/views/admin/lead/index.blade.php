@extends('admin_layouts.front')

@section('title') Leads @endsection

@section('styles')

@stop

@section('content')

<!-- Basic Examples -->
<div class="row clearfix">
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
       <div class="header">
          <h2>
             Leads
          </h2>
          
       </div>
       <div class="body">
          <div class="table-responsive">
             <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                <thead>
                   <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Phone no</th>
                   </tr>
                </thead>
                <tfoot>
                   <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Phone no</th>
                  </tr>
                </tfoot>
                <tbody>
                   @php  $i=1 @endphp
                   @foreach($leads as $lead)
                   <tr>
                      <td>{{ $i }}</td>
                      <td>
                         {{ ucwords($lead->name) }}
                      </td>
                      <td>
                         {{ $lead->phone_no }}
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
