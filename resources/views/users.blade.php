<x-layout>
<div class="mt-2">
    <table class="mx-auto table-auto">
      <thead>
        <tr class="bg-gradient-to-r from-indigo-600 to-purple-600">
          <th class="px-16 py-2">
            <span class="text-gray-100 font-semibold">Name</span>
          </th>
          <th class="px-16 py-2">
            <span class="text-gray-100 font-semibold">Email</span>
          </th>

          <th class="px-16 py-2">
            <span class="text-gray-100 font-semibold">Company</span>
          </th>


          <th class="px-16 py-2">
            <span class="text-gray-100 font-semibold">Edit</span>
          </th>
        </tr>
      </thead>
      <tbody class="bg-gray-200">
        @foreach ($users as $user )
        <tr class="bg-white border-b-2 border-gray-200">



          <td>
            <span class="text-center ml-2 font-semibold">{{ $user->name }}</span>
          </td>

          <td class="px-16 py-2">
            <span>{{ $user->email }}</span>
          </td>
          <td class="px-16 py-2">
            <span>{{ $user->company->name }}</span>
          </td>

          <td class="px-16 py-2">
            <a href="">Edit</a>
          </td>

        </tr>
        @endforeach
      </tbody>
      {{ $users->links() }}
    </table>

  </div>

</x-layout>
