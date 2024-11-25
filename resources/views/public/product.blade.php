@extends('components.public.matrix', ['pagina' => 'catalogo'])

@section('titulo', 'Producto')
@section('meta_title', $meta_title)
@section('meta_description', $meta_description)
@section('meta_keywords', $meta_keywords)

@section('css_importados')
    <style>
        .active {
            border: 2px solid #FF5E14;
        }
        .styled-list {
            list-style-position: inside;
        }
        .custom-list {
            list-style-position: outside; 
            padding-left: 1.5em; 
        }

        .custom-list li {
            text-indent: -1.5em; 
            padding-left: 1.5em; 
        }
    </style>
@stop


@section('content')
    @php
        function capitalizeFirstLetter($string)
        {
            return ucfirst($string);
        }
    @endphp
    <main>
        <section class="w-full px-[5%] pt-10 lg:pt-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-16">
                
                <div class="flex flex-col justify-start items-center gap-5">
                    <div id="containerProductosdetail"
                        class="w-full flex justify-center items-center aspect-square overflow-hidden">
                        <img src="{{ asset($producto->imagen) }}" alt="computer" class="w-full h-full object-contain"
                            data-aos="fade-up" data-aos-offset="150"
                            onerror="this.onerror=null;this.src='/images/img/noimagen.jpg';">
                    </div>
                    <x-product-slider :product="$producto" />
                </div>    

                <div class="flex flex-col gap-2">
                    <h3 class="font-galano_medium text-base text-[#052F4E]">
                        Productos | Envase para helados | Envase para Helado 1 Lt Sin Impresión</h3>

                    <h2 id="nombreproducto" class="font-galano_semibold text-4xl lg:text-5xl text-[#052F4E]">
                            Envase para Helado 1 Lt Sin Impresión</h2>
                    
                   
                    <div class="text-[#052F4E] text-lg font-normal font-galano_regular flex flex-col gap-3">
                        <p>
                            Mauris a velit vitae mi mollis porta. Cras vitae tempor turpis, ac volutpat dolor. 
                            Ut at lectus justo. Vestibulum eu velit dictum, condimentum turpis in, volutpat diam. 
                            Nullam pulvinar, ligula et pharetra volutpat, neque nunc eleifend neque, quis finibus 
                            lorem purus vitae libero.
                        </p>
                        <p>
                            Mauris a velit vitae mi mollis porta. Cras vitae tempor turpis, ac volutpat dolor. 
                            Ut at lectus justo. Vestibulum eu velit dictum, condimentum turpis in, volutpat diam. 
                            Nullam pulvinar, ligula et pharetra volutpat, neque nunc eleifend neque, quis finibus 
                            lorem purus vitae libero.
                        </p>
                    </div>

                    <span id="stock" class="font-galano_semibold text-base text-[#052F4E] mt-2">
                        420 Unidades/Caja</span>
                    
                    <h2 class="font-galano_semibold text-4xl lg:text-5xl text-[#052F4E]">
                            S/.100.00</h2>

                    <div class="flex flex-row justify-start items-start mt-4">
                        <a href="#"
                            class="text-white py-3 px-6 bg-[#052F4E] rounded-xl font-galano_semibold text-center">
                            Comprar con un asesor
                        </a>
                    </div>
                </div>


                {{-- <div class="flex flex-col gap-5">
                    <div class="flex flex-col gap-5 pb-10 border-b-2 border-[#DDDDDD]" data-aos="fade-up"
                        data-aos-offset="150">
                        <h2 id="nombreproducto" class="font-roboto font-bold text-text40 text-[#082252]">
                            {{ $producto->producto }}</h2>


                        <p class="text-[#082252] text-text16 font-roboto font-normal">{{ $producto->extract }}</p>

                         @if (!is_null($producto->description))
                            <div class="flex flex-col gap-5 " data-aos="fade-up" data-aos-offset="150">
                                <div class="text-[#082252] text-text16 font-normal font-roboto flex flex-col gap-5">
                                    <p>
                                        {!! $producto->description !!}
                                    </p>
                                </div>
                            </div>
                        @endif

                        <div class="flex justify-between items-center text-white font-roboto font-bold text-text14 gap-5 pt-3"
                            data-aos="fade-up" data-aos-offset="150">
                        
                            @if ($producto->name_fichatecnica)
                                <a href="{{ asset($producto->url_fichatecnica . $producto->name_fichatecnica) }}" target="_blank" 
                                    class="cursor-pointer bg-[#FF5E14] flex justify-center items-center w-6/12 py-3 px-4 md:px-10 text-center gap-2 rounded-xl">
                                    <span>Ficha técnica</span>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="17" x="0" y="0"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                            class="">
                                            <g>
                                                <path
                                                    d="M382.56 233.376A15.96 15.96 0 0 0 368 224h-64V16c0-8.832-7.168-16-16-16h-64c-8.832 0-16 7.168-16 16v208h-64a16.013 16.013 0 0 0-14.56 9.376c-2.624 5.728-1.6 12.416 2.528 17.152l112 128A15.946 15.946 0 0 0 256 384c4.608 0 8.992-2.016 12.032-5.472l112-128c4.16-4.704 5.12-11.424 2.528-17.152z"
                                                    fill="#FFFFFF" opacity="1" data-original="#000000" class=""></path>
                                                <path
                                                    d="M432 352v96H80v-96H16v128c0 17.696 14.336 32 32 32h416c17.696 0 32-14.304 32-32V352h-64z"
                                                    fill="#FFFFFF" opacity="1" data-original="#000000" class=""></path>
                                            </g>
                                        </svg>
                                    </div>
                                </a>                    
                            @endif
                            
                            @if ($producto->name_docriesgo)
                                <a href="{{ asset($producto->url_docriesgo.$producto->name_docriesgo) }}" target="_blank" 
                                    class="cursor-pointer bg-[#FF5E14] flex justify-center items-center w-6/12 py-3 px-4 md:px-10 text-center gap-2 rounded-xl">
                                    <span>Hoja de seguridad</span>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="17" x="0" y="0"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                            class="">
                                            <g>
                                                <path
                                                    d="M382.56 233.376A15.96 15.96 0 0 0 368 224h-64V16c0-8.832-7.168-16-16-16h-64c-8.832 0-16 7.168-16 16v208h-64a16.013 16.013 0 0 0-14.56 9.376c-2.624 5.728-1.6 12.416 2.528 17.152l112 128A15.946 15.946 0 0 0 256 384c4.608 0 8.992-2.016 12.032-5.472l112-128c4.16-4.704 5.12-11.424 2.528-17.152z"
                                                    fill="#FFFFFF" opacity="1" data-original="#000000" class=""></path>
                                                <path
                                                    d="M432 352v96H80v-96H16v128c0 17.696 14.336 32 32 32h416c17.696 0 32-14.304 32-32V352h-64z"
                                                    fill="#FFFFFF" opacity="1" data-original="#000000" class=""></path>
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                            @endif

                        </div>

                        <div class="flex flex-col items-start justify-start text-white font-roboto font-bold text-text14 gap-5 w-1/2 w-full lg:w-1/2"
                            data-aos="fade-up" data-aos-offset="150">
                            
                            <h2 class="font-roboto font-bold text-text28 text-[#082252]">Obtén una cotización</h2>
                            <div class= "">
                                  <form  id="formProducto">
                                    @csrf
                                    <div class="flex flex-col gap-5">
                                        <div class="relative flex flex-col md:flex-row w-full gap-5"  >
                                            <input 
                                                required name="full_name" id="fullNameContacto" type="text" placeholder="Nombre completo"
                                                class="w-full  py-3 px-4 focus:outline-none font-roboto text-text16 text-[#082252] focus:ring-0 placeholder:text-[#082252] placeholder:text-opacity-40 border-[#082252] border-b transition-all focus:outline-0 border-t-0 border-l-0 border-r-0 focus:font-medium bg-transparent focus:bg-transparent focus:border-[#082252]" />
                                        </div>


                                        <input type="hidden" name="service_product" value="{{ $producto->producto }}"/>

                                         <div class="relative w-full" >
                                            <input  id="telefonoContacto" name="phone" placeholder="Teléfono" type="tel" maxlength="12" required
                                                    class="w-full  py-3 px-4 focus:outline-none font-roboto text-text16 text-[#082252] focus:ring-0 placeholder:text-[#082252] placeholder:text-opacity-40 border-[#082252] border-b transition-all focus:outline-0 border-t-0 border-l-0 border-r-0 focus:font-medium bg-transparent focus:bg-transparent focus:border-[#082252]" />
                                        </div>
                                        <div class="relative w-full" >
                                            <input type="email" name="email" placeholder="E-mail" required id="emailContacto"
                                                class="w-full py-3 px-4 focus:outline-none font-roboto text-text16 text-[#082252] focus:ring-0 placeholder:text-[#082252] placeholder:text-opacity-40 border-[#082252] border-b transition-all focus:outline-0 border-t-0 border-l-0 border-r-0 focus:font-medium bg-transparent focus:bg-transparent focus:border-[#082252]" />
                                        </div>

                                        <input type="hidden" id="tipo" placeholder="tipo" name="source" value="Producto" />

                                        <div class="relative w-full" >
                                            <textarea name="message" id="message" rows="2" cols="30"
                                                class="w-full py-3 px-4 focus:outline-none font-roboto text-text16 text-[#082252] focus:ring-0 placeholder:text-[#082252] placeholder:text-opacity-40 border-[#082252] border-b transition-all focus:outline-0 border-t-0 border-l-0 border-r-0 focus:font-medium bg-transparent focus:bg-transparent focus:border-[#082252]"
                                                placeholder="Mensaje"></textarea>
                                        </div>
                                        <input type="hidden" name="client_width" id="anchodispositivo">
                                        <input type="hidden" name="client_height" id="largodispositivo">
                                        <input type="hidden" name="client_latitude" id="latitud">
                                        <input type="hidden" name="client_longitude" id="longitud">
                                        <input type="hidden" name="client_system" id="sistema">
                                        <div class="flex justify-center items-center py-5" 
                                            >
                                            <button type="submit"
                                                class="text-text18 font-roboto font-semibold text-white bg-[#FF5E14] py-3 px-6 w-full text-center rounded-xl">Enviar
                                                solicitud</button>
                                        </div>
                                    </div>
                                </form>   
                            </div>
                            
                        </div>
                    </div>

                    <div class="pt-5" data-aos="fade-up" data-aos-offset="150">
                        @if (is_null($producto->categoria->name))
                        @else
                            <p class="font-roboto font-medium text-text14 text-[#082252]">
                                Categoría: <span
                                    class="text-[#565656] font-normal text-text14">{{ $producto->categoria->name }}</span>
                            </p>
                        @endif
                    </div>

                </div> --}}

            </div>
            @php
                $especificacionf = strip_tags($producto->especificacion);
                
            @endphp
                
            @if (!is_null($producto->especificacion) && $especificacionf !== '')
                <div class="flex flex-col gap-2 pt-10 md:pt-16" data-aos="fade-up" data-aos-offset="150">
                    <h3 class="font-roboto font-bold text-text28 text-[#082252]">Características técnicas</h3>
                    <div class="text-[#082252] text-text16 font-normal font-roboto flex flex-col ">
                        
                            {!! $producto->especificacion !!}
                        
                    </div>
                </div>
            @endif
            
                

            {{-- @if ($especificaciones->isEmpty())
            @else
                <div class="pt-10 md:pt-16 flex flex-col gap-5">
                    <h3 class="font-roboto font-bold text-text28 text-[#082252]">Características técnicas</h3>
                    <div class="mx-6" data-aos="fade-up" data-aos-offset="150">
                        <ul class="font-roboto font-normal text-text16 list-disc text-[#082252]">

                            @foreach ($especificaciones as $item)
                                <li><span class="font-semibold">{{ capitalizeFirstLetter($item->tittle) }}:</span>
                                    {{ capitalizeFirstLetter($item->specifications) }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif --}}
        </section>



        <section class="w-full px-[5%] pt-10 lg:pt-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-16">

                <div class="flex flex-col justify-center items-start gap-5">
                    <h2 id="nombreproducto" class="font-galano_semibold text-3xl lg:text-4xl text-[#052F4E]">
                        Información adicional</h2>

                    <div class="text-[#052F4E] text-lg font-normal font-galano_regular flex flex-col gap-3">
                        <p>
                            Suspendisse id pulvinar mi. Curabitur commodo neque eget felis mollis, ac sagittis quam pulvinar.
                        </p>
                    </div>

                    <div class="text-[#052F4E] flex flex-col gap-1">
                        <h2 class="text-2xl font-galano_medium font-medium">Peso</h2>
                        
                        <li class="text-base font-normal font-galano_regular">
                            Nullam pulvinar, ligula et pharetra volutpat, neque nunc eleifend neque.
                        </li>
                    </div>

                    <div class="text-[#052F4E] flex flex-col gap-1">
                        <h2 class="text-2xl font-galano_medium font-medium">Medidas</h2>
                        
                        <li class="text-base font-normal font-galano_regular">
                            Ancho boca 11,4 cm.
                        </li>

                        <li class="text-base font-normal font-galano_regular">
                            Alto 14,6 cm
                        </li>

                        <li class="text-base font-normal font-galano_regular">
                            Ancho base 9,4 cm
                        </li>
                    </div>

                    <div class="text-[#052F4E] flex flex-col gap-1">
                        <h2 class="text-2xl font-galano_medium font-medium">Opciones de uso</h2>
                        
                        <li class="text-base font-normal font-galano_regular">
                            Envase para Alimentos Sólidos y/o Líquidos viscosos
                        </li>

                        <li class="text-base font-normal font-galano_regular">
                            Paper food packaging
                        </li>

                        <li class="text-base font-normal font-galano_regular">
                            Una vez usados desechar, no reutilizable
                        </li>
                    </div>

                    
                </div>   
                
                <div class="flex flex-col gap-2">
                    <img class="w-full aspect-square object-contain" src="{{asset('images/imagen/medidascremoso.png')}}" />
                </div>

            </div>
        </section>


        <section>
            <div class="flex flex-col gap-10 w-full px-[5%] mt-10 lg:mt-20 py-10 lg:py-16 bg-[#EBEDEF]">
                <div class="flex flex-col xl:flex-row xl:justify-between items-start xl:items-center gap-5">
                    <div class="flex flex-col gap-2 max-w-4xl">
                        <h4 class="font-galano_bold text-text32 md:text-text40 text-[#082252] leading-none">Descubre Nuestras Categorías de Productos</h4>
                        <h3 class="text-[#082252] font-galano_regular font-normal text-lg">
                            Explora nuestra amplia variedad de suplementos para heladerías. Cada categoría está diseñada para ayudarte a crear helados únicos y deliciosos que sorprenderán a tus clientes.
                        </h3>
                    </div>
                    <div class="flex flex-row justify-start md:justify-center items-start">
                        <a href="#"
                            class="text-white py-3 px-6 bg-[#052F4E] rounded-xl font-galano_semibold text-center">
                            Ver todos los productos
                        </a>
                    </div>
                </div>
                <div class="w-full">  
                    <div class="swiper carruselproductos h-max">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="flex flex-col group relative">
                                    <a href="#">
                                        <div class="bg-white border-[1px] border-[#052F4E66] rounded-xl flex flex-row aspect-[17/20]">
                                            <div class="max-w-[340px] rounded-full flex flex-col items-center justify-center p-5 ">
                                                <img class="w-full h-full object-contain object-bottom rounded-full" src="{{ asset('images/imagen/productocremoso1.png') }}" />
                                            </div>
                                        </div>
                                    </a>
                                    <div class="flex flex-col justify-center items-center gap-1 mt-3">
                                        <div class="flex flex-col md:flex-row">
                                            <div class="flex flex-col w-full lg:w-2/3 gap-1">
                                                <a class="" href="#">  
                                                    <h2 class="font-galano_regular font-semibold text-[#052F4E] leading-5 text-base line-clamp-2">Envase para Helado 1 Lt Sin Impresión</h2>
                                                </a>
                                                <p class="font-galano_regular text-[#052F4E] text-sm line-clamp-2">
                                                    Envase para Alimentos Sólidos y/o Líquidos viscosos
                                                </p>  
                                            </div>
                                            <div class="flex flex-row lg:flex-col lg:justify-start items-center gap-2 lg:gap-0 lg:items-end w-full lg:w-1/3">
                                                <p class="font-galano_regular font-bold text-lg text-[#052F4E] text-start lg:text-end">S/ 122.00 </p>
                                                <p class="font-galano_regular text-sm line-through text-[#052F4E] text-start lg:text-end"> S/ 20.00</p>
                                            </div>   
                                        </div>
                                    </div>
                                    <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                        <a href="#"
                                            class="text-white text-sm md:text-base py-2 px-6 w-full bg-[#052F4E] rounded-xl font-galano_regular font-semibold text-center">
                                            Ver producto
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex flex-col group relative">
                                    <a href="#">
                                        <div class="bg-white border-[1px] border-[#052F4E66] rounded-xl flex flex-row aspect-[17/20]">
                                            <div class="max-w-[340px] rounded-full flex flex-col items-center justify-center p-5 ">
                                                <img class="w-full h-full object-contain object-bottom rounded-full" src="{{ asset('images/imagen/productocremoso1.png') }}" />
                                            </div>
                                        </div>
                                    </a>
                                    <div class="flex flex-col justify-center items-center gap-1 mt-3">
                                        <div class="flex flex-col md:flex-row">
                                            <div class="flex flex-col w-full lg:w-2/3 gap-1">
                                                <a class="" href="#">  
                                                    <h2 class="font-galano_regular font-semibold text-[#052F4E] leading-5 text-base line-clamp-2">Envase para Helado 1 Lt Sin Impresión</h2>
                                                </a>
                                                <p class="font-galano_regular text-[#052F4E] text-sm line-clamp-2">
                                                    Envase para Alimentos Sólidos y/o Líquidos viscosos
                                                </p>  
                                            </div>
                                            <div class="flex flex-row lg:flex-col lg:justify-start items-center gap-2 lg:gap-0 lg:items-end w-full lg:w-1/3">
                                                <p class="font-galano_regular font-bold text-lg text-[#052F4E] text-start lg:text-end">S/ 122.00 </p>
                                                <p class="font-galano_regular text-sm line-through text-[#052F4E] text-start lg:text-end"> S/ 20.00</p>
                                            </div>   
                                        </div>
                                    </div>
                                    <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                        <a href="#"
                                            class="text-white text-sm md:text-base py-2 px-6 w-full bg-[#052F4E] rounded-xl font-galano_regular font-semibold text-center">
                                            Ver producto
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex flex-col group relative">
                                    <a href="#">
                                        <div class="bg-white border-[1px] border-[#052F4E66] rounded-xl flex flex-row aspect-[17/20]">
                                            <div class="max-w-[340px] rounded-full flex flex-col items-center justify-center p-5 ">
                                                <img class="w-full h-full object-contain object-bottom rounded-full" src="{{ asset('images/imagen/productocremoso1.png') }}" />
                                            </div>
                                        </div>
                                    </a>
                                    <div class="flex flex-col justify-center items-center gap-1 mt-3">
                                        <div class="flex flex-col md:flex-row">
                                            <div class="flex flex-col w-full lg:w-2/3 gap-1">
                                                <a class="" href="#">  
                                                    <h2 class="font-galano_regular font-semibold text-[#052F4E] leading-5 text-base line-clamp-2">Envase para Helado 1 Lt Sin Impresión</h2>
                                                </a>
                                                <p class="font-galano_regular text-[#052F4E] text-sm line-clamp-2">
                                                    Envase para Alimentos Sólidos y/o Líquidos viscosos
                                                </p>  
                                            </div>
                                            <div class="flex flex-row lg:flex-col lg:justify-start items-center gap-2 lg:gap-0 lg:items-end w-full lg:w-1/3">
                                                <p class="font-galano_regular font-bold text-lg text-[#052F4E] text-start lg:text-end">S/ 122.00 </p>
                                                <p class="font-galano_regular text-sm line-through text-[#052F4E] text-start lg:text-end"> S/ 20.00</p>
                                            </div>   
                                        </div>
                                    </div>
                                    <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                        <a href="#"
                                            class="text-white text-sm md:text-base py-2 px-6 w-full bg-[#052F4E] rounded-xl font-galano_regular font-semibold text-center">
                                            Ver producto
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex flex-col group relative">
                                    <a href="#">
                                        <div class="bg-white border-[1px] border-[#052F4E66] rounded-xl flex flex-row aspect-[17/20]">
                                            <div class="max-w-[340px] rounded-full flex flex-col items-center justify-center p-5 ">
                                                <img class="w-full h-full object-contain object-bottom rounded-full" src="{{ asset('images/imagen/productocremoso1.png') }}" />
                                            </div>
                                        </div>
                                    </a>
                                    <div class="flex flex-col justify-center items-center gap-1 mt-3">
                                        <div class="flex flex-col md:flex-row">
                                            <div class="flex flex-col w-full lg:w-2/3 gap-1">
                                                <a class="" href="#">  
                                                    <h2 class="font-galano_regular font-semibold text-[#052F4E] leading-5 text-base line-clamp-2">Envase para Helado 1 Lt Sin Impresión</h2>
                                                </a>
                                                <p class="font-galano_regular text-[#052F4E] text-sm line-clamp-2">
                                                    Envase para Alimentos Sólidos y/o Líquidos viscosos
                                                </p>  
                                            </div>
                                            <div class="flex flex-row lg:flex-col lg:justify-start items-center gap-2 lg:gap-0 lg:items-end w-full lg:w-1/3">
                                                <p class="font-galano_regular font-bold text-lg text-[#052F4E] text-start lg:text-end">S/ 122.00 </p>
                                                <p class="font-galano_regular text-sm line-through text-[#052F4E] text-start lg:text-end"> S/ 20.00</p>
                                            </div>   
                                        </div>
                                    </div>
                                    <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                        <a href="#"
                                            class="text-white text-sm md:text-base py-2 px-6 w-full bg-[#052F4E] rounded-xl font-galano_regular font-semibold text-center">
                                            Ver producto
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex flex-col group relative">
                                    <a href="#">
                                        <div class="bg-white border-[1px] border-[#052F4E66] rounded-xl flex flex-row aspect-[17/20]">
                                            <div class="max-w-[340px] rounded-full flex flex-col items-center justify-center p-5 ">
                                                <img class="w-full h-full object-contain object-bottom rounded-full" src="{{ asset('images/imagen/productocremoso1.png') }}" />
                                            </div>
                                        </div>
                                    </a>
                                    <div class="flex flex-col justify-center items-center gap-1 mt-3">
                                        <div class="flex flex-col md:flex-row">
                                            <div class="flex flex-col w-full lg:w-2/3 gap-1">
                                                <a class="" href="#">  
                                                    <h2 class="font-galano_regular font-semibold text-[#052F4E] leading-5 text-base line-clamp-2">Envase para Helado 1 Lt Sin Impresión</h2>
                                                </a>
                                                <p class="font-galano_regular text-[#052F4E] text-sm line-clamp-2">
                                                    Envase para Alimentos Sólidos y/o Líquidos viscosos
                                                </p>  
                                            </div>
                                            <div class="flex flex-row lg:flex-col lg:justify-start items-center gap-2 lg:gap-0 lg:items-end w-full lg:w-1/3">
                                                <p class="font-galano_regular font-bold text-lg text-[#052F4E] text-start lg:text-end">S/ 122.00 </p>
                                                <p class="font-galano_regular text-sm line-through text-[#052F4E] text-start lg:text-end"> S/ 20.00</p>
                                            </div>   
                                        </div>
                                    </div>
                                    <div class="flex flex-row gap-1 mt-2 inset-0 items-end justify-center opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                        <a href="#"
                                            class="text-white text-sm md:text-base py-2 px-6 w-full bg-[#052F4E] rounded-xl font-galano_regular font-semibold text-center">
                                            Ver producto
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>    
            </div>
        </section>



        {{-- @if ($ProdComplementarios->isEmpty())
        @else
            <section class="bg-[#F7F8F8] py-20 mt-10 md:mt-16">
                <div class="grid grid-cols-1 md:grid-cols-3 w-11/12 mx-auto gap-5">
                    @foreach ($ProdComplementarios->take(3) as $complemento)
                        <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                            <div class="flex justify-center items-center">
                                <a href="{{ route('producto', $complemento->id) }}" class="w-full"><img
                                        src="{{ asset($complemento->imagen) }}" alt="planta de tratmiento de agua"
                                        class="w-full object-cover rounded-lg h-full"></a>
                            </div>
                            <div class="flex flex-col gap-2">
                                @if ($complemento->categoria && $complemento->categoria->name)
                                    <h3 class="text-[#FF5E14] uppercase font-roboto font-bold text-text12">
                                        {{ $complemento->categoria->name }}
                                    </h3>
                                @endif
                                <a href="{{ route('producto', $complemento->id) }}">
                                    <h2 class="text-[#082252] font-bold font-roboto text-text24 leading-tight">
                                        {{ $complemento->producto }}</h2>
                                </a>
                                <p class="font-roboto font-normal text-text16 text-[#082252]">
                                    {{ Str::limit($complemento->extract, 220) }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif --}}



    </main>

@section('scripts_importados')
    <script>
        var swiper = new Swiper(".carruselproductos", {
            slidesPerView: 4,
            spaceBetween: 20,
            loop: true,
            grabCursor: true,
            centeredSlides: false,
            initialSlide: 0,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination-carruseltop",
                clickable: true,
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                650: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1350: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
            },
        });
    </script>

    <script>
        const principal = document.querySelector('.principal');
        const secundarios = document.querySelectorAll('.secundario');

        secundarios.forEach(item => {
            item.addEventListener('click', function() {
                const active = document.querySelector('.active');
                active.classList.remove('active');
                this.classList.add('active');
                principal.src = this.src;
            })
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#chatonline').click(function() {

                function isMobile() {
                    if (sessionStorage.desktop)
                        return false;
                    else if (localStorage.mobile)
                        return true;
                    var mobile = ['iphone', 'ipad', 'android', 'blackberry', 'nokia', 'opera mini',
                        'windows mobile', 'windows phone', 'iemobile'
                    ];
                    for (var i in mobile)
                        if (navigator.userAgent.toLowerCase().indexOf(mobile[i].toLowerCase()) > 0)
                            return true;
                    return false;
                }

                setTimeout(function() {

                    telefono2 = '51992262598';
                    nombre2 = $('#nombreproducto').text();
                    mensaje2 = 'send?phone=' + telefono2 +
                        '&text=Hola, quiero comunicarme con un asesor.%0AEstoy interesad@ en el producto *' +
                        nombre2 + '*.';

                    if (isMobile()) {
                        window.open('https://api.whatsapp.com/' + mensaje2, '_blank');
                    } else {
                        window.open('https://web.whatsapp.com/' + mensaje2, '_blank');
                    }
                }, 200);
            });
        });
    </script>
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
