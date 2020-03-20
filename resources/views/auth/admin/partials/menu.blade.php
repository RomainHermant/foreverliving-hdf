<div class="menu my-3 px-2 flex flex-col">
    <span class="text-gray-600 text-sm px-4 mt-3 mb-2">Navigation</span>
    <a href="{{ route('admin.dashboard') }}" class="hover:bg-gray-800 text-gray-200 hover:text-white px-2 py-2 mb-1 rounded-lg duration-200 transition-all {{ (request()->is('admin/dashboard')) ? 'bg-gray-800' : '' }}">
        <i class="fas fa-home text-lg mx-2"></i>
        <span class="font-bold">{{ $title_section ?? "Dashboard" }}</span>
    </a>

    <span class="text-gray-600 text-sm px-4 mt-3 mb-2">Gestion du contenu</span>
    <a href="{{ route('admin.products') }}" class="relative hover:bg-gray-800 text-gray-200 hover:text-white px-2 py-2 mb-1 rounded-lg duration-200 transition-all {{ (request()->is('dashboard/admin/notifications')) ? 'bg-gray-800' : '' }}">
        <i class="fas fa-tasks text-lg mx-2"></i>
        <span class="font-bold">Produits</span>
    </a>
    <a href="{{ route('admin.faq') }}" class="hover:bg-gray-800 text-gray-200 hover:text-white px-2 py-2 mb-1 rounded-lg duration-200 transition-all {{ (request()->is('dashboard/admin/contenu/formations')) ? 'bg-gray-800' : '' }}">
        <i class="fas fa-briefcase text-lg mx-2"></i>
        <span class="font-bold">FAQ</span>
    </a>
</div>
