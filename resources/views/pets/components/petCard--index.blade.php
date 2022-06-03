<li class="u-list-style-none u-grid-gap-2 gridCard" data-pet-type={{$pet->type}}>
    <a href="/pets/{{$pet->id}}">
    <article>
    
    <figure class="gridCard__figure"> 
        <img class="gridCard__image" src="{{$pet->image}}" alt="{{$pet->name}}"/>
    </figure>
    <header class="u-flex-v-center gridCard__header">
        <h2 class="gridCard__heading"> {{$pet->name}} </h2>
    </header>

    
    <section class=" u-flex-v-center gridCard__textSection">
        <span class="material-icons gridCard__icon" id="js--menuicon">pets</span>
        <p class="gridCard__text"> {{$pet->type}}</p>
    </section>


    <section class=" u-flex-v-center gridCard__textSection">
        <span class="material-icons gridCard__icon" id="js--menuicon">euro</span>
        <p class="gridCard__text"> {{$pet->hourly_rate}}/h</p>
    </section>

    <section class=" u-flex-v-center gridCard__textSection">
        <span class="material-icons gridCard__icon" id="js--menuicon">date_range</span>
        <p class="gridCard__text"> {{$pet->startdate}} to {{$pet->enddate}}</p>
    </section>
    </article>
</a>
</li>