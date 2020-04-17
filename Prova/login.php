<html>
    <body>
    <head>
        <link href="css/pagina2.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    </head>
        <div class="container">
            <div class="tabelas">
                <div class="tabelas1">
                    <img src="img/logo.png" alt="some text" width=120 height=40>
                
                    <h2> Usuário criado com sucesso!</h2>
                    <table>
                        <tr>
                        <th>LOGIN:</th>
                        <td>


        <?php

                for ($i = 0; $i < 1; $i++)
                {
                    echo uniqid() , '<br />';
                }
        ?>
                        </td>   
                        </tr>
                    
                        <tr>
                        <th>SENHA:</th>
                        <td><?php echo $_POST['senha']; ?></td>
                        </tr>
                    </table><br>
                </div>
            <div class="tabelas2">
                <h3>Dados Cadastrados</h3>

                <table>
    
                        <tr>
                        <th>NOME:</th>
                        <td><?php echo $_POST['nome']; ?></td>
                        </tr>
                        <tr>
                            <th>SEXO:</th>
                            <td><?php echo $_POST['sexo']; ?></td>
                        </tr>
                        <tr> 
                            <th>PERFIL:</th>
                            <td><?php echo $_POST['perfil']; ?></td>
                        </tr>

                        <tr>
                            <th>DATA DE NASCIMENTO:</th>
                            <td><?php echo $_POST['dataNasc']; ?></td>
                        </tr>


            
                </table>
            </div>
        </div>
    </body>
</html>	

    