<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Page Praticien') }}
    </h2>
</x-slot>




@include('searchP')
   <br>
      <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-md sm:rounded-lg">
                    <table class="min-w-full">
                        <thead class="bg-blue-500 dark:bg-gray-700">
                            <tr>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400 text-center">
                                    Numéro
                                </th>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400 text-center">
                                    Nom
                                </th>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400 text-center">
                                    Prénom
                                </th>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400 text-center">
                                    Adresse
                                </th>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400 text-center">
                                    Code Postale
                                </th>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400 text-center">
                                    Ville
                                </th>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400 text-center">
                                    Type Code
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($praticiens as $info)
                            <!-- Product 1 -->
                            <tr class=" bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                    {{ $info->PRA_NUM }}
                                </td>
                                <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-center">
                                    {{ $info->PRA_NOM}}
                                </td>
                                <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-center">
                                    {{ $info->PRA_PRENOM}}
                                </td>
                                <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-center">
                                    {{ $info->PRA_ADRESSE}}
                                </td>
                                <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-center">
                                    {{ $info->PRA_CP}}                                
                                </td>
                                <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-center">
                                    {{ $info->PRA_VILLE}}
                                </td>
                                <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-center">
                                    {{ $info->TYP_CODE}}
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
 