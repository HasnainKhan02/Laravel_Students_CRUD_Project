<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-950 text-slate-100 min-h-screen p-6">
    <div class="max-w-7xl mx-auto">
        <!-- Header & Action Button -->
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-blue-500">Students Dashboard</h1>
            <a href="{{ route('students.create') }}"
                class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold rounded-lg shadow-md transition duration-200">
                + Add New Student
            </a>
        </div>

        <!-- Success Message -->
        @if (session('success'))
            <div class="mb-6 p-4 bg-green-500/10 border border-green-500 text-green-400 text-sm rounded-xl text-center">
                {{ session('success') }}
            </div>
        @endif

        <!-- Table Container -->
        <div class="overflow-x-auto bg-slate-900 border border-slate-800 rounded-xl shadow-xl">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr
                        class="bg-slate-800/60 text-slate-300 text-xs uppercase tracking-wider border-b border-slate-800">
                        <th class="p-4">ID</th>
                        <th class="p-4">Name</th>
                        <th class="p-4">Email</th>
                        <th class="p-4">University</th>
                        <th class="p-4">Department</th>
                        <th class="p-4">Subject</th>
                        <th class="p-4">Semester</th>
                        <th class="p-4">Phone</th>
                        <th class="p-4">Created At</th>
                        <th class="p-4">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-800 text-sm">
                    @forelse($students as $student)
                        <tr class="hover:bg-slate-800/40 transition duration-150">
                            <td class="p-4 font-mono text-slate-400">#{{ $student->id }}</td>
                            <td class="p-4 font-medium text-slate-100">{{ $student->name }}</td>
                            <td class="p-4 text-slate-300">{{ $student->email }}</td>
                            <td class="p-4 text-slate-300">{{ $student->university }}</td>
                            <td class="p-4 text-slate-300">{{ $student->department }}</td>
                            <td class="p-4 text-slate-300">{{ $student->subject }}</td>
                            <td class="p-4 text-slate-300">{{ $student->semester }}</td>
                            <td class="p-4 text-slate-300">{{ $student->phone }}</td>
                            <td class="p-4 text-slate-300">{{ $student->created_at }}</td>
                            <td class="p-4 flex gap-2">
                                <a href="{{ route('students.view', $student->id) }}"
                                    class="px-3 py-2 bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold rounded-lg transition duration-200">
                                    View
                                </a>
                                <a href="{{ route('students.edit', $student->id) }}"
                                    class="px-3 py-2 bg-yellow-600 hover:bg-yellow-700 text-white text-xs font-semibold rounded-lg transition duration-200">
                                    Edit
                                </a>
                                <form action="{{ route('students.delete', $student->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this student?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="px-3 py-2 bg-red-600 hover:bg-red-700 text-white text-xs font-semibold rounded-lg transition duration-200">
                                        Delete
                                    </button>
                                </form>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="p-6 text-center text-slate-500">
                                No student records found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
