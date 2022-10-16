<?php
error_reporting(0);
ini_set("display_errors", 0);
define('ROOT_PATH', dirname(__FILE__));
require('../../../../../controller/fpdf/fpdf.php');
define('FPDF_FONTPATH','font/');
class PDF extends FPDF
{
  function Header(){
    //DNV-GL-Certification-logo.png
      $this->Image('../../../../../css/logo/usga.png',195,10,20);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->Image('../../../../../css/logo/DNV-GL-Certification-logo.png',215,10,17);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->Image('../../../../../css/logo/Logomarca_Bonsucro_2016.png',230,8.5,25);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->Image('../../../../../css/logo/sap-s4-Hana.png',255,11.5,15);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->SetFont('Arial','B',15);//Definir Fonte e Tamanho
      $this->Cell(-1);//Mover para esquerda ou Direita
      $this->Cell(30,10,'USINA SERRA GRANDE S/A',0,1,'L');
      $this->Ln(-4);//Quebra de Página
  //***********************************************************//
      $this->SetFont('Arial','I',10);
      $this->Cell(-1);
      $this->Cell(30,10, utf8_decode('AÇÚCAR, ÁLCOOL & ENERGIA'),0,0,'L');
      $this->Ln(6);
  //***********************************************************//
      $this->SetFont('Arial','I',10);
      $this->Cell(-1);
      $this->Cell(30,10, utf8_decode('RELATÓRIO GERAL DE ENTRADA POR FORNECEDOR'),0,0,'L');
      $this->Ln(12);
  //***********************************************************//

  }
    var $widths;
    var $aligns;
    function SetWidths($w)
    {
        //Set the array of column widths
        $this->widths=$w;
    }
    function SetAligns($a)
    {
        //Set the array of column alignments
        $this->aligns=$a;
    }
    function Row($data)
    {
        //Calculate the height of the row
        $nb=0;
        for($i=0;$i<count($data);$i++)
            $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
        $h=5*$nb;
        //Issue a page break first if needed
        $this->CheckPageBreak($h);
        //Draw the cells of the row
        for($i=0;$i<count($data);$i++)
        {
            $w=$this->widths[$i];
            $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            //Save the current position
            $x=$this->GetX();
            $y=$this->GetY();
            //Draw the border
            $this->Rect($x,$y,$w,$h);
            //Print the text
            $this->MultiCell($w,5,$data[$i],0,$a);
            //Put the position to the right of the cell
            $this->SetXY($x+$w,$y);
        }
        //Go to the next line
        $this->Ln($h);
    }
    function CheckPageBreak($h)
    {
        //If the height h would cause an overflow, add a new page immediately
        if($this->GetY()+$h>$this->PageBreakTrigger)

        $this->AddPage($this->CurOrientation);
    }
    function NbLines($w,$txt)
    {
        //Computes the number of lines a MultiCell of width w will take
        $cw=&$this->CurrentFont['cw'];
        if($w==0)
            $w=$this->w-$this->rMargin-$this->x;
        $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
        $s=str_replace("\r",'',$txt);
        $nb=strlen($s);
        if($nb>0 and $s[$nb-1]=="\n")
            $nb--;
        $sep=-1;
        $i=0;
        $j=0;
        $l=0;
        $nl=1;
        while($i<$nb)
        {
            $c=$s[$i];
            if($c=="\n")
            {
                $i++;
                $sep=-1;
                $j=$i;
                $l=0;
                $nl++;
                continue;
            }
            if($c==' ')
                $sep=$i;
            $l+=$cw[$c];
            if($l>$wmax)
            {
                if($sep==-1)
                {
                    if($i==$j)
                        $i++;
                }
                else
                    $i=$sep+1;
                $sep=-1;
                $j=$i;
                $l=0;
                $nl++;
            }
            else
                $i++;
        }
        return $nl;
    }
}


