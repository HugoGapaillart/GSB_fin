<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Page Nouveau Rapport') }}
      </h2>
  </x-slot>

{{-- ERROR MESSAGE IF ONE OR MORE VARIABLE IS NULL --}}
    @if ($errors->any())
        <div class="alert alert-error shadow-lg mb-9">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>
                    <b>ERREUR ! Vous avez oublié de remplir un champ.</b>
                </span>
            </div>
        </div>
    @endif
{{-- END ERROR MESSAGE --}}

<div class="mt-8" class="container text-center">
    <form action="/newrapport" method="POST" class="text-center">
        @csrf
        <div class="Nom">
            <a>Praticien :</a>
            <select type="select" name="num_pra" value="" class="select select-bordered w-80 max-w-xs">
            <option disabled selected>Choisir un praticien</option>
                @foreach ($praticiens as $item)
                    <option type="text" value="{{$item->PRA_NUM}}">{{$item->PRA_NOM}} {{$item->PRA_PRENOM}}</option>
                @endforeach
            </select>
        </div><br>
        <div class="Nom">
            <a>Date et heure :</a>
            <input type="datetime-local" name="date" value="" class="input input-bordered w-80 max-w-xs">
        </div><br>
        <div class="Nom">
            <a>Bilan :</a><br>
            <textarea name="bilan" class="textarea textarea-bordered w-80 h-40"></textarea>
        </div><br>
        <div class="Nom">
            <a>Motif :</a><br>
            <textarea name="motif"class="textarea textarea-bordered w-80 h-40"></textarea>
        </div><br>
        <div class="Nom">
            <button type="submit" name="val_rap" class="btn btn-xs sm:btn-sm md:btn-md lg:btn-lg">Valider le rapport</button>
        </div>
        <button onclick="window.location.href='/rapport'" type="button" class="btn btn-xs sm:btn-sm md:btn-md lg:btn-lg mt-5">Retour</button>
        
    </form>   
</div>

</x-app-layout>