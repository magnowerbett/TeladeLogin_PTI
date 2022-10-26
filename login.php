<style>
    .formulario{
       
        text-align: center;
        color:antiquewhite;
        box-sizing: content-box;
    }
    #titulo{
        font-size: 16 px;
        color: whitesmoke;
    }
    .box1{
        box-shadow: 20px 10px 5px;
       
        
    }
</style>

<form  class="formulario"  method="post" >
    <h1 id="titulo">Faça seu Login!</h1>
    <b>Usuário:</b> <input id="usu" type="text" name="login" class="box">
    <b>Senha: </b> <input id="senha" type="password" name="senha" class="box">
    <input type="submit" name="acao" value="Enviar!">
    <input type="button" nome = "limpar" value="Cancelar" onclick="Limpar()" >
    <script>
        function Limpar(){
            const login = document.querySelector('#usu');
            const senha = document.querySelector('#senha');

            usu.value = '';
            senha.value = '';
        }
              
    </script>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer>&copy; Copyright 2022 Magno_Werbett</footer>
</form>
