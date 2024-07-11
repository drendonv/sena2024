<div class="navbar bg-base-100 shadow-lg">
  {{-- logo --}}
  <div class="mx-2">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
      </svg>
  </div>

  {{-- menu móvil --}}
  <div class="flex-1 md:hidden">
      <div class="dropdown">
          <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
              </svg>
          </div>
          <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52  text-pink-500">
              <li><a href="{{ url('/') }}">Laly taller creativo</a></li>
              <li><a href="{{ url('/') }}">Servicios</a></li>
              <li><a href="{{ route('productos.index') }}">Productos</a></li>
              <li><a href="{{ url('/') }}">Nosotros</a></li>
          </ul>
      </div>
  </div>

  {{-- menu desktop --}}
  <div class="flex-1 hidden md:flex text-pink-500 space-x-4">
      <a href="{{ url('/') }}" class="btn btn-ghost btn-sm">Laly taller creativo</a>
      <a href="{{ url('/servicios') }}" class="btn btn-ghost btn-sm">Servicios</a>
      <a href="{{ route('productos.index') }}" class="btn btn-ghost btn-sm">Productos</a>
      <a href="{{ url('/about') }}" class="btn btn-ghost btn-sm">Nosotros</a>
  </div>

  {{-- Carrito de compras --}}
  <div class="flex-none">
      <div class="dropdown dropdown-end">
          <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
              <div class="indicator">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
                  <span class="badge badge-sm indicator-item">8</span>
              </div>
          </div>
          <div tabindex="0" class="card card-compact dropdown-content bg-base-100 z-[1] mt-3 w-80 shadow">
              <div class="card-body">
                  <span class="text-lg font-bold">8 Items</span>
                  <span class="text-info">Subtotal: $999</span>
                  <div class="card-actions">
                      <button class="btn btn-primary btn-block">Ver carrito</button>
                      <button class="btn btn-secondary btn-block">Checkout</button>
                  </div>
              </div>
          </div>
      </div>
  </div>

  {{-- Si está autenticado muestra menú de usuario, sino muestra botones de login y registro --}}
  @auth
  <h3 class="mr-4 font-semibold">Hola, {{ auth()->user()->name }}</h3>
  <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar mr-4">
          <div class="w-10 rounded-full">
              <img alt="User Avatar" src="https://loremflickr.com/100/100/face" />
          </div>
      </div>
      <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
          <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
          <li><a href="{{ route('profile.edit') }}">Mi perfil</a></li>
          <li>
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
              </form>
          </li>
      </ul>
  </div>
  @else
  <div class="mx-4 space-x-4">
      <a href="{{ route('login') }}" class="btn btn-outline btn-sm">Ingresar</a>
      <a href="{{ route('register') }}" class="btn btn-outline btn-sm">Registrarse</a>
  </div>
  @endauth
</div>
