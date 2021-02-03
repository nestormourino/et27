<style>

* { box-sizing: border-box; }

body { font-family: sans-serif; }

.carousel {
  background: #EEE;
}

.carousel img {
  display: block;
  height: 200px;
}

@media screen and ( min-width: 768px ) {
  .carousel img {
    height: 400px;
  }
}

</style>

<section id="carousel">
  <x-cuerpo-central>
    <x-titulo-principal>GALERIA DE IMAGENES</x-titulo-principal>
    <div class="container py-6 mb-6">
      <div class="carousel" data-flickity='{ "imagesLoaded": true, "percentPosition": false, "autoPlay": true, "wrapAround": true }'>
        @foreach ($images as $image)
        <div class="container">
          <img src="{{$image->url}}" alt="{{$image->name}}" />
          <div class="container mx-auto text-center bg-gray-800 text-white text-xl">
            <b>{{$image->name}}:</b> {{$image->description}}
          </div>
        </div>
        @endforeach      
      </div>
    </div>
     
  </x-cuerpo-central>
</section>