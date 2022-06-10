<x-slot name="header">
    <h1 class="text-gray-900">Crud Prestamos</h1>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            <button wire:click="crear()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3 fas fa-file-medical" >Nuevo</button>
            @if($modal)
                @include('livewire.create_vehículo')
            @endif


            <table class="table-fixed w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">numero_placas</th>
                        <th class="px-4 py-2">tipo</th>
                        <th class="px-4 py-2">piloto_id</th>
                        <th class="px-4 py-2">color_id</th>
                        <th class="px-4 py-2">fabricante_id</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vehículos as $vehículo)
                    <tr>
                        <td class="border px-4 py-2">{{$vehículo->id}}</td>
                        <td class="border px-4 py-2">{{$vehículo->numero_placas}}</td>
                        <td class="border px-4 py-2">{{$vehículo->tipo}}</td>
                        <td class="border px-4 py-2">{{$vehículo->piloto_id}}</td>
                        <td class="border px-4 py-2">{{$vehículo->color_id}}</td>
                        <td class="border px-4 py-2">{{$vehículo->fabricante_id}}</td>
                        <td class="border px-4 py-2 text-center">
                            <button wire:click="editar({{$vehículo->id}})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar</button>
                            <button wire:click="borrar({{$vehículo->id}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>