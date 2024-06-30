<x-app-layout>

    <section class="text-gray-600 body-font">
        

<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <h2 class="sr-only">Propriétés immoilières</h2>
  
      <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        @foreach ($biens as $bien )
            
        {{-- block of item --}}
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="{{ asset('images/large-property.jpg') }}" alt="large property house" class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h1 class="title-font text-xl font-medium text-gray-900 mb-3">{{ $bien->name }}</h1>
          <p class="leading-relaxed mb-5">{{ $bien->description }}</p>
          <p class="mt-1 text-lg font-medium text-gray-900">{{ $bien->price }}{{ '€' }}</p>
        </a>

        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="{{ asset('images/large-property.jpg') }}" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">{{ $bien->name }}</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">{{ $bien->price }}</p>
        </a>

        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="{{ asset('images/large-property.jpg') }}" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">{{ $bien->name }}</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">{{ $bien->price }}</p>
        </a>
        
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="{{ asset('images/large-property.jpg') }}" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">{{ $bien->name }}</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">{{ $bien->price }}</p>
        </a>
        
        @endforeach
        <!-- More products... -->
      </div>
    </div>
  </div>
  
    </section>

</x-app-layout>
