<x-layout>
    <x-slot:judul>{{ $title ?? 'Student List' }}</x-slot:judul>

    <h2 style="text-align: center;">Student Table</h2>
    <table style="border-collapse: collapse; width: 80%; margin: 20px auto;">
        <thead>
            <tr>
                <th style="border: 1px solid #000; padding: 8px 12px; background-color: #f2f2f2;">No</th>
                <th style="border: 1px solid #000; padding: 8px 12px; background-color: #f2f2f2;">Name</th>
                <th style="border: 1px solid #000; padding: 8px 12px; background-color: #f2f2f2;">Birthday</th>
                <th style="border: 1px solid #000; padding: 8px 12px; background-color: #f2f2f2;">Grade</th>
                <th style="border: 1px solid #000; padding: 8px 12px; background-color: #f2f2f2;">Email</th>
                <th style="border: 1px solid #000; padding: 8px 12px; background-color: #f2f2f2;">Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                    <!-- <td style="border: 1px solid #000; padding: 8px 12px;">{{ $student['id'] }}</td>
                    <td style="border: 1px solid #000; padding: 8px 12px;">{{ $student['name'] }}</td>
                    <td style="border: 1px solid #000; padding: 8px 12px;">{{ $student['email'] }}</td>
                    <td style="border: 1px solid #000; padding: 8px 12px;">{{ $student['adress'] }}</td> -->
                    <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100 transition">
                        <td class="px-6 py-4 font-medium text-gray-700">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 font-medium text-gray-700">{{ $student["name"] }}</td>
                        <td class="px-6 py-4 font-medium text-gray-700">{{ $student["Birthday"] }}</td>
                        <td class="px-6 py-4 font-medium text-gray-700">{{ $student->classroom->name }}</td>
                        <td class="px-6 py-4 font-medium text-gray-700">{{ $student["email"] }}</td>
                        <td class="px-6 py-4 font-medium text-gray-700">{{ $student["adress"] }}</td>
                
                    </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
