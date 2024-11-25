<style>
    #modalPoliticasDev #modalTerminosCondiciones {
        height: 70vh;
        /* Establece la altura del modal al 70% de la altura de la ventana gráfica */
        overflow-y: auto;
        /* Permite el desplazamiento vertical si el contenido excede la altura del modal */
    }
    .prose{
        max-width: 100%!important;
    }
</style>
<footer class="bg-[#052F4E]">
    <div class="grid grid-cols-1 md:grid-cols-3 w-11/12 mx-auto py-10 gap-10 md:gap-5">
        <div class="md:col-span-1 w-full md:max-w-[500px] flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
            <a href="{{ route('index') }}">
                <img src="{{ asset('images/svg/cremosofooter.svg') }}" alt="MrCremoso" class="w-[180px]" />
            </a>
        </div>

        <div class="md:col-span-2 grid grid-cols-1 lg:grid-cols-7 gap-10 md:gap-5 justify-start items-start">

            <div class="flex flex-col gap-5 col-span-2">
                <p class="font-galano_medium uppercase text-[#E1CBB3] text-lg">
                   ENLACES
                </p>
                <div class="flex flex-col gap-3 text-[#FFF9F1] font-galano_regular text-sm">
                    <a href="{{ route('index', 0) }}">Inicio</a>
                    <a href="{{route('index').'#servicios'}}">Servicios</a>
                    <a href="{{route('index').'#about'}}">Nosotros</a>
                    <a href="{{route('index').'#contacto'}}">Contacto</a>
                </div>
            </div>


            <div class="flex flex-col gap-5 col-span-3">
                <p class="font-galano_medium uppercase text-[#E1CBB3] text-lg">
                   DATOS DE CONTACTO
                </p>
                <div class="flex flex-col gap-3 text-[#FFF9F1] font-galano_regular text-sm">
                    <a>{{ $general[0]->address }}, {{ $general[0]->inside }},
                                        {{ $general[0]->district }} - {{ $general[0]->city }}</a>
                    <a>Correo Electrónico: <br> {{ $general[0]->email }}</a> 
                    <a>Teléfono:<br> {{ $general[0]->cellphone }}</a>
                </div>
            </div>


            <div class="flex flex-col gap-5 col-span-2">
                <p class="font-galano_medium uppercase text-[#E1CBB3] text-lg">
                   AVISO LEGAL
                </p>
                <div class="flex flex-col gap-3 text-[#FFF9F1] font-galano_regular text-sm">
                    <a class="cursor-pointer" id="linkPoliticas">Política de Privacidad</a>
                    <a class="cursor-pointer" id="linkTerminos">Términos y Condiciones</a>
                </div>
            </div>
 
        </div>
    </div>

    <div
        class="flex flex-col items-start gap-3 md:flex-row md:justify-between md:items-center w-11/12 mx-auto py-10 border-t border-white">
        <a href="#" target="_blank" class="text-[#FFF9F1] font-galano_regular font-normal text-text14">&copy; 2024 Cremoso.
            Reservados todos los derechos</a>
        <div class="flex justify-start items-center gap-5">
           <div class="flex flex-row gap-2">
                    @if ($general[0]->facebook)
                        <a href="{{ $general[0]->facebook }}" target="_blank"
                            class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                            <img class="w-5 h-5" src="{{ asset('images/imagen/facebookcremoso.png') }}" alt="facebook" />
                        </a>
                    @endif
                    @if ($general[0]->instagram)
                        <a href="{{ $general[0]->instagram }}" target="_blank"
                            class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                            <img class="w-5 h-5" src="{{ asset('images/imagen/instagramcremoso.png') }}" alt="instagram" /> 
                        </a>
                    @endif
                    @if ($general[0]->linkedin)
                        <a href="{{ $general[0]->linkedin }}" target="_blank"
                            class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                            <img class="w-5 h-5" src="{{ asset('images/imagen/linkedincremoso.png') }}" alt="linkedin" />
                        </a>
                    @endif
                    {{-- @if ($general[0]->youtube)
                        <a href="{{ $general[0]->youtube }}" target="_blank"
                            class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                            <img class="w-10 h-10" src="{{ asset('images/svg/whatsapp.svg') }}" alt="youtube" />
                        </a>
                    @endif --}}
                    @if ($general[0]->tiktok)
                        <a href="{{ $general[0]->tiktok }}" target="_blank"
                            class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                            <img class="w-5 h-5" src="{{ asset('images/imagen/twittercremoso.png') }}" alt="twitter" />
                        </a>
                    @endif
            </div>
        </div>
    </div>

    <div id="modalTerminosCondiciones" class="modal !px-0" style="max-width: 900px !important; width: 100% !important;">
        <!-- Modal body -->
        <div class="p-4">
            <h1 class="font-PreloBold text-center text-4xl">Términos y condiciones</h1>
            <div class="font-PreloMedium p-2">{!! $termsAndCondicitions->content ?? '' !!}</div>
        </div>
    </div>

    <div id="modalPoliticasDev" class="modal !px-0" style="max-width: 900px !important; width: 100% !important;">
        <!-- Modal body -->
        <div class="p-4">
            <h1 class="font-PreloBold text-center text-4xl">Políticas de privacidad</h1>
            <div class="font-PreloMedium p-2">{!! $politicDev->content ?? '' !!}</div>
        </div>
    </div>

</footer>

<script>
    $(document).ready(function() {
        $(document).on('click', '#linkTerminos', function() {
            $('#modalTerminosCondiciones').modal({
                show: true,
                fadeDuration: 400,
            })
        });

        $(document).on('click', '#linkPoliticas', function() {
            $('#modalPoliticasDev').modal({
                show: true,
                fadeDuration: 400,
            })
        });
    });
</script>
