@extends('admin_layouts.front')

@section('title') Facility Details @endsection

@section('styles')
<style type="text/css">
	.f_img {
        height: 130px;
    }
</style>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <a href="{{ url()->previous() }}" class="btn bg-blue-grey waves-effect"> <i class="fa fa-arrow-left"></i> Back</a> 

        <div class="card">
            <div class="header bg-cyan">
                <h2>
                    Facility {{ ucwords($facility->caption) }} <small> Details</small>
                </h2>
            </div>
            <div class="body">
                <div class="body table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th scope="row" style="width: 18%;">Caption </th>
                                <td>{{ ucwords($facility->caption) }}</td>
                            </tr>
                            <tr>
                                <th scope="row" style="width: 18%;">Title </th>
                                <td>{{ ucwords($facility->title) }}</td>
                            </tr>
                            <tr>
                                <th scope="row" style="width: 18%;">Details </th>
                                <td>{!! $facility->details !!}</td>
                            </tr>
                            <tr>
                                <th scope="row" style="width: 18%;">Cover Image </th>
                                <td>
                                    <img src="{{ url('public/uploads/facility/cover/'.$facility->facility_cover_img) }}" alt="facility image" class="img-responsive f_img">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="width: 18%;">Other Images </th>
                                <td>
                                @foreach($facility->facility_img as $facility_img)
                                	<img src="{{ url('public/uploads/facility/'.$facility_img->facility_img) }}" alt="Gallery Image" class="f_img">
                                @endforeach
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



