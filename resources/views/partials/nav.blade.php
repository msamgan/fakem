<nav aria-label="Primary navigation"
     class="navbar navbar-main navbar-expand-lg navbar-theme-primary headroom navbar-light navbar-theme-secondary"
     id="navbar-main">
    <div class="container-fluid w-25 position-relative">
        {{--<a class="navbar-brand mr-lg-4" href="./index.html">
            <img alt="Logo light" class="navbar-brand-dark" src="./assets/img/light.svg">
            <img alt="Logo dark" class="navbar-brand-light" src="./assets/img/dark.svg">
        </a>--}}
        <div class="navbar-collapse collapse mr-auto" id="navbar_global">
            <div class="navbar-collapse-header">
                <div class="row">
                    {{--<div class="col-6 collapse-brand">
                        <a href="./index.html">
                            <img alt="Logo dark" src="./assets/img/dark.svg">
                        </a>
                    </div>--}}
                    <div class="col-6 collapse-close">
                        <a aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"
                           class="fas fa-times" data-target="#navbar_global" data-toggle="collapse"
                           href="#navbar_global" title="close"></a>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                <li class="nav-item @if(request()->is('user')) active @endif">
                    <a class="nav-link" href="{{ url('/user') }}">
                        User Generator
                    </a>
                </li>
                {{--<li class="nav-item @if(request()->is('content')) active @endif">
                    <a class="nav-link" href="{{ url('/content') }}">
                        Content Generator
                    </a>
                </li>--}}
            </ul>
        </div>
        <div class="d-flex align-items-center">
            <button aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler ml-2"
                    data-target="#navbar_global" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</nav>
