<header>
  <div class="container flex flex-between flex-align-center h-100">
    <div>
      <a href="{{route('home')}}">
        <img class="logo" src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="Logo not found">
      </a>
    </div>
    <div class="menu flex h-100 w-100">
      <ul class="h-100 mr-2">
        @foreach($menu as $menuItem)
          <li class="h-100 flex flex-center cursor-pointer {{($menuItem == 'comics') ? 'active' : ''}}">
              {{ $menuItem }}
          </li>
        @endforeach
      </ul>
      <div class="h-100 flex flex-center">
        <form class="flex search-container gap-1">   
          <input type="text" name="search" placeholder="Search">
          <button class="cursor-pointer" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>        
      </div>
    </div>
  </div>
</header>
