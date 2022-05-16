<header class="tm-header" id="tm-header">
    <div class="tm-header-wrapper">
        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="tm-site-header">
            <div class="mb-3 mx-auto tm-site-logo"><img width="50" src="{{asset ('assets/img/logo.png')}}"></div>
            <h1 class="text-center">Ayoosh Blog</h1>
        </div>
        <nav class="tm-nav" id="tm-nav">
            <ul>
                <li class="tm-nav-item "><a href="{{route('blogs.index')}}" class="tm-nav-link">
                    <i class="fas fa-home"></i>
                    Blog Home
                </a></li>
                <li class="tm-nav-item"><a href="{{route('blogs.add_page')}}" class="tm-nav-link">
                    <i class="fas fa-pen"></i>
                    Write Post
                </a></li>
            </ul>
        </nav>
        <div class="tm-mb-65">
            <a target="_blank" href="https://twitter.com/alhallaqmahmoud" class="tm-social-link">
                <i class="fab fa-twitter tm-social-icon"></i>
            </a>
            <a target="_blank" href="https://instagram.com/mf.hallaq" class="tm-social-link">
                <i class="fab fa-instagram tm-social-icon"></i>
            </a>
            <a target="_blank" href="https://www.linkedin.com/in/mahmoud-alhallaq/" class="tm-social-link">
                <i class="fab fa-linkedin tm-social-icon"></i>
            </a>
        </div>
        <p class="tm-mb-80 pr-5 text-white">
            This is my first developing on the laravel framework!
        </p>
    </div>
</header>
