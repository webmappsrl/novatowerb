<!-- component -->
<html lang="{{str_replace('_','-',app()->getLocale())}}">

<div class="max-w-screen-xl mx-auto">
    <!-- header -->
    <header class="flex items-center justify-between py-2 border-b">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
        <title>{{str_replace('_','-',app()->getLocale())}}</title>
        <a href="{{"http://novatowerb.test/".App::getLocale()}}" class="px-2 lg:px-0 uppercase font-bold text-purple-800">
            {{__('logo')}}
        </a>
        <ul class="inline-flex items-center">
            <li class="px-2 md:px-4">
                <a href="{{"http://novatowerb.test/".App::getLocale()}}" class="text-purple-600 font-semibold hover:text-purple-500"> Home </a>
            </li>
            <li class="px-2 md:px-4">
                <a href="{{"http://novatowerb.test/".App::getLocale()."/articles"}}" class="text-gray-500 font-semibold hover:text-purple-500">{{__('articles')}}</a>
            </li>
            @if(Auth::check()!=1)
            <li class="px-2 md:px-4">
                <a href="{{"http://novatowerb.test/nova/login"}}" class="text-gray-500 font-semibold hover:text-purple-500">{{__('login')}}</a>
            </li>
            @else
                <li class="px-2 md:px-4">
                    <a href="{{"http://novatowerb.test/nova/resources/articles"}}" class="text-gray-500 font-semibold hover:text-purple-500">{{__('edit')}}</a>
                </li>
                <li class="px-2 md:px-4">
                    <a href="{{"http://novatowerb.test/nova/resources/articles/new"}}" class="text-gray-500 font-semibold hover:text-purple-500">{{__('create_all')}}</a>
                </li>
            @endif
            <li class="px-2 md:px-4">
                <a href="http://novatowerb.test/en" class="text-gray-500 font-semibold hover:text-purple-500"> EN </a>
            </li>
            <li class="px-2 md:px-4">
                <a href="http://novatowerb.test/fr" class="text-gray-500 font-semibold hover:text-purple-500"> FR </a>
            </li>
            <li class="px-2 md:px-4">
                <a href="http://novatowerb.test/it" class="text-gray-500 font-semibold hover:text-purple-500"> IT </a>
            </li>


        </ul>

    </header>
    <!-- header ends here -->

    <main class="mt-10">
        <div class="block md:flex md:space-x-2 px-2 lg:p-0">
            <a
                class="mb-4 md:mb-0 w-full md:w-2/3 relative rounded inline-block"
                style="height: 24em;"
                href="{{"http://novatowerb.test/".App::getLocale()."/articles/".$top->id}}"
            >

                <div class="absolute left-0 bottom-0 w-full h-full z-10"
                     style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                <img src="https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80" class="absolute left-0 top-0 w-full h-full rounded z-0 object-cover" />
                <div class="p-4 absolute bottom-0 left-0 z-20">
                    <span class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">{{__('nutrition')}}</span>
                    <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                        {{$top->title}}
                    </h2>

                    <div class="flex mt-3">
                        <img src="https://randomuser.me/api/portraits/men/{{$top->user_id}}.jpg"
                             class="h-10 w-10 rounded-full mr-2 object-cover" />
                        <div>
                            <p class="font-semibold text-gray-200 text-sm"> Mike Sullivan </p>
                            <p class="font-semibold text-gray-400 text-xs"> 14 Aug </p>
                        </div>

                    </div>
                </div>
            </a>

            <a class="w-full md:w-1/3 relative rounded"
               style="height: 24em;"
               href="{{"http://novatowerb.test/".App::getLocale()."/articles/".$dx->id}}"

            >
                <div class="absolute left-0 top-0 w-full h-full z-10"
                     style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                <img src="https://images.unsplash.com/photo-1543362906-acfc16c67564?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1301&q=80" class="absolute left-0 top-0 w-full h-full rounded z-0 object-cover" />
                <div class="p-4 absolute bottom-0 left-0 z-20">
                    <span class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">{{__('science')}}</span>
                    <h2 class="text-3xl font-semibold text-gray-100 leading-tight">{{$dx->title}}</h2>
                    <div class="flex mt-3">
                        <img src="https://randomuser.me/api/portraits/men/{{$dx->user_id}}.jpg"
                             class="h-10 w-10 rounded-full mr-2 object-cover" />
                        <div>
                            <p class="font-semibold text-gray-200 text-sm"> Chrishell Staus </p>
                            <p class="font-semibold text-gray-400 text-xs"> 15 Aug </p>
                        </div>
                    </div>
                </div>
        </div>
        </a>

        <div class="block lg:flex lg:space-x-2 px-2 lg:p-0 mt-10 mb-10">

            <!-- post cards -->
            <div class="w-full lg:w-2/3">
                @foreach($articles as $key=>$article)

                    <a class="block rounded w-full lg:flex mb-10"
                       href="{{"http://novatowerb.test/".App::getLocale()."/articles/".$article->id}}"
                    >
                        <div
                            class="h-48 lg:w-48 flex-none bg-cover text-center overflow-hidden opacity-75"
                            style="background-image: url('https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80')"
                            title="deit is very important"
                        >
                        </div>
                        <div class="bg-white rounded px-4 flex flex-col justify-between leading-normal">
                            <div>
                                <div class="mt-3 md:mt-0 text-gray-700 font-bold text-2xl mb-2">
                                    {{$article->title}}
                                </div>
                                <p class="text-gray-700 text-base">
                                    {{$article->body}}
                                </p>
                            </div>
                            <div class="flex mt-3">
                                <img src="https://randomuser.me/api/portraits/men/{{$article->user_id}}.jpg"
                                     class="h-10 w-10 rounded-full mr-2 object-cover" />
                                <div>
                                    <p class="font-semibold text-gray-700 text-sm capitalize"> eduard franz </p>
                                    <p class="text-gray-600 text-xs"> 14 Aug </p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>

            <!-- right sidebar -->
            <div class="w-full lg:w-1/3 px-3">
                <!-- topics -->
                <div class="mb-4">
                    <h5 class="font-bold text-lg uppercase text-gray-700 px-1 mb-2"> {{__('popular_topics')}}</h5>
                    <ul>
                        <li class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                            <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                <span class="inline-block h-4 w-4 bg-green-300 mr-3"></span>
                                {{__('nutrition')}}
                                <span class="text-gray-500 ml-auto">23 articles</span>
                                <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                            </a>
                        </li>
                        <li class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                            <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                <span class="inline-block h-4 w-4 bg-indigo-300 mr-3"></span>
                                Food & Diet
                                <span class="text-gray-500 ml-auto">18 articles</span>
                                <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                            </a>
                        </li>
                        <li class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                            <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                <span class="inline-block h-4 w-4 bg-yellow-300 mr-3"></span>
                                Workouts
                                <span class="text-gray-500 ml-auto">34 articles</span>
                                <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                            </a>
                        </li>
                        <li class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                            <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                <span class="inline-block h-4 w-4 bg-blue-300 mr-3"></span>
                                Immunity
                                <span class="text-gray-500 ml-auto">9 articles</span>
                                <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                            </a>
                        </li>
                    </ul>
                </div>


                <!-- divider -->
                <div class="border border-dotted"></div>

                <!-- subscribe -->
                <div class="p-1 mt-4 mb-4">
                    <h5 class="font-bold text-lg uppercase text-gray-700 mb-2"> {{__('subscribe')}} </h5>
                    <p class="text-gray-600">
                        Subscribe to our newsletter. We deliver the best health related articles to your inbox
                    </p>
                    <input placeholder="your email address"
                           class="text-gray-700 bg-gray-100 rounded-t hover:outline-none p-2 w-full mt-4 border" />
                    <button class="px-4 py-2 bg-indigo-600 text-gray-200 rounded-b w-full capitalize tracking-wide">
                        {{__('subscribe')}}
                    </button>
                </div>

                <!-- divider -->
                <div class="border border-dotted"></div>

            </div>


        </div>
    </main>
    <!-- main ends here -->



    <!-- footer -->
    <footer class="border-t mt-32 pt-12 pb-32 px-4 lg:px-0">
        <div class="flex">

            <div class="w-full md:w-1/3 lg:w-1/4">
                <h6 class="font-semibold text-gray-700 mb-4">Company</h6>
                <ul>
                    <li> <a href="" class="block text-gray-600 py-2">Team</a> </li>
                    <li> <a href="" class="block text-gray-600 py-2">About us</a> </li>
                    <li> <a href="" class="block text-gray-600 py-2">Press</a> </li>
                </ul>
            </div>

            <div class="w-full md:w-1/3 lg:w-1/4">
                <h6 class="font-semibold text-gray-700 mb-4">Content</h6>
                <ul>
                    <li> <a href="" class="block text-gray-600 py-2">Blog</a> </li>
                    <li> <a href="" class="block text-gray-600 py-2">Privacy Policy</a> </li>
                    <li> <a href="" class="block text-gray-600 py-2">Terms & Conditions</a> </li>
                    <li> <a href="" class="block text-gray-600 py-2">Documentation</a> </li>
                </ul>
            </div>

        </div>
    </footer>
</div>
</html>
