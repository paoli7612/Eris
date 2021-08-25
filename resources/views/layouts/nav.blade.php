<div class="bg-dark p-3 text-center fixed-top">
    @guest
        <x-layout.navbar-item name="welcome"/> 
    @else
        <x-layout.navbar-item name="home"/> 
    @endguest
    <x-layout.navbar-item name="courses"/> 
    <x-layout.navbar-item name="teachers"/> 
    <x-layout.navbar-item name="lessons"/>
    @auth
        <x-layout.navbar-item name="account"/> 
    @else
        <x-layout.navbar-item name="login"/> 
    @endauth
</div>
<br>
<br>