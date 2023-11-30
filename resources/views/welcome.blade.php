<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OmniFood</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
  
            *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            }
            /* .customer-section{
            
            } */
            .Alpha{
                margin-left: 30px; 
                display: flex; 
                font-size: larger;
                }
                .Ab{
                    height: 60px; 
                    width: 40px; 
                    margin-top: -7px;
                }
                .topicons{
                    display: flex; 
                    margin-left: 250px;
                }
                .top{
                    display: flex;
                    padding-top: 10px;
                }
                .topicons1{
                    margin-left: 40px; 
                    margin-top: 35px;
                }
                .topicons1:hover{
                    cursor: pointer;
                    }
            
                .topicons2{
                    height: 40px;
                    border-radius: 7px; 
                    font-size: medium; 
                    background-color: tomato; 
                    margin: 25px; color: white; 
                    margin-left: 50px;
                    cursor: pointer;
                }
                .Body{
                    font-size: xx-large;
                    margin-bottom: 10px
                }
                .Body2{
                    margin-bottom: 15px
                }
                .B1{
                    background-color: tomato; 
                    border-radius: 7px; 
                    padding: 20px;
                    cursor: pointer;
                }
                .B2{
                    margin-left: 15px; 
                    background-color: white; 
                    padding: 20px; 
                    border-radius: 7px;
                    cursor: pointer;
                }
                .Last{
                    display: flex;
                }
                .Eat{
                    height: 400px; 
                    width: 500px; 
                    margin-left: 400px;
                  
                }
                .Health{
                    margin: 10px;
                    margin-right: 10px;
                }
                .Fit{
                    height: 500px;
                }
            .testimonial-section{
            display: grid;
            grid-template-columns: 55% 45%;
            gap: 20px;
            margin: 20px;
            background-color: antiquewhite;
            }
            .customer-section{
                display: grid;
            
            }
            
            .gallary-section{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 20px;
            }
            .gallary>img{
            width: 100%;
            height: 100%;
            transition: 1s;
            }
            .gallary>img:hover{
            transform: scale(1.2);
            }
            
            .gallary{
            overflow: hidden;
            }
            .sub-customer{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            }
            .sub-customer img{
            height: 50px;
            border-radius: 50%;
            width: 50px;
            }
            .customer-section{
            padding-top: 200px;
            }
            .names{
            padding-top: 20px;
            }
            
             </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-100" ml:40>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <body class="Fit">
                <div class="Background">
                    <div class="top">
                        <div class="Alpha">
                            <h1>OMNIFOO</h1>
                            <img class="Ab" src="./Infinity.png" alt="" ;>
            
                            <h1>D</h1>
                        </div>
            
                        <div class="topicons">
                            <h3 class="topicons1">How it works</h3>
                            <h3 class="topicons1">Meals</h3>
                            <h3 class="topicons1">Testimonials</h3>
                            <h3 class="topicons1">Pricing</h3>
            
                        </div>
                        <button class="topicons2">Try for free</button>
                    </div>
            
                    <div class="Last">
            
                        <div class="Health">
                            <div>
                                <h1 class="Body">A healthy meal <br> delivered to your <br> door, every single day</h1>
            
                                <h2 class="Body2">The smart 365-day-per-year food <br> subscription that will make you eat <br>
                                    healthy again. Tailored to your <br> personal tastes and <br> nutritional needs.</h2>
                            </div>
                            <div>
                                <button class="B1">Start eating well</button>
                                <button class="B2">learn more ↓ </button>
                            </div>
                        </div>
                        <div >
                            <img class="Eat" src="./Eating.jpg">
                        </div>
            
                    </div>
            
                </div>
              <div class="testimonial-section">
                {{-- <button>Login</button> <button>Registeration</button> --}}
                <div class="customer-section">
                  <div class="sub-section">
                    <p class="testimonial">TESTIMONIALS</p>
                    <h1 class="testimony">Once you try it, you can't go back</h1>
                  </div>
                  
                  <div class="sub-customer">
                    <div class="customers">
                      <img src="dave.jpg" />
                      <p>
                        Inexpensive, healthy and great-tasting meals, without even having
                        to
                      </p>
                      <p>order manually! It feels truly magical</p>
                    <p class="names">- Dave Bryson</p>
                  </div>
          
                    <div class="customers">
                      <img src="ben.jpg" />
                      <p>
                        The AI algorithm is crazy good, it chooses the right meals for me
                        every
                      </p>
                      <p>time. It's amazing not to worry about food anymore!</p>
                      <p class="names">- Ben Hadley</p>
                  </div>
                    <div class="customers">
                      <img src="steve.jpg" />
                      <p>
                        Omnifood is a life saver! I just started a company, so there's no
                        time for
                      </p>
                      <p>cooking. I couldn't live without my daily meals now!</p>
                      <p class="names">- Steve Miller</p>
                  </div>
          
                    <div class="customers">
                      <img src="hannah.jpg" />
                      <p>
                        I got Omnifood for the whole family, and it frees up so much time!
                        Plus,
                      </p>
                      <p>everything is organic and vegan and without plastic.</p>
                      <p class="names">- Hannah Smith</p>
                  </div>
                  </div>
                </div>
                
                  <div class="gallary-section">
                  <figure class="gallary"><img src="gallery-1.jpg" alt="" /></figure>
                  <figure class="gallary"><img src="gallery-2.jpg" alt="" /></figure>
                  <figure class="gallary"><img src="gallery-3.jpg" alt="" /></figure>
                  <figure class="gallary"><img src="gallery-4.jpg" alt="" /></figure>
                  <figure class="gallary"><img src="gallery-5.jpg" alt="" /></figure>
                  <figure class="gallary"><img src="gallery-6.jpg" alt="" /></figure>
                  <figure class="gallary"><img src="gallery-7.jpg" alt="" /></figure>
                  <figure class="gallary"><img src="gallery-8.jpg" alt="" /></figure>
                  <figure class="gallary"><img src="gallery-8.jpg" alt="" /></figure>
                </div>
              </div>
            </div>
            </body>
</html>
