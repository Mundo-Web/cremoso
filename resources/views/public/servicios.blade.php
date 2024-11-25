@extends('components.public.matrix', ['pagina' => 'servicios'])
@section('titulo', 'Servicios')
@section('css_importados')
    <style>

    </style>
@stop


@section('content')
    <main>


        <section class="px-[5%] pt-12 xl:pt-16 w-full">
            <div class="flex flex-col gap-2 max-w-3xl mx-auto">
                <h2
                    class="text-[#052F4E] font-maille text-4xl md:text-5xl leading-none text-left lg:text-center max-w-2xl mx-auto">
                    Nuestros Servicios
                </h2>
                <p class="text-[#052F4E] font-galano_regular text-lg text-left lg:text-center">
                    Mauris euismod vehicula eros egestas venenatis. Vestibulum non pulvinar risus.
                    Praesent hendrerit lectus ultrices purus consectetur, eu sollicitudin libero pretium.
                </p>
            </div>
        </section>


        <section class="px-[5%] py-12 xl:py-20 w-full">

            <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-12">

                <div class="md:basis-2/6 lg:basis-1/6 flex flex-col gap-5" data-aos="fade-up" data-aos-duration="150">

                    <div class="flex flex-col gap-3">
                        <a href="{{ route('blog', 0) }}"
                            class="text-[15px] py-3 px-2 rounded-lg font-galano_regular text-center text-white bg-[#052F4E]">
                            Marca Blanca
                        </a>
                        <a href="{{ route('blog', 0) }}"
                            class="text-[15px] py-3 px-2 rounded-lg font-galano_regular text-center text-[#052F4E] bg-[#EBEDEF]">
                            Maquina de mezclado de productos en polvo
                        </a>
                        <a href="{{ route('blog', 0) }}"
                            class="text-[15px] py-3 px-2 rounded-lg font-galano_regular text-center text-[#052F4E] bg-[#EBEDEF]">
                            Formulación para helados
                        </a>
                        <a href="{{ route('blog', 0) }}"
                            class="text-[15px] py-3 px-2 rounded-lg font-galano_regular text-center text-[#052F4E] bg-[#EBEDEF]">
                            Servicio técnico
                        </a>
                    </div>

                </div>

                <div class="md:basis-4/6 lg:basis-5/6 flex flex-col gap-10">

                    <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-duration="150">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/imagen/heladoszambito.png') }}" alt="blog"
                                class="w-full h-[450px] object-cover rounded-xl hidden md:block">

                            <img src="{{ asset('images/imagen/heladoszambito.png') }}" alt="blog"
                                class="w-full h-[450px] object-cover rounded-xl block md:hidden">
                        </div>

                        <div class="flex flex-col gap-1">
                            <h2 class="text-[#052F4E] font-galano_bold tracking-tighter text-3xl leading-none">
                                Marca Blanca</h2>
                            <p class="text-[#052F4E] text-lg font-galano_regular">
                                Desarrollo de productos en los que los clientes podrá colocar su marca en el producto.
                            </p>
                        </div>
                        <div class="flex flex-row justify-start md:justify-center items-start">
                            <a href="#"
                                class="text-white py-3 px-6 bg-[#052F4E] rounded-xl font-galano_semibold text-center">
                                Pon tu marca aquí
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>

@section('scripts_importados')

    <script>
        var swiper = new Swiper(".testimonios", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            grabCursor: true,
            centeredSlides: false,
            initialSlide: 0,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                }
            },

        });

        var swiper = new Swiper(".clientes", {
            slidesPerView: 6,
            spaceBetween: 30,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                    centeredSlides: true,
                },
                768: {
                    slidesPerView: 3,
                    centeredSlides: false,
                },
                1024: {
                    slidesPerView: 6,
                    centeredSlides: false,
                },
            },
        });
    </script>
@stop

@stop
