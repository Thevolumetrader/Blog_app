
@extends('backend.master')
@section('content')
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.tag.index')}}">Tag</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Dashboard 1</li>
                </ol>
            </div>
            <h4 class="page-title">Contact Us</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<!-- end row -->
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" style="float:right;"  data-target="#exampleModal">
                +
            </button>


            <table id="datatable" class="DataTable table table-bordered  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Created</th>
                    <th>Ation</th>
                </tr>
                </thead>


                <tbody>


                   @foreach ($ContactUs as $tag )


                <tr>
                    <td>{{$tag->id}}</td>
                    <td>{{$tag->text}}</td>
                     <td>{{$tag->created_at}}</td>
                     <td>
                        <button class="btn btn-sm btn-primary">
                            <a href="">
                                <i class="fa fa-eye text-white"></i>
                            </a>

                        </button>
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                        data-target="#edit{{$tag->id}}"
                        title="Edit"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger">
                            <a href="">
                                <i class="fa fa-trash text-white"></i>
                            </a>

                        </button>

                     </td>



                </tr>

                <div class="modal fade" id="edit{{$tag->id}}" tabindex="-1" role="dialog"
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
                                <form method="post" action="{{ route('admin.updateContactUs',  $tag->id) }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    
                                                    <div class="form-group">
                                                        <h5>Tag Name <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="text" class="form-control"
                                                                value="{{  $tag->text }}" required="">
                                                        </div>

                                                    </div>
                                                </div><!-- End Col Md-6 -->
                                            </div> <!-- End Row -->
                                            <div class="text-xs-right">
                                                <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
                                            </div>
                                </form>


                            </div>

                        </div>
                    </div>
                </div>
                @endforeach


                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
               Add Tag
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- add_form -->
            <form method="POST" action="{{route('admin.storeContactUs')}}">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="header-title mb-3">Default Editor</h4>
                            <div class="summernote">
                                <p>Hello Summernote</p>
                            </div>
                            <div class="controls">
                                <input type="text" name="text" class="form-control" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary"
                data-dismiss="modal">close</button>
            <button type="submit" class="btn btn-success">submit</button>
        </div>
        </form>

    </div>
</div>
</div>
</div>
<!--- end row -->
@endsection
