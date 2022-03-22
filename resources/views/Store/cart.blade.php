@extends("Bases.layout")

@section("title", "Cart")

@section("body")
    <div class="flex flex-col items-center mt-20 mb-16">
        <div class="text-center">
            <h1 class="edosz text-4xl mb-5">VOTRE PANIER ({{ sizeof($items)  }})</h1>
            <a href="{{route("products")}}" class="text-rouge-100 underline">Retour à la boutique</a>
        </div>

        <div class="flex flex-col w-full mt-7 md:w-7/12">
            @php
                $total = 0;
            @endphp
            @forelse($items as $item)

                <div class="flex items-center justify-between w-full">
                    <div class="flex justify-start items-center">
                        <img class="w-24 mr-2" src="{{env("API_BASE")."/assets/".$item->details->image}}" alt="">
                        <div class="text-sm">
                            <h1 class="text-base font-bold mb-2 ">{{$item->details->product->name}}</h1>
                            <p class="text-gray-600  h-8 flex items-center">Taille <span
                                    class="mr-5 ml-2 border-2 py-0.5 px-2 font-bold text-rouge-100 border-rouge-100 ">{{$item->details->taille}}</span>
                                Couleur <span class="color-dot ml-2"
                                              style="background: {{$item->details->color}}"></span></p>
                            <label for="quantity" class="text-gray-600">Quantité:
                                <input class="bg-transparent w-10 text-black" type="number" value="{{$item->quantity}}"
                                       id="quantity"
                                       name="quantity" min="1" max="20">
                            </label>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <h1 class="text-lg text-rouge-100 font-bold mb-8">
                            {{$item->quantity * $item->details->price}}€
                            @php
                                $total += $item->quantity * $item->details->price;
                            @endphp
                        </h1>
                        <button class="text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mx-auto rounded-lg bg-black h-0.5 w-56 mt-5 mb-5"></div>
            @empty
                <p class="text-gray-500 text-center"> Votre panier est vide</p>
            @endforelse

            <a href=""
               class="mt-10 mb-5 hover:opacity-80 bg-rouge-100 py-2 mx-auto w-48 text-center font-bold text-white">Payer
                ( {{$total}}€ )</a>
            <a href="{{route("products")}}" class="text-sm underline  mx-auto text-gray-600">Continuer ses achats</a>

        </div>
        <h1 class="edosz text-4xl text-center mt-48 mx-auto">CES PRODUITS QUI POURRAIENT VOUS PLAIRE</h1>
        <div class="flex flex-col px-12  md:flex-row md:w-full">
            <a href="">
                <div class="flex flex-col justify-center items-center mb-8 w-full ">
                    <img data-tilt data-tilt-reverse="true" data-tilt-scale="1.05"
                         src="img/ddc16aa9eda531884d18d6e93b3450e8.png">
                    <p class="text-sm">Nom du produit</p>
                    <p class="text-rouge-100">00,00€</p>
                </div>
            </a>
            <a href="">
                <div class="flex flex-col justify-center items-center mb-8 w-full">
                    <img data-tilt data-t ilt-reverse="true" data-tilt-scale="1.05"
                         src="img/ddc16aa9eda531884d18d6e93b3450e8.png">
                    <p class="text-sm">Nom du produit</p>
                    <p class="text-rouge-100">00,00€</p>
                </div>
            </a>
            <a href="">
                <div class="flex flex-col justify-center items-center mb-8 w-full">
                    <img data-tilt data-tilt-reverse="true" data-tilt-scale="1.05"
                         src="img/ddc16aa9eda531884d18d6e93b3450e8.png">
                    <p class="text-sm">Nom du produit</p>
                    <p class="text-rouge-100">00,00€</p>
                </div>
            </a>
        </div>
    </div>

@endsection



