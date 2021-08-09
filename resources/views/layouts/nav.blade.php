<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <x-nav-left>
            <x-nav-item active="home" title="Home" icon="fas fa-home" route="home" />
            <x-nav-item active="teachers*" title="Teachers" icon="fas fa-users" route="teachers" />
            <x-nav-item active="courses*" title="Courses" icon="fas fa-swatchbook" route="courses" />
            <x-nav-drop active="lessons*" title="Lessons" icon="fas fa-book">
                <x-nav-drop-item title="All lessons" icon="fas fa-book" route="all-lessons" />
                @if (auth()->user()->type = 'teacher')
                    <x-nav-drop-item title="My lessons" icon="fas fa-book" route="my-lessons" />
                    <div class="dropdown-divider"></div>
                    <x-nav-drop-item title="New lesson" icon="fas fa-plus" route="new-lesson" />
                @else
                    <x-nav-drop-item title="Saved lessons" icon="fas fa-stretchbook" route="saved-lessons" />
                @endif
            </x-nav-drop>
        </x-nav-left>

        <x-nav-right>
            <x-nav-drop active="account*" title="{{ auth()->user()->complete_name }}" icon="fas fa-user">
                @if (Auth::user()->type == 'teacher')
                    <x-nav-drop-item title="Account" icon="fas fa-user-graduate" route="account" />
                @else
                    <x-nav-drop-item title="Account" icon="fas fa-user" route="account" />
                @endif
                <x-nav-drop-item title="Settings" icon="fas fa-cog" route="settings" />
                <div class="dropdown-divider"></div>
                <x-nav-drop-item title="Logout" icon="fas fa-sign-out-alt" route="logout" />

            </x-nav-drop>
        </x-nav-right>
    </div>
</nav>
