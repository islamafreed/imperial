@extends('admin_layouts.front')

@section('title') Gallery Image Details @endsection

@section('styles')
<style type="text/css">
	.gall_img {
		height: 160px;
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
                    Gallery Image {{ ucwords($gallery_img->caption) }} <small> Details</small>
                </h2>
            </div>
            <div class="body">
                <div class="body table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th scope="row" style="width: 18%;">Caption </th>
                                <td>{{ ucwords($gallery_img->caption) }}</td>
                            </tr>
                            <tr>
                                <th scope="row" style="width: 18%;">Category </th>
                                <td>{{ ucwords($gallery_img->gallery_cat->name) }}</td>
                            </tr>
                            <tr>
                                <th scope="row" style="width: 18%;">Remarks </th>
                                <td>{!! $gallery_img->remarks !!}</td>
                            </tr>
                            <tr>
                                <th scope="row" style="width: 18%;">Images </th>
                                <td>
                                @foreach($gallery_img->g_img as $g_img)
                                	<img src="{{ url('public/uploads/gallery_img/'.$g_img->g_img) }}" alt="Gallery Image" class="gall_img">
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



