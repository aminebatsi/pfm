<div>
  <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" href="#">
    <div class="flex items-center">
      <span>Les Noms Des Agriculteurs :</span>
    </div>
  </a>
  <table class="w-full whitespace-no-wrap">
    <thead>
      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
        <th class="px-4 py-3">Agriculteur Nom</th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
      @foreach($q1 as $value)
      <tr class="text-gray-700 dark:text-gray-400">
        <td class="px-4 py-3 text-sm">
          {{ $value->Agr_Nom }}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a class="flex items-center mt-4 justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" href="#">
    <div class="flex items-center">
      <span>Les Noms Des Parcelles :</span>
    </div>
  </a>
  <table class="w-full whitespace-no-wrap">
    <thead>
      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
        <th class="px-4 py-3">Parcelle Nom</th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
      @foreach($q2 as $value)
      <tr class="text-gray-700 dark:text-gray-400">
        <td class="px-4 py-3 text-sm">
          {{ $value->Par_Nom }}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a class="flex items-center mt-4 justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" href="#">
    <div class="flex items-center">
      <span>Parcelles à Arith avec une superficies entre (300,500) :</span>
    </div>
  </a>


  <table class="w-full whitespace-no-wrap">
    <thead>
      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
        <th class="px-4 py-3">Par_Idf</th>
        <th class="px-4 py-3">Par_Nom</th>
        <th class="px-4 py-3">Par_Lieu</th>
        <th class="px-4 py-3">Par_Superfecie</th>
        <th class="px-4 py-3">Par_Prop</th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
      @foreach($q3 as $value)
      <tr class="text-gray-700 dark:text-gray-400">
        <td class="px-4 py-3">
          <div class="flex items-center text-sm">
            <div>
              <p class="font-semibold">{{ $value->id }}</p>
            </div>
          </div>
        </td>
        <td class="px-4 py-3 text-sm">
          {{ $value->Par_Nom }}
        </td>
        <td class="px-4 py-3 text-xs">
          <div class="align-middle">
            <span class="align-middle ml-3 px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              {{ $value->Par_Lieu }}
            </span>
          </div>
        </td>
        <td class="px-4 py-3 text-sm">
          <span class="align-middle ml-5">{{ $value->Par_Superficie }}</span>
        </td>
        <td class="px-4 py-3 text-sm">
          <span class="align-middle ml-5">{{ $value->Par_Prop }}</span>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a class="flex items-center mt-4 justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" href="#">
    <div class="flex items-center">
      <span>Parcelles Avec Proprietaires : </span>
    </div>
  </a>


  <table class="w-full whitespace-no-wrap">
    <thead>
      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
        <th class="px-4 py-3">Par_Idf</th>
        <th class="px-4 py-3">Par_Nom</th>
        <th class="px-4 py-3">Par_Lieu</th>
        <th class="px-4 py-3">Par_Superfecie</th>
        <th class="px-4 py-3">Par_Prop</th>
        <th class="px-4 py-3">Agr_Nom</th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
      @foreach($q4 as $value)
      <tr class="text-gray-700 dark:text-gray-400">
        <td class="px-4 py-3">
          <div class="flex items-center text-sm">
            <div>
              <p class="font-semibold">{{ $value->id }}</p>
            </div>
          </div>
        </td>
        <td class="px-4 py-3 text-sm">
          {{ $value->Par_Nom }}
        </td>
        <td class="px-4 py-3 text-xs">
          <div class="align-middle">
            <span class="align-middle ml-3 px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              {{ $value->Par_Lieu }}
            </span>
          </div>
        </td>
        <td class="px-4 py-3 text-sm">
          <span class="align-middle ml-5">{{ $value->Par_Superficie }}</span>
        </td>
        <td class="px-4 py-3 text-sm">
          <span class="align-middle ml-5">{{ $value->Par_Prop }}</span>
        </td>
        <td class="px-4 py-3 text-sm">
          <span class="align-middle ml-5">{{ $value->Agr_Nom }}</span>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a class="flex items-center mt-4 justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" href="#">
    <div class="flex items-center">
      <span>Les Interventions Effectuées Entre Le 07-11-2011 Et Le 09-02-2012</span>
    </div>
  </a>


  <table class="w-full whitespace-no-wrap">
    <thead>
      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
        <!--$Int_id,$Int_Emp_Nss,$Int_Par_Id,$Int_Debut,$Int_Nb_Jours;-->
        <th class="px-4 py-3">Int_id</th>
        <th class="px-4 py-3">Int_Emp_Nss</th>
        <th class="px-4 py-3">Int_Par_Id</th>
        <th class="px-4 py-3">Int_Debut</th>
        <th class="px-4 py-3">Int_Nb_Jours</th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

      @foreach($q5 as $value)
      <tr class="text-gray-700 dark:text-gray-400">
        <td class="px-4 py-3">
          <div class="flex items-center text-sm">
            <!-- Avatar with inset shadow -->

            <div>
              <p class="font-semibold">{{ $value->id }}</p>
            </div>
          </div>
        </td>
        <!--$Int_id,$Int_Emp_Nss,$Int_Par_Id,$Int_Debut,$Int_Nb_Jours;-->
        <td class="px-4 py-3 text-sm">
          {{ $value->Int_Emp_Nss }}
        </td>
        <td class="px-4 py-3 text-xs">
          <div class="align-middle">
            <span class="align-middle ml-3 px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              {{ $value->Int_Par_Id }}
            </span>
          </div>
        </td>
        <td class="px-4 py-3 text-sm">
          <span class="align-middle ml-5">{{ $value->Int_Debut }}</span>
        </td>
        <td class="px-4 py-3 text-sm">
          <span class="align-middle ml-5">{{ $value->Int_Nb_Jours }}</span>
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>

  <a class="flex items-center mt-4 justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" href="#">
    <div class="flex items-center">
      <span>Intervention Avec Le Nom De La Parcelle Concernée.</span>
    </div>
  </a>


  <table class="w-full whitespace-no-wrap">
    <thead>
      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
        <!--$Int_id,$Int_Emp_Nss,$Int_Par_Id,$Int_Debut,$Int_Nb_Jours;-->
        <th class="px-4 py-3">Int_id</th>
        <th class="px-4 py-3">Int_Emp_Nss</th>
        <th class="px-4 py-3">Int_Par_Id</th>
        <th class="px-4 py-3">Int_Debut</th>
        <th class="px-4 py-3">Int_Nb_Jours</th>
        <th class="px-4 py-3">Par_Nom</th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
      @foreach($q6 as $value)
      <tr class="text-gray-700 dark:text-gray-400">
        <td class="px-4 py-3">
          <div class="flex items-center text-sm">
            <!-- Avatar with inset shadow -->

            <div>
              <p class="font-semibold">{{ $value->id }}</p>
            </div>
          </div>
        </td>
        <!--$Int_id,$Int_Emp_Nss,$Int_Par_Id,$Int_Debut,$Int_Nb_Jours;-->
        <td class="px-4 py-3 text-sm">
          {{ $value->Int_Emp_Nss }}
        </td>
        <td class="px-4 py-3 text-xs">
          <div class="align-middle">
            <span class="align-middle ml-3 px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              {{ $value->Int_Par_Id }}
            </span>
          </div>
        </td>
        <td class="px-4 py-3 text-sm">
          <span class="align-middle ml-5">{{ $value->Int_Debut }}</span>
        </td>
        <td class="px-4 py-3 text-sm">
          <span class="align-middle ml-5">{{ $value->Int_Nb_Jours }}</span>
        </td>
        <td class="px-4 py-3 text-sm">
          <span class="align-middle ml-5">{{ $value->Par_Nom }}</span>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a class="flex items-center mt-4 justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" href="#">
    <div class="flex items-center">
      <span>Intervention Avec Le Nom De La Parcelle Concernée. Et Le Nom De L’employé.</span>
    </div>
  </a>


  <table class="w-full whitespace-no-wrap">
    <thead>
      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
        <!--$Int_id,$Int_Emp_Nss,$Int_Par_Id,$Int_Debut,$Int_Nb_Jours;-->
        <th class="px-4 py-3">Int_id</th>
        <th class="px-4 py-3">Int_Emp_Nss</th>
        <th class="px-4 py-3">Int_Par_Id</th>
        <th class="px-4 py-3">Int_Debut</th>
        <th class="px-4 py-3">Int_Nb_Jours</th>
        <th class="px-4 py-3">Par_Nom</th>
        <th class="px-4 py-3">Agr_Nom</th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
      @foreach($q7 as $value)
      <tr class="text-gray-700 dark:text-gray-400">
        <td class="px-4 py-3">
          <div class="flex items-center text-sm">
            <!-- Avatar with inset shadow -->

            <div>
              <p class="font-semibold">{{ $value->id }}</p>
            </div>
          </div>
        </td>
        <!--$Int_id,$Int_Emp_Nss,$Int_Par_Id,$Int_Debut,$Int_Nb_Jours;-->
        <td class="px-4 py-3 text-sm">
          {{ $value->Int_Emp_Nss }}
        </td>
        <td class="px-4 py-3 text-xs">
          <div class="align-middle">
            <span class="align-middle ml-3 px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              {{ $value->Int_Par_Id }}
            </span>
          </div>
        </td>
        <td class="px-4 py-3 text-sm">
          <span class="align-middle ml-5">{{ $value->Int_Debut }}</span>
        </td>
        <td class="px-4 py-3 text-sm">
          <span class="align-middle ml-5">{{ $value->Int_Nb_Jours }}</span>
        </td>
        <td class="px-4 py-3 text-sm">
          <span class="align-middle ml-5">{{ $value->Par_Nom }}</span>
        </td>
        <td class="px-4 py-3 text-sm">
          <span class="align-middle ml-5">{{ $value->Agr_Nom }}</span>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a class="flex items-center mt-4 justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" href="#">
    <div class="flex items-center">
      <span>Les Interventions De L’employe Pernet</span>
    </div>
  </a>


  <table class="w-full whitespace-no-wrap">
    <thead>
      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
        <!--$Int_id,$Int_Emp_Nss,$Int_Par_Id,$Int_Debut,$Int_Nb_Jours;-->
        <th class="px-4 py-3">Int_id</th>
        <th class="px-4 py-3">Int_Emp_Nss</th>
        <th class="px-4 py-3">Int_Par_Id</th>
        <th class="px-4 py-3">Int_Debut</th>
        <th class="px-4 py-3">Int_Nb_Jours</th>
        <th class="px-4 py-3">Emp_Nom</th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
      @foreach($q8 as $value)
      <tr class="text-gray-700 dark:text-gray-400">
        <td class="px-4 py-3">
          <div class="flex items-center text-sm">
            <!-- Avatar with inset shadow -->

            <div>
              <p class="font-semibold">{{ $value->id }}</p>
            </div>
          </div>
        </td>
        <!--$Int_id,$Int_Emp_Nss,$Int_Par_Id,$Int_Debut,$Int_Nb_Jours;-->
        <td class="px-4 py-3 text-sm">
          {{ $value->Int_Emp_Nss }}
        </td>
        <td class="px-4 py-3 text-xs">
          <div class="align-middle">
            <span class="align-middle ml-3 px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              {{ $value->Int_Par_Id }}
            </span>
          </div>
        </td>
        <td class="px-4 py-3 text-sm">
          <span class="align-middle ml-5">{{ $value->Int_Debut }}</span>
        </td>
        <td class="px-4 py-3 text-sm">
          <span class="align-middle ml-5">{{ $value->Int_Nb_Jours }}</span>
        </td>
        <td class="px-4 py-3 text-sm">
          <span class="align-middle ml-5">{{ $value->Emp_Nom }}</span>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a class="flex items-center mt-4 justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" href="#">
    <div class="flex items-center">
      <span>La Superficie Totale Des Parcelles.</span>
    </div>
  </a>

  <table class="w-full whitespace-no-wrap">
    <thead>
      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
        <!--$Int_id,$Int_Emp_Nss,$Int_Par_Id,$Int_Debut,$Int_Nb_Jours;-->
        <th class="px-4 py-3">Somme des superficies</th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
      <tr class="text-gray-700 dark:text-gray-400">
        <td class="px-4 py-3">
          <div class="flex items-center text-sm">
            <div>
              <p class="font-semibold">
                <span class="align-middle ml-3 px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                    {{ $q9 }}
                </span>
              </p>
            </div>
          </div>
        </td>
      </tr>
    </tbody>
  </table>

  <a class="flex items-center mt-4 justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" href="#">
    <div class="flex items-center">
      <span>Le Nom De La Plus Grande Parcelle Et Le Nom De La Plus Petit Parcelle</span>
    </div>
  </a>

  <table class="w-full mb-6 whitespace-no-wrap">
    <thead>
      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
        <!--$Int_id,$Int_Emp_Nss,$Int_Par_Id,$Int_Debut,$Int_Nb_Jours;-->
        <th class="px-4 py-3">Grande Parcelle</th>
        <th class="px-4 py-3">Petite Parcelle</th>

      </tr>
    </thead>
    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
      <tr class="text-gray-700 dark:text-gray-400">
        <td class="px-4 py-3">
          <div class="flex items-center text-sm">
            <div>
              <p class="font-semibold">
                <span class="align-middle ml-3 px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                    {{ $q10->get(0)->Par_Nom }}
                </span>
              </p>
            </div>
          </div>
        </td>
        <td class="px-4 py-3">
          <div class="flex items-center text-sm">
            <div>
              <p class="font-semibold">
                <span class="align-middle ml-3 px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-green-700 dark:text-green-100">
                    {{ $q11->get(0)->Par_Nom}}
                </span>
              </p>
            </div>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>