@extends('layouts.main')

@section('home')

@include('partials.nav')


    <div class="container mt-3">
      <h2>Hari Guru</h2>
      <article class="p-6 bg-white mb-3">
        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Saya membuat aplikasi hari guru menggunakan PHP native mirip seperti aplikasi blog yang sudah saya buat tetapi ini lebih spesifik mengenai hari guru. Tujuan saya membuat aplikasi ini adalah untuk mengenang jasa-jasa para guru yang rela mendidik setiap murid untuk menjadi orang yang berguna dimasa depan</p>
        <p>Berikut Hasilnya :</p>
        <img src="{{ asset('assets/guru.jpeg') }}" class="img-fluid mb-3" alt="...">
        <a href="/projects" class="btn btn-primary">&laquo; Back To Projects</a>
      </article>
    </div>

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