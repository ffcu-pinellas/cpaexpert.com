<x-admin-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('submissions.index') }}" class="p-2 text-slate-400 hover:text-indigo-600 transition-colors bg-white rounded-lg border border-gray-100 shadow-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('View Submission') }}
            </h2>
        </div>
    </x-slot>

    <div class="max-w-4xl">
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8 space-y-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 border-b border-gray-100 pb-8">
                <div>
                    <h3 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-2">From</h3>
                    <div class="text-lg font-bold text-slate-900">{{ $submission->name }}</div>
                    <a href="mailto:{{ $submission->email }}" class="text-indigo-600 hover:underline">{{ $submission->email }}</a>
                    @if($submission->phone)
                        <div class="text-slate-600 mt-1">{{ $submission->phone }}</div>
                    @endif
                </div>
                <div>
                    <h3 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-2">Details</h3>
                    <div class="text-slate-900 font-semibold italic">Sent on {{ $submission->created_at->format('M d, Y at H:i') }}</div>
                    <div class="mt-2">
                        <span class="px-2 py-1 text-[10px] font-bold uppercase tracking-wider text-indigo-700 bg-indigo-50 rounded-md border border-indigo-100">
                            {{ $submission->subject ?? 'No Subject Provided' }}
                        </span>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-4">Message</h3>
                <div class="bg-slate-50 rounded-xl p-6 text-slate-800 leading-relaxed whitespace-pre-wrap border border-gray-100">
                    {{ $submission->message }}
                </div>
            </div>

            <div class="pt-8 border-t border-gray-100 flex items-center justify-between">
                <form action="{{ route('submissions.destroy', $submission) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-rose-600 font-bold hover:text-rose-700 transition-colors flex items-center gap-2" onclick="return confirm('Are you sure you want to delete this message?')">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        Delete Permanently
                    </button>
                </form>
                <a href="mailto:{{ $submission->email }}?subject=Re: {{ $submission->subject }}" class="px-8 py-3 bg-indigo-600 text-white rounded-lg font-bold shadow-lg shadow-indigo-500/20 hover:bg-indigo-700 transition-all transform hover:-translate-y-0.5 inline-flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"></path></svg>
                    Reply via Email
                </a>
            </div>
        </div>
    </div>
</x-admin-layout>
