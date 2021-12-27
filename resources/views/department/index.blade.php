@extends('layouts.master')
@section('content')
    <!--Section: Content-->
    <section>
        <!-- Jumbotron -->
        <div id="intro" class="p-5 text-center bg-light shadow-5 rounded mb-5">
            <h1 class="mb-3 h2">Learn Bootstrap 5 with MDB</h1>
            <p class="mb-3">Best & free guide of responsive web design</p>
            <a class="btn btn-primary m-2" href="https://www.youtube.com/watch?v=c9B4TPnak1A" role="button" rel="nofollow"
               target="_blank">Start tutorial</a>
            <a class="btn btn-primary m-2" href="https://mdbootstrap.com/docs/standard/" target="_blank"
               role="button">Download MDB UI KIT</a>
        </div>
        <!-- Jumbotron -->
    </section>
    <!--Section: Content-->

    <!--Section: Content-->
    <section class="text-center">

        <div class="row">
            @forelse($faculties as $faculty)
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$faculty->name}}</h5>
                            <p class="card-text">
                                {{ Str::limit($faculty->description, 50) }}
                            </p>
                            <a href="{{ route('faculty.show', $faculty->id) }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @empty
                <p>No faculty found</p>
            @endforelse
        </div>

    </section>
    <!--Section: Content-->

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
@endsection
