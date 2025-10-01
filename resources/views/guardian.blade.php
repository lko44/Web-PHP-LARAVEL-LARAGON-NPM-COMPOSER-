<x-layout>
    <x-slot:judul>{{ $title ?? 'guardian List' }}</x-slot:judul>

    <h2 style="text-align: center;">Guardian Table</h2>
    <table style="border-collapse: collapse; width: 80%; margin: 20px auto;">
        <thead>
            <tr>
                <th style="border: 1px solid #000; padding: 8px 12px; background-color: #f2f2f2;">No</th>
                <th style="border: 1px solid #000; padding: 8px 12px; background-color: #f2f2f2;">Name</th>
                <th style="border: 1px solid #000; padding: 8px 12px; background-color: #f2f2f2;">Job</th>
                <th style="border: 1px solid #000; padding: 8px 12px; background-color: #f2f2f2;">Phone</th>
                <th style="border: 1px solid #000; padding: 8px 12px; background-color: #f2f2f2;">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guardian as $guardian)
                    <!-- <td style="border: 1px solid #000; padding: 8px 12px;">{{ $guardian['id'] }}</td>
                    <td style="border: 1px solid #000; padding: 8px 12px;">{{ $guardian['name'] }}</td>
                    <td style="border: 1px solid #000; padding: 8px 12px;">{{ $guardian['email'] }}</td>
                    <td style="border: 1px solid #000; padding: 8px 12px;">{{ $guardian['adress'] }}</td> -->
                    <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100 transition">
                        <td class="px-6 py-4 font-medium text-gray-700">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 font-medium text-gray-700">{{ $guardian["name"] }}</td>
                        <td class="px-6 py-4 font-medium text-gray-700">{{ $guardian["Job"] }}</td>
                        <td class="px-6 py-4 font-medium text-gray-700">{{ $guardian["Phone"] }}</td>
                        <td class="px-6 py-4 font-medium text-gray-700">{{ $guardian["email"] }}</td>
                
                    </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
