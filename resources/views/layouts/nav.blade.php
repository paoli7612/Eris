<div class="bg-dark p-3 text-center fixed-top">
    @guest
        <x-nb-item name="welcome"/> 
    @else
        <x-nb-item name="home"/> 
    @endguest
    <x-nb-item name="courses"/> 
    <x-nb-item name="teachers"/> 
    <x-nb-item name="lessons"/>
    @auth
        <x-nb-item name="account"/> 
    @else
        <x-nb-item name="login"/> 
    @endauth
</div>
<br>
<br>