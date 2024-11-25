@extends('components.public.matrix', ['pagina' => 'catalogo'])
@section('titulo', 'Productos')
@section('css_importados')
    <style>
        .selected {
            background-color: #245BC8 !important;
        }
    </style>
    <style>
        /* .testimonios .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            height: calc((100% - 30px) / 2) !important;
            display: flex;
            justify-content: center;
            align-items: center;
        } */

       .swiper-pagination_productos .swiper-pagination-bullet {
            width: 14px;
            height: 8px;
            border-radius: 6px;
            background-color: #ffffff !important;
           
        }

        .swiper-pagination_productos .swiper-pagination-bullet:not(.swiper-pagination-bullet-active) {
            background-color: rgba(255, 255, 255, 0.24)!important;
            
            opacity: 1;
        }

        .swiper-pagination-carruseltop .swiper-pagination-bullet {
            width: 14px;
            height: 8px;
            border-radius: 6px;
            background-color: #052F4E !important;
           
        }

        .swiper-pagination-carruseltop .swiper-pagination-bullet:not(.swiper-pagination-bullet-active) {
            background-color: #05304e56!important;
            
            opacity: 1;
        }

       
    </style>
@stop


@section('content')

    <main>

        <section>
            <div class="flex flex-col gap-10 w-full px-[5%] pt-10 md:pt-20">
                <div class="flex flex-col xl:flex-row xl:justify-between items-start xl:items-center gap-5">
                    <div class="flex flex-col gap-2 max-w-4xl">
                        <h4 class="font-galano_bold text-text32 md:text-text40 text-[#082252] leading-none">Descubre Nuestras Categorías de Productos</h4>
                        <h3 class="text-[#082252] font-galano_regular font-normal text-lg">
                            Explora nuestra amplia variedad de suplementos para heladerías. Cada categoría está diseñada para ayudarte a crear helados únicos y deliciosos que sorprenderán a tus clientes.
                        </h3>
                    </div>
                </div>    
                <div class="w-full">  
                    <div class="swiper carruseltop h-max">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide group">
                                <div class="flex flex-col justify-center px-10 py-8 relative bg-[#EBEDEF] rounded-xl min-h-[210px] max-w-[300px] mx-auto transition-all duration-300 ease-in-out group-hover:bg-[#052F4E]">  
                                    <div class="flex flex-row w-full bottom-5">
                                        <div class="flex flex-col gap-4 justify-center items-center w-full">
                                            <svg class="transition-all duration-300 ease-in-out " xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65" fill="none">
                                                <path class="group-hover:stroke-white" d="M20.5 32.6582L22.7051 39.8467C26.6886 52.8321 28.6803 59.3249 32.5 59.3249C36.3197 59.3249 38.3115 52.8321 42.2949 39.8467L44.5 32.6582" stroke="#052F4E" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path class="group-hover:stroke-white" d="M32.5026 23.7719C32.5026 25.3633 32.9418 26.857 33.7109 28.1491M33.7109 28.1491C31.7487 30.8736 28.4559 32.6608 24.7248 32.6608C18.7111 32.6608 13.8359 28.0179 13.8359 22.2904C13.8359 17.2682 17.5846 13.0797 22.5624 12.1245C24.2644 8.51105 28.0749 5.99414 32.5026 5.99414C38.0277 5.99414 42.5914 9.91299 43.297 14.9913M33.7109 28.1491C35.3143 30.8429 38.3522 32.6608 41.8359 32.6608C46.9906 32.6608 51.1693 28.6811 51.1693 23.7719C51.1693 19.3361 47.7575 15.6591 43.297 14.9913M43.297 14.9913C43.3594 15.4406 43.3914 15.899 43.3914 16.3645C43.3914 17.955 43.0154 19.4619 42.3437 20.809" stroke="#052F4E" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <h2 class="text-[#052F4E] font-galano_semibold text-2xl text-center max-w-[200px] mx-auto line-clamp-2 transition-all duration-300 ease-in-out group-hover:text-white">
                                                Categoria de productos 
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide group">
                                <div class="flex flex-col justify-center px-10 py-8 relative bg-[#EBEDEF] rounded-xl min-h-[210px] max-w-[300px] mx-auto transition-all duration-300 ease-in-out group-hover:bg-[#052F4E]">  
                                    <div class="flex flex-row w-full bottom-5">
                                        <div class="flex flex-col gap-4 justify-center items-center w-full">
                                            <svg class="transition-all duration-300 ease-in-out " xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65" fill="none">
                                                <path class="group-hover:stroke-white" d="M20.5 32.6582L22.7051 39.8467C26.6886 52.8321 28.6803 59.3249 32.5 59.3249C36.3197 59.3249 38.3115 52.8321 42.2949 39.8467L44.5 32.6582" stroke="#052F4E" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path class="group-hover:stroke-white" d="M32.5026 23.7719C32.5026 25.3633 32.9418 26.857 33.7109 28.1491M33.7109 28.1491C31.7487 30.8736 28.4559 32.6608 24.7248 32.6608C18.7111 32.6608 13.8359 28.0179 13.8359 22.2904C13.8359 17.2682 17.5846 13.0797 22.5624 12.1245C24.2644 8.51105 28.0749 5.99414 32.5026 5.99414C38.0277 5.99414 42.5914 9.91299 43.297 14.9913M33.7109 28.1491C35.3143 30.8429 38.3522 32.6608 41.8359 32.6608C46.9906 32.6608 51.1693 28.6811 51.1693 23.7719C51.1693 19.3361 47.7575 15.6591 43.297 14.9913M43.297 14.9913C43.3594 15.4406 43.3914 15.899 43.3914 16.3645C43.3914 17.955 43.0154 19.4619 42.3437 20.809" stroke="#052F4E" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <h2 class="text-[#052F4E] font-galano_semibold text-2xl text-center max-w-[200px] mx-auto line-clamp-2 transition-all duration-300 ease-in-out group-hover:text-white">
                                                Categoria de productos 
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide group">
                                <div class="flex flex-col justify-center px-10 py-8 relative bg-[#EBEDEF] rounded-xl min-h-[210px] max-w-[300px] mx-auto transition-all duration-300 ease-in-out group-hover:bg-[#052F4E]">  
                                    <div class="flex flex-row w-full bottom-5">
                                        <div class="flex flex-col gap-4 justify-center items-center w-full">
                                            <svg class="transition-all duration-300 ease-in-out " xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65" fill="none">
                                                <path class="group-hover:stroke-white" d="M20.5 32.6582L22.7051 39.8467C26.6886 52.8321 28.6803 59.3249 32.5 59.3249C36.3197 59.3249 38.3115 52.8321 42.2949 39.8467L44.5 32.6582" stroke="#052F4E" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path class="group-hover:stroke-white" d="M32.5026 23.7719C32.5026 25.3633 32.9418 26.857 33.7109 28.1491M33.7109 28.1491C31.7487 30.8736 28.4559 32.6608 24.7248 32.6608C18.7111 32.6608 13.8359 28.0179 13.8359 22.2904C13.8359 17.2682 17.5846 13.0797 22.5624 12.1245C24.2644 8.51105 28.0749 5.99414 32.5026 5.99414C38.0277 5.99414 42.5914 9.91299 43.297 14.9913M33.7109 28.1491C35.3143 30.8429 38.3522 32.6608 41.8359 32.6608C46.9906 32.6608 51.1693 28.6811 51.1693 23.7719C51.1693 19.3361 47.7575 15.6591 43.297 14.9913M43.297 14.9913C43.3594 15.4406 43.3914 15.899 43.3914 16.3645C43.3914 17.955 43.0154 19.4619 42.3437 20.809" stroke="#052F4E" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <h2 class="text-[#052F4E] font-galano_semibold text-2xl text-center max-w-[200px] mx-auto line-clamp-2 transition-all duration-300 ease-in-out group-hover:text-white">
                                                Categoria de productos 
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide group">
                                <div class="flex flex-col justify-center px-10 py-8 relative bg-[#EBEDEF] rounded-xl min-h-[210px] max-w-[300px] mx-auto transition-all duration-300 ease-in-out group-hover:bg-[#052F4E]">  
                                    <div class="flex flex-row w-full bottom-5">
                                        <div class="flex flex-col gap-4 justify-center items-center w-full">
                                            <svg class="transition-all duration-300 ease-in-out " xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65" fill="none">
                                                <path class="group-hover:stroke-white" d="M20.5 32.6582L22.7051 39.8467C26.6886 52.8321 28.6803 59.3249 32.5 59.3249C36.3197 59.3249 38.3115 52.8321 42.2949 39.8467L44.5 32.6582" stroke="#052F4E" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path class="group-hover:stroke-white" d="M32.5026 23.7719C32.5026 25.3633 32.9418 26.857 33.7109 28.1491M33.7109 28.1491C31.7487 30.8736 28.4559 32.6608 24.7248 32.6608C18.7111 32.6608 13.8359 28.0179 13.8359 22.2904C13.8359 17.2682 17.5846 13.0797 22.5624 12.1245C24.2644 8.51105 28.0749 5.99414 32.5026 5.99414C38.0277 5.99414 42.5914 9.91299 43.297 14.9913M33.7109 28.1491C35.3143 30.8429 38.3522 32.6608 41.8359 32.6608C46.9906 32.6608 51.1693 28.6811 51.1693 23.7719C51.1693 19.3361 47.7575 15.6591 43.297 14.9913M43.297 14.9913C43.3594 15.4406 43.3914 15.899 43.3914 16.3645C43.3914 17.955 43.0154 19.4619 42.3437 20.809" stroke="#052F4E" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <h2 class="text-[#052F4E] font-galano_semibold text-2xl text-center max-w-[200px] mx-auto line-clamp-2 transition-all duration-300 ease-in-out group-hover:text-white">
                                                Categoria de productos 
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide group">
                                <div class="flex flex-col justify-center px-10 py-8 relative bg-[#EBEDEF] rounded-xl min-h-[210px] max-w-[300px] mx-auto transition-all duration-300 ease-in-out group-hover:bg-[#052F4E]">  
                                    <div class="flex flex-row w-full bottom-5">
                                        <div class="flex flex-col gap-4 justify-center items-center w-full">
                                            <svg class="transition-all duration-300 ease-in-out " xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65" fill="none">
                                                <path class="group-hover:stroke-white" d="M20.5 32.6582L22.7051 39.8467C26.6886 52.8321 28.6803 59.3249 32.5 59.3249C36.3197 59.3249 38.3115 52.8321 42.2949 39.8467L44.5 32.6582" stroke="#052F4E" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path class="group-hover:stroke-white" d="M32.5026 23.7719C32.5026 25.3633 32.9418 26.857 33.7109 28.1491M33.7109 28.1491C31.7487 30.8736 28.4559 32.6608 24.7248 32.6608C18.7111 32.6608 13.8359 28.0179 13.8359 22.2904C13.8359 17.2682 17.5846 13.0797 22.5624 12.1245C24.2644 8.51105 28.0749 5.99414 32.5026 5.99414C38.0277 5.99414 42.5914 9.91299 43.297 14.9913M33.7109 28.1491C35.3143 30.8429 38.3522 32.6608 41.8359 32.6608C46.9906 32.6608 51.1693 28.6811 51.1693 23.7719C51.1693 19.3361 47.7575 15.6591 43.297 14.9913M43.297 14.9913C43.3594 15.4406 43.3914 15.899 43.3914 16.3645C43.3914 17.955 43.0154 19.4619 42.3437 20.809" stroke="#052F4E" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <h2 class="text-[#052F4E] font-galano_semibold text-2xl text-center max-w-[200px] mx-auto line-clamp-2 transition-all duration-300 ease-in-out group-hover:text-white">
                                                Categoria de productos 
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination-carruseltop !flex justify-center py-3 mt-3"></div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="flex flex-col gap-10 w-full px-[5%] py-10 md:py-20">
                <div class="w-full">  
                    <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-y-5 gap-x-8">
                        
                            <div class="flex flex-col group relative">
                                <a href="#">
                                    <div class="bg-[#F2F5F7] border-[2px] border-[#052F4E66] rounded-xl flex flex-row aspect-[17/20]">
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


                            <div class="flex flex-col group relative">
                                <a href="#">
                                    <div class="bg-[#F2F5F7] border-[2px] border-[#052F4E66] rounded-xl flex flex-row aspect-[17/20]">
                                        <div class="max-w-[340px] rounded-full flex flex-col items-center justify-center p-5 ">
                                            <img class="w-full h-full object-contain object-bottom rounded-full" src="{{ asset('images/imagen/productocremoso2.png') }}" />
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


                            <div class="flex flex-col group relative">
                                <a href="#">
                                    <div class="bg-[#F2F5F7] border-[2px] border-[#052F4E66] rounded-xl flex flex-row aspect-[17/20]">
                                        <div class="max-w-[340px] rounded-full flex flex-col items-center justify-center p-5 ">
                                            <img class="w-full h-full object-contain object-bottom rounded-full" src="{{ asset('images/imagen/productocremoso3.png') }}" />
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

                            <div class="flex flex-col group relative">
                                <a href="#">
                                    <div class="bg-[#F2F5F7] border-[2px] border-[#052F4E66] rounded-xl flex flex-row aspect-[17/20]">
                                        <div class="max-w-[340px] rounded-full flex flex-col items-center justify-center p-5 ">
                                            <img class="w-full h-full object-contain object-bottom rounded-full" src="{{ asset('images/imagen/productocremoso4.png') }}" />
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

                            <div class="flex flex-col group relative">
                                <a href="#">
                                    <div class="bg-[#F2F5F7] border-[2px] border-[#052F4E66] rounded-xl flex flex-row aspect-[17/20]">
                                        <div class="max-w-[340px] rounded-full flex flex-col items-center justify-center p-5 ">
                                            <img class="w-full h-full object-contain object-bottom rounded-full" src="{{ asset('images/imagen/productocremoso5.png') }}" />
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

                            <div class="flex flex-col group relative">
                                <a href="#">
                                    <div class="bg-[#F2F5F7] border-[2px] border-[#052F4E66] rounded-xl flex flex-row aspect-[17/20]">
                                        <div class="max-w-[340px] rounded-full flex flex-col items-center justify-center p-5 ">
                                            <img class="w-full h-full object-contain object-bottom rounded-full" src="{{ asset('images/imagen/productocremoso6.png') }}" />
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

                            <div class="flex flex-col group relative">
                                <a href="#">
                                    <div class="bg-[#F2F5F7] border-[2px] border-[#052F4E66] rounded-xl flex flex-row aspect-[17/20]">
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

                            <div class="flex flex-col group relative">
                                <a href="#">
                                    <div class="bg-[#F2F5F7] border-[2px] border-[#052F4E66] rounded-xl flex flex-row aspect-[17/20]">
                                        <div class="max-w-[340px] rounded-full flex flex-col items-center justify-center p-5 ">
                                            <img class="w-full h-full object-contain object-bottom rounded-full" src="{{ asset('images/imagen/productocremoso2.png') }}" />
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
        </section>

        {{-- <section >
            
            <div class="bg-[#F7F8F8] pb-20">
                <div class="w-11/12 md:w-10/12 mx-auto">
                    <div class="flex flex-col items-center text-center pt-20 pb-20 gap-5">
                        <div class="flex flex-col gap-2 w-full md:max-w-[850px]" data-aos="fade-up" data-aos-offset="150">
                            <h3
                                class="text-[#082252] font-roboto font-bold text-text48 md:text-text56 leading-tight text-center">
                                Descubre Nuestra Gama de Soluciones</h3>
                            <p class="font-roboto font-normal text-text18 text-[#082252] text-center">
                                Explora nuestra selección de productos innovadores y eficientes para el tratamiento de agua,
                                diseñados para satisfacer tus necesidades industriales y residenciales
                            </p>
                        </div>

                        <div class="relative w-full md:max-w-[450px] pb-8 lg:py-0">
                            <input type="text" placeholder="Buscar" id="buscarproducto2"
                                class="w-full md:max-w-[450px] pl-8 pr-10 py-2 border border-[#E6E4E5] rounded-lg focus:outline-none focus:ring-0 text-[#082252] placeholder:text-[#E6E4E5] lg:placeholder:text-[#E6E4E5] focus:border-[#E6E4E5]">
                            <span
                                class="absolute inset-y-0 left-0 flex items-start lg:items-center px-2 pb-2 pt-[9px] lg:p-2">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.6851 13.6011C14.3544 13.2811 13.8268 13.2898 13.5068 13.6206C13.1868 13.9514 13.1955 14.4789 13.5263 14.7989L14.6851 13.6011ZM16.4206 17.5989C16.7514 17.9189 17.2789 17.9102 17.5989 17.5794C17.9189 17.2486 17.9102 16.7211 17.5794 16.4011L16.4206 17.5989ZM15.2333 9.53333C15.2333 12.6814 12.6814 15.2333 9.53333 15.2333V16.9C13.6018 16.9 16.9 13.6018 16.9 9.53333H15.2333ZM9.53333 15.2333C6.38531 15.2333 3.83333 12.6814 3.83333 9.53333H2.16667C2.16667 13.6018 5.46484 16.9 9.53333 16.9V15.2333ZM3.83333 9.53333C3.83333 6.38531 6.38531 3.83333 9.53333 3.83333V2.16667C5.46484 2.16667 2.16667 5.46484 2.16667 9.53333H3.83333ZM9.53333 3.83333C12.6814 3.83333 15.2333 6.38531 15.2333 9.53333H16.9C16.9 5.46484 13.6018 2.16667 9.53333 2.16667V3.83333ZM13.5263 14.7989L16.4206 17.5989L17.5794 16.4011L14.6851 13.6011L13.5263 14.7989Z"
                                        fill="#E6E4E5" />
                                </svg>
                            </span>
                            <div class="bg-white z-60 shadow-2xl top-12 w-full absolute overflow-y-auto max-h-[200px]"
                                id="resultados2"></div>
                        </div>
                    </div>

                    <div>
                        <div class="swiper logos">
                            <div class="swiper-wrapper">
                                @foreach ($categorias as $item)
                                    <div class="swiper-slide !flex justify-center cursor-pointer">
                                        <a href="{{route('catalogo', $item->id)}}">
                                        <a id="{{ $item->id }}" class="categoryselect">
                                            <div class="flex flex-col justify-center items-center gap-3">
                                                <div id="{{ $item->id }}"
                                                    class="{{ $filtro == $item->id ? 'selected' : '' }} rounded-full bg-white hover:bg-[#245BC8] md:duration-300 w-36 h-36 md:w-52 md:h-52 flex justify-center items-center">
                                                    <div class="flex flex-row justify-center items-center">
                                                        <img src="{{ asset($item->url_image.$item->name_image) }}"
                                                            alt="tratamiento de agua"
                                                            class="max-w-[93%] object-cover rounded-full">
                                                    </div>
                                                </div>
                                                <h2 class="text-[#082252] font-roboto font-bold text-text18 text-center">
                                                    {{ $item->name }}</h2>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section> --}}

        {{-- <section>
            <div class="flex flex-col gap-5 md:gap-10 w-11/12 mx-auto py-10">
                <div class="flex flex-col gap-5">
                    <div class="flex flex-col gap-2">
                        <h2 class="text-[#082252] font-roboto font-bold text-text32 subtitle">
                          @if($filtro != 0 )
                            {{$categoria->extract}}
                          @endif  
                        </h2>
                        <p class="text-[#082252] font-roboto font-normal text-text18 description">
                          @if($filtro != 0 )
                                {{$categoria->description}}
                          @endif    
                        </p>
                    </div>

                    <div>
                        <div class="flex flex-col md:flex-row md:justify-start gap-3">
                            <div class="relative inline-block text-left min-w-64 w-auto">
                                <select id="selectSubcategory"
                                    class="{{ ($filtro === null || $filtro == 0) ? 'hidden' : '' }} bg-[#FF5E14] w-full py-3 text-left px-4 text-white font-bold font-roboto hover:bg-[#FF5E14] hover:bg-opacity-80 text-text16 focus:outline-none border-b-[1.5px] border-x-0 border-t-0 border-gray-200 focus:ring-0 focus:border-gray-200 focus:border-b-[1.5px] rounded-lg">
                                    <option value="sinproduct">Selecciona subcategoria</option>
                                    @if(!is_null($filtro))
                                        @foreach($subcategorias as $subcat)
                                           @if($subcat->category_id == $filtro)
                                            <option value="{{$subcat->id}}">{{$subcat->name}}</option>  
                                           @endif   
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="relative inline-block text-left min-w-64 w-auto">
                                <select id="selectMicrocategory"
                                    class="hidden bg-[#FF5E14] w-full py-3 text-left px-4 text-white font-bold font-roboto hover:bg-[#FF5E14] hover:bg-opacity-80 text-text16 focus:outline-none border-b-[1.5px] border-x-0 border-t-0 border-gray-200 focus:ring-0 focus:border-gray-200 focus:border-b-[1.5px] rounded-lg">
                                    <option value="sinproduct">Selecciona microcategoria</option>
                                </select>
                            </div>
                            <input type="hidden" id="valorcategoria" />
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div id="getProductAjax"
                    class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-11/12 mx-auto gap-x-10 gap-y-10 pb-10 md:pb-20">

                    @foreach ($productos as $item)
                        <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                            <div class="flex justify-center items-center">
                                <a href="{{ route('producto', $item->id) }}" class="w-full"><img
                                        src="{{ asset($item->imagen) }}" alt="planta de tratmiento de agua"
                                        class="w-full object-cover rounded-lg h-full " /></a>
                            </div>
                            <div class="flex flex-col gap-2">
                                @if (is_null($item->categoria->name))
                                @else
                                    <h3 class="text-[#FF5E14] uppercase font-roboto font-bold text-text12">
                                        {{ $item->categoria->name }}
                                    </h3>
                                @endif

                                <a href="{{ route('producto', $item->id) }}">
                                    <h2 class="text-[#082252] font-bold font-roboto text-text24 leading-tight">
                                        {{ $item->producto }}</h2>
                                </a>
                                <p class="font-roboto font-normal text-text16 text-[#082252] line-clamp-3">
                                    {{ $item->extract }}
                                </p>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="flex justify-center items-center mb-10">
                    <a href="javascript:;" @if (empty($page) || $page == 0) style="display:none;" @endif
                        data-page={{ $page }}
                        class="text-white py-3 px-5 border-2 bg-[#082252] rounded-3xl w-60 text-center font-medium text-text16 cargarMas">
                        Cargar más modelos
                    </a>
                </div>
                   
                @if ($productos->hasMorePages())
                    <div class="flex justify-center items-center mb-10">
                        <a href="javascript:;" data-page="{{ $productos->currentPage() + 1 }}" class="text-white py-3 px-5 border-2 bg-[#082252] rounded-3xl w-60 text-center font-medium text-text16 cargarMas">
                            Cargar más modelos
                        </a>
                    </div>
                @endif

            </div>
        </section> --}}
    </main>

