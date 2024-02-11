

<div>
    <!-- An unexamined life is not worth living. - Socrates -->
    <form action="{{route('vou.show', 1 )}}">
       <label for="particular"></label>
        <input name="particular" type="text" value="particulars">

        <label for="amount"></label>
        <input name="amount" type="text" value="amount">
        <input type="submit" value="{{$name}}">
        {{$color}}
    </form>
</div>
