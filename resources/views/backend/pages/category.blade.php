
@extends('backend.master')
@section('content')
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Category</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Dashboard 1</li>
                </ol>
            </div>
            <h4 class="page-title">Categories</h4>
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
                    <th>Name</th>
                    <th>Created</th>
                    <th>Ation</th>
                </tr>
                </thead>


                <tbody>


                   @foreach ($categories as $category )


                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                     <td>{{$category->created_at}}</td>
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
