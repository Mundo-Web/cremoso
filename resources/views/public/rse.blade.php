@extends('components.public.matrix', ['pagina'=>'rse'])
@section('titulo', 'RSE')
@section('css_importados')

@stop


@section('content')
    <main>

        <section>
            <img class="w-full object-cover object-center h-[450px] md:h-[500px]" src="{{asset('images/imagen/rse.png')}}"/>
        </section>

        <section class="px-[5%] pt-12 xl:pt-16 w-full">
            <div class="flex flex-col gap-2 max-w-3xl mx-auto">
                <h2
                    class="text-[#052F4E] font-maille text-4xl md:text-5xl leading-none text-left lg:text-center max-w-2xl mx-auto">
                    Nombre del proyecto aquí
                </h2>
                <p class="text-[#052F4E] font-galano_regular text-lg text-left lg:text-center">
                    Mauris euismod vehicula eros egestas venenatis. Vestibulum non pulvinar risus.
                    Praesent hendrerit lectus ultrices purus consectetur, eu sollicitudin libero pretium.
                </p>
            </div>
        </section>

        <section class="pt-12 xl:pt-16 px-[5%]">
            <div class="grid grid-cols-1 lg:grid-cols-2 w-full gap-12 xl:gap-16">
              
                <div class="flex flex-col justify-center gap-5 lg:gap-5 text-textWhite ">
                    <h1
                        class="text-[#052F4E] font-galano_bold tracking-tighter text-3xl md:text-5xl leading-none">
                        La oportunidad
                    </h1>
                    <p class="text-[#052F4E] text-lg font-galano_regular">
                        Quisque pharetra aliquet nibh bibendum vestibulum. Praesent mollis velit at dui venenatis, eu egestas neque suscipit. 
                        Maecenas et molestie augue, et rutrum augue. Aliquam mattis urna et nisi dignissim mattis.
                    </p>
                    <p class="text-[#052F4E] text-lg font-galano_regular">
                        Quisque pharetra aliquet nibh bibendum vestibulum. Praesent mollis velit at dui venenatis, eu egestas neque suscipit. 
                        Maecenas et molestie augue, et rutrum augue. Aliquam mattis urna et nisi dignissim mattis.
                    </p>
                </div>

                <div class="flex flex-col justify-center items-center">
                    <img src="{{ asset('images/imagen/cremosorse.png') }}" class="object-contain aspect-square max-h-[500px] min-h-96" />
                </div>

            </div>
        </section>

        <section class="pt-12 xl:pt-16 px-[5%]">
            <div class="grid grid-cols-1 lg:grid-cols-2 w-full gap-12 xl:gap-16">
              
                <div class="flex flex-col justify-center items-center">
                    <img src="{{ asset('images/imagen/cremosorse2.png') }}" class="object-contain aspect-square max-h-[500px] min-h-96" />
                </div>

                <div class="flex flex-col justify-center gap-5 lg:gap-5 text-textWhite ">
                    <h1
                        class="text-[#052F4E] font-galano_bold tracking-tighter text-3xl md:text-5xl leading-none">
                        Lo que hicimos
                    </h1>
                    <p class="text-[#052F4E] text-lg font-galano_regular">
                        Quisque pharetra aliquet nibh bibendum vestibulum. Praesent mollis velit at dui venenatis, eu egestas neque suscipit. 
                        Maecenas et molestie augue, et rutrum augue. Aliquam mattis urna et nisi dignissim mattis.
                    </p>
                    <p class="text-[#052F4E] text-lg font-galano_regular">
                        Quisque pharetra aliquet nibh bibendum vestibulum. Praesent mollis velit at dui venenatis, eu egestas neque suscipit. 
                        Maecenas et molestie augue, et rutrum augue. Aliquam mattis urna et nisi dignissim mattis.
                    </p>
                </div>

            </div>
        </section>

        <section class="pt-12 xl:pt-16 px-[5%]">
            <div class="grid grid-cols-1 lg:grid-cols-2 w-full gap-12 xl:gap-16">
              
                <div class="flex flex-col justify-center gap-5 lg:gap-5 text-textWhite ">
                    <h1
                        class="text-[#052F4E] font-galano_bold tracking-tighter text-3xl md:text-5xl leading-none">
                        El resultado
                    </h1>
                    <p class="text-[#052F4E] text-lg font-galano_regular">
                        Quisque pharetra aliquet nibh bibendum vestibulum. Praesent mollis velit at dui venenatis, eu egestas neque suscipit. 
                        Maecenas et molestie augue, et rutrum augue. Aliquam mattis urna et nisi dignissim mattis.
                    </p>
                    <p class="text-[#052F4E] text-lg font-galano_regular">
                        Quisque pharetra aliquet nibh bibendum vestibulum. Praesent mollis velit at dui venenatis, eu egestas neque suscipit. 
                        Maecenas et molestie augue, et rutrum augue. Aliquam mattis urna et nisi dignissim mattis.
                    </p>
                </div>

                <div class="flex flex-col justify-center items-center">
                    <img src="{{ asset('images/imagen/cremosorse3.png') }}" class="object-contain aspect-square max-h-[500px] min-h-96" />
                </div>

            </div>
        </section>

        <section class="py-12 xl:py-16 grid grid-cols-1 lg:grid-cols-2 px-[5%] gap-10">
            <img class="w-full object-cover object-center h-[450px] md:h-[500px] col-span-2" src="{{asset('images/imagen/cremosorsefinal.png')}}"/>
            <img class="w-full object-cover object-center h-[450px] md:h-[500px]" src="{{asset('images/imagen/cremosorse.png')}}"/>
            <img class="w-full object-cover object-center h-[450px] md:h-[500px]" src="{{asset('images/imagen/cremosorse3.png')}}"/>
        </section>


        

    </main>


@section('scripts_importados')
<script>
 
    // Obtener información del navegador y del sistema operativo
    const platform = navigator.platform;
    document.getElementById('sistema').value = platform;

    // Obtener la geolocalización del usuario (si se permite)
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            document.getElementById('latitud').value = position.coords.latitude;
            document.getElementById('longitud').value = position.coords.longitude;
        });
    }

    // Obtener la página de referencia
    const referrer = document.referrer;
    document.getElementById('llegade').value = referrer;


    // Obtener la resolución de la pantalla
    const screenWidth = window.screen.width;
    const screenHeight = window.screen.height;
    document.getElementById('anchodispositivo').value = screenWidth;
    document.getElementById('largodispositivo').value = screenHeight;
</script>

@stop

@stop
