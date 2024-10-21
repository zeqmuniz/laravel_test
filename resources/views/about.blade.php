<x-message-banner msg="user signup has been done" class="success"/>
<x-message-banner msg="Server is dow" class="error"/>
<x-message-banner msg="No product found" class="warning"/>
<h1>
    About page
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
    .error{
        background-color:yellow;
        color:red;
        padding:3px 10px;
        margin: 10px;
        display: inline-block;
        border-radius: 2px;
    }
    .warning{
        background-color:#ffa50094;
        color:orange;
        padding:3px 10px;
        margin: 10px;
        display: inline-block;
        border-radius: 2px;
    }
</style>