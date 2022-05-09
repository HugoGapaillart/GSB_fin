<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                {{-- <div class="card w-96 bg-base-100 shadow-xl ">
                    <a alt = "un">
                        <figure class="px-10 pt-10">
                            <img src="https://api.lorem.space/image/shoes?w=400&h=225" alt="Shoes"
                                class="rounded-xl" />
                        </figure>
                        <div class="card-body items-center text-center">
                            <div class="card-actions">
                                <button class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </a>
                    <a alt = "deux">
                        <figure class="px-10 pt-10">
                            <img src="https://api.lorem.space/image/shoes?w=400&h=225" alt="Shoes"
                                class="rounded-xl" />
                        </figure>
                        <div class="card-body items-center text-center">
                            <div class="card-actions">
                                <button class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </a>
                    <a alt = "trois">
                        <figure class="px-10 pt-10">
                            <img src="https://api.lorem.space/image/shoes?w=400&h=225" alt="Shoes"
                                class="rounded-xl" />
                        </figure>
                        <div class="card-body items-center text-center">
                            <div class="card-actions">
                                <button class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </a>
                </div> --}}
                
                <div class="container text-center">
                    <p>Le laboratoire Galaxy Swiss Bourdin (GSB) est issu de la fusion entre le géant américain Galaxy (spécialisé dans le secteur des 
                        maladies virales dont le SIDA et les hépatites) et le conglomérat européen Swiss Bourdin (travaillant sur des médicaments plus conventionnels), 
                        lui même déjà union de trois petits laboratoires . La force commerciale de ce laboratoire 
                        pharmaceutique est assurée par un travail de conseil et d'information. Les visiteurs médicaux (ou délégués) démarchent les médecins, 
                        pharmaciens, infirmières et autres métiers de santé susceptibles de prescrire aux patients les produits du laboratoire.</p>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
