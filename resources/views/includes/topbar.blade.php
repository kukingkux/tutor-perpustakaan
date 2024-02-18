<nav class="navbar navbar-expand-lg navbar-light bg-light shadow mb-5">
    <div class="container my-4 justify-content-between">
        <div class="d-flex flex-fill">
            <a class="navbar-brand" href="#"><img src="{{asset('assets/img/logo-libtel.svg')}}" alt="logo" width="128"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav font-weight-bold">
                <a class="nav-link" href="/">Home</a>
                <a class="nav-link" href="/katalog">Katalog</a>
                <a class="nav-link" href="#">Kontak Kami</a>
                </div>
            </div>
        </div>
        <div class="d-flex">
            @guest
            <div class="navbar-nav font-weight-bold gap">
                <a class="nav-link active" href="/login">Masuk <span class="sr-only">(current)</span></a>
                <button type="button" class="btn btn-primary px-4">Daftar</button>
            </div>
            @endguest
            @auth
            <div class="navbar-nav font-weight-bold gap">
                <a class="nav-link active" href="/logout">Logout <span class="sr-only">(current)</span></a>
            </div>
            @endauth
        </div>
    </div>
</nav>
