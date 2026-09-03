<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-950">
    <div class="max-w-md mx-auto my-8 p-6 bg-slate-900 border border-slate-800 rounded-xl shadow-lg text-slate-100">
        <h1 class="text-2xl font-bold text-blue-500 mb-6 text-center">Update Student Record</h1>

        <form action="{{ route('students.update', $student->id) }}" method="POST" class="flex flex-col gap-4">
            @csrf
            @method('PUT') <!-- Laravel update operation ke liye PUT/PATCH directive required hai -->

            <!-- Name -->
            <div class="flex flex-col text-left gap-1">
                <label for="name" class="text-sm font-medium text-slate-300">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', $student->name) }}" required
                    class="px-3 py-2 bg-slate-800 border border-slate-700 rounded-lg text-slate-100 focus:outline-none focus:border-blue-500">
                @error('name')
                    <span class="text-xs text-red-400 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div class="flex flex-col text-left gap-1">
                <label for="email" class="text-sm font-medium text-slate-300">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email', $student->email) }}" required
                    class="px-3 py-2 bg-slate-800 border border-slate-700 rounded-lg text-slate-100 focus:outline-none focus:border-blue-500">
                @error('email')
                    <span class="text-xs text-red-400 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- University -->
            <div class="flex flex-col text-left gap-1">
                <label for="university" class="text-sm font-medium text-slate-300">University</label>
                <input type="text" id="university" name="university" value="{{ old('university', $student->university) }}" required
                    class="px-3 py-2 bg-slate-800 border border-slate-700 rounded-lg text-slate-100 focus:outline-none focus:border-blue-500">
                @error('university')
                    <span class="text-xs text-red-400 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Department -->
            <div class="flex flex-col text-left gap-1">
                <label for="department" class="text-sm font-medium text-slate-300">Department</label>
                <input type="text" id="department" name="department" value="{{ old('department', $student->department) }}" required
                    class="px-3 py-2 bg-slate-800 border border-slate-700 rounded-lg text-slate-100 focus:outline-none focus:border-blue-500">
                @error('department')
                    <span class="text-xs text-red-400 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Subject -->
            <div class="flex flex-col text-left gap-1">
                <label for="subject" class="text-sm font-medium text-slate-300">Subject</label>
                <input type="text" id="subject" name="subject" value="{{ old('subject', $student->subject) }}" required
                    class="px-3 py-2 bg-slate-800 border border-slate-700 rounded-lg text-slate-100 focus:outline-none focus:border-blue-500">
                @error('subject')
                    <span class="text-xs text-red-400 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Semester -->
            <div class="flex flex-col text-left gap-1">
                <label for="semester" class="text-sm font-medium text-slate-300">Semester</label>
                <input type="text" id="semester" name="semester" value="{{ old('semester', $student->semester) }}" required
                    class="px-3 py-2 bg-slate-800 border border-slate-700 rounded-lg text-slate-100 focus:outline-none focus:border-blue-500">
                @error('semester')
                    <span class="text-xs text-red-400 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Phone -->
            <div class="flex flex-col text-left gap-1">
                <label for="phone" class="text-sm font-medium text-slate-300">Phone</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone', $student->phone) }}" required
                    class="px-3 py-2 bg-slate-800 border border-slate-700 rounded-lg text-slate-100 focus:outline-none focus:border-blue-500">
                @error('phone')
                    <span class="text-xs text-red-400 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex items-center gap-3 mt-4">
                <a href="{{ route('students.dashboard') }}" 
                   class="w-1/2 py-2.5 text-center bg-slate-800 hover:bg-slate-700 text-slate-300 font-semibold rounded-lg transition duration-200">
                    Cancel
                </a>
                <button type="submit"
                    class="w-1/2 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md transition duration-200 cursor-pointer">
                    Update Record
                </button>
            </div>
        </form>
    </div>
</body>

</html>