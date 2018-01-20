<body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Start Bootstrap</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="rumah">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="tabel">Tabel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="galeri">Galeri </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="paragraf">Paragraf</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="custom1">Biodata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="custom2">Quotes</a>
          </li>
        </ul>
         <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"><font color="white"> 
                                    {{ Auth::user()->name }}</font> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
      </div>
    </nav>