<x-layout>
    <x-slot:judul>{{ $title ?? 'Student List' }}</x-slot:judul>

    <h2 style="text-align: center;">Teacher Table</h2>
    <table style="border-collapse: collapse; width: 80%; margin: 20px auto;">
        <thead>
            <tr>
                <th style="border: 1px solid #000; padding: 8px 12px; background-color: #f2f2f2;">No</th>
                <th style="border: 1px solid #000; padding: 8px 12px; background-color: #f2f2f2;">Name</th>
                <th style="border: 1px solid #000; padding: 8px 12px; background-color: #f2f2f2;">Subject Name</th>
                <th style="border: 1px solid #000; padding: 8px 12px; background-color: #f2f2f2;">Phone</th>
                <th style="border: 1px solid #000; padding: 8px 12px; background-color: #f2f2f2;">Email</th>
                <th style="border: 1px solid #000; padding: 8px 12px; background-color: #f2f2f2;">Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100 transition">
                    <td class="px-6 py-4 font-medium text-gray-700">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4 font-medium text-gray-700">{{ $teacher["name"] }}</td>
                    <td class="px-6 py-4 font-medium text-gray-700">{{ $teacher-> subjects-> name }}</td>
                    <td class="px-6 py-4 font-medium text-gray-700">{{ $teacher["phone"] }}</td>
                    <td class="px-6 py-4 font-medium text-gray-700">{{ $teacher["email"] }}</td>
                    <td class="px-6 py-4 font-medium text-gray-700">{{ $teacher["adress"] }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>