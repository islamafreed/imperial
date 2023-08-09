@extends('admin_layouts.blog')

@section('title') Booked Date Details @endsection

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
                    Booked Date <small> Details</small>
                </h2>
            </div>
            <div class="body">
                <div class="body table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            
                            <tr>
                                <th scope="row" style="width: 18%;">Booked for (Person's Name) </th>
                                <td>
                                    {{ ucwords($booked_date->name) }}
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;"> Booked for (Person's Email) </th>
                                <td>
                                    {{ $booked_date->email }}
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;"> Booked for (Person's Phone no) </th>
                                <td>
                                    {{ $booked_date->phone_no }}
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;"> Booked Date </th>
                                <td>
                                    {{ date('d-M, Y', strtotime($booked_date->booked_date)) }}
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;">Booked Date Remarks </th>
                                <td>{!! $booked_date->remarks !!}</td>
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