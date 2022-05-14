<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Buscar
        </h2>

    </x-slot>
    <div class="flex justify-center">
        <div class="mb-3 xl:w-96">
            <form action="/buscar" method="get">
                <input
                    name="search"
                    id="search"
                    placeholder="Search"
                    type="search"
                    class="
                        form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                      "/>
            </form>
            @foreach($users as $user)
                <p>
                    </br>Nome: {{$user->name}} {{$user->sobrenome}}<br>
                    Email: {{$user->email}}<br>
                </p>
            @endforeach
        </div>
    </div>
</x-app-layout>

