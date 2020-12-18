<!-- component -->
<html lang="{{str_replace('_','-',app()->getLocale())}}">

<div class="max-w-screen-xl mx-auto">
    <!-- header -->
    <header class="flex items-center justify-between py-2 border-b">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <script
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
                <a href="{{"http://novatowerb.test/".App::getLocale()."/articles"}}" class="text-purple-600 font-semibold hover:text-purple-500">{{__('articles')}}</a>
            </li>
            <li class="px-2 md:px-4">
                <a href="{{"http://novatowerb.test/nova/login"}}" class="text-gray-500 font-semibold hover:text-purple-500">{{__('login')}}</a>
            </li>
            <li class="px-2 md:px-4">
                <a href="http://novatowerb.test/en/articles" class="text-gray-500 font-semibold hover:text-purple-500"> EN </a>
            </li>
            <li class="px-2 md:px-4">
                <a href="http://novatowerb.test/fr/articles" class="text-gray-500 font-semibold hover:text-purple-500"> FR </a>
            </li>
            <li class="px-2 md:px-4">
                <a href="http://novatowerb.test/it/articles" class="text-gray-500 font-semibold hover:text-purple-500"> IT </a>
            </li>

        </ul>

    </header>
    <!-- header ends here -->

    <main class="mt-10">


        <div class="block lg:flex lg:space-x-2 px-2 lg:p-0 mt-10 mb-10">
            <!-- post cards -->
            <div class="w-full lg:w-2/4">
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
            <div class="w-full lg:w-2/4">
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
        </div>
        <div class="flex flex-col justify-center bg-grey-lighter">
            {{$articles->links()}}

        </div>


    </main>
    <!-- main ends here -->
    <script>

    </script>


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
