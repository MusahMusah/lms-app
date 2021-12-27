@extends('auth.base')
@section('content')
    <!--Grid row-->
    <div class="row mt-5">
        <!--Grid column-->
        <div class="col-md-6 col-xl-5 mx-auto mb-4">
            <!--Form-->
            <div class="card wow fadeInRight" data-wow-delay="0.3s">
                <div class="card-body mb-5">
                    <!--Header-->
                    <div class="text-center">
                        <h3 class="white-text font-weight-bold">
                            <i class="fa fa-user white-text"></i> Login:</h3>
                        <hr class="hr-light">
                    </div>
                    <!--Body-->
                    <div class="md-form">
                        <i class="fa fa-envelope prefix white-text active"></i>
                        <input type="text" name="email"  required value="{{ old('email') }}"
                               autofocus autocomplete="email" id="form2" class="white-text form-control @error('email') is-invalid @enderror">
                        <label for="form2" class="active">Your email</label>
                        @error('email')
                        <span class="invalid-feedback pl-5" role="alert" style="fontsize: 1em">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="md-form">
                        <i class="fa fa-lock prefix white-text active"></i>
                        <input type="password" name="password" id="form4" class="white-text form-control @error('password') is-invalid @enderror">
                        <label for="form4">Your password</label>
                        @error('password ')
                        <span class="invalid-feedback pl-5" role="alert" style="fontsize: 1em">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-indigo btn-rounded btn-block" style="border-radius: 1.5rem">Submit</button>
                        <hr class="hr-light mb-3 mt-4">
                        <div class="inline-ul text-center d-flex justify-content-center">
                            <a href="{{ route('register') }}" class="btn btn-white btn-rounded btn-block text-capitalize" style="border-radius: 1.5rem">
                                Don't have an account? Register
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.Form-->
        </div>
        <!--Grid column-->
    </div>
    <!--Grid row-->
@endsection
