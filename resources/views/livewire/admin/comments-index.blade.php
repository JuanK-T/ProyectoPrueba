<div class="w-full py-10 pr-10">
    <h3 class="ml-3 text-lg font-bold text-gray-700 tracking-wide mb-2">Comentarios</h3>
    {{-- Formulario de Comentario --}}
    <div class="flex">
        <img class="h-10 w-10 rounded-full mr-3 object-cover object-center" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" title="">
        <div class="w-full">
            <input class="w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-gray-900" type="text" placeholder="Agrega un comentario">
            <div class="flex space-x-6 justify-end pt-3">
                <button class="bg-gray-400 hover:bg-gray-200 py-2 px-4 rounded">Cancelar</button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Comentar</button>
            </div>
        </div>
    </div>

    {{-- Ver Otros Comentarios --}}
    <div class="py-5 mx-4">
        <div class="flex">
            <img class="h-8 w-8 rounded-full mr-3 object-cover object-center" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" title="">
            <div class="">
                <p class="text-gray-700 font-semibold text-base">Luisa Rodriguez</p>
                <p class="text-sm text-gray-700 font-medium">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus consectetur voluptatibus, dolor omnis laborum culpa tempora, consequuntur ad incidunt nostrum libero debitis dolore odio consequatur ipsum accusantium voluptas sunt saepe!
                A ipsum eaque, aliquam iusto expedita aliquid perferendis voluptas debitis sapiente cupiditate possimus assumenda, saepe sit illo. Deleniti, temporibus velit totam inventore error blanditiis enim ab iure, earum provident pariatur.
                Commodi sit praesentium cumque veritatis fugiat reprehenderit voluptates suscipit, velit voluptatem, at officiis similique. Culpa possimus, veritatis, repellendus sit placeat, aspernatur illum debitis porro rerum quod assumenda ex dolorum cumque.
                Corporis atque deserunt soluta odit, voluptatibus magni quia sint expedita quaerat, minima ut ab aut debitis dignissimos harum molestias sed repudiandae voluptates? Obcaecati, laudantium itaque. Earum ratione similique suscipit corporis.
                Voluptatibus et, amet veniam cum, officiis deleniti tenetur magni ipsa perferendis ea voluptate excepturi dolore vero. Id enim voluptate explicabo molestiae voluptatibus, labore autem ducimus atque est vero ex aspernatur!</p>
                <div class="flex space-x-3 items-center">
                    {{-- Boton de me gusta --}}
                    <div class="flex space-x-2 items-center pr-4">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600 hover:text-red-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <span class="text-gray-700 font-semibold">22</span>
                    </div>
                    {{-- Botton de ver respuestas --}}
                    <div class="flex space-x-2 items-center">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                            </svg>
                        </span>
                        <span class="text-gray-700 font-semibold">20</span>
                    </div>
                    {{-- Boton de Responder --}}
                    <div class="">
                        <span class="text-gray-700 font-thin text-base">Responder</span>
                    </div>
                </div>
            </div>
        </div>
        {{-- Ver Respuestas --}}
        <div class="flex py-2 mx-6">
            <img class="h-6 w-6 rounded-full mr-3 object-cover object-center" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" title="">
            <div class="">
                <p class="text-gray-600 font-semibold text-base">Jose Fernando Quintero</p>
                <p class="text-sm text-gray-600 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quibusdam a sunt odit voluptate odio temporibus atque, molestiae reiciendis omnis.</p>
                <div class="flex space-x-1 items-center">
                    {{-- Boton de me gusta --}}
                    <div class="flex space-x-2 items-center pr-4">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600 hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <span class="text-gray-600 font-semibold">2</span>
                    </div>
                    {{-- Boton de Responder --}}
                    <div class="">
                        <span class="text-gray-600 font-semibold text-sm">Responder</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

