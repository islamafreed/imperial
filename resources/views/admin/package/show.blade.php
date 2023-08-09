@extends('admin_layouts.blog')

@section('title') {{ ucwords($package->name) }} Details @endsection

@section('styles')
<style type="text/css">
    .package_img {
        height: 200px;
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
                    {{ ucwords($package->name) }} <small> Details</small>
                </h2>
            </div>
            <div class="body">
                <div class="body table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            
                            <tr>
                                <th scope="row" style="width: 18%;">Package Name </th>
                                <td>
                                    {{ ucwords($package->name) }}
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;">Package Price</th>
                                <td>{{ ucwords($package->package_price) }}</td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;">Package Tags </th>
                                <td>
                                    @foreach($package->tags as $tag)
                                       @if(isset($tag))
                                          <span class="label label-success" style="margin-right: 10px; padding: 6px; margin-bottom: 10px;">{{ $tag->name }}</span>
                                       @endif
                                    @endforeach
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;">Package Remarks </th>
                                <td>{!! $package->remarks !!}</td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;">Package Image </th>
                                <td>
                                    <img src="{{ url('public/uploads/package/'.$package->package_img) }}" alt="package image" class="img-responsive package_img">
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