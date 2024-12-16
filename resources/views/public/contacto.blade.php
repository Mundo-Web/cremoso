@extends('components.public.matrix', ['pagina'=>'contacto'])
@section('titulo', 'Contacto')
@section('css_importados')

@stop


@section('content')
    <main>

        <section class="px-[5%] pt-12 xl:pt-16">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-5">
                <div class="lg:col-span-4 flex flex-col gap-2 max-w-3xl">
                    <h2 class="text-[#052F4E] font-maille text-4xl md:text-5xl leading-none text-left ">
                        Ponte en contacto con nosotros. Estamos aquí para ayudarte.
                    </h2>
                    <p class="text-[#052F4E] font-galano_regular text-lg text-left ">
                        Si tienes alguna duda o necesitas más información sobre nuestros productos, no dudes en contactarnos.
                        Nuestro equipo está listo para brindarte la atención que necesitas y ayudarte a llevar tu heladería al siguiente nivel.
                    </p>
                </div>
                <div class="lg:col-span-1 flex flex-row lg:flex-col gap-4 lg:gap-2 max-w-3xl justify-center items-end">
                   <div class="flex">
                    <div class=" p-2 rounded-full border border-[#052F4E] w-auto">
                        <img class="w-5 h-5 rounded-full object-cover aspect-square" src="{{ asset('images/imagen/facecremoso.png') }}"/>
                    </div>
                   </div>

                   <div class="flex">
                    <div class=" p-2 rounded-full border border-[#052F4E] w-auto">
                        <img class="w-5 h-5 rounded-full object-cover aspect-square" src="{{ asset('images/imagen/instacremoso.png') }}"/>
                    </div>
                   </div>

                   <div class="flex">
                    <div class=" p-2 rounded-full border border-[#052F4E] w-auto">
                        <img class="w-5 h-5 rounded-full object-cover aspect-square" src="{{ asset('images/imagen/linkedcremoso.png') }}"/>
                    </div>
                   </div>

                   <div class="flex">
                    <div class=" p-2 rounded-full border border-[#052F4E] w-auto">
                        <img class="w-5 h-5 rounded-full object-cover aspect-square" src="{{ asset('images/imagen/twicremoso.png') }}"/>
                    </div>
                   </div>

                </div>

            </div>
        </section>


        <section class="px-[5%] pt-12 xl:pt-16">
            <form id="formContactos">
             @csrf
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <div>
                        <input name="full_name" id="fullNameContacto" type="text" class="text-[#052F4E] font-galano_regular font-semibold text-base focus:ring-0 focus:border-b 
                        border-x-0 border-t-0 border-b border-[#052F4E] w-full" placeholder="Nombre completo"/>
                    </div>

                    <div>
                        <input name="email" id="emailContacto" type="text" class="text-[#052F4E] font-galano_regular font-semibold text-base focus:ring-0 focus:border-b 
                        border-x-0 border-t-0 border-b border-[#052F4E] w-full" placeholder="Correo electrónico"/>
                    </div>

                    <div>
                        <input type="tel" name="phone" id="telefonoContacto" maxlength="12" class="text-[#052F4E] font-galano_regular font-semibold text-base focus:ring-0 focus:border-b 
                        border-x-0 border-t-0 border-b border-[#052F4E] w-full" placeholder="Número de teléfono (opcional)"/>
                    </div>

                    <div class="md:col-span-3">
                        <textarea name="message" id="message" cols="30" rows="3" placeholder="ingresa el mensaje"
                         class=" text-[#052F4E] font-galano_regular font-semibold text-base focus:ring-0 focus:border-b border-x-0 border-t-0 border-b border-[#052F4E] w-full" placeholder="Ingresa tu mensaje">

                        </textarea>
                    </div>

                    <div class="flex flex-row justify-start items-start">
                        <a href="#" 
                            class="text-white py-3 px-6 bg-[#052F4E] rounded-xl text-base font-galano_light font-semibold text-left">
                            Déjanos un mensaje
                        </a>
                    </div>
                </div>
            </form>
        </section>


        <section>
            <div class="flex flex-col gap-10 w-full px-[5%] py-10 md:py-20 bg-[#EBEDEF] mt-10 md:mt-20">
                
                <div class="grid grid-cols-1 lg:grid-cols-5 gap-5 lg:gap-0">
                    
                    <div class="lg:col-span-2 flex flex-col justify-center">

                        <div class="flex flex-col p-2 justify-center items-start gap-8">
                            <h2 class="text-[#052F4E] text-lg font-galano_regular">
                                Información de contacto
                            </h2>
                            <h2 class="text-[#052F4E] text-4xl md:text-5xl font-maille leading-none">Siempre estaremos
                                encantados de ayudarle.</h2>
                        </div>

                    </div>

                    <div class="lg:col-span-1 flex flex-col gap-10 justify-center items-start">
                        <div class="flex flex-col">
                            <h2 class="text-[#052F4E] text-xl font-galano_medium leading-none">Correo electrónico</h2>
                            <div class="h-[2px] w-20 bg-[#C69671] my-2"></div>
                            <h2 class="text-[#052F4E] text-xl font-galano_medium leading-none">info@mrcremoso.com</h2>
                            <p class="text-[#052F4E] text-sm font-galano_regular mt-1">Horario de atención:
                                De lunes a viernes de 9 am a 6 pm</p> 
                        </div>
                        <div class="flex flex-col">
                            <h2 class="text-[#052F4E] text-xl font-galano_medium leading-none">Teléfonos</h2>
                            <div class="h-[2px] w-20 bg-[#C69671] my-2"></div>
                            <h2 class="text-[#052F4E] text-xl font-galano_medium leading-none">(+51) 990 873 923</h2>
                            <p class="text-[#052F4E] text-sm font-galano_regular mt-1">Horario de atención:
                                De lunes a viernes de 9 am a 6 pm</p> 
                        </div>
                    </div>

                    <div class="lg:col-span-2 flex flex-col sm:flex-row gap-5 sm:gap-10 lg:flex-col justify-around items-start lg:items-end">
                        <img class="h-96 md:h-[350px] w-auto object-contain object-center" src="{{asset('images/imagen/imagenmapa.png')}}" />
                    </div>
                    
                </div>

            </div>
        </section>






        {{-- <section class="bg-white pt-52">
            <div class="w-11/12 mx-auto grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="flex flex-col gap-5 pb-10 md:pb-5">
                    <div class="flex flex-col gap-1">
                        <h3 class="font-roboto font-bold text-text48 text-[#082252]">Hablemos Hoy</h3>
                        <p class="text-[#082252] text-text18 font-roboto font-normal">
                            Ponte en contacto con nosotros para obtener soluciones personalizadas de tratamiento de agua.
                        </p>
                    </div>

                    <div>
                        <form id="formContactos" class="flex flex-col gap-5">
                            @csrf
                            <div class="flex flex-col justify-start gap-1" data-aos="fade-up" data-aos-duration="150">
                                <label for="full_name" class="text-[#082252] font-roboto font-normal text-text14">Nombre
                                    Completo</label>
                                <input required type="text" name="full_name" id="fullNameContacto" placeholder="Nombre Completo"
                                    class="font-roboto font-normal text-text16 placeholder:text-[#082252] placeholder:font-medium py-3 px-5 w-full bg-white border border-[#E6E4E5] focus:outline-0 focus:ring-0 transition-all text-[#082252] placeholder:text-opacity-40 focus:border-[#E6E4E5] rounded-xl">
                            </div>

                            <div class="flex flex-col justify-start gap-1" data-aos="fade-up" data-aos-duration="150">
                                <label for="email" class="text-[#082252] font-roboto font-normal text-text14">Correo
                                    Electrónico</label>
                                <input required type="email" name="email" id="emailContacto" placeholder="hola@gmail.com"
                                    class="font-roboto font-normal text-text16 placeholder:text-[#082252] placeholder:font-medium py-3 px-5 w-full bg-white border border-[#E6E4E5] focus:outline-0 focus:ring-0 transition-all text-[#082252] placeholder:text-opacity-40 focus:border-[#E6E4E5] rounded-xl">
                            </div>

                            <div class="flex flex-col justify-start gap-1" data-aos="fade-up" data-aos-duration="150">
                                <label for="telf" class="text-[#082252] font-roboto font-normal text-text14">Teléfono</label>
                                <input type="tel" name="phone" id="telefonoContacto" maxlength="12" placeholder="Teléfono"  required
                                    class="font-roboto font-normal text-text16 placeholder:text-[#082252] placeholder:font-medium py-3 px-5 w-full bg-white border border-[#E6E4E5] focus:outline-0 focus:ring-0 transition-all text-[#082252] placeholder:text-opacity-40 focus:border-[#E6E4E5] rounded-xl">
                            </div>

                            <div class="flex flex-col justify-start gap-1" data-aos="fade-up" data-aos-duration="150">
                                <label for="message" class="text-[#082252] font-roboto font-normal text-text14">Mensaje</label>
                                <textarea name="message" id="message" cols="30" rows="3" placeholder="Hola ..."
                                    class="font-roboto font-normal text-text16 placeholder:text-[#082252] placeholder:font-medium py-3 px-5 w-full bg-white border border-[#E6E4E5] focus:outline-0 focus:ring-0 transition-all text-[#082252] placeholder:text-opacity-40 focus:border-[#E6E4E5] rounded-xl"></textarea>
                            </div>

                            <input type="hidden" id="tipo" placeholder="tipo" name="source" value="Contacto" />
                            <input type="hidden" name="client_width" id="anchodispositivo">
                            <input type="hidden" name="client_height" id="largodispositivo">
                            <input type="hidden" name="client_latitude" id="latitud">
                            <input type="hidden" name="client_longitude" id="longitud">
                            <input type="hidden" name="client_system" id="sistema">

                            <div class="flex justify-start items-center pt-5" data-aos="fade-up" data-aos-duration="150">
                                <button type="submit"
                                    class="bg-[#FF5E14] text-white font-roboto font-bold text-text16 py-3 px-5 rounded-xl">
                                    Enviar mensaje
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="flex justify-center items-start">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.558014709529!2d-77.05893329999999!3d-11.935816800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d123f4bc6baf%3A0xe43079ef49fcf9b3!2sHPI!5e0!3m2!1ses!2spe!4v1718064498652!5m2!1ses!2spe" class="w-full h-72 md:h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
                    <img src="{{ asset('images/img/image_60.png') }}" alt="ubicacion" class="w-full object-cover h-[588px] hidden md:block rounded-xl">
                    <img src="{{ asset('images/img/image_61.png') }}" alt="ubicacion" class="w-full object-cover h-[588px] block md:hidden rounded-xl">
                </div>
            </div>
        </section> --}}
          {{-- @php
                $contactosAgrupados = $contactos->groupBy('categoria_id');
          @endphp       --}}
        {{-- <section>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 w-11/12 mx-auto gap-8 py-20">
                <div class="flex flex-col gap-3 bg-[#F7F8F8] rounded-xl p-6" data-aos="fade-up" data-aos-duration="150">
                    <div class="flex justify-start items-center">
                        <img src="{{asset('images/svg/image_39.svg')}}" alt="email">
                    </div>

                    <div class="flex flex-col gap-2">
                        <p class="text-[#082252] font-roboto font-bold text-text32">Email</p>
                        <p class="text-[#082252] font-roboto font-normal text-text16 mb-2">Escríbenos para recibir atención personalizada y resolver tus dudas.</p>
                        <p class="text-[#FF5E14] font-roboto font-normal text-text16 underline">{{$general[0]->email}}</p>
                        @foreach($contactosAgrupados as $categoria_id => $contactos)
                            <div><h2 class="font-roboto font-semibold text-lg text-[#FF5E14] mb-1">{{ $contactos->first()->categoria->name }}</h2></div>
                            @foreach($contactos as $contacto)
                                <div><span class="font-roboto font-semibold text-base text-[#082252] normal-case">
                                {{$contacto->nombre}}</span>: 
                                <span class="font-roboto text-text14 text-[#082252] font-normal">{{$contacto->email}}</span> 
                                </div>
                            @endforeach
                            <div class="mb-3"></div>
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col gap-3 bg-[#F7F8F8] rounded-xl p-6" data-aos="fade-up" data-aos-duration="150">
                    <div class="flex justify-start items-center">
                        <img src="{{asset('images/svg/image_40.svg')}}" alt="email">
                    </div>

                    <div class="flex flex-col gap-2">
                        <p class="text-[#082252] font-roboto font-bold text-text32">Teléfono</p>
                        <p class="text-[#082252] font-roboto font-normal text-text16 mb-2">Llámanos para obtener soporte inmediato y asistencia profesional.</p>
                       
                                                    
                        @foreach($contactosAgrupados as $categoria_id => $contactos)
                            <div><h2 class="font-roboto font-semibold text-lg text-[#FF5E14] mb-1">{{ $contactos->first()->categoria->name }}</h2></div>
                            @foreach($contactos as $contacto)
                                <div><span class="font-roboto font-semibold text-base text-[#082252] normal-case">
                                {{$contacto->nombre}}</span>: 
                                <span class="font-roboto text-text14 text-[#082252] font-normal">{{$contacto->celular}}</span> 
                                </div>
                            @endforeach
                            <div class="mb-3"></div>
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col gap-3 bg-[#F7F8F8] rounded-xl p-6" data-aos="fade-up" data-aos-duration="150">
                    <div class="flex justify-start items-center">
                        <img src="{{asset('images/svg/image_41.svg')}}" alt="email">
                    </div>

                    <div class="flex flex-col gap-2">
                        <p class="text-[#082252] font-roboto font-bold text-text32">Oficina</p>
                        <p class="text-[#082252] font-roboto font-normal text-text16">Visítanos en nuestra oficina para conocer nuestras soluciones de tratamiento de agua en persona.</p>
                        <a @if (!is_null($general[0]->mapa))
                            href="{{$general[0]->mapa}}" 
                            @endif target="_blank"><p class="text-[#FF5E14] font-roboto font-normal text-text16 underline">{{$general[0]->address}}, {{$general[0]->inside}}, {{$general[0]->district}} - {{$general[0]->city}}</p></a>
                    </div>
                </div>
            </div>
        </section> --}}
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
