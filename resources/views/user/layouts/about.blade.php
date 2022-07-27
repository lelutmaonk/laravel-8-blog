@extends('user/layouts/main')

@section('container')
    
    <div class="album py-5">
    <div class="container mt-4">

        <h1 class="fw-light">{{ $title }}</h1>
          


        <div class="row g-4 row-cols-1 row-cols-lg-2 mt-2">

            <div class="feature col">
              <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-dark fs-2 mb-3">
                <i class="bi bi-controller"></i>
              </div>
              <h2 class="lead fw-bold">Featured title</h2>
              <p class="card-text">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            </div>

            <div class="feature col">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-dark fs-2 mb-3">
                  <i class="bi bi-controller"></i>
                </div>
                <h2 class="lead fw-bold">Featured title</h2>
                <p class="card-text">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
              </div>

              <div class="feature col">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-dark fs-2 mb-3">
                  <i class="bi bi-controller"></i>
                </div>
                <h2 class="lead fw-bold">Featured title</h2>
                <p class="card-text">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
              </div>

              <div class="feature col">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-dark fs-2 mb-3">
                  <i class="bi bi-controller"></i>
                </div>
                <h2 class="lead fw-bold">Featured title</h2>
                <p class="card-text">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
              </div>



            

            

          </div>

    </div>
    </div>

@endsection


