<x-message-banner msg="user signup has been done" class="success"/>
<h1>
    Esta página é sobre a Fabiana
</h1>
@include('common.inner', ["page"=>"this is abaut page"])

<style>
    .success{
        background-color:lightgreen;
        color:green;
        padding:3px 10 px;
        margin: 10 px;
        display: inline-block;
        border-radius: 2px;
    }
</style>