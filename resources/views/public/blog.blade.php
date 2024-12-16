@extends('components.public.matrix', ['pagina'=>'blog'])
@section('titulo', 'Blog')
@section('css_importados')

@stop


@section('content')
    <main>

        <section class="px-[5%] pt-12 xl:pt-16 w-full">
            <div class="flex flex-col gap-2 max-w-3xl mx-auto">
                <h2
                    class="text-[#052F4E] font-maille text-4xl md:text-5xl leading-none text-left lg:text-center max-w-2xl mx-auto">
                    Describe de qué trata tu blog
                </h2>
                <p class="text-[#052F4E] font-galano_regular text-lg text-left lg:text-center">
                    Mauris euismod vehicula eros egestas venenatis. Vestibulum non pulvinar risus.
                    Praesent hendrerit lectus ultrices purus consectetur, eu sollicitudin libero pretium.
                </p>
            </div>
        </section>

        <section class="px-[5%] pt-12 xl:pt-16 w-full">
            <div class="flex flex-col justify-start gap-12">

                <div class="flex flex-wrap gap-3 lg:gap-5 justify-center" data-aos="fade-up" data-aos-duration="150">
                    <div class="flex flex-col gap-3">
                        <a href="#"
                            class="text-[15px] py-2.5 px-4 rounded-xl font-galano_medium text-center text-white bg-[#052F4E]">Ver todas</a>
                    </div>
                    <div class="flex flex-col gap-3">
                        <a href="#"
                            class="text-[15px] py-2.5 px-4 rounded-lg font-galano_medium text-center text-[#052F4E] bg-[#EBEDEF]">Categoria uno</a>
                    </div>
                    <div class="flex flex-col gap-3">
                        <a href="#"
                            class="text-[15px] py-2.5 px-4 rounded-lg font-galano_medium text-center text-[#052F4E] bg-[#EBEDEF]">Categoria dos</a>
                    </div>
                    <div class="flex flex-col gap-3">
                        <a href="#"
                            class="text-[15px] py-2.5 px-4 rounded-lg font-galano_medium text-center text-[#052F4E] bg-[#EBEDEF]">Categoria tres</a>
                    </div>
                </div>

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


                <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
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
        </section>

        <section>
            <div class="flex flex-col gap-10 lg:gap-14 w-full px-0 md:pl-[5%]  bg-[#EBEDEF] mt-10 md:mt-20">

                <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-10">
                    <div class="flex flex-col gap-1 md:col-span-2 pt-10  md:py-16 px-[5%] md:px-0">
                        
                        <h2 class="text-[#052F4E] text-4xl md:text-5xl font-galano_bold leading-none">Suscríbete a nuestra newsletter</h2>
                        <p class="text-[#052F4E] text-lg font-galano_regular line-clamp-3">
                            Mauris euismod vehicula eros egestas venenatis. Vestibulum non pulvinar risus. 
                            Praesent hendrerit lectus ultrices purus consectetur, eu sollicitudin libero pretium.
                        </p>
                        <div class="flex flex-col md:flex-row gap-3 mt-10">
                            <input class="rounded-xl text-base font-galano_regular w-[250px]"  placeholder="Ingresa tu correo electronico"  />
                            <a class="bg-[#052F4E] text-white px-6 py-2 rounded-xl font-galano_regular w-32"> Inscribirse </a>
                        </div>
                        <h2 class="text-[#052F4E] text-sm font-galano_regular mt-1">Al hacer clic en Inscribirse, confirma que acepta nuestros Términos y condiciones.</h2>
                    </div>

                    <div class="flex flex-col gap-1 md:col-span-1">
                        <img class="w-full min-h-[320px] h-full object-center object-cover" src="{{asset('images/imagen/heladosubscription.png')}}" />
                    </div>
                </div>

            </div>
        </section>

    </main>


     {{-- <div class="md:basis-5/6 flex flex-col gap-10">
                    @if (is_null($lastpost))
                    @else
                        <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-duration="150">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset($lastpost->url_image . $lastpost->name_image) }}" alt="blog"
                                    class="w-full h-[450px] object-cover rounded-xl hidden md:block">

                                <img src="{{ asset($lastpost->url_image . $lastpost->name_image) }}" alt="blog"
                                    class="w-full h-[450px] object-cover rounded-xl block md:hidden">
                            </div>
                            <div class="flex justify-start items-center gap-5">
                                <p
                                    class="text-white font-roboto font-semibold text-text14 bg-[#0C4AC3] py-2 px-4 rounded-lg">
                                    {{ $lastpost->categories->name }}</p>
                                <p class="text-[#0C4AC3] font-roboto font-semibold text-text14">Publicado
                                    {{ \Carbon\Carbon::parse($lastpost->created_at)->diffForHumans() }}</p>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-[#082252] font-roboto font-bold text-text32 leading-tight">
                                    {{ $lastpost->title }}</h2>
                                <p class="text-[#082252] text-text16 font-normal font-roboto">
                                    {{ Str::limit($lastpost->extract, 250) }}
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('detalleBlog', $lastpost->id) }}"
                                    class="text-[#FF5E14] font-roboto font-normal text-text16 flex justify-start items-center gap-3">
                                    <span>Leer más</span>
                                    <div>
                                        <img src="{{ asset('images/svg/image_36.svg') }}" alt="arrow">
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif

                    @if ($posts->isEmpty())
                    @else
                        <div class="grid grid-cols-1 xl:grid-cols-2 gap-x-5 gap-y-10">
                            @foreach ($posts as $post)
                                <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-duration="150">
                                    <div class="flex justify-center items-center">
                                        <img src="{{ asset($post->url_image . $post->name_image) }}" alt="blog"
                                            class="w-full h-[300px] object-cover rounded-xl hidden md:block">
                                        <img src="{{ asset($post->url_image . $post->name_image) }}" alt="blog"
                                            class="w-full h-[220px] object-cover rounded-xl block md:hidden">
                                    </div>

                                    <div class="flex flex-col md:flex-row md:justify-start md:items-center gap-2 md:gap-5">
                                        <p
                                            class="text-white font-roboto font-semibold text-text14 bg-[#0C4AC3] py-2 px-4 rounded-lg text-center">
                                            {{ $post->categories->name }}</p>
                                        <p class="text-[#0C4AC3] font-roboto font-semibold text-text14">Publicado
                                            {{ \Carbon\Carbon::parse($lastpost->created_at)->diffForHumans() }}</p>
                                    </div>

                                    <div class="flex flex-col gap-1">
                                        <h2 class="text-[#082252] font-roboto font-bold text-text32 leading-tight">
                                            {{ $post->title }}</h2>
                                        <p class="text-[#082252] text-text16 font-normal font-roboto">
                                            {{ Str::limit($post->extract, 250) }}
                                        </p>
                                    </div>

                                    <div>
                                        <a href="{{ route('detalleBlog', $post->id) }}"
                                            class="text-[#FF5E14] font-roboto font-normal text-text16 flex justify-start items-center gap-3">
                                            <span>Leer más</span>
                                            <div>
                                                <img src="{{ asset('images/svg/image_36.svg') }}" alt="arrow">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif


                </div> --}}

@section('scripts_importados')


@stop

@stop
