<?php
        $CONNECTIONFATURAMENTO = mysqli_connect('localhost','remoto','XTKfAFKPHNhWpSqW','sistemagsgfaturamento');

        $QUERY = mysqli_query($CONNECTIONFATURAMENTO, "SELECT CONTRATO.*, OV.*, SAIDA.* FROM tb_contratos AS CONTRATO LEFT JOIN tb_ordem_venda AS OV on CONTRATO.col_docvendas=OV.N_pedido LEFT JOIN tb_saida_semana AS SAIDA ON OV.Doc_SD=SAIDA.ORDEM WHERE CONTRATO.col_repres='12' AND CONTRATO.col_position='00002' AND OV.SAFRA='$SAFRA' GROUP BY OV.Doc_SD ORDER BY `CONTRATO`.`col_nome` ASC");
        $CONSULT = mysqli_num_rows($QUERY);

        if ($CONSULT > 0) {
            $QUERY1 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_contratos` WHERE col_position='00002' AND col_repres='12' AND SAFRA='$SAFRA'");
            $ROW1 = mysqli_num_rows($QUERY1);
            if($ROW1 > 0){
                while ($Linha = $QUERY1->fetch_array()){
                    $NOME = $Linha['col_nome'];
                    $CONTRATO = $Linha['col_docvendas'];
                    if ($Linha['col_un']=='KG') {
                        $QTDCONTRATO00002KG = $Linha['col_qtd_contrato']/50;
                    }else {
                        $QTDCONTRATO00002 = $Linha['col_qtd_contrato'];
                    }
                    $DATACONTRATO = $Linha['col_data'];
                }
            }

            $SOMAQUANTIORDQUITADA = mysqli_query($CONNECTIONFATURAMENTO, "SELECT OV.*,CONTRATO.*, SUM(Qtd_conf) AS SOMASE FROM tb_ordem_venda AS OV LEFT JOIN tb_contratos AS CONTRATO ON ov.N_pedido=contrato.col_docvendas WHERE contrato.col_position='00002' AND OV.UM='12' AND OV.SAFRA='$SAFRA' GROUP BY UMB");
            $COSULTORDQUIT = mysqli_num_rows($SOMAQUANTIORDQUITADA);
            if($COSULTORDQUIT = 1){
                while ($Linha = $SOMAQUANTIORDQUITADA->fetch_array()){
                    if ($Linha['UMB']=='KG') {
                        $Q00002KG = $Linha['SOMASE']/50;
                    }else{
                        $Q00002 = $Linha['SOMASE'];
                    }
                }
            }

            $S00002 =  ($QTDCONTRATO00002KG + $QTDCONTRATO00002) - ($Q00002 + $Q00002KG);

            $pdf->SetX(10);
            $pdf->SetFont('Arial', 'BI', 6);
            $pdf->SetFillColor(181, 181, 181);
            $pdf->Cell(195, 1,utf8_decode(' - '), 1, 2, 'R',true);
            $pdf->SetWidths(array(55, 36,18, 15, 17, 15.5, 20, 18.5));
            $pdf->SetAligns(array('L', 'R', 'C', 'C', 'R', 'R', 'R', 'R'));
            //set line heigth
            $pdf->SetLineHeight(4);

            $pdf->Row(Array(
                utf8_decode($NOME),
                '-',
                $CONTRATO,
                date("d/m/Y",strtotime($DATACONTRATO)),
                '-',
                number_format($QTDCONTRATO00002+$QTDCONTRATO00002KG, 0,',','.'),
                number_format($Q00002+$Q00002KG, 0,',','.'),
                number_format($S00002, 0,',','.')
            ));
            $pdf->SetX(10);
            $pdf->SetFont('Arial','',5);
            $pdf->SetWidths(array(55, 36,18, 15, 17, 15.5, 20, 18.5));
            $pdf->SetAligns(array('L', 'L', 'C', 'C', 'R', 'R', 'R', 'R'));
            //set line heigth
            $pdf->SetLineHeight(4);
            
	while($row = $QUERY->fetch_array()){
        $ORDS = $row['Doc_SD'];
        $SOMAQUANTIORDQUITADA = mysqli_query($CONNECTIONFATURAMENTO, "SELECT SUM(QUANTIDADE) AS SOMASE, SUM(VL_BRUTO) AS SOMABRUTO FROM `tb_saida_semana` WHERE ORDEM='$ORDS' AND TRANSPORTADORA!='' AND SAFRA='$SAFRA'");
        $COSULTORDQUIT = mysqli_num_rows($SOMAQUANTIORDQUITADA);
        if($COSULTORDQUIT > 0){
            while ($Linha = $SOMAQUANTIORDQUITADA->fetch_array()){
                if ($row['UNIDADE']=='KG') {
                    $OVREPQUIT = $Linha['SOMASE']/50;
                }else{
                    $OVREPQUIT = $Linha['SOMASE'];
                }
                $BRUTOVLOVQUITADA = $Linha['SOMABRUTO'];
            }
        }
        $QUERYOVQUITADA = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_ordem_venda` WHERE Doc_SD='$ORDS' AND SAFRA='$SAFRA'");
        $ROWOVQUITADA = mysqli_num_rows($QUERYOVQUITADA);
        if($ROWOVQUITADA > 0){
            while ($Linha = $QUERYOVQUITADA->fetch_array()){
                if($row['UMB'] == 'KG'){
                    $QUERYORDQUITADA = $Linha['Qtd_conf']/50;
                }else {
                    $QUERYORDQUITADA = $Linha['Qtd_conf'];
                } 
            }
        }

		$pdf->Row(Array(
            utf8_decode('   => '.$row['COD_RECEB']),
            utf8_decode($row['CIDADE']),
            $row['Doc_SD'],
            date("d/m/Y",strtotime($row['Data_doc'])),
            number_format($BRUTOVLOVQUITADA / $OVREPQUIT, 2,',','.'),
            number_format($QUERYORDQUITADA, 0,',','.'),
            number_format($OVREPQUIT, 0,',','.'),
            number_format($QUERYORDQUITADA - $OVREPQUIT, 0,',','.'),
        ));
	}

    }else{
    $QUERYMYSQL = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM tb_contratos WHERE col_position='00002' AND col_repres='12' AND SAFRA='$SAFRA' ORDER BY `col_nome` ASC");
    $CONSULTMYSQL = mysqli_num_rows($QUERYMYSQL);

    if ($CONSULTMYSQL > 0) {
        $QUERY2 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_contratos` WHERE col_position='00002' AND col_repres='12' AND SAFRA='$SAFRA'");
        $ROW2 = mysqli_num_rows($QUERY2);
        if($ROW2 > 0){
            while ($Linha = $QUERY2->fetch_array()){
                $NOME = $Linha['col_nome'];
                $CONTRATO = $Linha['col_docvendas'];
                $QTDCONTRATO00002 = $Linha['col_qtd_contrato'];
            }
        }
        $pdf->SetFont('Arial', 'BI', 6);
        $pdf->SetFillColor(181, 181, 181);
        $pdf->Cell(91, 3, $NOME.' - '.$CONTRATO, 1, 2, 'L');
        $pdf->SetFont('Arial', 'BI', 6);
        $pdf->Cell(195, 3,utf8_decode('CONTRATO REFERENTE À - ') .number_format($QTDCONTRATO00002, 0, ',', '.'). utf8_decode(' SC'), 1, 2, 'R',true);
        $pdf->SetX(10);
        $pdf->SetFont('Arial','',5);
        
    }
}
?>