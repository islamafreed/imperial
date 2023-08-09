@extends('admin_layouts.blog')

@section('title')  Get Quote Details @endsection

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
                     Get Quote <small> Details</small>
                </h2>
            </div>
            <div class="body">
                <div class="body table-responsive">
                    <table class="table table-bordered">
                        <tbody>

                            @if($get_quote->ocation_id)
                            <tr>
                                <th scope="row" style="width: 18%;"> Occassion </th>
                                <td>
                                    {{ ucwords($get_quote->ocation->name) }}
                                </td>
                            </tr>
                            @endif

                            @if($get_quote->preferance_id)
                            <tr>
                                <th scope="row" style="width: 18%;"> Preference </th>
                                <td>
                                    {{ ucwords($get_quote->preference->name) }}
                                </td>
                            </tr>
                            @endif

                            @if($get_quote->add_preferance_id)
                            <tr>
                                <th scope="row" style="width: 18%;"> Add'l preference </th>
                                <td>
                                    {{ ucwords($get_quote->add_preference->name) }}
                                </td>
                            </tr>
                            @endif

                            <tr>
                                <th scope="row" style="width: 18%;"> Preferred Date </th>
                                <td>
                                    {{ date('d-M, Y', strtotime($get_quote->req_date)) }}
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;"> Estimated Guest </th>
                                <td>
                                    {{ $get_quote->estimated_guest }}
                                </td>
                            </tr>
                            
                            <tr>
                                <th scope="row" style="width: 18%;"> Name </th>
                                <td>
                                    {{ ucwords($get_quote->name) }}
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;"> Email </th>
                                <td>
                                    {{ $get_quote->email }}
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;"> Phone no </th>
                                <td>
                                    {{ $get_quote->phone_no }}
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