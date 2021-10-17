<div class="carousel rounded relative z-0 overflow-hidden shadow-xl">
    <div class="carousel-inner relative overflow-hidden w-full">
        <!--Slide 1-->
        <input class="carousel-open hidden" type="radio" id="carousel-j-1" name="carouseljl" aria-hidden="true" hidden=""
            checked="checked">
        <div class="carousel-item absolute opacity-0 bg-center"
            style="height:500px; background-image: url({{ asset('img/c_juegos/1.jpg') }});background-repeat:no-repeat;background-size: cover;">

        </div>
        <label for="carousel-j-3"
            class="control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto flex justify-center content-center"><i
                class="fas fa-angle-left mt-3"></i></label>
        <label for="carousel-j-2"
            class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto"><i
                class="fas fa-angle-right mt-3"></i></label>

        <!--Slide 2-->
        <input class="carousel-open hidden" type="radio" id="carousel-j-2" name="carouseljl" aria-hidden="true"
            hidden="">
        <div class="carousel-item absolute opacity-0 bg-center"
            style="height:500px; background-image: url({{ asset('img/c_juegos/2.jpg') }});background-repeat:no-repeat;background-size: cover;">
        </div>
        <label for="carousel-j-1"
            class=" control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto"><i
                class="fas fa-angle-left mt-3"></i></label>
        <label for="carousel-j-3"
            class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto"><i
                class="fas fa-angle-right mt-3"></i></label>

        <!--Slide 3-->
        <input class="carousel-open hidden" type="radio" id="carousel-j-3" name="carouseljl" aria-hidden="true"
            hidden="">
        <div class="carousel-item absolute opacity-0"
            style="height:500px; background-image: url({{ asset('img/c_juegos/3.jpg') }});background-repeat:no-repeat;background-size: cover;">
        </div>
        <label for="carousel-j-2"
            class="control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto"><i
                class="fas fa-angle-left mt-3"></i></label>
        <label for="carousel-j-1"
            class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto"><i
                class="fas fa-angle-right mt-3"></i></label>

        <!-- Add additional indicators for each slide-->
        <ol class="carousel-indicators">
            <li class="inline-block mr-3">
                <label for="carousel-j-1"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-j-2"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-j-3"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
        </ol>
    </div>
</div>
