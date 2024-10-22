<div>
    <h2>Add New User</h2>
    <form action="addUser" method="post">
        @csrf
        <div class="input-form">
            <input type="text" placeholder="enter username" name="username" id="">
        </div>
        <div class="input-form">
            <input type="text" placeholder="enter city" name="city" id="">
        </div>
        <div class="input-form">
            <input type="text" placeholder="enter email" name="email" id="">
        </div>
        <div class="input-form">
            <button>Add New User</button>
        </div>

    </form>
    <!-- When there is no desire, all things are at peace. - Laozi -->
</div>

<style>
    input{
        color: black;
        border: 1px solid skyblue;
        height: 35px;
        width: 200px;
        border-radius: 3px;
        margin: 10px;
    }
    button{
        color: black;
        border: 1px solid skyblue;
        height: 35px;
        width: 200px;
        border-radius: 3px;
        margin: 10px;
        background-color: #fff;
        cursor: pointer;
    }
</style>
