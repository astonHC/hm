<!DOCTYPE html>
<html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>{{ $product->product_name }}</title>
    </head>
    <body>
        @include('layouts.navbar')
        <a
            href="{{ route('products') }}"
            class="fas fa-arrow-left fa-4x p-5"
        ></a>
        <div class="flex justify-center">
            <div class="flex justify-center pr-5">
                <img class="" src="{{ asset('../Images/placeholder.avif') }}" />
            </div>
            <div class="inline-block justify-center size-[400px]">
                <div class="flex justify-center">
                    <h1 class="text-5xl pb-4">{{ $product->product_name }}</h1>
                </div>
                <h1 class="text-3xl pb-4">£{{ $product->price }}</h1>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Mauris vehicula ex a mauris commodo gravida. Aliquam a
                    pulvinar eros. Mauris lacinia, urna eu mollis ullamcorper,
                    ex nulla ultrices sapien, sed tincidunt lectus nisl quis
                    dolor. Morbi scelerisque consectetur arcu, pellentesque
                    tempor metus. Vestibulum sit amet vestibulum purus, sed
                    cursus turpis. Etiam id sem fringilla, vestibulum mauris
                    eget, bibendum dolor. Vestibulum iaculis risus at tristique
                    venenatis. Pellentesque nisi nisi, porttitor ac venenatis
                    et, lacinia in risus. Nulla justo enim, scelerisque sit amet
                    vestibulum nec, sollicitudin at tellus. Fusce tempor lacus
                    nec dapibus rhoncus. Vestibulum vel ex eu turpis efficitur
                    fermentum.
                </p>
                <button type="button" class="bg-amber w-full">
                    Add to Basket
                </button>
            </div>
        </div>
    </body>
</html>
