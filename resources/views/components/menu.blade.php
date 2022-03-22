<div>
    <div id="sideNav" class="sideNav z-50 bg-noir-100 ">
        <a href="{{route("home")}}">Accueil</a>
        <a href="{{route("products")}}">Produits</a>
        <a href="{{route("home")}}#about" class="whitespace-nowrap">A propos</a>
        <a href="#">Contact</a>
        <div class="flex mt-10">
            <a href="mon-compte.html">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
            </a>
            <a href="{{route("cart.view")}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
            </a>
        </div>
    </div>

    <div>
        <div id="menu" class="normalNav w-full h-[80px] fixed px-5  h-14 z-30 transition-all duration-300  ease-in-out">
            <div class="links justify-between w-full">
                <a href="{{route('home')}}" class="navLogo  w-16 shrink-0">
                    <img src="{{asset('assets/images/logo noir.png')}}" alt="logo">
                </a>
                <div class="flex md:w-7/12 lg:w-4/12 justify-between">
                    <a class="transition duration-200 hover:border-b-2 hover:border-b-rouge-100 {{Route::currentRouteName() === "home" ? "border-b-2 border-b-rouge-100" :""}} px-1"
                       href="{{route("home")}}">Accueil</a>
                    <a class="transition duration-200 hover:border-b-2 hover:border-b-rouge-100 px-1 {{Route::currentRouteName() === "products" ? "border-b-2 border-b-rouge-100" :""}}"
                       href="{{route("products")}}#didi">Produits</a>
                    <a class="transition duration-200 hover:border-b-2 hover:border-b-rouge-100 px-1"
                       href="{{route('home')}}#about">A propos</a>
                    <a class="transition duration-200 hover:border-b-2 hover:border-b-rouge-100 px-1"
                       href="#">Contact</a>
                </div>
                <div class="rightLogos flex w-20 justify-between ">
                    <a href="mon-compte.html">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </a>
                    <a href="{{route("cart.view")}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <span style="font-size:30px;cursor:pointer" class="openBtn">☰</span>
        </div>
    </div>
</div>

