<x-statistics>
    <div class="mt-10 sm:mt-0">
                <div  class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium text-gray-900">Agregar Ciudad</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                Completar con ciudad y poblacion.
                            </p>
                        </div>
                    </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
        <form method='POST' action="{{ route('cities.store') }} ">
            @csrf
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-4">
                            <label class="block font-medium text-sm text-gray-700" for="name">
                                Nombre Ciudad
                            </label>
                            <input class="form-input rounded-md shadow-sm mt-1 block w-full" id="name" name="name" type="text">
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <label class="block font-medium text-sm text-gray-700" for="population">
                                Cantidad de Habitantes
                            </label>
                            <input  class="form-input rounded-md shadow-sm mt-1 block w-full" id="population" name="population" type="text">
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <label class="block font-medium text-sm text-gray-700" for="image">
                                Agregar foto de ciudad
                            </label>
                            <input  class="form-input rounded-md shadow-sm mt-1 block w-full" id="image" name="image" type="text">
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button dusk="create" type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        Agregar Ciudad
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-statistics>