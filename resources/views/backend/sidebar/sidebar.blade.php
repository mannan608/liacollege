<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                @if (auth()->user()->role == 'Admin')
                    <li>
                        <a href="{{ route('dashboard') }}" {{set_active(['dashboard'])}}><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{{ route('user.show', auth()->user()->id) }}" {{set_active(['user.show'])}}><i class="fas fa-user"></i> <span>Profile</span></a>
                    </li>
                    <li>
                        <a href="{{ route('user.index') }}" {{set_active(['users'])}}><i class="fas fa-shield-alt"></i> <span>Users</span></a>
                    </li>
                    <li>
                        <a href="{{ route('category.index') }}" {{set_active(['category.index'])}}><i class="fas fa-book"></i> <span>Categories</span></a>
                    </li>
                    <li>
                        <a href="{{ route('course.index') }}" {{set_active(['course.index'])}}><i class="fas fa-book"></i> <span>Courses</span></a>
                    </li>
                    <li>
                        <a href="{{ route('review.index') }}" {{set_active(['review.index'])}}><i class="fas fa-comments"></i> <span>Reviews</span></a>
                    </li>
                    <li>
                        <a href="{{ route('setting.index') }}" {{set_active(['setting.index'])}}><i class="fas fa-cog"></i> <span>Settings</span></a>
                    </li>
                    <li>
                        <a href="{{ route('seo-meta.index') }}" {{set_active(['seo-meta.index'])}}><i class="fas fa-search"></i> <span>SEO</span></a>
                    </li>
                      <li>
                        <a href="{{ route('rpl-lead.index') }}" {{set_active(['rpl-lead.index'])}}><i class="fas fa-search"></i> <span>Eligibility Check Leads</span></a>
                    </li>
                    </li>
                      <li>
                        <a href="{{ route('qualification-lead.index') }}" {{set_active(['qualification-lead.index'])}}><i class="fas fa-search"></i> <span>Qualification Leads</span></a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" {{set_active(['logout'])}}><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>