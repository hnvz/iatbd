<article>
<form class="create-form__form" action="/applications/accept/{{$applications->id}}" method="POST">
        @csrf
<h3 class="gridCard__application__heading"> Petsitting Application for
        {{$pet->name}} sent by {{$sender->name}} </p>
<button class="create-form__button" type="submit">Accept</button>

</form>

<form class="create-form__form" action="/applications/reject/{{$applications->id}}" method="POST">
        @csrf
<button class="create-form__button" type="submit">Reject</button>

</form>
</article>