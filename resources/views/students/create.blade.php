<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-500/10 border border-red-500/50 rounded-lg text-red-400">
            <ul class="list-disc pl-5 space-y-1 text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="max-w-xl flex flex-col mx-auto my-8 p-6 bg-slate-900 border border-slate-800 rounded-xl shadow-lg text-slate-100">
        <h1 class="text-2xl font-bold text-blue-500 mb-6 text-center">Create New Student Record</h1>

        <form action="/store" method="POST" class="grid grid-cols-2 gap-4">
            @csrf <!-- Security Token -->

            <div class="flex flex-col max-w-xl text-left gap-1">
                <label for="name" class="text-sm font-medium text-slate-300">Name</label>
                <input type="text" id="name" name="name" placeholder="Name" required
                    class="px-3 py-2 bg-slate-800 border border-slate-700 rounded-lg text-slate-100 focus:outline-none focus:border-blue-500">
            </div>

            <div class="flex flex-col text-left gap-1">
                <label for="email" class="text-sm font-medium text-slate-300">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required
                    class="px-3 py-2 bg-slate-800 border border-slate-700 rounded-lg text-slate-100 focus:outline-none focus:border-blue-500">
            </div>

            <div class="flex flex-col text-left gap-1">
                <label for="university" class="text-sm font-medium text-slate-300">University</label>
                <input type="text" id="university" name="university" placeholder="Name of University" required
                    class="px-3 py-2 bg-slate-800 border border-slate-700 rounded-lg text-slate-100 focus:outline-none focus:border-blue-500">
            </div>

            <div class="flex flex-col text-left gap-1">
                <label for="department" class="text-sm font-medium text-slate-300">Department</label>
                <input type="text" id="department" name="department" placeholder="Name of Department" required
                    class="px-3 py-2 bg-slate-800 border border-slate-700 rounded-lg text-slate-100 focus:outline-none focus:border-blue-500">
            </div>

            <div class="flex flex-col text-left gap-1">
                <label for="subject" class="text-sm font-medium text-slate-300">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="Subject" required
                    class="px-3 py-2 bg-slate-800 border border-slate-700 rounded-lg text-slate-100 focus:outline-none focus:border-blue-500">
            </div>

            <div class="flex flex-col text-left gap-1">
                <label for="semester" class="text-sm font-medium text-slate-300">Semester</label>
                <input type="text" id="semester" name="semester" placeholder="Semester" required
                    class="px-3 py-2 bg-slate-800 border border-slate-700 rounded-lg text-slate-100 focus:outline-none focus:border-blue-500">
            </div>

            <div class="flex flex-col text-left gap-1">
                <label for="phone" class="text-sm font-medium text-slate-300">Phone</label>
                <input type="text" id="phone" name="phone" placeholder="Phone Number" required
                    class="px-3 py-2 bg-slate-800 border border-slate-700 rounded-lg text-slate-100 focus:outline-none focus:border-blue-500">
            </div>

            <button type="submit"
                class="mt-4 py-2.5 px-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md transition-colors duration-200">
                Save Student Record
            </button>
            
        </form>
    </div>
</body>

</html>
