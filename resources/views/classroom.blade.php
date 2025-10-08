<x-layout>
    <x-slot:judul>{{ $title ?? 'Classroom List' }}</x-slot:judul>

    <h2 style="text-align: center;">Classroom Table</h2>
    <table style="border-collapse: collapse; width: 80%; margin: 20px auto;">
        <thead>
            <tr>
                <th style="border: 1px solid #000; padding: 8px 12px; background-color: #f2f2f2;">No</th>
                <th style="border: 1px solid #000; padding: 8px 12px; background-color: #f2f2f2;">Name</th>
                <th style="border: 1px solid #000; padding: 8px 12px; background-color: #f2f2f2;">List pelajar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classrooms as $classroom)
                <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100 transition">
                    <td class="px-6 py-4 font-medium text-gray-700">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4 font-medium text-gray-700">{{ $classroom->name }}</td>
                    <td class="px-6 py-4 font-medium text-gray-700">
                    @foreach ($classroom->students as $student)
                        <li>{{ $student->name }}</li>
                    @endforeach
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
