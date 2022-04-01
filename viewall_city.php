<?php
include 'connect.php';
include'checklogin.php';
?>
<a href="reg_city.php">Adicionar Cidade</a>
<table border='1'>
    <tr>
        <th>
            Cidade
        </th>
        <th>
            ID
        </th>
        <th>
            Excluir
        </th>
    </tr>

<?php
$sq="select * from city";
$qu=mysqli_query($con,$sq);
while($f=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
        <td>
            <?php echo $f['idCidade']?>
        </td>
        <td>
            <?php echo $f['cidade']?>
        </td>
        <td>
            <a href="delete_city.php">Remover</a>
        </td>
    </tr>
    <?php
}
?>