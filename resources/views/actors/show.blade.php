@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src='{{$actor['profile_path']}}' alt="actor photo"
                 class="w-64 md:w-96">
                 <ul class="flex items center mt-4 text-3xl">
                     @if ($social['facebook'])
                        <li class="mr-4">
                            <a href="{{$social['facebook']}}" title="Facebook">
                            <i class="fab fa-facebook-square"></i>
                            </a>
                        </li>  
                     @endif
                     @if ($social['twitter'])
                        <li class="mr-4">
                            <a href="{{$social['twitter']}}" title="Twitter">
                            <i class="fab fa-twitter-square"></i>
                            </a>
                        </li>  
                     @endif
                     @if ($social['instagram'])
                     <li class="mr-4">
                         <a href="{{$social['instagram']}}" title="instagram">
                         <i class="fab fa-instagram-square"></i>
                         </a>
                     </li>  
                  @endif
                    @if ($actor['homepage'])
                        <li class="mr-4">
                            <a href="{{$actor['homepage']}}" title="website">
                                <i class="fas fa-globe"></i>
                            </a>
                        </li>
                    @endif
                 </ul>
            </div>
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{$actor['name']}} </h2>
                <div class="flex flex-wrap items-center text-gray-400">
                    <span class="text-orange-400"><i class="fas fa-birthday-cake"></i></span>
                    <span class="lg:ml-2">
                        {{$actor['birthday']}} ({{$actor['age']}} years old) in 
                        {{$actor['place_of_birth']}}
                    </span>
                </div>

                <p class="text-gray-300 mt-8">
                    {{$actor['biography']}}
                </p>

                <h2 class="font-semibold mt-12">
                    Known For
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                    @foreach ($knownForMovies as $movie)
                        <div class="mt-4">
                            <a href="{{$movie['linkToPage']}}">
                                <img src='{{$movie['poster_path']}}' 
                                alt="known for"class="hover:opacity-75
                                transition ease-in-out duration-150">
                            </a>
                            <a href="{{$movie['linkToPage']}}" class="text-sm leading-normal block 
                            text-gray-400 hover:text-white mt-1">{{$movie['title']}}</a>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
    {{-- end actor info --}}
    <div class="credits border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Credits</h2>
            <ul class="list-disc leading-loose pl-5 mt-8">
                @foreach ($credits as $credit)
                    <li>{{$credit['release_year']}} &middot; <strong>{{$credit['title']}}</strong> as {{$credit['character']}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection