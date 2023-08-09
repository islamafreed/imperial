@extends('admin_layouts.blog')

@section('title') {{ ucwords($blog->name) }} Details @endsection

@section('styles')
<style type="text/css">
    .blog_img {
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
                    {{ ucwords($blog->name) }} <small> Details</small>
                </h2>
            </div>
            <div class="body">
                <div class="body table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            
                            <tr>
                                <th scope="row" style="width: 18%;">Blog Name </th>
                                <td>
                                    {{ ucwords($blog->name) }}
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;">Author Name </th>
                                <td>{{ ucwords($blog->author_name) }}</td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;">blog Date </th>
                                <td>{{ date('d-M, Y', strtotime($blog->blog_date)) }}</td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;">Blog Tags </th>
                                <td>
                                    @foreach($blog->tags as $tag)
                                       @if(isset($tag))
                                          <span class="label label-success" style="margin-right: 10px; padding: 6px; margin-bottom: 10px;">{{ $tag->name }}</span>
                                       @endif
                                    @endforeach
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;">Blog Details </th>
                                <td>{!! $blog->details !!}</td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;">Blog Image </th>
                                <td>
                                    <img src="{{ url('public/uploads/blog/'.$blog->blog_img) }}" alt="blog image" class="img-responsive blog_img">
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