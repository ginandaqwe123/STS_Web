@extends('layouts.main')

@section('home')
@include('partials.nav')
     <!-- About Section-->
    <div class="container px-5">
        <section class="bg-light py-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                        <p class="lead fw-light mb-4">My name is Ginanda Herdiansyah</p>
                        <p class="text-muted">Saya sekolah di SMK Bakti Nusantara 666 Jurusan Rekayasa Perangkat Lunak saya sekarang duduk di kelas 12. Tujuan saya memilih jurusan ini karena saya ingin menjadi seorang programmer handal, juga saya ingin menguasai teknologi baru, menjadi developer full stack, membuka startup teknologi, dan meningkatkan efisiensi kerja.</p>
                    </div>
                </div>
            </div>
        </section>    
        </div>
         <!-- Footer-->
         <footer class="footer footer-dark text-white bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
                    <div class="col-auto">
                        <a class="small" href="/">Home</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="/projects">Projects</a>
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
        </footer>
@endsection