@section('scripts_importados')
    <script>
         var swiper = new Swiper(".carruseltop", {
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
        $('document').ready(function() {

            $('#selectMicrocategory').change(function() {

                var id = $('#selectMicrocategory').val();
                $.ajax({
                    url: '{{ route('getProductMicrocategoria') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id
                    },
                    dataType: "json",
                    success: function(response) {

                        $('#getProductAjax').empty();

                        $('.cargarMas').attr('data-page', response.page);

                        if (response.page == 0) {
                            $('.cargarMas').hide();
                        } else {
                            $('.cargarMas').show();
                        }

                        $.each(response.productos.data, function(key, value) {

                            var productoUrl = `{{ route('producto', ':id') }}`.replace(
                                ':id', value.id);

                            $('#getProductAjax').append(
                                `<div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                                    <div class="flex justify-center items-center">
                                        <a href='${productoUrl}' class="w-full"><img src="{{ asset('${value.imagen}') }}"
                                                alt="planta de tratmiento de agua" class="w-full object-cover rounded-lg h-full"></a>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <h3 class="text-[#FF5E14] uppercase font-roboto font-bold text-text12">${value.category_name}</h3>
                                        <a href='${productoUrl}'>
                                            <h2 class="text-[#082252] font-bold font-roboto text-text24 leading-tight">${value.producto}</h2>
                                        </a>
                                        <p class="font-roboto font-normal text-text16 text-[#082252] line-clamp-3">
                                            ${value.extract}
                                        </p>
                                    </div>
                                </div>`
                            );
                        });


                    },
                    error: function(error) {

                    }
                });


            });


            $('#selectSubcategory').change(function() {
                
                var page = $(this).attr('data-page');
                var id = $('#selectSubcategory').val();
                $.ajax({
                    url: '{{ route('getMicrocategoria') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id
                    },
                    dataType: "json",
                    success: function(response) {
                       console.log(response.page)
                        if (response.microcategorias && response.microcategorias.length > 0) {
                            $('#selectMicrocategory').empty().show();

                            $.each(response.microcategorias, function(key, value) {

                                console.log(value);
                                $('#selectMicrocategory').append(
                                    '<option value="' + value['id'] + '">' + value[
                                        'name'] +
                                    '</option>'
                                );
                            });
                        }

                        if (response.microcategorias && response.microcategorias.length == 0) {
                            $('#selectMicrocategory').empty().hide();
                        }

                        $('#getProductAjax').empty();
                        $.each(response.productos.data, function(key, value) {

                            var productoUrl = `{{ route('producto', ':id') }}`.replace(
                                ':id', value.id);

                            $('#getProductAjax').append(
                                `<div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                                    <div class="flex justify-center items-center">
                                        <a href='${productoUrl}' class="w-full"><img src="{{ asset('${value.imagen}') }}"
                                                alt="planta de tratmiento de agua" class="w-full object-cover rounded-lg h-full"></a>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <h3 class="text-[#FF5E14] uppercase font-roboto font-bold text-text12">${value.category_name}</h3>
                                        <a href='${productoUrl}'>
                                            <h2 class="text-[#082252] font-bold font-roboto text-text24 leading-tight">${value.producto}</h2>
                                        </a>
                                        <p class="font-roboto font-normal text-text16 text-[#082252] line-clamp-3">
                                            ${value.extract}
                                        </p>
                                    </div>
                                </div>`
                            );
                        });

                         //    console.log(response);
                        $('.cargarMas').attr('data-page', response.page);
                        $('.cargarMas').html('Cargar más modelos');
                        if (response.page == 0) {
                            $('.cargarMas').hide();
                        } else {
                            $('.cargarMas').show();
                        }

                    },
                    error: function(error) {

                    }
                });


            });


            $('.categoryselect').click(function() {

                var id = $(this).attr('id'); 

                $('.categoryselect .rounded-full').removeClass('selected');
                $(this).find('.rounded-full').addClass('selected');


                $.ajax({
                    
                    url: '{{ route('getSubcategoria') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id
                    },
                    dataType: "json",
                    success: function(response) {
                        console.log(response.productos);
                        $('#selectSubcategory').empty().show();
                        $('#selectMicrocategory').empty().hide();
                        $('#selectMicrocategory').append(
                            '<option value="">Selecciona microcategoria</option>');
                        $('#selectSubcategory').append(
                            '<option value="">Selecciona subcategoria</option>');

                        $('.subtitle').empty();
                        $('.subtitle').text(response.categorias[0].extract);

                        $('.description').empty();
                        $('.description').text(response.categorias[0].description);

                        $('.cargarMas').attr('data-page', response.page);

                        if (response.page == 0) {
                            $('.cargarMas').hide();
                        } else {
                            $('.cargarMas').show();
                        }

                        $.each(response.subcategorias, function(key, value) {


                            $('#selectSubcategory').append(
                                '<option value="' + value['id'] + '">' + value[
                                    'name'] +
                                '</option>'
                            );

                        });

                        $('#getProductAjax').empty();
                        $.each(response.productos.data, function(key, value) {

                            var productoUrl = `{{ route('producto', ':id') }}`.replace(
                                ':id', value.id);

                            $('#getProductAjax').append(
                                `<div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                                    
                                    <div class="flex justify-center items-center">
                                        <a href='${productoUrl}' class="w-full"><img src="{{ asset('${value.imagen}') }}"
                                                alt="planta de tratmiento de agua" class="w-full object-cover rounded-lg h-full"></a>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <h3 class="text-[#FF5E14] uppercase font-roboto font-bold text-text12">${value.category_name}</h3>
                                        <a href='${productoUrl}'>
                                            <h2 class="text-[#082252] font-bold font-roboto text-text24 leading-tight">${value.producto}</h2>
                                        </a>
                                        <p class="font-roboto font-normal text-text16 text-[#082252] line-clamp-3">
                                            ${value.extract}
                                        </p>
                                    </div>
                                    
                                </div>`
                            );
                        });


                    },
                    error: function(error) {

                    }
                });

            });


            $('body').delegate('.cargarMas', 'click', function() {
                var page = $(this).attr('data-page');
                $('.cargarMas').html('Cargando...');

                var id = $('#valorcategoria').val();
 
                $.ajax({
                    url: "{{ route('getTotalProductos') }}?page=" + page,
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id
                    },
                    dataType: "json",
                    cache: false,
                    success: function(response) {
                        console.log(response.page);
                      
                        $.each(response.productos.data, function(key, value) {

                            var productoUrl = `{{ route('producto', ':id') }}`.replace(
                                ':id', value.id);

                            $('#getProductAjax').append(
                                `<div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                                    
                                    <div class="flex justify-center items-center">
                                        <a href='${productoUrl}' class="w-full"><img src="{{ asset('${value.imagen}') }}"
                                                alt="planta de tratmiento de agua" class="w-full object-cover rounded-lg h-full"></a>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <h3 class="text-[#FF5E14] uppercase font-roboto font-bold text-text12">${value.category_name}</h3>
                                        <a href='${productoUrl}'>
                                            <h2 class="text-[#082252] font-bold font-roboto text-text24 leading-tight">${value.producto}</h2>
                                        </a>
                                        <p class="font-roboto font-normal text-text16 text-[#082252]">
                                            ${value.extract}
                                        </p>
                                    </div>
                                    
                                </div>`
                            );
                        });


                        $('.cargarMas').attr('data-page', response.page);
                        $('.cargarMas').html('Cargar más modelos');
                        
                        if (response.page == 0) {
                            $('.cargarMas').hide();
                        } else {
                            $('.cargarMas').show();
                        }
                       

                        //if (response.productos.next_page_url) {
                        //    $('.cargarMas').data('page', page + 1).html('Cargar más modelos');
                        //} else {
                        //    $('.cargarMas').hide();
                        //}
                        
                    },
                    error: function(error) {}
                });

            })

        });
    </script>
    <script>
        $(document).on('click', '.selected', function() {
            var id = $(this).attr('id');
            console.log('ID from selected div:', id);
            $('#valorcategoria').val(id);
        });

        // Actualizar id cuando cambie el select con id 'selectSubcategory'
        $('#selectSubcategory').on('change', function() {
            var id = $(this).val();
            console.log('ID from selectSubcategory:', id);
            $('#valorcategoria').val(id);
        });

        // Actualizar id cuando cambie el select con id 'selectMicrocategory'
        $('#selectMicrocategory').on('change', function() {
            var id = $(this).val();
            console.log('ID from selectMicrocategory:', id);
            $('#valorcategoria').val(id);
        });
    </script>
@stop

@stop
