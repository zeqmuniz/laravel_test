<div class="container">
    

    <form action="addUser" method="post">
    @csrf
        <h2>Add New User</h2>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User Name" name="username">
        </div>

        <div class="input-wrapper">
            <input type="text" placeholder="Enter User Email" name="email">
        </div>
        
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User City" name="city">
        </div>
         
        <div class="input-wrapper">
            <h3>Skills</h3>
            <input type="checkbox" name="skills" id="php" value="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skills" id="java" value="java">
            <label for="java">Java</label>
            <input type="checkbox" name="skills" id="node" value="node">
            <label for="node">Node</label>

        </div>
        <div>
            <button>Add New User</button>
        </div>
        

    </form>
    <!-- When there is no desire, all things are at peace. - Laozi -->
</div>

<style>
    *{
        margin:0;
        padding:o;
    }
    .container{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }   
  
    input[type=text]{
        border-radius: 4px;
        box-shadow:1px 1px 2px #333333;
        background: #cccccc;
        color: black;
        border: 1px solid #000000;
        height: 35px;        
        width: 300px;
        margin: 10px;
        font-size: 1.5em;
    }
    input[type=text]:hover{
        background: #ffffff;
        border: 1px solid #990000;
    }

    button{
        font-family: sans-serif;
        font-size: 1.5em;
        cursor: pointer;
        background: #006699;
        color:#ffffff;
        margin: 10px;
        justify-content: center;
        align-items: center;
    }
    
</style>
