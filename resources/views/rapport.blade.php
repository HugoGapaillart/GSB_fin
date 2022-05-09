<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Page Rapport') }}
    </h2>
</x-slot>

@if (session('success'))
    <div class="alert alert-success shadow-lg mb-9">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span>
                {{ session('success') }}
            </span>
        </div>
    </div>
@endif

<div class="mt-10" style="margin-top: 20px; margin-left:20px">
  <button onclick="window.location.href='/newrapport'" type="button" class="btn btn-xs sm:btn-sm md:btn-md lg:btn-lg bg-blue-500 border border-blue-700" >Nouveau rapport</button>
</div>

<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
          <div class="overflow-hidden shadow-md sm:rounded-lg">
              <table class="min-w-full">
                  <thead class="bg-blue-500 dark:bg-gray-700 ">
                      <tr>
                          <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400 text-center">
                              Nom praticien
                          </th>
                          <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400 text-center">
                              Date du rappot
                          </th>
                          <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400 text-center">
                              Bilan du rapport
                          </th>
                          <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400 text-center">
                              Motif 
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($rapports as $info)
                      <!-- Product 1 -->
                      <tr class=" bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                          <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                              {{ $info->PRA_NOM }} {{ $info->PRA_PRENOM }}
                          </td>
                          <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-center">
                              {{ $info->RAP_DATE}}
                          </td>
                          <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-center">
                              {{ $info->RAP_BILAN}}
                          </td>
                          <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-center">
                              {{ $info->RAP_MOTIF}}
                          </td>
                      </tr>
                      @endforeach
                        
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>


</x-app-layout>