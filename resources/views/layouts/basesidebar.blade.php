<aside class="sidebar-navigation">
    <div class="scrollbar-wrapper">
        
            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                <i class="mdi mdi-close"></i>
            </button>

            <ul class="metisMenu nav" id="side-menu">
                @if (Auth::user()->is_admin)
                    <li><a href="/admin-dashboard"><i class="ti-home"></i> Dashboard </a></li>
                    @else
                    <li><a href="/dashboard"><i class="ti-home"></i> Dashboard </a></li>
                @endif

                @if (Auth::user()->is_admin)
                    <li>
                        <a href="javascript: void(0);" aria-expanded="true"><i class="ti-light-bulb"></i> Blogs <span class="fa arrow"></span></a>
                        <ul class="nav-second-level nav" aria-expanded="true">
                            <li><a href="/admin">Create Blogs</a></li>
                            <li><a href="/admin-blog">Blogs</a></li>
                        </ul>
                    </li>
                    @else
                    <li>
                        <a href="/posts-view" aria-expanded="true"><i class="ti-light-bulb"></i> Blogs </a>
                    </li>
                
                @endif

                @if(Auth::user()->is_admin)
                    @else
                        <li>
                            <a href="javascript: void(0);" aria-expanded="true"><i class="ti-pencil-alt"></i> Forms <span class="fa arrow"></span></a>
                            <ul class="nav-second-level nav" aria-expanded="true">
                                <li><a href="/form">To become blogger</a></li>
                            </ul>
                        </li>
                @endif
                
                @if (Auth::user()->is_admin)
                    <li>
                        <a href="javascript: void(0);" aria-expanded="true"><i class="ti-files"></i> View<span class="fa arrow"></span></a>
                        <ul class="nav-second-level nav" aria-expanded="true">
                            <li><a href="/admin/show">Users</a></li>
                            <li><a href="/admin/view-comments">Comments</a></li>
                        </ul>
                    </li>
                @endif

                @if (Auth::user()->is_admin)
                    <li>
                        <a href="/admin/chat" aria-expanded="true"><i class="mdi mdi-wechat"></i> Chat </a>
                    </li>
                    @else
                        <li>
                            <a href="/chat" aria-expanded="true"><i class="mdi mdi-wechat"></i> Chat </a>
                        </li>
                @endif
                
                @if (Auth::user()->is_admin)
                    <li>
                        <a href="/admin/rate" aria-expanded="true"><i class="mdi mdi-assistant"></i> Ratings </a>
                    </li>
                    @else
                        <li>
                            <a href="/rate" aria-expanded="true"><i class="mdi mdi-assistant"></i> Ratings </a>
                        </li>
                @endif
                
                @if (Auth::user()->is_admin)
                    <li>
                        <a href="/request" aria-expanded="true"><i class="mdi mdi-bell-ring"></i> Requests </a>
                    </li>
                @endif
            </ul>
    </div>
</aside>