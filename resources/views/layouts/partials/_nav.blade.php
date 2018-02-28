<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('home_path') }}">Laracart</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="{{ set_active_route('home_path') }}"><a href="{{ route('home_path') }}">Home</a></li>
            <li class="{{ set_active_route('about_path') }}"><a href="{{ route('about_path') }}">About</a></li>
            <li><a href="#contact">Artisant</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planet <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">laravel.com</a></li>
                <li><a href="#">laravel.io</a></li>
                <li><a href="#">laracast</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">larajobs</li>
                <li><a href="#">laranews</a></li>
                <li><a href="#">larachat</a></li>
              </ul>
            </li>
            <li><a href="{{ set_active_route('contact_path') }}">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">Connexion</a></li>
                <li><a href="#contact">S'enregistrer</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>