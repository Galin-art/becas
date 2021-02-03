<div class="container mx-auto">
    <div class="flex flex-wrap justify-center{{--para qie el contenido este centrado--}}">


        <div class="flex flex-col break-words{{--si siene un slto de line lo ba a forzar--}} bg-white{{--para el color de fondo--}} border-2 shadow-sm{{--la sombra--}} mt-20">
            <div class="bg-gray-400	 {{--el color del fondo --}}text-gray-700 uppercase text-center py-3 px-6 mb-0">




                <form
                    action="{{route('searchBeneficiario')}}" method="get"
                >
                    @csrf


                    <div class="mb-5">

                        <label for="curp" class=" block{{--toma todo espacio disp--}} text-gray-700 text-sm mb-2  ">inserta Curp</label>

                        <input id="curp" type="text" class=" p-3 bg-gray-200 form-input w-full " name="curp" value=""  autofocus>

                    </div>

                    <div class="mb-5">

                        <label for="famid" class=" block{{--toma todo espacio disp--}} text-gray-700 text-sm mb-2  ">inserta famid</label>

                        <input id="famid" type="text" class=" p-3 bg-gray-200 form-input w-full " name="famid" value=""  autofocus>

                    </div>


                    <button class="bg-teal-600 hover:bg-green-800 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z"></path></svg>
                        <span>Buscar</span>
                    </button>

                    @if(session('notFound'))

                        {{session('notFound')}}
                    @endif


                </form>



            </div>
        </div>





    </div>
</div>
