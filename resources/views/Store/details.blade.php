@extends('Bases.layout')

@section('title',"Produit: ".$product->name)

@section("body")
    <div class="mb-16 flex flex-col mt-20 md:w-10/12 md:mx-auto">
        <div class="flex flex-col md:flex-row item md:items-center">
            <img id="mainimage" data-tilt class="w-11/12 md:w-5/12 mx-auto my-auto"
                 src="{{env('api_base')."/assets/".$product->stocks[0]->image}}" alt="">
            <div class="mx-auto text-center md:w-5/12 md:text-left">
                <h1 class="edosz text-4xl md:mb-1">{{$product->name}}</h1>
                <p class="text-2xl text-rouge-100" id="price"></p>
                <p class="text-xs text-rouge-100" id="stockInfo">Choisir votre taille et votre couleur pour voir le
                    prix</p>
                <div class="flex m-2 md:mt-3 md:w-9/12">
                    @forelse($product->stocks as $stock)
                        <img class="subimage w-48" src="{{env('api_base')."/assets/".$stock->image}}" alt="">
                    @empty
                        <h1 class="text-gray-500">Aucune image disponible</h1>
                    @endforelse
                </div>
                <p class="font-bold mb-3 mt-5">Taille</p>
                <div
                    class="h-12 text-sm  text-center items-start flex space-x-2 md:w-9/12 lg:w-7/12 mx-16 md:mx-0 ">
                    @forelse($tailles as $taille)
                        <span
                            data-taille="{{$taille}}"
                            class=" taille border-2 py-1 px-2 h-8 w-10 font-bold cursor-pointer {{$tailles[0] == $taille ? "border-rouge-100" : "border-black"}} ">{{$taille}}</span>
                    @empty
                        <h1 class="text-gray-500">Aucune taille disponible</h1>
                    @endforelse
                </div>
                <p class="font-bold mb-3 mt-5 md:mt-3">Couleur</p>
                <div class="flex w-5/12 space-x-2 items-center mx-auto md:mx-0 md:w-3/12">
                    @forelse($colors as $color)
                        <span data-color="{{$color}}"
                              class="color rounded-full {{$colors[0] === $color ? "w-6 h-6 " : "w-5 h-5"}} cursor-pointer"
                              style="background: {{$color}}"></span>
                    @empty
                        <h1 class="text-gray-500">Aucune couleur disponible</h1>
                    @endforelse
                </div>
                <div class="flex flex-col w-8/12 mx-auto mt-5">
                    <button id="addToCart"
                            class="mt-7 mb-5 cursor-pointer bg-rouge-100 px-6 py-2 text-white md:text-center font-bold ">
                        Ajouter
                        au panier
                    </button>
                    <a href="" class="text-gray-600 underline md:text-center">Ajouter aux favoris</a>
                </div>
            </div>
        </div>
        <div
            class="grid grid-cols-12 mt-5">
            <div class="col-span-12 md:col-span-6">
                <h1 class="font-bold">Informations sur le produit</h1>
                <p>{!! $product->description !!}</p>
            </div>
            <div class=" col-span-12 md:col-span-6">
                <h1 class="font-bold">Livraisons</h1>
                <p>{!! $product->livraison !!}</p>
            </div>
        </div>
        <div
            class="flex flex-col text-center w-full p-5 mt-5 md:flex-row md:items-center md:justify-center md:w-10/12  lg:w-7/12">
            <p class="font-bold">Avis sur le produit</p>
            <div class="w-32 flex mt-5 mb-5 mx-auto justify-around">
                <span class="color-dot dot-red "></span>
                <span class="color-dot dot-red "></span>
                <span class="color-dot dot-red "></span>
                <span class="color-dot dot-red "></span>
                <span class="color-dot dot-white"></span>
            </div>
            <a href="" class="text-gray-600 underline text-sm">Rédiger un commentaire</a>
        </div>
        <div class="flex flex-col px-5 mt-10 w-full">

            <div class="flex flex-col mb-10">
                <div class="flex">
                    <h1 class=" text-rouge-100 font-bold mb-1 mr-5 ">Kevin</h1>
                    <div class="w-32 flex justify-between">
                        <span class="color-dot dot-red "></span>
                        <span class="color-dot dot-red "></span>
                        <span class="color-dot dot-red "></span>
                        <span class="color-dot dot-red "></span>
                        <span class="color-dot dot-white"></span>
                    </div>
                </div>
                <p class="text-gray-400 text-sm  mb-2">Avis publié le 30 sept 2020</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias labore sequi ipsam quos, quo
                    expedita magni natus obcaecati numquam tempora vel assumenda quibusdam veniam earum explicabo
                    suscipit illum impedit? Nobis!</p>
            </div>
            <div class="flex flex-col mb-10">
                <div class="flex">
                    <h1 class=" text-rouge-100 font-bold mb-1 mr-5 ">Kevin</h1>
                    <div class="w-32 flex justify-between">
                        <span class="color-dot dot-red "></span>
                        <span class="color-dot dot-red "></span>
                        <span class="color-dot dot-red "></span>
                        <span class="color-dot dot-red "></span>
                        <span class="color-dot dot-white"></span>
                    </div>
                </div>
                <p class="text-gray-400 text-sm  mb-2">Avis publié le 30 sept 2020</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias labore sequi ipsam quos, quo
                    expedita magni natus obcaecati numquam tempora vel assumenda quibusdam veniam earum explicabo
                    suscipit illum impedit? Nobis!</p>
            </div>
            <div class="flex flex-col mb-10">
                <div class="flex">
                    <h1 class=" text-rouge-100 font-bold mb-1 mr-5 ">Kevin</h1>
                    <div class="w-32 flex justify-between">
                        <span class="color-dot dot-red "></span>
                        <span class="color-dot dot-red "></span>
                        <span class="color-dot dot-red "></span>
                        <span class="color-dot dot-red "></span>
                        <span class="color-dot dot-white"></span>
                    </div>
                </div>
                <p class="text-gray-400 text-sm  mb-2">Avis publié le 30 sept 2020</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias labore sequi ipsam quos, quo
                    expedita magni natus obcaecati numquam tempora vel assumenda quibusdam veniam earum explicabo
                    suscipit illum impedit? Nobis!</p>
            </div>


        </div>
        <h1 class="edosz text-4xl text-center mt-12 mx-auto">CES PRODUITS QUI POURRAIENT VOUS PLAIRE</h1>
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

