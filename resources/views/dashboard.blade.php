<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-slate-800 leading-tight">
            {{ __('Dashboard Overview') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Stats Card -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center gap-4 transition-all hover:shadow-md hover:border-indigo-100 group">
            <div class="w-12 h-12 rounded-lg bg-indigo-50 flex items-center justify-center text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white transition-all">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            </div>
            <div>
                <p class="text-sm font-medium text-slate-500 uppercase tracking-wider">Total Pages</p>
                <p class="text-2xl font-bold text-slate-900">{{ \App\Models\Page::count() }}</p>
            </div>
        </div>

        <!-- Stats Card -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center gap-4 transition-all hover:shadow-md hover:border-emerald-100 group">
            <div class="w-12 h-12 rounded-lg bg-emerald-50 flex items-center justify-center text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition-all">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            </div>
            <div>
                <p class="text-sm font-medium text-slate-500 uppercase tracking-wider">Team Members</p>
                <p class="text-2xl font-bold text-slate-900">{{ \App\Models\TeamMember::count() }}</p>
            </div>
        </div>

        <!-- Stats Card -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center gap-4 transition-all hover:shadow-md hover:border-amber-100 group">
            <div class="w-12 h-12 rounded-lg bg-amber-50 flex items-center justify-center text-amber-600 group-hover:bg-amber-600 group-hover:text-white transition-all">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2zM14 4v4h4"></path></svg>
            </div>
            <div>
                <p class="text-sm font-medium text-slate-500 uppercase tracking-wider">Blog Posts</p>
                <p class="text-2xl font-bold text-slate-900">{{ \App\Models\BlogPost::count() }}</p>
            </div>
        </div>

        <!-- Stats Card -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center gap-4 transition-all hover:shadow-md hover:border-rose-100 group">
            <div class="w-12 h-12 rounded-lg bg-rose-50 flex items-center justify-center text-rose-600 group-hover:bg-rose-600 group-hover:text-white transition-all">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </div>
            <div>
                <p class="text-sm font-medium text-slate-500 uppercase tracking-wider">Submissions</p>
                <p class="text-2xl font-bold text-slate-900">{{ \App\Models\ContactSubmission::count() }}</p>
            </div>
        </div>
    </div>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border border-gray-100">
        <div class="p-8 text-gray-900">
            <h3 class="text-lg font-semibold mb-4 text-slate-800">Welcome to CpaExpert Admin</h3>
            <p class="text-slate-600 leading-relaxed">
                Use the sidebar to manage your website content, team members, and blog posts. Changes you make here will reflect on the public website in real-time.
            </p>
            <div class="mt-8 flex gap-4">
                <a href="#" class="px-6 py-3 bg-indigo-600 text-white rounded-lg font-semibold shadow-lg shadow-indigo-500/20 hover:bg-indigo-700 transition-all">
                    Create New Page
                </a>
                <a href="#" class="px-6 py-3 bg-slate-100 text-slate-700 rounded-lg font-semibold hover:bg-slate-200 transition-all">
                    View Submissions
                </a>
            </div>
        </div>
    </div>
</x-admin-layout>
