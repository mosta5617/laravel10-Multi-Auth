@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <div class="page-content">

        <div class="row profile-body">
            <!-- left wrapper start -->
            <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
                <div class="card rounded">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                               
    {{-- Image set if not empty or not --}}

    <img class="wd-100 rounded-circle" src="{{ !empty($profile_data->photo) ? url('upload/admin-images/' . $profile_data->photo) : url('upload/no-image.jpg') }}" alt="profile">

                            </div>
                            <h6 class="card-title mb-0">{{ $profile_data->username }}</h6>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Name: </label>
                            <p class="text-muted">{{ $profile_data->name }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                            <p class="text-muted">{{ $profile_data->email }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                            <p class="text-muted">{{ $profile_data->phone }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                            <p class="text-muted">{{ $profile_data->address }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Since:</label>
                            <p class="text-muted">{{ $profile_data->updated_at }}</p>
                        </div>
                        <div class="mt-3 d-flex social-links">
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="github"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="twitter"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card rounded">
                            <div class="card">
                                <div class="card-body">

                                    <h6 class="card-title">Update Admin Profile</h6>

                                    <form class="forms-sample" method="POST" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data" >
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleInputUsername1" class="form-label">Username</label>
                                            <input type="text" class="form-control" name="username"
                                                id="exampleInputUsername1" autocomplete="off"
                                                value="{{ $profile_data->username }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputname" class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name" id="exampleInputname"
                                                autocomplete="off" value="{{ $profile_data->name }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <input type="email" class="form-control" name="email"
                                                id="exampleInputEmail1" value="{{ $profile_data->email }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputUsername1" class="form-label">Phone</label>
                                            <input type="text" class="form-control" name="phone"
                                                id="exampleInputUsername1" autocomplete="off"
                                                value="{{ $profile_data->phone }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputUsername1" class="form-label">Address</label>
                                            <input type="text" class="form-control" name="address"
                                                id="exampleInputUsername1" autocomplete="off"
                                                value="{{ $profile_data->address }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPhoto" class="form-label">Photo</label>
                                            <input type="file" class="form-control" name="photo" id="myimage"
                                                autocomplete="off" value="{{ $profile_data->photo }}">
                                        </div>
                                        <div class="mb-3">
                                          <label for="exampleInputPhoto" class="form-label"></label>
    {{-- Admin Profile Image set --}}

    <img id="newimage" class="wd-100 rounded-circle" src="{{ !empty($profile_data->photo) ? url('upload/admin-images/' . $profile_data->photo) : url('upload/no-image.jpg') }}" alt="profile">

                                      </div>
                                        <div class="form-check mb-3">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">
                                                Remember me
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2">Save Changes</button>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

<script type="text/javascript">
    $(document).ready(function() {
       $('#myimage').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
          $('#newimage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
       });
    });
</script>

@endsection
