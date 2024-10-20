<x-message-banner msg="Usuário adicionado com Sucesso!" class="success"/>
<x-message-banner msg="Usuário logout com Sucesso!" class="success"/>
<x-message-banner msg="No user found" class="error"/>
<x-message-banner msg="some users are missing" class="warning"/>
@include('common.header')

<h1>Pagina Home</h1>
<!-- @includeif('common.inner', ["page"=>"This is page home"]) -->

<style>
    .success{
        background-color:lightgreen;
        color:green;
        padding:3px 10 px;
        margin: 10 px;
        display: inline-block;
        border-radius: 2px;
    }
    .error{
        background-color:yellow;
        color:red;
        padding:3px 10 px;
        margin: 10 px;
        display: inline-block;
        border-radius: 2px;
    }
    .warning{
        background-color:#ffa50094;
        color:orange;
        padding:3px 10 px;
        margin: 10 px;
        display: inline-block;
        border-radius: 2px;
    }
</style>