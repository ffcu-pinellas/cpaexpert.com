<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-slate-800 leading-tight">
            {{ __('Navigation Menus') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-1 gap-8">
        @forelse($menus as $menu)
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h3 class="text-lg font-bold text-slate-900">{{ $menu->name }}</h3>
                        <p class="text-sm text-slate-500">Edit items for the {{ strtolower($menu->name) }} menu.</p>
                    </div>
                    <form action="{{ route('navigation.update', $menu) }}" method="POST" id="menu-form-{{ $menu->id }}">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="name" value="{{ $menu->name }}">
                        <input type="hidden" name="items" id="menu-items-{{ $menu->id }}" value="{{ $menu->items }}">
                        <button type="button" onclick="saveMenu({{ $menu->id }})" class="px-6 py-2 bg-indigo-600 text-white rounded-lg font-bold shadow-lg shadow-indigo-500/20 hover:bg-indigo-700 transition-all">
                            Save Changes
                        </button>
                    </form>
                </div>

                <div id="items-container-{{ $menu->id }}" class="space-y-3">
                    <!-- Dynamic items will be here -->
                </div>

                <button type="button" onclick="addItem({{ $menu->id }})" class="mt-4 flex items-center gap-2 text-indigo-600 font-bold text-sm hover:text-indigo-700 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Add Menu Item
                </button>
            </div>
        @empty
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-12 text-center">
                 <p class="text-slate-500 font-medium">No menus configured. Please run migrations/seeders.</p>
            </div>
        @endforelse
    </div>

    <script>
        const menus = @json($menus);
        const containers = {};

        document.addEventListener('DOMContentLoaded', () => {
            menus.forEach(menu => {
                const data = JSON.parse(menu.items || '[]');
                containers[menu.id] = data;
                renderItems(menu.id);
            });
        });

        function renderItems(menuId) {
            const container = document.getElementById(`items-container-${menuId}`);
            container.innerHTML = '';
            
            containers[menuId].forEach((item, index) => {
                const div = document.createElement('div');
                div.className = 'flex items-center gap-4 bg-gray-50 p-4 rounded-lg border border-gray-100 group';
                div.innerHTML = `
                    <div class="flex-1 grid grid-cols-2 gap-4">
                        <input type="text" value="${item.title}" placeholder="Label" class="rounded-md border-gray-200 text-sm focus:ring-indigo-500 focus:border-indigo-500" onchange="updateItem(${menuId}, ${index}, 'title', this.value)">
                        <input type="text" value="${item.url}" placeholder="URL" class="rounded-md border-gray-200 text-sm focus:ring-indigo-500 focus:border-indigo-500" onchange="updateItem(${menuId}, ${index}, 'url', this.value)">
                    </div>
                    <button type="button" onclick="removeItem(${menuId}, ${index})" class="p-2 text-slate-400 hover:text-rose-600 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    </button>
                `;
                container.appendChild(div);
            });
        }

        function addItem(menuId) {
            containers[menuId].push({ title: 'New Item', url: '#' });
            renderItems(menuId);
        }

        function updateItem(menuId, index, key, value) {
            containers[menuId][index][key] = value;
        }

        function removeItem(menuId, index) {
            containers[menuId].splice(index, 1);
            renderItems(menuId);
        }

        function saveMenu(menuId) {
            const input = document.getElementById(`menu-items-${menuId}`);
            input.value = JSON.stringify(containers[menuId]);
            document.getElementById(`menu-form-${menuId}`).submit();
        }
    </script>
</x-admin-layout>
