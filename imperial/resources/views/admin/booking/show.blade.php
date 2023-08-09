@extends('admin_layouts.front')

@section('title')  Booking Details @endsection

@section('styles')
<style type="text/css">
    
</style>
@stop

@section('content')

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <a href="{{ url()->previous() }}" class="btn bg-blue-grey waves-effect"> <i class="fa fa-arrow-left"></i> Back</a> 

        <div class="card">
            <div class="header bg-cyan">
                <h2>
                     Booking <small> Details</small>
                </h2>
            </div>
            <div class="body">
                <div class="body table-responsive">
                    <table class="table table-bordered">
                        <tbody>

                            <tr>
                                <th scope="row" style="width: 18%;"> Preferred Date </th>
                                <td>
                                    {{ date('d-M, Y', strtotime($booking->booking_date)) }}
                                </td>
                            </tr>
                            
                            <tr>
                                <th scope="row" style="width: 18%;"> Name </th>
                                <td>
                                    {{ ucwords($booking->name) }}
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;"> Email </th>
                                <td>
                                    {{ $booking->email }}
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;"> Phone no </th>
                                <td>
                                    {{ $booking->phone_no }}
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;">  Message </th>
                                <td>
                                    {!! $booking->message !!}
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')

@stop