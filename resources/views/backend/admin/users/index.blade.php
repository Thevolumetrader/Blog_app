@extends('backend.master')

@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
Manage Administrator
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<section id="main-content" class="">








<!-- DataTables Example -->
<div class="wrapper main-wrapper row">

    <div class="card-body">
        <button type="button" class="btn btn-success m-2" data-toggle="modal"   data-target="#exampleModal">
            + Create New
         </button>

        <div class="table-responsive">
        <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"style="text-align: center">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone number</th>
                <th>Email</th>
                <th>Role</th>
                <th>Permissions</th>
                <th>Tools</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone number</th>
                <th>Email</th>
                <th>Role</th>
                <th>Permissions</th>
                <th>Tools</th>
            </tr>
            </tfoot>
            <tbody>
                @foreach ($users as $user)
                <tr {{ Auth::user()->id == $user->id ? 'bgcolor=#ddd' : '' }}>
                    <td>{{$user['id']}}</td>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['phone_number']}}</td>
                    <td>{{$user['email']}}</td>
                    <td>
                        @if ($user->roles->isNotEmpty())
                            @foreach ($user->roles as $role)
                                <span class="badge badge-success">
                                    {{ $role->name }}
                                </span>
                            @endforeach
                        @endif

                    </td>
                    <td>
                        @if ($user->permissions->isNotEmpty())

                            @foreach ($user->permissions as $permission)
                                <span class="badge badge-primary">
                                    {{ $permission->name }}
                                </span>
                            @endforeach

                        @endif
                    </td>
                    <td>
                        <a href=""><i class="fa fa-eye  btn-sm btn-info"></i></a>
                        <a href="{{route('adminuser.edit', $user->id)}}"><i class="fa fa-edit btn-sm btn-success"></i></a>


                        {{-- @role('superadmin')
                                <a href="{{route('admin.delete', $user->id)}}"  ><i class="fa fa-trash btn-sm btn-danger"></i></a>
                            @endrole --}}

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
                    <!-- add_new admin -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
               Add New Administartor
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- add_form -->

<form method="POST" action="{{route('adminuser.store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="name">User name</label>
        <input type="text" name="name" class="form-control " id="input" id="name" placeholder="Name..." value="{{ old('name') }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="input" id="email" placeholder="Email..." value="{{ old('email') }}">
    </div>
    <div class="form-group">
        <label for="email">Phone Number</label>
        <input type="number" name="phone_number" class="form-control"  id="input" id="phone_number" placeholder="phone_number" value="{{ old('phone_number') }}">
    </div>
    {{-- <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password..." required minlength="8">
    </div>
    <div class="form-group">
        <label for="password_confirmation">Password Confirm</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="Password..." id="password_confirmation">
    </div> --}}
    <div class="col-md-12">
        <div class="form-group">
            <p>Church Branch<span class="text-danger">*</span></p>
            <div class="controls">
                <select name="branches_id"  id="input" required="" class="form-control">
                    <option value="" selected="" disabled="">Select Branch
                    </option>

                    {{-- @foreach ($brances as $branch)
                        <option value="{{ $branch->id }}">{{ $branch->name }}
                        </option>
                    @endforeach --}}
                </select>
            </div>
        </div>
</div>
    <div class="form-group">
        <label for="role">Select Role</label>

        <select class="role form-control" name="role" id="role">
            <option value="">Select Role...</option>
            @foreach ($roles as $role)

            <option data-role-id="{{$role->id}}"  data-role-slug="{{$role->slug}}" value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
        </select>
    </div>

    <div id="permissions_box" >
        <label for="roles">Select Permissions</label>
        <div id="permissions_ckeckbox_list">
        </div>
    </div>

    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Submit">
    </div>
</form>


    </div>
        <!-- delete Modal-->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you shure you want to delete this?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                </div>
                <div class="modal-body">Select "delete" If you realy want to delete this user.</div>
                <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <form method="POST" action="">
                    @method('PUT')
                    @csrf
                    {{-- <input type="hidden" id="user_id" name="user_id" value=""> --}}
                    <a class="btn btn-primary" onclick="$(this).closest('form').submit();">Delete</a>
                </form>
                </div>
            </div>
            </div>

</div>
</div>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>

</section>

@section('js_user_page')

    <script>

        $(document).ready(function(){
            var permissions_box = $('#permissions_box');
            var permissions_ckeckbox_list = $('#permissions_ckeckbox_list');

            permissions_box.hide(); // hide all boxes


            $('#role').on('change', function() {
                var role = $(this).find(':selected');
                var role_id = role.data('role-id');
                var role_slug = role.data('role-slug');

                permissions_ckeckbox_list.empty();

                $.ajax({
                    url: "{{route('adminuser.create')}}",
                    method: 'get',
                    dataType: 'json',
                    data: {
                        role_id: role_id,
                        role_slug: role_slug,
                    }
                }).done(function(data) {

                    console.log(data);

                    permissions_box.show();
                    // permissions_ckeckbox_list.empty();

                    $.each(data, function(index, element){
                        $(permissions_ckeckbox_list).append(
                            '<div class="custom-control custom-checkbox">'+
                                '<input class="custom-control-input" type="checkbox" name="permissions[]" id="'+ element.slug +'" value="'+ element.id +'">' +
                                '<label class="custom-control-label" for="'+ element.slug +'">'+ element.name +'</label>'+
                            '</div>'
                        );

                    });
                });
            });
        });

    </script>

@endsection
@section('js_user_page')

<script src="/vendor/chart.js/Chart.min.js"></script>
<script src="/js/admin/demo/chart-area-demo.js"></script>

    <script>
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var user_id = button.data('userid')

            var modal = $(this)
            // modal.find('.modal-footer #user_id').val(user_id)
            modal.find('form').attr('action','/users/' + user_id);
        })
    </script>

@endsection

@endsection
@push('child-scripts')
<script>
    $(document).ready(function() {
        $('#datatable').DataTable().destroy();
        $('#datatable').DataTable({
       "language": {
              search: 'Search Record',
              searchPlaceholder: 'filter  results '
            },
      dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                dom: 'lBfrtip',
      buttons: [
                    // {
                    //     extend: 'csv', className: 'btn-sm', exportOptions: {
                    //         page: ':all'
                    //     }
                    // },
                    {
                        extend: 'excel', title: 'List of teacher', className: 'btn-sm ', exportOptions: {
                            // page: ':all'
                            columns: [ 0, 1, 2,3,4 ]
                        }
                    },
                    {
                        extend: 'pdf', title: 'List of teacher', className: 'btn-sm', exportOptions: {
                            // page: ':all'
                            columns: [ 0, 1, 2,3,4  ]
                        }

                    },
                    {
                        extend: 'print', title: 'List of teacher', className: 'btn-sm', exportOptions: {
                            // page: ':all'
                            columns: [ 0, 1, 2,3,4  ]
                        }
                    }
                ]
       });

    } );
</script>




@endpush
