<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <title>
            @yield('title')
        </title>

        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        
        <style>
            body {
                overflow-x: hidden;
                font-family: 'Nunito', sans-serif;
                background-color: #010b13;
                color: #fff;
                display: grid;
                grid-template-areas: 
                    'header'
                    'main'
                    'footer';
                min-height: 100vh;
            }
            body::-webkit-scrollbar {
                width: 0.3em;
                height: 0.3em;
            }
            
            body::-webkit-scrollbar-track {
                box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            }
            
            body::-webkit-scrollbar-thumb {
                background-color: darkgrey;
                outline: 1px solid slategrey;
                border-radius: 5px;

            }
            header {
                margin-bottom: 5em;
            }
            .navbar {
                grid-area: header;
                border-bottom: 1px solid grey;
                position: fixed;
                width: 100%;
                z-index: 3;
                background-color: #010b13;
                
            }
            main {
                grid-area: main;
            }
            footer {
                grid-area: footer;
                text-align: center;
                border-top: 1px solid grey;
                margin-top: auto;
                padding: 5px 0 5px;
            }
            nav ul {
                list-style-type: none;
            }
            nav li {
                padding: 0 10px 0;
            }
            nav a {
                text-decoration: none;
            }
            nav .pages {
                display: inline-flex;
                padding-left: 20px;
            }
            nav .signIn {
                float: right;
                text-align: center;
                padding-right: 20px;
                display: flex;
            }
            nav .signIn > li > form > button {
                background-color: red;
            }
            .sign-out-btn {
                border-radius: 5px;
                padding: 10px;
                background-color: #778899;
                color: #fff;
                cursor: pointer;
            }
            @media (min-width: 768px) {
                .menu-btn {
                display: none;
                }
                .signIn-link {
                    display: none;
                }
            }
            @media (max-width: 768px) {
                .signIn {
                    visibility: hidden;
                }
                nav .pages {
                    display: block;
                    float: right;
                }
                a {
                    color: #fff;
                }

                .navbar ul {
                    margin: 0;
                    padding: 0;
                    list-style: none;
                    overflow: hidden;
                    background-color: #0D2C44;
                }
                .navbar li a {
                    display: block;
                    padding: 20px 20px 20px 20px;
                    text-decoration: none;
                    text-align: right;
                }

                .navbar li a:hover,
                .navbar .menu-btn:hover {
                    background-color: #f4f4f4;
                }

                .navbar .logo {
                    display: block;
                    float: left;
                    font-size: 2em;
                    padding: 10px 20px;
                    text-decoration: none;
                }

                /* menu */

                .navbar .pages {
                    clear: both;
                    max-height: 0;
                    transition: max-height .2s ease-out;
                }

                /* menu icon */

                .navbar .menu-icon {
                    cursor: pointer;
                    float: right;
                    padding: 28px 20px;
                    position: relative;
                    user-select: none;
                }

                .navbar .menu-icon .navicon {
                    background: #fff;
                    display: block;
                    height: 2px;
                    position: relative;
                    transition: background .2s ease-out;
                    width: 18px;
                    }

                .navbar .menu-icon .navicon:before,
                .navbar .menu-icon .navicon:after {
                    background: #fff;
                    content: '';
                    display: block;
                    height: 100%;
                    position: absolute;
                    transition: all .2s ease-out;
                    width: 100%;
                }

                .navbar .menu-icon .navicon:before {
                    top: 5px;
                }

                .navbar .menu-icon .navicon:after {
                    top: -5px;
                }

                /* menu btn */

                .navbar .menu-btn {
                    display: none;
                }

                .navbar .menu-btn:checked ~ .pages {
                    max-height: 50vh;
                }

                .navbar .menu-btn:checked ~ .menu-icon .navicon {
                    background: transparent;
                }

                .navbar .menu-btn:checked ~ .menu-icon .navicon:before {
                    transform: rotate(-45deg);
                }

                .navbar .menu-btn:checked ~ .menu-icon .navicon:after {
                    transform: rotate(45deg);
                }

                .navbar .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:before,
                .navbar .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:after {
                    top: 0;
                }
            }
           
        </style>

        <!-- other page's css -->
        @yield('css')
    <head>
    <body>
        <header>
            <nav class="navbar">
                <input class="menu-btn" type="checkbox" id="menu-btn" />
                <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                    <ul class="pages">
                        <li><a href="/">Home</a> </li>
                        @auth
                        <li><a href="/news_tech">Tech news</a> </li>
                        <li><a href="/feedback">Feedback</a> </li>
                        <div>
                            <form action="/sign_out" method="POST">
                                @csrf
                                <li class="signIn-link">
                                    <button type="submit">
                                        <span>Sign out</span>
                                    </button>
                                </li>
                            </form>
                        </div>
                        
                    @else
                        <li class="signIn-link"><a href="/sign_in">Sign in</a></li>
                    @endauth
                    </ul>

                    @auth
                    <div class="signIn">
                        <h3 style="font-size: 1em; color: red; padding: 0 20px 0 20px;">Hi {{auth()->user()->username}}!</h3>
                        <div style="display: grid; place-items: center; padding: 0 20px 0 20px;">
                            <form action="/sign_out" method="POST">
                                @csrf
                                <button type="submit" class="sign-out-btn">
                                    <span>Sign out</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <!-- <ul class="signIn" style="background-color: blue">
                        
                        <li class="signIn-link">
                            <form action="/" method="post">
                                @csrf
                                <button type="submit">
                                    <i style="color: violet;">Sign out</i>
                                </button>
                            </form>

                        </li>
                    </ul> -->
                    @else
                    <ul class="signIn">
                        <li><a href="/sign_in">Sign in</a></li>
                    </ul>
                    @endauth
            </nav>
        </header>
        
       
        <main>
            @yield('content')
        </main>
        <footer>
            <p>Data from News API</p>
            
            @php
                $ldate = date('d-m-Y');
                echo "<time datetime='$ldate'>" . $ldate . "</time>";
            @endphp
        </footer>
    </body>
</html