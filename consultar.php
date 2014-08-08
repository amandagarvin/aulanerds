<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>consulta aos Dados</title>
    </head>
    <body>
       
        <table>
            <!--aqui cria uma linha-->
            <tr>
                 
                <td>
                    <b> Nome do Aluno</b>
                </td>
                <td>
                    <b> Email do Aluno</b> 
                </td>
                
                <td>
                    <b> Idade do Aluno</b> 
                </td>
                <td>
                    <b> Materia</b> 
                </td>
                
            </tr> 
            
            <?php 
            include 'conexao.php';
            $vacarosa = "SELECT * FROM ALUNO ORDER BY NOME ASC;";
            $resultado = mysql_query($vacarosa);
                
            while ($row = mysql_fetch_array($resultado)) {


            ?>
         
                    
                    
          
            <tr>
                <td>
                    <?php echo $row ["nome"];?>
                </td> 
                <td>
                    <?php echo $row ["email"];?>
                </td>
                <td>
                    <?php echo $row ["idade"];?>
                </td>
                
                <td>
                    <?php echo $row ["mat"];?>
                </td>
            </tr>
            
            
            <?php       
            }
            
            
            ?>
        
            
            
            
        </table>



    </body>
</html>
