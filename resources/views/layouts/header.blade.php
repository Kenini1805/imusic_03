<header id="header">
    <nav class="navbar navbar-inverse navbar-default active">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{asset('home')}}">
                <img src="https://st.mix166.com/html/images/logo.png" alt="">
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    @foreach($category as $cat)
                    <li><a href="{{asset("category/$cat->id/$cat->name.html")}}">{{strtoupper($cat->name)}}&nbsp;&nbsp;&nbsp;</a></li>
                    @endforeach
                </ul>
                <form id="search" class="navbar-form navbar-right hidden-sm" action="{{asset('search')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="input-g">
                            <input id="search_input_text" type="text" class="form-control input-sm" name="keyword" value="" placeholder="Search">
                            <i class="flaticon-search"></i>
                        </div>
                        <!-- /input-group -->
                    </div>
                    @if(Auth::check())
                        <div id="user-login" class="user-login-default">
                                <a href="javascript:void(0)">
                                <span class="name">{{ Auth::user()->name}}</span>
                                <span class="glyphicon glyphicon-menu-down"></span>
                            </a>
                            <div class="list-action" style="display: none;">
                                <ul>
                                    <li><a href="{{asset('myplaylist')}}">Profile</a></li>
                                    <li><a href="{{asset('auth/logout')}}">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    @else
                        <button type="button" class="btn btn-link btn-sm btn-login" data-toggle="modal" data-target="#loginhome">LOG IN</button>
                    @endif
                </form>
                <div id="search_tl" class="">
                    <div class="search-tl">
                        <form id="search" action="/search">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="flaticon-search"></i></span>
                                <input id="search_input_text1" type="text" class="form-control input-sm" name="q" value="" placeholder="Search">
                                <span id="close_search_tl" class="input-group-addon"><i class="flaticon-delete"></i></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </nav>
</header>