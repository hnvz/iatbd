<li class="a-popup u-list-style-none gridCard">
    <article class="gridCard__article__admin">

    <h3 class="gridCard__application__heading"> Sent by </h3>
        <p class="gridCard__application__text"> @foreach($sender as $sender)
            {{$sender->name}}@endforeach </p>
            <p class="gridCard__application__text"> Current status: {{$application->status}} </p>


        <form class="create-form__form" action="/applications/delete/{{$application->id}}" method="POST">
                @csrf
        
        <button class="create-form__button" type="submit">Delete</button>

        </form>
    </article>


</li>