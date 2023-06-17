@foreach ($chats as $c)
{{ $c->envoyer_msg }}
@endforeach

<form action="" method="POST">
    @csrf 
    <input type="text" name="rtrm" value="rtrm">
</form>