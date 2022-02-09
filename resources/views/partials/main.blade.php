<div class="main_contain">
    <span class="current">CURRENT SERIES</span>
    <div class="comics_contain">
         @foreach($comics_array as $comic) 
            <div class="comic_card">
                <a href="#">
                    <img class="comic_poster" src="{{ $comic['thumb'] }}" 
                        alt="">
                    <span class="comic_title">{{ $comic['title'] }}</span>
                </a>
            </div>
         @endforeach 
        
    </div>
</div>