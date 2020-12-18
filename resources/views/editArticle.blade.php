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
        <a href="{{"http://towerb.test/".App::getLocale()}}" class="px-2 lg:px-0 uppercase font-bold text-purple-800">
            {{__('logo')}}
        </a>
        <ul class="inline-flex items-center">
            <li class="px-2 md:px-4">
                <a href="{{"http://towerb.test/".App::getLocale()}}" class="text-gray-500 font-semibold hover:text-purple-500"> Home </a>
            </li>
            <li class="px-2 md:px-4">
                <a href="{{"http://towerb.test/".App::getLocale()."/articles"}}" class="text-gray-500 font-semibold hover:text-purple-500">{{__('articles')}}</a>
            </li>
            <li class="px-2 md:px-4">
                <a href="{{"http://towerb.test/".App::getLocale()."/articles/create"}}" class="text-gray-500 font-semibold hover:text-purple-500">{{__('create')}}</a>
            </li>
            <li class="px-2 md:px-4">
                <a href="{{"http://towerb.test/".App::getLocale()."/articles/create_all"}}" class="text-gray-500 font-semibold hover:text-purple-500">{{__('create_all')}}</a>
            </li>
            <li class="px-2 md:px-4">
                <a href="http://towerb.test/en/articles/{{$article->id}}/edit" class="text-gray-500 font-semibold hover:text-purple-500"> EN </a>
            </li>
            <li class="px-2 md:px-4">
                <a href="http://towerb.test/fr/articles/{{$article->id}}/edit" class="text-gray-500 font-semibold hover:text-purple-500"> FR </a>
            </li>
            <li class="px-2 md:px-4">
                <a href="http://towerb.test/it/articles/{{$article->id}}/edit" class="text-gray-500 font-semibold hover:text-purple-500"> IT </a>
            </li>

        </ul>


    </header>
    <!-- header ends here -->
    <main class="mt-10">

        <!-- component -->
        <!-- Container -->
        <div class="container mx-auto">
            <div class="flex justify-center px-6 my-12">
                <!-- Row -->
                <div class="w-full xl:w-4/4 lg:w-12/12 flex">
                    <!-- Col -->
                    <div
                        class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/5 bg-cover rounded-l-lg"
                        style="background-image: url('https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80')"
                    ></div>
                    <!-- Col -->
                    <div class="w-full lg:w-4/5 bg-white p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="pt-4 text-2xl text-center">{{__('edit')}}</h3>
                        <form method='POST' action="{{"http://towerb.test/".App::getLocale()."/articles/".$article->id}}">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="username">
                                    Title
                                </label>
                                <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="3" name='title' id="title">{{$article->title}}</textarea>

                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="username">
                                    Title
                                </label>
                                <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="6" name='body' id="body">{{$article->body}}</textarea>

                            </div>

                            <div class="mb-6 text-center">
                                <button class="button is-link">submit</button>
                            </div>

                        </form>
                    </div>
                </div>
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
