<div>
    <!--$Int_id,$Int_Emp_Nss,$Int_Par_Id,$Int_Debut,$Int_Nb_Jours;-->
<div class="grid place-items-center mt-9">
    <div class="w-11/12  p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12
          px-6 py-10 sm:px-10 sm:py-6
          bg-white rounded-lg shadow-md lg:shadow-lg">
    <form class="w-full mt-6 mb-6 max-w-lg">
        <div class="mb-4 mt-4">
            @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
              <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                  <p class="font-bold">{{ session('message') }}</p>
                  <p class="text-sm">Rafraichir et voir dans la tableau</p>
                </div>
              </div>
            </div>
            @endif
        </div>
      <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Int_Emp_Nss
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="No Nss" wire:model="Int_Emp_Nss">
          @error("Int_Emp_Nss") <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Int_Par_Id
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Int_Par_Id" wire:model="Int_Par_Id">
          @error("Int_Par_Id") <span class="text-danger">{{ $message }}</span>@enderror
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
            Int_Debut
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Int_Debut" wire:model="Int_Debut"  >
          @error("Int_Debut" ) <span class="text-danger">{{ $message }}</span>@enderror
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
            Int_Nb_Jours
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Int_Nb_Jours" wire:model="Int_Nb_Jours">
          @error("Int_Nb_Jours") <span class="text-danger">{{ $message }}</span>@enderror
        </div>
      </div>
      <div class="grid place-items-center mt-6">
        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" wire:click.prevent="store()" type="submit">
        Ajouter
        </button>
      </div>
    </form>
</div>
</div>
</div>
