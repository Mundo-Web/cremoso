@extends('components.public.matrix', ['pagina'=>'blog'])
@section('titulo', 'Post')
@section('meta_title', $meta_title)
@section('meta_description', $meta_description)
@section('meta_keywords', $meta_keywords)
@section('css_importados')

@stop


@section('content')
    <main>
        <section class="px-[5%] pt-12 xl:pt-16 w-full">
            
            <div class="flex flex-col gap-5">
                
                <div class="flex flex-wrap gap-3 lg:gap-5 justify-start items-center" data-aos="fade-up" data-aos-duration="150">
                    <div class="flex flex-col gap-3">
                        <a href="#"
                            class="text-[15px] py-2.5 px-4 rounded-lg font-galano_medium text-center text-[#052F4E] bg-[#EBEDEF]">Categoria uno</a>
                    </div>
                    <p class="font-galano_medium text-base text-[#052F4E]">24 enero de 2024</p>
                </div>

                <h2 class="font-galano_semibold font-bold text-4xl md:text-5xl text-[#052F4E] leading-tight tracking-tight">
                    El título del blog aparecerá aquí
                </h2>
            

                @if($post->url_image)
                    <div class="w-full" data-aos="fade-up" data-aos-offset="150">
                        <img src="{{asset($post->url_image . $post->name_image)}}" alt="catedral" class="w-full h-[563px] object-cover hidden md:block" />
                        <img src="{{asset($post->url_image . $post->name_image)}}" alt="catedral" class="w-full h-[563px] object-cover block md:hidden" />
                    </div>
                @endif

                
                <div class="flex flex-row justify-end items-center">
                    <div class="flex flex-row gap-3">
                        <img src="{{asset('images/imagen/compartirfb.png')}}" alt="facebook" class="w-7 object-contain" />
                        <img src="{{asset('images/imagen/compartirtwitter.png')}}" alt="facebook" class="w-7 object-contain" />
                        <img src="{{asset('images/imagen/compartirlinkedin.png')}}" alt="facebook" class="w-7 object-contain" />
                        <img src="{{asset('images/imagen/compartirlink.png')}}" alt="facebook" class="w-7 object-contain" />
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 pb-10 lg:pb-16">
                    <div class="lg:col-span-2 flex flex-col gap-6">
                        <div class="flex flex-col gap-2 text-[#052F4E] font-galano_regular font-normal text-xl mt-2">
                            Eget quis mi enim, leo lacinia pharetra, semper. Eget in volutpat mollis at volutpat lectus velit, sed auctor. 
                            Porttitor fames arcu quis fusce augue enim. Quis at habitant diam at. Suscipit tristique risus, at donec. 
                            In turpis vel et quam imperdiet. Ipsum molestie aliquet sodales id est ac volutpat.
                        </div>

                        @if($post->url_video)
                            <div class="w-full" data-aos="fade-up" data-aos-offset="150">
                                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/{{ $post->url_video }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        @endif
                    </div>
                    <div class="lg:col-span-1">
                        
                        <div class="flex flex-col w-full px-5  bg-[#EBEDEF] rounded-xl sticky top-0">
                            <div class="flex flex-col gap-1 py-5">
                                
                                <h2 class="text-[#052F4E] text-2xl font-galano_bold leading-none">Suscríbete a nuestra newsletter</h2>
                                <p class="text-[#052F4E] text-base font-galano_regular line-clamp-3">
                                    Mauris euismod vehicula eros egestas venenatis. Vestibulum non pulvinar risus. 
                                    Praesent hendrerit lectus ultrices purus consectetur, eu sollicitudin libero pretium.
                                </p>
                                <div class="flex flex-col md:flex-row gap-3 mt-5">
                                    <input class="rounded-xl text-sm font-galano_regular w-full"  placeholder="Correo Electrónico"  />
                                    <a class="bg-[#052F4E] text-white px-6 py-2 text-sm rounded-xl font-galano_regular w-32"> Inscribirse </a>
                                </div>
                                <h2 class="text-[#052F4E] text-sm font-galano_regular mt-1">Al hacer clic en Inscribirse, confirma que acepta nuestros Términos y condiciones.</h2>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
           
        </section>


        <section>
            <div class="flex flex-col gap-10 w-full px-[5%] py-10 md:py-20 bg-[#EBEDEF]">
                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-0">
                    
                    <div class="lg:col-span-1 flex flex-col justify-start">

                        <div class="flex flex-col p-2 justify-start items-start gap-4">
                            <h2 class="text-[#052F4E] text-4xl md:text-5xl font-maille leading-none">Mira otros post</h2>
                            <h2 class="text-[#052F4E] text-lg font-galano_regular">
                                Mauris euismod vehicula eros egestas venenatis. Vestibulum non pulvinar risus.
                            </h2>
                            <div class="flex flex-row justify-start md:justify-center items-start">
                                <a href="#"
                                    class="text-white py-3 px-6 bg-[#052F4E] rounded-xl font-galano_semibold text-center">
                                    Ver todos los post
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="lg:col-span-2 flex flex-col gap-10 justify-center items-start">
                        <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-10">
                            <div class="flex flex-col gap-1">
                                <img class="w-full h-[250px] lg:h-[300px] object-cover" src="{{asset('images/imagen/heladoblog.png')}}" />
                                <h2 class="text-[#052F4E] text-base font-galano_regular font-semibold mt-3">Categoria</h2>
                                <h2 class="text-[#052F4E] text-2xl font-galano_bold">El título del blog aparecerá aquí</h2>
                                <p class="text-[#052F4E] text-lg font-galano_regular line-clamp-3">
                                    Mauris euismod vehicula eros egestas venenatis. Vestibulum non pulvinar risus. 
                                    Praesent hendrerit lectus ultrices purus consectetur, eu sollicitudin libero pretium.
                                </p>
                                <h2 class="text-[#052F4E] text-base font-galano_regular font-semibold mt-1">11 de enero del 2024</h2>
                            </div>
        
                            <div class="flex flex-col gap-1">
                                <img class="w-full  h-[250px] lg:h-[300px] object-cover" src="{{asset('images/imagen/heladoblog2.png')}}" />
                                <h2 class="text-[#052F4E] text-base font-galano_regular font-semibold mt-3">Categoria</h2>
                                <h2 class="text-[#052F4E] text-2xl font-galano_bold">El título del blog aparecerá aquí</h2>
                                <p class="text-[#052F4E] text-lg font-galano_regular line-clamp-3">
                                    Mauris euismod vehicula eros egestas venenatis. Vestibulum non pulvinar risus. 
                                    Praesent hendrerit lectus ultrices purus consectetur, eu sollicitudin libero pretium.
                                </p>
                                <h2 class="text-[#052F4E] text-base font-galano_regular font-semibold mt-1">11 de enero del 2024</h2>
                            </div>
                        </div> 
                    </div>
                </div>

            </div>
        </section>


    </main>


@section('scripts_importados')


@stop

@stop
