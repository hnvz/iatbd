<article class="sushiCard a-popup">
        <figure class="sushiCard__figure">
            <img class="sushiCard__image" src="{{$pet->image}}" alt="{{$pet->name}}"/>
        </figure>
    <section class="sushiCard__text">
        
       <p> {{$pet->description}}</p>
       <p> {{$pet->owner}}</p>

    </section>
    <section class="sushiCard__btnSection">
        <button class="sushiCard__button" >Send request </button>
        <a href="/pets/application/{{$pet->id}}"> send req </a>
        <a href="/users/{{$pet->owner}}"> Show owner </a>
        <!-- <a class="sushiCard_back_to_home" href="/sushi"> Back to home </a> -->
    </section>
    </article>