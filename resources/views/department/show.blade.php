@extends('layouts.master')
@section('content')
    <style>
        /* Carousel styling */
        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
            height: 100vh;
        }

        .carousel-item:nth-child(1) {
            background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }
        .carousel-item:nth-child(2) {
            background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }
        .carousel-item:nth-child(3) {
            background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
            #introCarousel {
                margin-top: -58.59px;
            }
            #introCarousel,
            .carousel-inner,
            .carousel-item,
            .carousel-item.active {
                height: 50vh;
            }
        }

         #intro {
             /* Margin to fix overlapping fixed navbar */
             margin-top: 58px;
         }
        @media (max-width: 991px) {
            #intro {
                /* Margin to fix overlapping fixed navbar */
                margin-top: 45px;
            }
        }
    </style>
    <!-- Carousel wrapper -->
    <div id="introCarousel" style="margin: 1rem 0" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
        <!-- Indicators -->

        <!-- Inner -->
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white text-center">
                            <h1 class="mb-3">Learn All Course in {{ $department->name }}</h1>
                            <h5 class="mb-4">
                                Best & Free Courses all available here
                            </h5>
                            <a
                                class="btn btn-outline-light btn-lg m-2"
                                role="button"
                                rel="nofollow"
                                target="_blank"
                            >Start tutorial</a
                            >
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Inner -->

    </div>
    <!-- Carousel wrapper -->

    <div class="container-fluid my-5">
        <!--Grid row-->
        <div class="row">
           @forelse($department->courses as $courses)
               <!--Grid column-->
                   <div class="col-md-9 mb-4">
                       <!--Section: Content-->
                       <section>
                           <!-- Post -->
                           <div class="row">
                               <div class="col-md-4 mb-4">
                                   <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
                                       <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                                       <a href="#!">
                                           <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                       </a>
                                   </div>
                               </div>

                               <div class="col-md-8 mb-4">
                                   <h5>
                                       <a href="{{ route('courses.show', $courses->course_code) }}">
                                           <strong>{{$courses->course_title}} - ( {{$courses->course_code}} )</strong>
                                       </a>
                                   </h5>
                                   <p>
                                       {{ Str::limit($courses->course_description, 150) }}
                                   </p>

                                   <a href="{{ route('courses.show', $courses->course_code) }}" class="btn btn-primary">Open Course</a>
                               </div>
                           </div>
                       </section>
                       <!--Section: Content-->
                   </div>
                   <!--Grid column-->
           @empty
               <div class="col-md-12">
                   <h3 class="text-center">No posts yet</h3>
               </div>
           @endforelse
        </div>
        <!--Grid row-->

        <!-- Pagination -->
        <nav class="my-4" aria-label="...">
            <ul class="pagination pagination-circle justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
