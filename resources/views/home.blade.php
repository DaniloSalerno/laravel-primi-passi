@include('partials/head')
<main>
    <div class="container p-5 mb-4">
        <div class="container-fluid py-5">

            <h1 class="display-5 fw-bold">
                {{$title}}
            </h1>

            <p class="col-md-8 fs-4">
                {{$message}}
            </p>

            <a href="{{ url('/about') }}" class="btn btn-primary btn-lg" type="button">About</a>
        </div>
    </div>
</main>
@include('partials/foot')