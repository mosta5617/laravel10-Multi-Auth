@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <div class="row profile-body">
            <!-- left wrapper start -->
            <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
                <div class="card rounded">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center">

                                {{-- Image set if not empty or not --}}

                                <img class="wd-100 rounded-circle"
                                    src="{{ !empty($profile_data->photo) ? url('upload/admin-images/' . $profile_data->photo) : url('upload/no-image.jpg') }}"
                                    alt="profile">

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

                                    <h6 class="card-title"> Admin Change Password !</h6> <br>

                                    @if (count($errors))
                                        @foreach ($errors->all() as $error)
                                            <p class="alert alert-danger alert-dismissible fade show">
                                                {{ $error }}
                                            </p>
                                        @endforeach
                                    @endif

                                    <form class="forms-sample" method="POST" action="{{ route('admin.password.store') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="oldpassword" class="form-label">Old Password</label>
                                            <input type="password" class="form-control" name="old_password" id="oldpassword"
                                                autocomplete="off" value="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="newpassword" class="form-label">New Password</label>
                                            <input type="password" class="form-control" name="new_password" id="newpassword"
                                                autocomplete="off" value="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="confirmpassword" class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" name="confirm_password"
                                                id="confirmpassword" autocomplete="off" value="">
                                        </div>

                                        <button type="submit" class="btn btn-primary me-2">Change Password</button>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection
