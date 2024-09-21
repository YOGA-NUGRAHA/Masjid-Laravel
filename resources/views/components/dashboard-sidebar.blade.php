<div class="min-h-full bg-teal-800 shadow-sm p-8 pt-20 text-lg">
    <nav>
        <ul class="flex flex-col gap-6">
            <li>
                <a class="p-2 rounded-md text-white transition-all ease-in-out" href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li>
                <a class="p-2 rounded-md text-white transition-all ease-in-out" href="{{route('pemasukan.index')}}">Pemasukan</a>
            </li>
            <li>
                <a class="p-2 rounded-md text-white transition-all ease-in-out" href="{{route('pengeluaran.index')}}">Pengeluaran</a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="text-lg ml-2 text-red-600 cursor-pointer" :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Logout') }}
                    </a>
                </form>
            </li>
        </ul>
    </nav>
</div>