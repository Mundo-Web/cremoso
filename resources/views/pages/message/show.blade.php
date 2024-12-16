<x-app-layout title="Mostrar mensajes">
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
            <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl">Enviado el {{ $message->created_at->format('d-m-Y') }} por {{ $message->full_name }}</h2>
              </header>
            <div class="p-3">
        
                <div class="p-6">
                    
                    <table id="tabladatos" class="display text-lg" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Teléfono</th>
                                <th>IP</th>
                                <th>Dispositivo</th>
                                <th>Latitud</th>
                                <th>Longitud</th>
                                <th>Sistema</th>
                                <th>Fuente</th>
                                <th>Enviado</th> 
                                <th class="w-32">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($mensajes as $item)
                                <tr>
                                    <td>
                                        @if ($item->is_read == '0')
                                            <a href="{{ route('mensajes.show', $item->id) }}"><span class="mr-4"><i
                                                        class="fa-regular fa-envelope"></i></span><span
                                                    class="font-bold dark:text-white">{{ $item->full_name }}</span></a>
                                        @else
                                            <a href="{{ route('mensajes.show', $item->id) }}"><span class="mr-4"><i
                                                        class="fa-regular fa-envelope-open"></i></span><span>{{ $item->full_name }}</span></a>
                                        @endif

                                    </td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>

                                    <td>{{ $item->ip }}</td>
                                    <td>{{ $item->device }}</td>
                                    <td>{{ $item->client_latitude }}</td>
                                    <td>{{ $item->client_longitude }}</td>
                                    <td>{{ $item->client_system }}</td>
                                    <td>{{ $item->source }}</td>
                                    <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                    
                                    <td class="flex flex-row items-center justify-center">
                                        <button method="POST" onclick="borrarmensaje({{ $item->id }})"
                                            class="bg-red-600 p-2 rounded text-white"><i
                                                class="fa-regular fa-trash-can"></i></button>
                                        <!--a href="" class="bg-yellow-400 p-2 rounded text-white mr-6"><i class="fa-regular fa-pen-to-square"></i></a-->
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Teléfono</th>
                                <th>IP</th>
                                <th>Dispositivo</th>
                                <th>Latitud</th>
                                <th>Longitud</th>
                                <th>Sistema</th>
                                <th>Fuente</th>
                                <th>Enviado</th>
                                <th>Acciones</th>
                                
                            </tr>
                        </tfoot>
                    </table>

                    
        
                </div>
                <a href="{{route('mensajes.index')}}" class="bg-blue-500 px-4 py-2 rounded text-white"><span><i class="fa-solid fa-arrow-left mr-2"></i></span> Volver</a>
            </div>
        </div>   

    </div>

    

</x-app-layout>
