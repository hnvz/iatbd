<article class="profileCard a-popup">
        <figure class="profileCard__figure">
            <img class="profileCard__image" src="{{$pet->image}}" alt="{{$pet->name}}"/>
        </figure>
        <section class="profileCard__textSection">

        <header class=profileCard__textHeading>
            <h2> {{$pet->name}} </h2>
        </header>
        <h3> Owner </h3>
       <p> {{$owner->name}}</p>


       <h3> Type of animal </h3>
       <p> {{$pet->type}}</p>


       <h3> Petsitter needed </h3>
       <p> from {{$pet->startdate}} to {{$pet->enddate}}</p>

       <h3> Hourly Rate </h3>
       <p> €{{$pet->hourly_rate}} per hour</p>

       <h3> Details </h3>
       <p> {{$pet->description}}</p>
       
    <a class="profileCard__link" href="/pets/application/{{$pet->id}}"> Send Application to owner </a>
        

    
        <!-- <a class="sushiCard_back_to_home" href="/sushi"> Back to home </a> -->
    </section>
    </article>