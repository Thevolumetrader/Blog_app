
@extends('backend.master')
@section('content')
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.post.index')}}">Post</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>

                </ol>
            </div>
            <h4 class="page-title">Post</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<!-- end row -->
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <button class="btn btn-sm btn-primary m-4">+</button>


            <table id="datatable" class="DataTable table table-bordered  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Title</th>
                    <th>Content</th>
                     <th>Category</th>
                     <th>Status</th>
                    <th>Created Date</th>

                    <th>Ation</th>
                </tr>
                </thead>


                <tbody>


                   @foreach ($posts as $post )


                <tr>
                    <td>{{$post->id}}</td>

                    <td> {{ Str::limit($post->title ?? '', 15) }}</td>
                   <td> {{ Str::limit($post->content ?? '', 15) }}</td>
                     <td>
                        <span class="badge badge-warning">{{$post->categories->name}}</span>
                    </td>
                    <td>
                        <span class="badge badge-success">{{$post->status}}</span>
                    </td>
                     <td>{{$post->created_at}}</td>
                     <td>
                        <button class="btn btn-sm btn-primary">
                            <a href="">
                                <i class="fa fa-eye text-white"></i>
                            </a>

                        </button>
                        <button class="btn btn-sm btn-secondary">
                            <a href="">
                                <i class="fa fa-edit text-white"></i>
                            </a>

                        </button>
                        <button class="btn btn-sm btn-danger">
                            <a href="">
                                <i class="fa fa-trash text-white"></i>
                            </a>

                        </button>

                     </td>



                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--- end row -->
@endsection
