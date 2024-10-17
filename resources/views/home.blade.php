

<h1>Pagina Home</h1>
<!--<a href="/about/ezequiel">Sobre Ezequiel</a>
<a href="/about/peter">Sobre o Peter</a>
<a href="/">Welcome Page</a>-->

<!-- <p>Esta é uma pagina do projeto em Laravel</p>

<h2>Aqui você tem o {{$name}}, que foi passano no controler</h2> -->

<!-- <p>Também pode gerar numero aleatorio nesta função rand</p> -->

<!-- <h2>Número:{{rand()}}</h2> -->

<h1>{{$name}}</h1>

<div>
    @if($name=='anil')
    <h2>this is anil</h2>
    @elseif($name=='sam')
    <h2>this is sam</h2>
    @else
    <h2>other user</h2>
    @endif
</div>

<div>
    @foreach($users as $user)
    <h3>{{$user}}</h3>
    @endforeach
</div>

<div>
    @for($i=0;$i<=10;$i++)
    <h4>{{$i}}</h4>
    @endfor

</div>