<header class="header-part">
    <div class="container">
        <div class="header-content">
            <div class="header-left">
                <button type="button" class="header-widget sidebar-btn">
                    <i class="fas fa-align-left"></i>
                </button>
                <a href="index.html" class="header-logo">
                    <img src="{{asset('assetsEndUser/images/logo.png')}}" alt="logo">
                </a>
                <a href="user-form.html" class="header-widget header-user">
                    <img src="images/user.png" alt="user">
                    <a href="{{route('login')}}">
                    <span>
                    @if(!Auth::check())
                            join me
                        @endif
                    </span>
                    </a>
                </a>

                @if(Auth::check())
                    <a class="ml-2" href="{{ route('endUser.logout') }}">
                        <span>logo out</span>
                    </a>
                @endif

                <button type="button" class="header-widget search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <form class="header-form">
                <div class="header-search">
                    <button type="submit" title="Search Submit "><i class="fas fa-search"></i></button>
                    <input type="text" placeholder="Search, Whatever you needs...">
                    <button type="button" title="Search Option" class="option-btn"><i class="fas fa-sliders-h"></i></button>
                </div>
                <div class="header-option">
                    <div class="option-grid">
                        <div class="option-group"><input type="text" placeholder="City"></div>
                        <div class="option-group"><input type="text" placeholder="State"></div>
                        <div class="option-group"><input type="text" placeholder="Min Price"></div>
                        <div class="option-group"><input type="text" placeholder="Max Price"></div>
                        <button type="submit"><i class="fas fa-search"></i><span>Search</span></button>
                    </div>
                </div>
            </form>
            <div class="header-right">
                <ul class="header-list">
                    <li class="header-item">
                        <button type="button" class="header-widget">
                            <i class="fas fa-language"></i>
                        </button>
                        <div class="dropdown-card">
                            <ul>
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li style="list-style: none ; text-align: center">
                                        <a style="text-decoration: none" rel="alternate" hreflang="{{ $localeCode }}"
                                           href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>

                </ul>
                <a href="{{route("endUser.ads.create")}}" class="btn btn-inline post-btn">
                    <i class="fas fa-plus-circle"></i>
                    <span>post your ad</span>
                </a>
            </div>
        </div>
    </div>
</header>
