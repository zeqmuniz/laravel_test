<div>
    <h2>Add New User</h2>
    <form action="addUser" method="post">
    @csrf
        <div class="check">
            <h4>User Skills</h4>
            <input type="checkbox" name="skill[]" id="php" value="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" id="java" value="java">
            <label for="java">JAVA</label>
            <input type="checkbox" name="skill[]" id="node" value="node">
            <label for="node">NODE</label>
        </div>
        <div>
            <h4>User Gender</h4>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>
        </div>
        <div>
            <h4>User Age</h4>
            <input type="range" name="age" id="age" max="100" min="18">
        </div>
        <div>
            <h4>User City</h4>
            <select name="city">
                <option value="caragua">Caraguatatuba</option>
                <option value="saoSeba">São Sebastião</option>
                <option value="ubatuba">Ubatuba</option>
            </select>
        </div>
        <div>
            <button>Add New User</button>
        </div>
        

    </form>
    <!-- When there is no desire, all things are at peace. - Laozi -->
</div>

<style>
  
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
    .check{
        color: orange;
        

    }
</style>
