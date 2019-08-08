<?php
$conecta = new mysqli("localhost","root",'',"chamado");
if (!$conecta) die ("<h1>Falha na coneco com o Banco de Dados!</h1>");
$sql = "SELECT assunto, data , status, id  FROM chamado";
$query = mysqli_query($conecta, $sql);
$qtde = mysqli_num_rows($query);
?>

<table style="width:100%">

</table>
<div class="">
  <a href="index.php"><h5></h5></a>     
</div>
<?php
mysqli_close($conecta);
?>


<table class="table align-items-center table-flush">
    <thead class="thead-light">
        <tr>
            <th scope="col">Assunto</th>
            <th scope="col">Data</th>
            <th scope="col">id</th>
            <th scope="col">Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php
        if ($qtde > 0)
        {
            while($linha = mysqli_fetch_array($query))
            {
            echo '<tr>';
            echo '<td>' . $linha['assunto'] . '<br>';    
            echo '<td>' . $linha['data'] . '<br>';
            echo '<td>' . $linha['id'] . '<br>';  
            echo '<td>' . $linha['status'] . '<br>';  
            echo '</tr>';
            }
        } 
    ?>
        <!--<tr>
            <th scope="row">
                <div class="media align-items-center">

                    <div class="media-body">
                        <span class="mb-0 text-sm">Assunto</span>
                    </div>
                </div>
            </th>
            <td>
                08/08/2019
            </td>
            <td>
                01
            </td>
            <td>


        <span class="badge badge-success">Resolvido</span>
            </td>
            <td class="text-right">
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#"> Ver resposta</a>
                        <a class="dropdown-item" href="#">Excluir</a>
                    </div>
                </div>
            </td>
        </tr>
        <tr>

            <th scope="row">
                <div class="media align-items-center">

                    <div class="media-body">
                        <span class="mb-0 text-sm">Vue Paper UI Kit PRO</span>
                    </div>
                </div>
            </th>
            <td>
                15/20/1655
            </td>
            <td>
                02
            </td>
            <td>
                <span class="badge badge-danger">Pendente</span>
            </td>
            <td class="text-right">
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#"> Ver resposta</a>
                        <a class="dropdown-item" href="#">Excluir</a>

                    </div>
                </div>
            </td>
        </tr>-->
    </tbody>
</table>