
@extends('backend.master')
@section('content')
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Adminox</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Dashboard 1</li>
                </ol>
            </div>
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">

    <div class="col-xl-3 col-sm-6">
        <div class="card-box widget-box-two widget-two-custom">
            <div class="media">
                <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                    <i class="fab fa-readme  avatar-title font-30 text-white"></i>
                </div>

                <div class="wigdet-two-content media-body">
                    <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Post</p>
                    <h3 class="font-weight-medium my-2"><span data-plugin="counterup">{{$posts->count()}}</span></h3>

                </div>
            </div>
        </div>
    </div>
    <!-- end col -->

    <div class="col-xl-3 col-sm-6">
        <div class="card-box widget-box-two widget-two-custom ">
            <div class="media">
                <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                    <i class=" fab fa-wpforms avatar-title font-30 text-white"></i>
                </div>

                <div class="wigdet-two-content media-body">
                    <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Views</p>
                    <h3 class="font-weight-medium my-2"> <span data-plugin="counterup">{{$views}}</span></h3>

                </div>
            </div>
        </div>
    </div>
    <!-- end col -->

    <div class="col-xl-3 col-sm-6">
        <div class="card-box widget-box-two widget-two-custom ">
            <div class="media">
                <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                    <i class=" fas fa-comments avatar-title font-30 text-white"></i>
                </div>

                <div class="wigdet-two-content media-body">
                    <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Comments</p>
                    <h3 class="font-weight-medium my-2"><span data-plugin="counterup">{{$comment->count()}}</span></h3>

                </div>
            </div>
        </div>
    </div>
    <!-- end col -->

    <div class="col-xl-3 col-sm-6">
        <div class="card-box widget-box-two widget-two-custom ">
            <div class="media">
                <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                    <i class=" fas fa-users  avatar-title font-30 text-white"></i>
                </div>

                <div class="wigdet-two-content media-body">
                    <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Users</p>
                    <h3 class="font-weight-medium my-2"><span data-plugin="counterup">{{$users->count()}}</span></h3>

                </div>
            </div>
        </div>
    </div>

</div>
<!-- end row -->
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">


            <table id="datatable" class="DataTable table table-bordered  " style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Title</th>
                    <th>Content</th>
                     <th>Category</th>
                     <td>image</td>
                     <td>Views</td>
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
                        <img width="50px" height="50px" src="{{ asset('upload/post/' . $post->image) }}" class="respimg" alt="">
                    </td>
                    <td>
                        {{$post->count}}
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
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                        data-target="#edit{{$post->id}}"
                        title="Edit"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger">
                            <a href="">
                                <i class="fa fa-trash text-white"></i>
                            </a>

                        </button>

                     </td>

                     <div class="modal fade" id="edit{{$post->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                        id="exampleModalLabel">
                                        Edit Tag
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- edit modal -->
                                    <form method="post" action="{{ route('admin.post.update',  $post->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <h5>Heading<span class="text-danger">*</span></h5>
                                                                    <div class="controls">
                                                                        <input type="text" value="{{$post->title}}" name="title" class="form-control" required autocomplete="off">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <h5>Content <span class="text-danger">*</span></h5>
                                                                    <div class="controls">
                                                                        <input type="text" value="{{$post->content}}" name="content" class="form-control" required autocomplete="off">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <h5>Tag <span class="text-danger">*</span></h5>
                                                                    <div class="controls">

                                                                        <select  name="name[]" class="form-control custom-select">
                                                                            <option value="{{$post->tags->name}}"></option>
                                                                            @foreach($tags as $value => $tag)
                                                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <h5>Category <span class="text-danger">*</span></h5>
                                                                    <div class="controls">
                                                                        <option value="">select Category</option>
                                                                        <select  name="categories_id" class="form-control">
                                                                            <option value="{{$post->categories_id}}"></option>
                                                                            {{-- @foreach($categories as $value => $category)
                                                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                            @endforeach --}}
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <h5>Image<span class="text-danger">*</span></h5>
                                                                    <div class="controls">
                                                                        <input type="file" name="image" class="form-control" required autocomplete="off">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Row -->
                                                <div class="text-xs-right">
                                                    <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
                                                </div>

                                    </form>


                                </div>

                            </div>
                        </div>
                    </div>

                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--- end row -->
@endsection
