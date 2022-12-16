@extends('layouts.admin')



@section('content')
<div class="card shadow">
    <div class="card-body">
        <span class="h3">
            All USER
        </span>
        <span class="float-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#albummodal">
                <i class="fa fa-plus"></i>
            </button>
        </span>
        <br><br>
        @if(count($users) > 0)
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User name </th>
                        <th scope="col">Email </th>
                        <th scope="col">Act</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <button onclick="edituser({{$user}})" class="btn btn-primary btn-sm">
                                Edit</button>
                            <button onclick="deleteuser({{$user->id}})" class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <p class="h3">No ALBUM has been added yet !</p>
        @endif
    </div>
</div>








<!--Edit modal-->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modaltitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="msgs" class="msgs">

                </div>
                <form id="editform">
                    @csrf
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Email</label>
                        <input type="text" name="email" class="form-control" id="email" required>
                    </div>

            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" id="editid" hidden="editid">
                <button type="button" class="btn btn-secondary" id="submit" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--end album modal-->



@push('script')
<script>
function edituser(user) {
    $('#modaltitle').text("Edit " + user.name)
    $('#name').val(user.name)
    $('#email').val(user.email)
    $('#editid').val(user.id);
    $('#editmodal').modal('show')

    //edit form
    $('#editform').submit(function(e) {
        $("#loading").show()
        e.preventDefault();
        $("#msgs").html("");
        var form = $("#editform")[0];
        var _data = new FormData(form);
       
        var lists = [];
        var element = { key: _data.get('name'), value: _data.get('email')};
        lists.push(element)
        console.log(lists);
        $.ajax({
            url: '{{url(route("edituser"))}}',
            data: _data,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(data) {
                $("#loading").hide()
                toastr.success("Save changes successfully");
                $('#editform').trigger('reset');
                $('#editmodal').modal('hide')
                setTimeout(() => {
                    location.reload();
                }, 1000)
            },
            error: function(result) {
                $("#loading").hide()
                let errors = result.responseJSON.errors;
                console.log(errors);
                $.each(errors, function(key, value) {
                    let msgs = "<div class='alert alert-danger'>" + value + "</div>";
                    $('#msgs').append(msgs);
                })
                toastr.error('Can not edit user', 'Error! An error occurred. Please try again later!');
            }
        });
    });

}

function deleteuser(id) {
    if (confirm("Do you want to delete this user?")) {
        axios.post('{{route("deleteuser")}}', {
            id: id
        }).then((response) => {
            toastr.success('User Deleted!')
            location.reload();
        }).catch((error) => {
            toastr.error('Network connection error!')
        })
    }
}
</script>


@endpush

@endsection