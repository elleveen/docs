<style>
    a{
        text-decoration: none;
    }
    h3{
        color: #314448;
        margin-left: 41%;
    }
    h2{
        color: #314448;
        margin-top: 50px;
        margin-left: 45%;
    }
    form{
        display: flex;
        flex-direction: column;
        margin-left: 315px;

    }
    form>*{
        margin-top: 20px;
        margin-left:30px ;
    }
    label{
        font-size: 20px;
        width: 200px;
        color: #314448;

    }
    label>input{
        width: 1155px;
        height: 40px;
        outline: none;
        margin-top: 10px;
        border:none;
        color: #314448;
        background-color: #c7d3bf;
    }
    input:focus{
        border-bottom: 2px solid #536d6c;
    }
    button{
        color: #314448;
        margin-left: 400px;
        margin-top: 40px;
        font-size: 20px;
        width: 435px;
        height: 40px;
        border:none;
    }
    button:hover{
        border:none;
        cursor: pointer;
        background-color: #c7d3bf;
        color: white;

    }
</style>
<form method="post">
    <label>Название кабинета<input type="text" name="name"></label>
    <label>Номер кабинета<input type="text" name="number"></label>
    <label>Количество мест<input type="number" name="number_of_seats" ></label>
    <label>Площадь<input type="number" name="square"></label>
    <button>Добавить</button>
</form>
</form>