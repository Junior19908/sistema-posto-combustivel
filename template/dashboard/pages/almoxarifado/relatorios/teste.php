<?php
$CONNECTIONINCLUDE = mysqli_connect('localhost','remoto','XTKfAFKPHNhWpSqW','sistemagsgalmoxarifado');
$ACUCAR = mysqli_query($CONNECTIONINCLUDE, "SELECT *,COUNT(col_codigoFornecedor) AS CONTAGEMCOD FROM `tb_relatorioentradafornecedor` GROUP BY col_codigoFornecedor,col_materialCodigoSAP ORDER BY `col_descricaoFornecedor` ASC, col_textoBreveMaterial ASC");
$ACUCAR1 = mysqli_query($CONNECTIONINCLUDE, "SELECT col_codigoFornecedor,col_descricaoFornecedor,COUNT(col_codigoFornecedor) AS CONTAGEMCOD2 FROM `tb_relatorioentradafornecedor` WHERE col_codigoFornecedor='1200000008'");
$COSULTORDQUIT = mysqli_num_rows($ACUCAR1);
if($COSULTORDQUIT >= 0){
    while ($Linha = $ACUCAR1->fetch_array()){
        $contagemDeFornecedor = $Linha['CONTAGEMCOD2'];
        $nomeDoFornecedor = $Linha['col_descricaoFornecedor'];
    }
}
$count = 0;
while ($row = mysqli_fetch_assoc($ACUCAR)) {
  if ($contagemDeFornecedor == 5) {
      if ($contagemDeFornecedor == 5) {
          echo("<h3>".$row['col_descricaoFornecedor']."</h3>");
          echo "<br>";
      }else {
        // code...
      }
      echo($row['col_materialCodigoSAP']);
      echo(" - ".$row['col_textoBreveMaterial']);
      echo(" - ".$row['col_descricaoFornecedor']);
      echo "<br>";
    }
    $count++;
  }
?>
