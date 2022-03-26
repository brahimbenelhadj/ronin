@extends("Bases.layout")

@section("title","Accueil")

@section("body")

    <div class="min-h-screen flex">
        <span class="dot"></span>
        <div class="flex flex-col my-auto md:mx-auto md:flex-row-reverse md:justify-around md:w-full md:items-center">
            <div class="flex flex-col py-5 md:w-96 ">
                <h1 class="edosz text-5xl text-center mb-6 md:text-left">SWEAT CLASSICS</h1>
                <p class="text-center px-3 mb-8 md:text-left md:p-0">Sweat homme de la collection classics, comportant
                    le
                    logo Ronin sur le coeur.</p>
                <p class="mx-auto mb-3 md:text-left md:mx-0">Sweat 100% conton.</p>
                <a href="#"
                   class="p-2 hover:shadow-md md:mx-0 hover:shadow-rouge-100 hover:bg-rouge-100 hover:text-white text-center transition duration-200 text-lg text-rouge-100 border border-rouge-100 w-52 mx-auto">Voir
                    le produit</a>
            </div>
            <img class="mx-auto order-first w-80 md:mx-0 md:w-5/12" src="{{asset('assets/images/landing.png')}}" alt="">
        </div>
    </div>
    <div>
        <h1 class="text-rouge-100 mx-auto text-center font-bold mb-7">Découvrez tout nos produits</h1>
        <div class="flex flex-col justify-between md:flex-row md:flex-wrap md:justify-evenly">
            @forelse($categories as $cat)
                <div class="flex flex-col justify-center items-center mb-8 md:w-3/12">
                    <img src="{{env("API_BASE")."/assets/".$cat->image}}" alt="">
                    <p>{{$cat->name}}</p>
                    <a href="{{route("products.category.list",["category"=>$cat->id])}}" class="text-rouge-100 underline">Découvrir</a>
                </div>
            @empty
                <h1 class="text-black mx-auto text-center font-regular">Oups..., Aucune catégorie n'est disponible!
                    Revenez plus tard.</h1>
            @endforelse
        </div>
        <div class="mx-auto rounded-lg bg-gray-300 h-1 w-56 mt-10"></div>
    </div>
    <div>
        <h1 id="about" class="edosz text-center text-5xl mt-20">L'ESPRIT RONIN</h1>
        <p class="text-rouge-100 text-center p-3">Un vagabond crucifié par l'hésitation à la croisée d'un chemin.</p>
    </div>
    <div class="flex w-full mt-5 flex-col mx-auto p-8 md:flex-row md:justify-center">
        <div class=" text-center md:text-left md:w-5/12  md:pl-10">
            <p class="font-bold mb-8 ">L'esprit Ronin qu'est-ce que c'est ?</p>
            <p class="mb-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab fuga, nobis pariatur corrupti
                enim doloremque! Laboriosam voluptatibus reiciendis iure qui debitis. Architecto commodi ducimus
                accusamus pariatur officia hic aliquam aut!</p>
            <a href="produits.html" class=" text-rouge-100 underline">Découvrir</a>
        </div>
        <div class="md:w-7/12 md:relative md:bottom-20">
            <img src="{{asset('assets/images/triple.png')}}" alt="">
        </div>
    </div>
    <div id="soon" class="mx-auto rounded-lg bg-gray-300 h-1 w-56 md:float-right md:mr-32 md:w-3/12"></div>
    <div class="flex flex-col md:flex-row md:w-full md:mx-auto md:justify-center ">
        <div class="md:w-5/12  md:pr-10">
            <h1 class="edosz text-center text-5xl mt-20 md:text-right">PROCHAINEMENT</h1>
            <p class="text-center p-5 md:text-right md:p-0 md:mt-10 ">Lorem ipsum dolor sit, amet consectetur
                adipisicing elit. Quam cumque nam eligendi voluptatem accusantium expedita similique. Accusamus nulla,
                iusto veritatis quas dolorum in suscipit, eum non voluptate repellat, illum sint!Lorem ipsum, dolor sit
                amet consectetur adipisicing elit. Expedita similique deleniti neque aperiam eius ratione consequatur
                commodi, vel, non, eos aut placeat sapiente modi nostrum sed nam iste quisquam nihil.</p>
        </div>
        <img class="md:w-5/12" src="{{asset('assets/images/2a01854c4a9a74dcce1b6bd665e80b47.png')}}" alt="">
    </div>
    <div class="mx-auto rounded-lg block bg-gray-300 h-1 w-56 mt-10 md:float-left md:ml-32 md:w-3/12 md:mx-auto"></div>

    <div id="findus" class="flex flex-col md:flex-row-reverse md:justify-center md:mx-auto md:w-full">
        <div class="md:w-5/12 md:pl-10">
            <h1 class="edosz text-center text-4xl mt-20 md:text-left md:text-5xl">OU NOUS RETROUVER</h1>
            <p class="text-center p-5 md:text-left md:p-0 md:mt-10">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Est ipsa labore animi optio libero aut aliquid delectus ex perspiciatis, magnam nam tempora
                reprehenderit, laborum minima alias illo nesciunt sit. Odio.Lorem ipsum, dolor sit amet consectetur
                adipisicing elit. Expedita similique deleniti neque aperiam eius ratione consequatur commodi, vel, non,
                eos aut placeat sapiente modi nostrum sed nam iste quisquam nihil.</p>
        </div>
        <img class="md:w-5/12" src="{{asset('assets/images/ddc16aa9eda531884d18d6e93b3450e8.png')}}" alt="">
    </div>
    <div class="mx-auto rounded-lg bg-gray-300 h-1 w-56 mt-10"></div>
@endsection
