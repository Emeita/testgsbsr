@extends('main')

@section('navbar')
    @include('layout/navbar')
@endsection
<title> HOME</title>
<!DOCTYPE html>
<html lang="en">
    @section('content')
    <br>
    <div class="container">

        <div class="row">
            <div class="col-md-5">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Matematika</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="/pertanyaan" class="btn btn-primary">mulai Kerjakan</a>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">B indo</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Mulai Kerjakan</a>
                </div>
              </div>
            </div>
          </div>

    </div>
    @endsection

   
    
</html>