date_default_timezone_set('America/Maceio');
$DATAHJ = strftime('%d de %B de %Y', strtotime('today'));
//COLOCAR OS DEVIDOS NOMES NAS VARIAVEIS
$linhaDeTitulo = 50;
$linhaFornecedor = 55;
$linhaItens = 60;
$primeiroColuna = 10; $primeiroColunaTamanho = 14;
$sgundaColuna = 24; $sgundaColunaTamanho = 65;
$depositoColuna = 89; $depositoColunaTamanho = 15;
$marcaColuna = 104; $marcaColunaTamanho = 32.5;
$referenciaColuna = 136.5; $referenciaColunaTamanho = 27.5;
$pedido = 164; $pedidoTamanho = 15;
$notaFiscal = 179; $notaFiscalTamanho = 12;
$requisicao = 191; $requisicaoTamanho = 12;
$depto = 203; $deptoTamanho = 10;
$requisitante = 213; $requisitanteTamanho = 20;
$ddataPedido = 233; $ddataPedidoTamanho = 13;
$quantidadePedido = 246; $quantidadePedidoTamanho = 12;
$unidadeMedida = 258; $unidadeMedidaTamanho = 7;
$valorTotalItemPedido = 265; $valorTotalItemPedidoTamanho = 22;
//------------------------------------------------------------//

$pdf = new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial','',8);
$pdf->Cell(18,0,utf8_decode('PROGRAMA:'),0,0,'L');
$pdf->Cell(5,0,utf8_decode('SistemaGSG - PHP/HTML'));
$pdf->Ln();
$pdf->SetFont('Arial','',8);
$pdf->Cell(18,6,utf8_decode('USUÁRIO:'),0,0,'L');
$pdf->Cell(5,6,utf8_decode('USUÁRIO TESTE'),0,0,'L');
$pdf->Ln();
$pdf->SetFont('Arial','',8);
$pdf->Cell(18,0,utf8_decode('DATA:'),0,0,'L');
$pdf->Cell(5, 0, date("d/m/Y"));
$pdf->Ln();



