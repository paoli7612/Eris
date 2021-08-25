<div class="bg-dark p-3 text-center fixed-top">
    <x-layout.navbar-item name="home"/> 
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