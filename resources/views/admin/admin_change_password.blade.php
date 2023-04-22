@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <div class="row profile-body">
            <!-- left wrapper start -->
            
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card rounded">
                            <div class="card">
                                <div class="card-body">

                                    <h6 class="card-title">Change Admin Password</h6>

                                    @if (count($errors))
                                        @foreach ($errors->all() as $error)
                                            <p class="alert alert-danger alert-dismissible fade show">
                                                {{ $error }}
                                            </p>
                                        @endforeach
                                    @endif

                                    <form class="forms-sample" method="POST" action="{{ route('admin.password.store') }}" >
                                        @csrf
                                        <div class="mb-3">
                                            <label for="oldpassword" class="form-label">Old Password</label>
                                            <input type="password" class="form-control" name="old_password"
                                                id="oldpassword" autocomplete="off"
                                                value="">
                                        </div>  
                                        <div class="mb-3">
                                            <label for="newpassword" class="form-label">New Password</label>
                                            <input type="password" class="form-control" name="new_password"
                                                id="newpassword" autocomplete="off"
                                                value="">
                                        </div>  
                                        <div class="mb-3">
                                            <label for="confirmpassword" class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" name="confirm_password"
                                                id="confirmpassword" autocomplete="off"
                                                value="">
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
