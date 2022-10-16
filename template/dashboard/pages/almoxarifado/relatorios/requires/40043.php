<?php
$ACUCAR = mysqli_query($CONNECTIONINCLUDE, "SELECT tb_relatorioentradafornecedor.*, tb_marcareferencia.col_marcaDescricao,tb_marcareferencia.col_referenciaDescricao,tb_materiais.col_depositoMaterial
FROM `tb_relatorioentradafornecedor`
LEFT JOIN `tb_marcareferencia` ON tb_relatorioentradafornecedor.col_materialCodigoSAP = tb_marcareferencia.col_materialCodigoSAP
LEFT JOIN `tb_materiais` ON tb_relatorioentradafornecedor.col_materialCodigoSAP = tb_materiais.col_codigoMaterial
WHERE col_posicao='40043'
GROUP BY tb_relatorioentradafornecedor.col_codigoFornecedor,tb_relatorioentradafornecedor.col_materialCodigoSAP
ORDER BY `tb_relatorioentradafornecedor`.`col_descricaoFornecedor` ASC, `tb_relatorioentradafornecedor`.`col_textoBreveMaterial` ASC");
$CONSULTAACUCAR = mysqli_num_rows($ACUCAR);

if ($CONSULTAACUCAR > 0) {
    //$pdf->SetXY($primeiroColuna, $linhaFornecedor);

    $ACUCAR1 = mysqli_query($CONNECTIONINCLUDE, "SELECT col_descricaoFornecedor,COUNT(col_codigoFornecedor) AS CONTAGEMCOD2
    FROM `tb_relatorioentradafornecedor` WHERE col_posicao='40043'");
    $COSULTORDQUIT = mysqli_num_rows($ACUCAR1);
    if($COSULTORDQUIT >= 0){
        while ($Linha = $ACUCAR1->fetch_array()){
            $nomeDoFornecedor = $Linha['col_descricaoFornecedor'];
        }
    }
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(0, 4, utf8_decode($nomeDoFornecedor), 1, 2, 'C');

    while ($row = mysqli_fetch_assoc($ACUCAR)) {
        $pdf->SetFont('Arial', '', 6);
        $pdf->Row(Array(
            utf8_decode($row['col_materialCodigoSAP']),
            utf8_decode($row['col_textoBreveMaterial']),
            utf8_decode($row['col_depositoMaterial']),
            utf8_decode($row['col_marcaDescricao']),
            utf8_decode($row['col_referenciaDescricao']),
            utf8_decode($row['col_pedido']),
            utf8_decode($row['col_numeroNotaFiscal']),
            utf8_decode($row['col_requisicao']),
            utf8_decode($row['col_grupoDeCompradores']),
            utf8_decode($row['col_requisitanteRC']),
            date("d/m/Y",strtotime($row['col_dataImportacao'])),
            number_format($row['col_quantidade'], 3,',','.'),
            utf8_decode($row['col_unidadeMedida']),
            'R$: '. number_format($row['col_valorMaterialSAP'], 2,',','.'),
        ));

    }
    $pdf->Ln();
}
