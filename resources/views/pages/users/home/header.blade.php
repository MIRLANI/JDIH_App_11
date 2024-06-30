<section id="multiple-column-form" class="full-background"
    style="background-image: url('{{ asset('images/fmipa_uho.jpg') }}'); background-size: cover; background-color: rgba(0,0,0,0.7); background-blend-mode: darken; background-position: center; background-attachment: scroll;">
    <div class="container">
        <br>
        <h2 class="pt-4 m-5 text-white text-center">SELAMAT DATANG <br> DI DATABASE PERATURAN JDIH FMIPA</h2>
        <div class="row match-height">
            <div class="col-lg-8 col-md-8 col-sm-10 col-12 mx-auto">
                <div class="card shadow-lg" style="margin-bottom: 250px; border-radius: 15px;">
                    <div class="card-content">
                        <div class="card-body">
                           @include('pages.users.searchForm')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>