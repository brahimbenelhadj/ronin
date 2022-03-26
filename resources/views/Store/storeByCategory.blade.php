@extends("Bases.layout")


@section('title',"Produits")

@section('body')
    <div class="min-h-screenflex flex-col">


        <div class="my-16 md:mt-4 product__container min-h-screen">
            <h1 class="edosz text-5xl text-center mb-6 md:text-7xl">{{$categoryFound->name}}</h1>
            <div class="columns-1 mx-10 gap-10 text-center md:columns-3">
                @forelse($products as $product)
                    <a href="{{route("products.details",["id"=>$product->id])}}"
                       class="block mix {{slugify($product->category->name)}}">
                        <div class="flex flex-col justify-center items-center mb-8 w-full">
                            <img data-tilt data-tilt-reverse="true" data-tilt-scale="1.05"
                                 src="{{env("API_BASE")."/assets/".$product->stocks[0]->image}}" alt="">
                            <p class="text-sm">{{$product->name}}</p>
                            <p class="text-rouge-100">{{$product->stocks[0]->price}}€</p>
                        </div>
                    </a>
                @empty
            </div>
            <h1 class="block mx-auto text-center my-24">Oups...,il n'y a pas de produit disponible. Veuillez revenir
                plus tard.
            </h1>
            @endforelse
        </div>

    </div>

@endsection

@section("js")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"
            integrity="sha512-nKZDK+ztK6Ug+2B6DZx+QtgeyAmo9YThZob8O3xgjqhw2IVQdAITFasl/jqbyDwclMkLXFOZRiytnUrXk/PM6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let mixer;
        mixer = mixitup('.product__container');
    </script>
@endsection
