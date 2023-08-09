@extends('admin_layouts.front')

@section('title') {{ ucwords($g_img_cat->name) }} Details @endsection

@section('styles')

@stop

@section('content')

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <a href="{{ url()->previous() }}" class="btn bg-blue-grey waves-effect"> <i class="fa fa-arrow-left"></i> Back</a> 

        <div class="card">
            <div class="header bg-cyan">
                <h2>
                    {{ ucwords($g_img_cat->name) }} <small> Details</small>
                </h2>
            </div>
            <div class="body">
                <div class="body table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            
                            <tr>
                                <th scope="row" style="width: 18%;">Name </th>
                                <td>{{ ucwords($g_img_cat->name) }}</td>
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