$pdf->SetXY($primeiroColuna, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($primeiroColunaTamanho, 4, utf8_decode('MATERIAL'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($sgundaColuna, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($sgundaColunaTamanho, 4, utf8_decode('DESCRIÇÃO'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($depositoColuna, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($depositoColunaTamanho, 4, utf8_decode('DEPÓSITO'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($marcaColuna, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($marcaColunaTamanho, 4, utf8_decode('MARCA'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($referenciaColuna, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($referenciaColunaTamanho, 4, utf8_decode('REFERÊNCIA'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($pedido, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($pedidoTamanho, 4, utf8_decode('PEDIDO'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($notaFiscal, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($notaFiscalTamanho, 4, utf8_decode('NF'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($requisicao, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 6.5);
$pdf->Cell($requisicaoTamanho, 4, utf8_decode('RC'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($depto, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($deptoTamanho, 4, utf8_decode('DEPTO'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($requisitante, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($requisitanteTamanho, 4, utf8_decode('REQUISIT.'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($ddataPedido, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($ddataPedidoTamanho, 4, utf8_decode('DATA'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($quantidadePedido, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($quantidadePedidoTamanho, 4, utf8_decode('QTD.'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($unidadeMedida, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($unidadeMedidaTamanho, 4, utf8_decode('UN.'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($valorTotalItemPedido, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($valorTotalItemPedidoTamanho, 4, utf8_decode('VALOR TOTAL'), 1, 2, 'C');
$pdf->Ln();
//-----------------------------------------------------------------------------------------------------------------------------------
$CONNECTIONINCLUDE = mysqli_connect('localhost','remoto','XTKfAFKPHNhWpSqW','sistemagsgalmoxarifado');
/*$ACUCAR = mysqli_query($CONNECTIONINCLUDE, "SELECT *
FROM `tb_relatorioentradafornecedor`
WHERE col_codigoFornecedor IN (2000002013,1200000008,1200005486)
GROUP BY col_codigoFornecedor,col_materialCodigoSAP
ORDER BY `tb_relatorioentradafornecedor`.`col_descricaoFornecedor` ASC, `tb_relatorioentradafornecedor`.`col_textoBreveMaterial` ASC");
$CONSULTAACUCAR = mysqli_num_rows($ACUCAR);*/

$pdf->SetWidths(array($primeiroColunaTamanho, $sgundaColunaTamanho, $depositoColunaTamanho, $marcaColunaTamanho, $referenciaColunaTamanho, $pedidoTamanho, $notaFiscalTamanho,$requisicaoTamanho,$deptoTamanho,$requisitanteTamanho,$ddataPedidoTamanho,$quantidadePedidoTamanho,$unidadeMedidaTamanho,$valorTotalItemPedidoTamanho,20,20,20,20,20,20));
$pdf->SetAligns(array('C', 'L', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'R', 'R', 'C', 'R'));
//-----------------------------------------------------------------------------------------------------------------------------------
include_once('requires/40000.php');
include_once('requires/40001.php');
include_once('requires/40002.php');
include_once('requires/40003.php');
include_once('requires/40004.php');
include_once('requires/40005.php');
include_once('requires/40006.php');
include_once('requires/40007.php');
include_once('requires/40008.php');
include_once('requires/40009.php');
include_once('requires/40010.php');
include_once('requires/40011.php');
include_once('requires/40012.php');
include_once('requires/40013.php');
include_once('requires/40014.php');
include_once('requires/40015.php');
include_once('requires/40016.php');
include_once('requires/40017.php');
include_once('requires/40018.php');
include_once('requires/40019.php');
include_once('requires/40020.php');
include_once('requires/40021.php');
include_once('requires/40022.php');
include_once('requires/40023.php');
include_once('requires/40024.php');
include_once('requires/40025.php');
include_once('requires/40026.php');
include_once('requires/40027.php');
include_once('requires/40028.php');
include_once('requires/40029.php');
include_once('requires/40030.php');
include_once('requires/40031.php');
include_once('requires/40032.php');
include_once('requires/40033.php');
include_once('requires/40034.php');
include_once('requires/40035.php');
include_once('requires/40036.php');
include_once('requires/40037.php');
include_once('requires/40038.php');
include_once('requires/40039.php');
include_once('requires/40040.php');
include_once('requires/40041.php');
include_once('requires/40042.php');
include_once('requires/40043.php');
include_once('requires/40044.php');
include_once('requires/40045.php');
include_once('requires/40046.php');
include_once('requires/40047.php');
include_once('requires/40048.php');
include_once('requires/40049.php');
include_once('requires/40050.php');
include_once('requires/40051.php');
include_once('requires/40052.php');
include_once('requires/40053.php');
include_once('requires/40054.php');
include_once('requires/40055.php');
include_once('requires/40056.php');
include_once('requires/40057.php');
include_once('requires/40058.php');
include_once('requires/40059.php');
include_once('requires/40060.php');
include_once('requires/40061.php');
include_once('requires/40062.php');
include_once('requires/40063.php');
include_once('requires/40064.php');
include_once('requires/40065.php');
include_once('requires/40066.php');
include_once('requires/40067.php');
include_once('requires/40068.php');
include_once('requires/40069.php');
include_once('requires/40070.php');
include_once('requires/40071.php');
include_once('requires/40072.php');
include_once('requires/40073.php');
include_once('requires/40074.php');
include_once('requires/40075.php');
include_once('requires/40076.php');
include_once('requires/40077.php');
include_once('requires/40078.php');
include_once('requires/40079.php');
include_once('requires/40080.php');
include_once('requires/40081.php');
include_once('requires/40082.php');
include_once('requires/40083.php');
include_once('requires/40084.php');
include_once('requires/40085.php');
include_once('requires/40086.php');
include_once('requires/40087.php');
include_once('requires/40088.php');
include_once('requires/40089.php');
include_once('requires/40090.php');
include_once('requires/40091.php');
include_once('requires/40092.php');
include_once('requires/40093.php');
include_once('requires/40094.php');
include_once('requires/40095.php');
include_once('requires/40096.php');
include_once('requires/40097.php');
include_once('requires/40098.php');
include_once('requires/40099.php');
include_once('requires/40100.php');
include_once('requires/40101.php');
include_once('requires/40102.php');
include_once('requires/40103.php');
include_once('requires/40104.php');
include_once('requires/40105.php');
include_once('requires/40106.php');
include_once('requires/40107.php');
include_once('requires/40108.php');
include_once('requires/40109.php');
include_once('requires/40110.php');
include_once('requires/40111.php');
include_once('requires/40112.php');
include_once('requires/40113.php');
include_once('requires/40114.php');
include_once('requires/40115.php');
include_once('requires/40116.php');
include_once('requires/40117.php');
include_once('requires/40118.php');
include_once('requires/40119.php');
include_once('requires/40120.php');
include_once('requires/40121.php');
include_once('requires/40122.php');
include_once('requires/40123.php');
include_once('requires/40124.php');
include_once('requires/40125.php');
include_once('requires/40126.php');
include_once('requires/40127.php');
include_once('requires/40128.php');
include_once('requires/40129.php');
include_once('requires/40130.php');
include_once('requires/40131.php');
include_once('requires/40132.php');
include_once('requires/40133.php');
include_once('requires/40134.php');
include_once('requires/40135.php');
include_once('requires/40136.php');

/*
$pdf->SetXY($primeiroColuna, $linhaItens);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($primeiroColunaTamanho, 4, utf8_decode('691008'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($sgundaColuna, $linhaItens);
$pdf->SetFont('Arial', '', 7);
$pdf->MultiCell($sgundaColunaTamanho, 4, utf8_decode('ROTOR NM021-1L06 NETZSCH NMP5024524'), 1, 'L',false);
$pdf->Ln();
$pdf->SetXY($depositoColuna, $linhaItens);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($depositoColunaTamanho, 4, utf8_decode('RC2703'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($marcaColuna, $linhaItens);
$pdf->SetFont('Arial', '', 7);
$pdf->MultiCell($marcaColunaTamanho, 4, utf8_decode('NETZSCH'), 1, 'C',false);
$pdf->Ln();
$pdf->SetXY($referenciaColuna, $linhaItens);
$pdf->SetFont('Arial', '', 7);
$pdf->MultiCell($referenciaColunaTamanho, 4, utf8_decode('NMP5023303'), 1, 'C',false);
$pdf->Ln();
$pdf->SetXY($pedido, $linhaItens);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($pedidoTamanho, 4, utf8_decode('4500281099'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($notaFiscal, $linhaItens);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($notaFiscalTamanho, 4, utf8_decode('6298-3'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($requisicao, $linhaItens);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($requisicaoTamanho, 4, utf8_decode('10225463'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($depto, $linhaItens);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($deptoTamanho, 4, utf8_decode('L04'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($requisitante, $linhaItens);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($requisitanteTamanho, 4, utf8_decode('HERMANI'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($ddataPedido, $linhaItens);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($ddataPedidoTamanho, 4, utf8_decode('01.07.2022'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($quantidadePedido, $linhaItens);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($quantidadePedidoTamanho, 4, utf8_decode('1'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($unidadeMedida, $linhaItens);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($unidadeMedidaTamanho, 4, utf8_decode('PC'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($valorTotalItemPedido, $linhaItens);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($valorTotalItemPedidoTamanho, 4, utf8_decode('861,54'), 1, 2, 'R');
$pdf->Ln();*/
$pdf->OutPut(I,"RelatorioGeralFornecedor.PDF");
?>
