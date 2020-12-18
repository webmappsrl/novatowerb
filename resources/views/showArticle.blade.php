<!-- component -->
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
                <a href="{{"http://novatowerb.test/".App::getLocale()}}" class="text-gray-500 font-semibold hover:text-purple-500"> Home </a>
            </li>
            <li class="px-2 md:px-4">
                <a href="{{"http://novatowerb.test/".App::getLocale()."/articles"}}" class="text-gray-500 font-semibold hover:text-purple-500">{{__('articles')}}</a>
            </li>

            @if(Auth::check()==1)

            <li class="px-2 md:px-4">
                <a href="{{"http://novatowerb.test/nova/resources/articles/new"}}" class="text-gray-500 font-semibold hover:text-purple-500">{{__('create_all')}}</a>
            </li>
            @endif
            <li class="px-2 md:px-4">
                <a href="http://novatowerb.test/en/articles/{{$article->id}}" class="text-gray-500 font-semibold hover:text-purple-500"> EN </a>
            </li>
            <li class="px-2 md:px-4">
                <a href="http://novatowerb.test/fr/articles/{{$article->id}}" class="text-gray-500 font-semibold hover:text-purple-500"> FR </a>
            </li>
            <li class="px-2 md:px-4">
                <a href="http://novatowerb.test/it/articles/{{$article->id}}" class="text-gray-500 font-semibold hover:text-purple-500"> IT </a>
            </li>

        </ul>


    </header>
    <!-- header ends here -->

    <main class="mt-10">
        @if(Auth::check()==1)
        <a href="{{"http://novatowerb.test/nova/resources/articles/".$article->id}}"
           class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">{{__('edit')}}</a>
        @endif
        <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">

            <div class="absolute left-0 bottom-0 w-full h-full z-10"
                 style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
            <img src="https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
            <div class="p-4 absolute bottom-0 left-0 z-20">
                <a href="#"
                   class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">{{__('nutrition')}}</a>
                <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                    {{$article->title}}
                </h2>
                <div class="flex mt-3">
                    <img src="https://randomuser.me/api/portraits/men/{{$article->user_id}}.jpg"
                         class="h-10 w-10 rounded-full mr-2 object-cover" />
                    <div>
                        <p class="font-semibold text-gray-200 text-sm"> Mike Sullivan </p>
                        <p class="font-semibold text-gray-400 text-xs"> 14 Aug </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
            <p class="pb-6">{{$article->body}}</p>

            <p class="pb-6">{{$article->body}}</p>


            <p class="pb-6">{{$article->body}}</p>

            <h2 class="text-2xl text-gray-800 font-semibold mb-4 mt-4">{{$article->title}}</h2>

            <p class="pb-6">{{$article->body}}</p>

            <p class="pb-6">{{$article->body}}</p>

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
