<article class="profileCard">
       <figure class="profileCard__figure">
            <img class="profileCard__image" src="{{$house->image}}" alt="image of {{$user->name}}'s house"/>
        </figure>
        <section class="profileCard__textSection">

        <header class=profileCard__textHeading>
            <h2> {{$user->name}} </h2>
        </header>
        <h3> Location </h3>
       <p> {{$user->location}}</p>


       <h3> Age </h3>
       <p> {{$user->age}}</p>



    </section>

    </article>