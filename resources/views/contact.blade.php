@extends('layouts.main')

@section('home')
@include('partials.nav')

<div class="container mt-3 mb-3">
  <h2>Halaman Contact</h2>
    <section>
        <form>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Adress</label>
              <input type="text" class="form-control" id="email">
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <input type="pesan" class="form-control" id="pesan">
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
          </form>
          <div class="mt-3">
            <h4>Another Contact</h4>
            <p><a href="https://mail.google.com/mail/u/1/#inbox">gmail</a></p>
            <p><a href="https://youtube.com/@ntudin">Youtube</a></p>
            <p><a href="https://instagram.com/ginan.nanzz">Instagram</a></p>
            <p><a href="https://github.com/ginandaqwe123">GitHub</a></p>
          </div>
    </section>
</div>

         <!-- Footer-->
         <footer class="footer footer-dark text-white bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
                    <div class="col-auto">
                        <a class="small" href="/about">Home</a>
                        <span class="mx-1">&middot;</span>
                       <a class="small" href="/about">About Me</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="/projects">Projects</a> 
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
        </footer>
@endsection