@extends('layouts.main')

@section('home')

@include('partials.nav')

@foreach ($projects as $project)
    


<div class="container mt-3 mb-3">
  <h2 class="mb-3">Halaman Project</h2>
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <div class="card content-center" style="width: 20rem;">
          <img src="assets/laravel.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $project['title'] }}</h5>
            <p class="card-text">{{ Str::limit($project['body'], 110) }}</p>
            <a href="/projects/{{ $project['id'] }}" class="btn btn-primary">Read More &raquo;</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
          <img src="assets/toko.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Toko online</h5>
            <p class="card-text">Saya membuat aplikasi toko online menggunakan PHP native tujuannya adalah saya ingin membuat aplikasi saya sendiri yang mirip seperti...</p>
            <a href="/project2" class="btn btn-primary">Read More &raquo;</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
          <img src="assets/guru.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Hari Guru</h5>
            <p class="card-text">Saya membuat aplikasi hari guru menggunakan PHP native mirip seperti aplikasi blog yang sudah saya buat tetapi...</p>
            <a href="/project3" class="btn btn-primary">Read More &raquo;</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach

         <!-- Footer-->
         <footer class="footer footer-dark text-white bg-dark py-4 mt-auto">
          <div class="container">
              <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                  <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
                  <div class="col-auto">
                      <a class="small" href="/home">Home</a>
                      <span class="mx-1">&middot;</span>
                      <a class="small" href="/about">About Me</a>
                      <span class="mx-1">&middot;</span>
                      <a class="small" href="/contact">Contact</a>
                      </div>
                      <div class="col-auto">
                        <div class="d-flex justify-content-center fs-2 gap-4">
                          <a class="text-gradient" href="https://youtube.com/@ntudin"><i class="bi bi-youtube"></i></a>
                          <a class="text-gradient" href="https://instagram.com/ginan.nanzz"><i class="bi bi-instagram"></i></a>
                          <a class="text-gradient" href="https://github.com/ginandaqwe123"><i class="bi bi-github"></i></a>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </footer>
@endsection
