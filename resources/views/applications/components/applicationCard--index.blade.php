<li class=" u-list-style-none gridCard">
       
    <a href="/applications/received/{{$application->id}}">
    <article>

        <h3 class="gridCard__application__heading"> Sent by </h3>
        <p class="gridCard__application__text"> @foreach($sender as $sender)
            {{$sender->name}}@endforeach </p>
            <p class="gridCard__application__text"> Current status: {{$application->status}} </p>
            <p class="gridCard__application__text"> Click to show more details </p>
    </section>
    </article>
</a>
</li>