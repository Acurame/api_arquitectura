
<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">    
                <form>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="mb-4">
                            <label for="numero_placas" class="block text-gray-700 text-sm font-bold mb-2">numero de placas:</label>
                            <input type="text" rows="12" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="numero_placas" wire:model="numero_placas">
                        </div>
                        <div class="mb-4">
                            <label for="tipo" class="block text-gray-700 text-sm font-bold mb-2">tipo:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tipo" wire:model="tipo">
                        </div>
                        <div class="mb-4">
                            <label for="id_tipocuenta" class="block text-gray-700 text-sm font-bold mb-2">piloto:</label>
                            <select name="id_tipocuenta" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="piloto_id" wire:model="piloto_id">
                            <option value="0">Elija la piloto </option>    
                                @foreach($pilotos as $piloto)
                                    <option value="{{$piloto->id}}">{{$piloto->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="id_tipocuenta" class="block text-gray-700 text-sm font-bold mb-2">color:</label>
                            <select name="id_tipocuenta" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="color_id" wire:model="color_id">
                            <option value="0">Elija la color </option>    
                                @foreach($Colores as $Colore)
                                    <option value="{{$Colore->id}}">{{$Colore->nombre_color}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="id_tipocuenta" class="block text-gray-700 text-sm font-bold mb-2">fabricante:</label>
                            <select name="id_tipocuenta" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fabricante_id" wire:model="fabricante_id">
                            <option value="0">Elija la fabricante </option>    
                                @foreach($fabricantes as $fabricante)
                                    <option value="{{$fabricante->id}}">{{$fabricante->nombre_fabricante}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click.prevent="guardar()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-purple-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Guardar</button>
                            </span>

                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click="cerrarModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cancelar</button>
                            </span>
                        </div>

                    </div>
                </form>    
            </div>
    </div>
</div>