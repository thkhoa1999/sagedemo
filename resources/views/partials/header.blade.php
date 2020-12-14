<header id="header" class="module header " data-module="header">
    <nav class="container navbar navbar-expand-lg justify-content-lg-between">
        <div class="header-mobile">
            <div class="col-mb-8">
                <a id="header-logo" class="navbar-brand header-logo" title="Logo" href="{!! App::getLogo()['href'] !!}">
                    <img src="{!! App::getLogo()['url'] !!}" alt="{!! App::getLogo()['alt'] !!}">
                </a>
            </div>
            <div class="col-mb-4">
                <button class="navbar-toggler hamburger-menu" type="button" data-toggle="collapse"
                    data-target="#main-menu" aria-controls="main-menu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icomoon icon-close-menu d-none"></span>
                    <span class="sr-only">Menu</span>
                </button>
            </div>
        </div>

        <div class="navbar-collapse main-menu" id="main-menu" data-module="menu">
            <ul class="main-menu-ul navbar-nav ml-lg-auto">
                @php
                wp_nav_menu(array(
                'theme_location' => 'primary',
                'items_wrap' => '%3$s',
                'container' => false,
                'depth' => 2,
                // 'walker' => new App\Libs\Services\C8ThemeHeaderMenu()
                ));
                @endphp
                <li class="action-search">
                    <a href="javascript:void(0)" class="is-open-search">
                        <em class="icomoon icon-icon-search"></em>
                    </a>
                </li>
            </ul>
        </div>

    </nav>
</header>