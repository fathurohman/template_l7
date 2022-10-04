@extends('layouts.sbadmin.template')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<div class="pagetitle">
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Change Password</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section profile">
    <div class="row">


      <div class="col-xl-12">

        <div class="card">
          <div class="card-body pt-3">

                <!-- Change Password Form -->
                <form action="{{ route('update.password')}}" method="post">
                    @csrf
                  <div class="row mb-3">
                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                    <div class="col-md-8 col-lg-9">
                        <input type="password" name="old_password" class="form-control" id="old_password" placeholder="Old Password">
                        @error('old_password')
                        <div class="text-danger mt-2">
                        {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-9">
                        <input type="password" name="password" class="form-control" id="password" placeholder="New Password">
                        @error('password')
                        <div class="text-danger mt-2">
                        {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                    <div class="col-md-8 col-lg-9">
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder=" Confirm Password">
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                  </div>
                </form><!-- End Change Password Form -->



          </div>
        </div>

      </div>
    </div>
  </section>

</div>


@endsection
