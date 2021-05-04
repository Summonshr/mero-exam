<x-guest-layout>
    <div class="site text-gray-800 bg-gray-100 min-h-screen flex flex-col justify-between relative">
        <header class="flex justify-between container mx-auto">
            <div class="flex flex-wrap justify-between md:justify-between sm:pb-0 w-full items-center">
                <h1 class="flex flex-wrap justify-center md:justify-between md:px-16 p-4 items-center"><a href="/"><img alt="logo" class="align-middle h-32" height="106" width="127" src="/images/logo.png"></a></h1>
                <div class="flex items-center justify-between pr-8">
                    <div class="bg-blue-700 p-2 w-8 h-8 flex justify-center sm:hidden text-gray-100 items-center"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" color="white">
                            <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
                        </svg></div>
                    <ul class="md:px-8 mr-0 md:mr-8 sm:flex flex-wrap justify-between hidden">
                        @auth
                            <li><a class="text-sm sm:text-base font-bold p-2 rounded mr-1 md:mr-8 text-indigo-700 hover:text-indigo-100 hover:bg-indigo-700 " href="/dashboard">Dashboard</a></li>
                        @else
                            <li>
                                <form action="/login">
                                    <input type="hidden" name="from" value="home-page">
                                    <x-jet-button>
                                    Sign In
                                    </x-jet-button>
                                </form>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </header>
        <div class="blend bg-left image bg-blue-900 w-full flex-grow animated fadeIn flex items-center">
            <div class="container mx-auto flex flex-wrap justify-between h-full">
                <div class="p-4 lg:w-1/2 md:p-16 m-auto py-12 text-gray-100 md:max-w-3xl ">
                    <h3 class="mb-4 text-4xl md:text-5xl leading-tight font-bold md:w-full">Don't stress, Do your <span class="text-orange-600">best</span><br> Forget the rest</h3>
                    <p class="mb-6 text-blue-200 font-semibold leading-normal text-lg">Gremaze.com is continuous evolving websites for practicing GRE exam.</p>
                    <ul>
                        <li>
                            <form action="/register">
                                <input type="hidden" name="from" value="home-page">
                                <x-jet-secondary-button >
                                    Start Now
                                </x-jet-button>
                            </form>

                        </li>
                    </ul>
                </div>
                <div class="lg:w-1/2 md:p-16 w-full"><img src="/images/main.jpeg" height="496" width="364" class="w-full max-w-2xl mx-auto bg-gray-200 p-2" alt=""></div>
            </div>
        </div>
        <div class="bg-blue-100 p-8 text-gray-500">
            <h3 class="w-full text-center font-bold">Keep in Touch</h3><a href="mailto:summonshr@gmail.com" class="w-full block cursor-pointer text-center text-gray-800 font-bold">summonshr@gmail.com</a>
        </div>
    </div>

</x-guest-layout>