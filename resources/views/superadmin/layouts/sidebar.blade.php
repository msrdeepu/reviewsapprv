<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">SCHRONIX</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">SIX</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class=active><a class="nav-link" href="{{ route('sadmin.dashboard') }}">Dashboard</a></li>
                    <li class=active><a class="nav-link" href="{{ route('sadmin.profile') }}">Profile</a></li>
                </ul>
            </li>

        </ul>
        <ul class="sidebar-menu">
            <li class="menu-header">Quiz</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Quiz</span></a>
                <ul class="dropdown-menu">
                    <li class=active><a class="nav-link" href="{{ route('quiz.index') }}">Quizzes</a></li>
                    <li class=active><a class="nav-link" href="{{ route('page.index') }}">Pages</a></li>
                   
                </ul>
            </li>

        </ul>
        <ul class="sidebar-menu">
            <li class="menu-header">Settings</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Settings</span></a>
                <ul class="dropdown-menu">
                    <li class=active><a class="nav-link" href="{{ route('settings.index') }}">Settings</a></li>
                    <li class=active><a class="nav-link" href="{{ route('subjects.index') }}">Subjects</a></li>
                    <li class=active><a class="nav-link" href="{{ route('category.index') }}">Categories</a></li>
                    <li class=active><a class="nav-link" href="{{ route('subcategory.index') }}">Subcategories</a></li>
                    <li class=active><a class="nav-link" href="{{ route('childcategory.index') }}">Child Categories</a></li>
                </ul>
            </li>

        </ul>




    </aside>
</div>
