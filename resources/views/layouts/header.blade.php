<div id="hwrap">
    <nav class="navbar navbar-default navbar-expand-md" role="navigation">
        <a href="/">
            <div id="logo"><img src="/images/bemo-logo2.png" width="167" height="100"
                    alt="Site logo" /></div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Route::currentRouteName() == 'welcome' ? 'active' : ''}}">
                    <a class="nav-link" href="/" rel="self" >Main <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'contact' ? 'active' : ''}}">
                    <a class="nav-link" href="/contact" rel="self">Contact Us</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'login' ? 'active' : ''}}">
                    <a class="nav-link" href="/login" rel="self">Login</a>
                </li>
            </ul>
        </div>
    </nav>
</div>