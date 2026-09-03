<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Details</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-950 text-slate-100 min-h-screen flex items-center justify-center p-6">
    <div class="max-w-xl w-full bg-slate-900 border border-slate-800 rounded-xl shadow-xl overflow-hidden">
        
        <!-- Header -->
        <div class="p-6 bg-slate-800/50 border-b border-slate-800 flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-blue-500">{{ $student->name }}</h1>
                <p class="text-xs text-slate-400 mt-1">Student Record ID: #{{ $student->id }}</p>
            </div>
            <a href="{{ route('students.dashboard') }}" 
               class="px-3 py-1.5 bg-slate-800 hover:bg-slate-700 text-slate-300 text-xs font-semibold rounded-lg transition border border-slate-700">
                &larr; Back to Dashboard
            </a>
        </div>

        <!-- Student Details List -->
        <div class="p-6 space-y-4">
            <div class="grid grid-cols-2 gap-4 pb-3 border-b border-slate-800/60">
                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Email Address</span>
                <span class="text-sm text-slate-200 font-medium text-right">{{ $student->email }}</span>
            </div>

            <div class="grid grid-cols-2 gap-4 pb-3 border-b border-slate-800/60">
                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">University</span>
                <span class="text-sm text-slate-200 font-medium text-right">{{ $student->university }}</span>
            </div>

            <div class="grid grid-cols-2 gap-4 pb-3 border-b border-slate-800/60">
                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Department</span>
                <span class="text-sm text-slate-200 font-medium text-right">{{ $student->department }}</span>
            </div>

            <div class="grid grid-cols-2 gap-4 pb-3 border-b border-slate-800/60">
                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Subject</span>
                <span class="text-sm text-slate-200 font-medium text-right">{{ $student->subject }}</span>
            </div>

            <div class="grid grid-cols-2 gap-4 pb-3 border-b border-slate-800/60">
                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Semester</span>
                <span class="text-sm text-slate-200 font-medium text-right">{{ $student->semester }}</span>
            </div>

            <div class="grid grid-cols-2 gap-4 pb-3 border-b border-slate-800/60">
                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Phone</span>
                <span class="text-sm text-slate-200 font-medium text-right">{{ $student->phone }}</span>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Created At</span>
                <span class="text-xs text-slate-400 text-right">{{ $student->created_at->format('d M, Y - h:i A') }}</span>
            </div>
        </div>

        <div class="p-4 bg-slate-800/30 border-t border-slate-800 flex justify-end gap-3">
            <a href="{{ route('students.edit', $student->id) }}" 
               class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold rounded-lg shadow transition">
                Edit Details
            </a>
        </div>

    </div>
</body>

</html>
