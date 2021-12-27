@extends('auth.base')
@section('content')
    <!--Grid row-->
    <div class="row mt-5">
        <!--Grid column-->
        <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
            <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Sign up right now! </h1>
            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
            <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur adipisicing
                elit. Rem repellendus quasi fuga
                nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea
                dolor molestiae, quisquam iste, maiores. Nulla.</h6>
            <a class="btn btn-outline-white btn-rounded wow fadeInLeft" data-wow-delay="0.3s">Learn more</a>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-md-6 col-xl-5 mb-4">
            <!--Form-->
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="card wow fadeInRight" data-wow-delay="0.3s">
                    <div class="card-body mb-5">
                        <!--Header-->
                        <div class="text-center">
                            <h3 class="white-text font-weight-bold">
                                <i class="fa fa-user white-text"></i> Register:</h3>
                            <hr class="hr-light">
                        </div>
                        <!--Body-->
                        <div class="md-form">
                            <i class="fa fa-user prefix white-text active"></i>
                            <input type="text" id="form3"
                                   class="white-text form-control @error('name') is-invalid @enderror"
                                   required value="{{ old('name') }}" autocomplete="name"
                                   autofocus name="name"
                            >
                            <label for="form3" class="active">Your name</label>
                            @error('name')
                                <span class="invalid-feedback pl-5" role="alert" style="fontsize: 1em">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="md-form">
                            <i class="fa fa-user prefix white-text active"></i>
                            <input type="text" id="form3"
                                   class="white-text form-control @error('matric_no') is-invalid @enderror"
                                   required value="{{ old('matric_no') }}" autocomplete="name"
                                   name="matric_no"
                            >
                            <label for="form3" class="active">Your Matric Number</label>
                            @error('matric_no')
                            <span class="invalid-feedback pl-5" role="alert" style="fontsize: 1em">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="md-form">
                            <i class="fa fa-envelope prefix white-text active"></i>
                            <input type="text" name="email"  required value="{{ old('email') }}"
                                   autocomplete="email" id="form2" class="white-text form-control @error('email') is-invalid @enderror">
                            <label for="form2" class="active">Your email</label>
                            @error('email')
                                <span class="invalid-feedback pl-5" role="alert" style="fontsize: 1em">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="md-form">
                            <i class="fa fa-lock prefix white-text active"></i>
                            <input type="password" name="password" id="form4"
                                   class="white-text form-control @error('password') is-invalid @enderror">
                            <label for="form4">Your password</label>
                            @error('password')
                            <span class="invalid-feedback pl-5" role="alert" style="fontsize: 1em">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="md-form">
                            <i class="fa fa-lock prefix white-text active"></i>
                            <input type="password" name="password_confirmation" id="form4"
                                   class="white-text form-control @error('password_confirmation') is-invalid @enderror">
                            <label for="form4">Confirm password</label>
                            @error('password_confirmation')
                            <span class="invalid-feedback pl-5" role="alert" style="fontsize: 1em">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="text-center mt-4">
                            <button class="btn btn-indigo btn-rounded btn-block" style="border-radius: 1.5rem">Submit
                            </button>
                            <hr class="hr-light mb-3 mt-4">
                            <div class="inline-ul text-center d-flex justify-content-center">
                                <a href="{{ route('login') }}"
                                   class="btn btn-white btn-rounded btn-block text-capitalize"
                                   style="border-radius: 1.5rem">
                                    Already have an account? Login
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--/.Form-->
        </div>
        <!--Grid column-->
    </div>
    <!--Grid row-->
@endsection
