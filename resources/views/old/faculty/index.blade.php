@extends('layouts.master')
@section('content')
    <div class="container my-5">

        <!-- Section -->
        <section>
            <h3 class="font-weight-bold text-center dark-grey-text pb-2">All Available Faculties</h3>
            <hr class="w-header my-4">
            <p class="lead text-center text-muted pt-2 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit ex facere quas possimus.</p>

            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!-- Panel -->
                    <div class="card">

                        <div class="card-header white-text primary-color">
                           Science Faculty
                        </div>

                        <div class="card-body text-center px-4">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">
                                    Departments
                                    <span class="badge badge-light">20</span>
                                </a>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary px-3"><i class="far fa-edit"></i></button>
                                <button type="button" class="btn btn-primary px-3"><i class="far fa-trash-alt"></i></button>
                            </div>
                        </div>

                    </div>
                    <!-- Panel -->

                </div>
                <!-- Grid column -->

            </div>

        </section>
        <!-- Section -->

    </div>
@endsection
