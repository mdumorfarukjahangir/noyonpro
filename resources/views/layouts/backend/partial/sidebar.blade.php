<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
        <img src="{{ asset('assets/backend/images/user.png')}}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
            <div class="email">{{ Auth::user()->email }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li role="separator" class="divider"></li>
                    <li>
                     <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">

                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            @if (Request::is('admin*'))
            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{route('admin.dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="{{ Request::is('admin/post*') ? 'active' : '' }}">
                <a href="{{route('admin.post.index')}}">
                    <i class="material-icons">library_books
                    </i>
                    <span>Post</span>
                </a>
            </li>

            <li class="{{ Request::is('admin/category*') ? 'active' : '' }}">
                <a href="{{route('admin.category.index')}}">
                    <i class="material-icons">receipt</i>
                    <span>Category</span>
                </a>
            </li>

            <li class="{{ Request::is('admin/tag*') ? 'active' : '' }}">
                <a href="{{route('admin.tag.index')}}">
                    <i class="material-icons">label</i>
                    <span>Tag</span>
                </a>
            </li>

            <li class="{{ Request::is('admin/msg*') ? 'active' : '' }}">
                <a href="{{route('admin.msg.index')}}">
                    <i class="material-icons">message</i>
                    <span>Message</span>
                </a>
            </li>

            <li class="{{ Request::is('admin/address*') ? 'active' : '' }}">
                <a href="{{route('admin.address.index')}}">
                    <i class="material-icons">call</i>
                    <span>Address</span>
                </a>
            </li>



            @endif

</aside>