@section("js")
    <script>
        function switchImage(clicked) {
            let img = $(clicked).attr("src");
            $("#mainimage").attr("src", img);
        }


        $('.subimage').click(function () {
            switchImage(this);
        });


        function checkStock(taille, color) {
            $.ajax({
                url: "{{route("product.details.checkStock",["id" => $product->id])}}",
                type: "POST",
                data: {
                    "taille": taille,
                    "color": color
                },
                success: function (data) {
                    if (data.length <= 0) {
                        $("#stockInfo").text("Ce produit n'existe pas en cette couleur et cette taille");
                        $("#price").text("")
                        $("#addToCart").attr("disabled", true).addClass("bg-gray-300 text-black  cursor-not-allowed").removeClass("bg-rouge-100 text-white cursor-pointer");
                    } else {

                        $("#stockInfo").text("En stock : " + data[0].total + " restants");
                        $("#price").text(data[0].price + "€");
                        $("#addToCart").attr("disabled", false).removeClass("bg-gray-300 text-black  cursor-not-allowed").addClass("bg-rouge-100 text-white cursor-pointer");

                    }
                },
                error: function (data) {
                    console.log(data);
                }

            })
        }


        let taille = "{{$tailles[0]}}";
        let color = "{{$colors[0]}}";
        checkStock(taille, color);
        $(".taille").click(function () {
            taille = $(this).attr("data-taille");
            $(".taille.border-rouge-100").toggleClass("border-black border-rouge-100");
            $(this).toggleClass("border-black border-rouge-100");
            checkStock(taille, color);
        })
        $(".color").click(function () {
            color = $(this).attr("data-color");
            $(".color.w-6.h-6").toggleClass("w-6 h-6 w-5 h-5");
            $(this).toggleClass("w-6 h-6 w-5 h-5");
            checkStock(taille, color);
        })

        $("#addToCart").click(function () {
            $.ajax({
                url: "{{route("product.addToCart",["id" => $product->id])}}",
                type: "POST",
                data: {
                    "taille": taille,
                    "color": color
                },
                success: function (data) {
                    console.log(data);
                }

            })
        })

    </script>
@endsection



