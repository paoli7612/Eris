<x-nav.nav>
    <x-nav.left>
        <x-nav.item route="home" active="home*">Home</x-nav.item>
        <x-nav.item route="course.all" active="course*">Course</x-nav.item>
        <x-nav.item route="lesson.all" active="lesson*">Lessons</x-nav.item>
    </x-nav.left>
    <x-nav.right>
        @auth
            <x-nav.dropdown title="Reserved area">
                <x-nav.drop-item />
            </x-nav.dropdown>
        @else
            <x-nav.dropdown>
            </x-nav.dropdown>
        @endauth
    </x-nav.right>
</x-navbar>
    