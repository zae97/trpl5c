<nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-dashboard"></i>
        <p class="hidden-lg hidden-md">Dashboard</p>
                    </a>
                </li>


            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                   <a href="/">
                       <p>{{ Auth::user()->name }}</p>
                    </a>
                </li>

                <li>
                  <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();"
                            class="btn btn-default btn-flat">Sign out</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                    <!-- <a href="#">
                        <p>Log out</p>
                    </a> -->
                </li>
    <li class="separator hidden-lg hidden-md"></li>
            </ul>
        </div>
    </div>
</nav>
