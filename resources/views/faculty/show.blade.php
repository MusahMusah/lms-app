@extends('layouts.master')
@section('content')
    <!-- Background image -->
    <div id="intro" class="bg-image vh-100 shadow-1-strong" style="height: 25rem !important;">
        <video style="min-width: 100%; min-height: 100%;" playsinline autoplay muted loop>
            <source class="h-100"
                    src="https://mdbootstrap.com/img/video/animation-intro-min.mp4"
                    type="video/mp4"
            />
        </video>
        <div class="mask" style="
            background: linear-gradient(
              45deg,
              rgba(29, 236, 197, 0.7),
              rgba(91, 14, 214, 0.7) 100%
            );
          ">
            <div class="container d-flex align-items-center justify-content-center text-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">
                      Welcome to  {{ $faculty->name }}
                    </h1>
                    <h6 class="mb-4">
                        {{$faculty->description}}
                    </h6>
                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->


    <!--Section: Content-->
    <section class="mb-5">
        <h2 class="my-5 text-center">List of Available Departments</h2>
        <div class="row gx-5">
            @forelse($faculty->departments as $department)
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <!-- News block -->
                    <div>
                        <!-- Featured image -->
                        <div class="bg-image hover-overlay shadow-1-strong ripple mb-4" data-mdb-ripple-color="light">
                            <img src="https://mdbootstrap.com/img/new/fluid/city/113.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>


                        <!-- Article title and description -->
                        <a href="" class="text-dark">
                            <h5>
                                <a href="{{ route('department.show', $department->id) }}">
                                    {{ $department->name }}
                                </a>
                            </h5>
                        </a>

                        <hr />

                        <!-- News -->
                        <h5> Most Popular Courses</h5>
                        @foreach($department->courses as $course)
                            <a href="{{route('courses.show', $course->course_code)}}" class="text-dark">
                                <div class="row mb-4 border-bottom pb-2">
                                    <div class="col-3">
                                        <img src="https://mdbootstrap.com/img/new/standard/city/041.jpg"
                                             class="img-fluid shadow-1-strong rounded" alt="" />
                                    </div>

                                    <div class="col-9">
                                        <p class="mb-2"><strong>{{ $course->course_title . ' - ' . '('.$course->course_code.')' }}</strong></p>
                                    </div>
                                </div>
                            </a>
                        @endforeach

                    </div>
                    <!-- News block -->
                </div>
            @empty
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <div class="card card-cascade narrower">
                        <div class="view view-cascade gradient-card-header blue-gradient">
                            <h2 class="card-header-title mb-3">No Departments</h2>
                        </div>
                        <div class="card-body card-body-cascade text-center">
                            <p>
                                There are no departments in this faculty.
                            </p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>

    </section>
    <!--Section: Content-->

    <!-- Pagination -->
    <nav class="my-4" aria-label="...">
        <ul class="pagination pagination-circle justify-content-center">
{{--            {{ $faculty->departments->links() }}--}}
        </ul>
    </nav>
@endsection
