@extends('admin_layouts.blog')

@section('title') {{ ucwords($service->title) }} Details @endsection

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
                    {{ ucwords($service->title) }} <small> Details</small>
                </h2>
            </div>
            <div class="body">
                <div class="body table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            
                            <tr>
                                <th scope="row" style="width: 18%;">Service Title </th>
                                <td>
                                    {{ ucwords($service->title) }}
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;">Service Sub Title</th>
                                <td>{{ ucwords($service->sub_title) }}</td>
                            </tr>

                            
                            <tr>
                                <th scope="row" style="width: 18%;">Service Details </th>
                                <td>{!! $service->details !!}</td>
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