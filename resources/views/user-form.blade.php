<div class="container">
    


    <form action="addUser" method="post">
    @csrf
        <h2 class="title">Cadastrar Usuário</h2>
        <div class="input-wrapper">
            <input type="text" placeholder="Nome" name="username" value="{{old('username')}}" class="{{$errors->first('username')?'input-error':''}}">
            <span style="color:red">@error('username'){{$message}}@enderror</span>
        </div>

        <div class="input-wrapper">
            <input type="text" placeholder="Email" name="email" value="{{old('email')}}" class="{{$errors->first('email')?'input-error':''}}">
            <span style="color:red">@error('email'){{$message}}@enderror</span>
        </div>
        
        <div class="input-wrapper">
            <input type="text" placeholder="Cidade" name="city" value="{{old('city')}}" class="{{$errors->first('city')?'input-error':''}}">
            <span style="color:red">@error('city'){{$message}}@enderror</span>
        </div>
         
        <div class="input-checkbox">
            <h2 class="title">Habilidades</h2>
            <input type="checkbox" name="skills" id="php" value="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skills" id="java" value="java">
            <label for="java">Java</label>
            <input type="checkbox" name="skills" id="node" value="node">
            <label for="node">Node</label>

        </div>
        <div  class="center">
            <button>SALVAR</button>
            <button>SALVAR</button>
            
            
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
        display: grid;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .title{
        text-align: center;
        font-size: 1.5em;
        padding: 10px;
    }
  
    input[type=text]{
        border-radius: 4px;
        box-shadow:1px 1px 2px #333333;
        background: #cccccc;
        color: black;
        border: 1px solid #000000;
        height: 35px;        
        width: 350px;
        margin: 10px;
        font-size: 1em;
    }
    input[type=text]:hover{
        background: #ffffff;
        border: 1px solid #990000;
    }

    .input-checkbox{
        
        align-items: center;
        margin: 10px;
        text-align: center;
        
    }
    .center{
        text-align: center;
        padding: 20px;
    }

    button{
        
        font-size: 1em;
        cursor: pointer;
        background: #006699;
        color:#ffffff;
        height: 35px;        
        width: 100px;
          
        
        
    }
    form{
        background: skyblue;
        
        
    }
    .input-error{
        border:1px solid red;
        color:red;

    }
    
</style>
