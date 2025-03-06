<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    </head>
    <body class=" bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] w-screen items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full  text-sm not-has-[nav]:hidden container mx-auto px-4">
            @if (Route::has('login'))
                <nav class="flex items-center justify-between gap-4 p-4">
                    <!-- Logo Section -->
                    <div class="flex items-center justify-center">
                        <span class="ml-4 text-2xl font-bold text-gray-800"><span class="text-indigo-600">Code</span>Quiz</span>
                    </div>                    
                    
                    <!-- Auth Links Section -->
                    <div class="flex items-center gap-4">
                        @auth
                            <a
                                href="{{ route('quizzes') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                            >
                                Start Now
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] transition-all duration-300 text-[#1b1b18] border border-transparent hover:border-indigo-600 dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                            >
                                Log in
                            </a>
    
                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="inline-block px-5 py-1.5 hover:bg-indigo-500 duration-300 transition-all 
                                    dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18]
                                    dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal
                                    hover:text-white hover:border-indigo-600">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </div>
                </nav>
            @endif
        </header>
        <div class="flex bg-slate-100 items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0
        h-[calc(100vh-67.5px)]">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                <!-- Main Content Section -->
                <div class="flex flex-col items-center justify-center w-full mb-6">
                    <!-- Logo Section -->
                    <div class="bg-indigo-500 text-white p-4 rounded-full shadow-lg text-4xl font-semibold mb-4">
                        C
                    </div>
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">Welcome to CodeQuiz</h1>
                    <p class="text-center text-gray-600 mb-4">
                        Challenge your programming skills with fun quizzes and improve your coding knowledge!
                    </p>
                    <!-- Call to Action -->
                    <a href="{{ route('login') }}" class="inline-block px-6 py-2 duration-300
                    text-white bg-indigo-500 rounded-full hover:bg-indigo-600 transition-all">
                        Start Quiz
                    </a>
                </div>
            </main>
        </div>
    </body>
</html>
