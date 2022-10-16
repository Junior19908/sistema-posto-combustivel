<?php require_once '../../../../../../../include/verifica_user.php'; ?>
<?php require_once '../../../../../../../class/ligacoes.class.php'; ?>
<?php session_start();
require_once '../../../../../../../controller/user.php'; ?>
<?php
if ($type == 1 || $type == 4) {
} else {
    echo '<head>
            <script type="text/javascript">alert("Você não tem autorização!")</script>
            <meta http-equiv="refresh" content="0;url='.$link.'" />
        </head>';
}
if($rowNavio == 1){
    echo '<head>
            <script type="text/javascript">alert("Booking Criado!")</script>
            <meta http-equiv="refresh" content="0;url='.$linkBooking.'" />
        </head>';
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SistemaGSG | Lista de Contratos</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../../../../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../../../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../../../../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../../../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../../../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../../../../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../../../../plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
    <script>
    $(function() {
        $("#calendario").datepicker({ dateFormat: 'yy-mm-dd'}).val();
        $("#calend").datepicker({ dateFormat: 'yy-mm-dd'}).val();
        $("#calendcontrato").datepicker({ dateFormat: 'yy-mm-dd'}).val();
    });
        $(document).ready(function(){
        $("#myInput").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
    </script>
    <style>
        label,
        textarea {
            font-size: .8rem;
            letter-spacing: 1px;
        }

        textarea {
            padding: 10px;
            line-height: 1.5;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-shadow: 1px 1px 1px #999;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }
    </style>
    <link rel="shortcut icon" href="../../../../../../../css/ico/favicon.ico" type="image/x-icon" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="./" class="nav-link">Voltar</a>
                </li>
            </ul>
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input id="myInput" class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" href="../../../../../../../controller/logout/">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-success elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="../../../../../dist/img/LogoUSGA.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">SistemaGSG</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../../../../dist/img/<?php echo '' . $avatar . '' ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo '' . $nick . ''; ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-compact" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../../../../" class="nav-link">
                                        <i class="fab fa-connectdevelop nav-icon"></i>
                                        <p>Painel</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Administrativo
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-success right">8</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../bombas/" class="nav-link">
                                        <i class="fas fa-gas-pump"></i>
                                        <p>Entrada de Bombas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../bombas/alterar-cadastro-bombas/" class="nav-link">
                                        <i class="fas fa-gas-pump"></i>
                                        <p>Alterar Bombas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../fisico/" class="nav-link">
                                        <i class="fas fa-gas-pump"></i>
                                        <p>Entrada Estoque Fisico</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../fisico/alterar-cadastro-fisico/" class="nav-link">
                                        <i class="fas fa-gas-pump"></i>
                                        <p>Alterar Entrada Fisíco</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../movimentos/" class="nav-link">
                                        <i class="fas fa-gas-pump"></i>
                                        <p>Entrada de Movimento</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../movimentos/alterar-cadastro-movimentos/" class="nav-link">
                                        <i class="fas fa-gas-pump"></i>
                                        <p>Alterar Ent. de Movimento</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../cupom/" class="nav-link">
                                        <i class="fas fa-gas-pump"></i>
                                        <p>Registrar Cupom Avulso</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../cupom/alterar-cadastro-cupom/" class="nav-link">
                                        <i class="fas fa-gas-pump"></i>
                                        <p>Alterar Ent. de Terceiros</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p>
                                    Relatórios
                                    <i class="right fas fa-angle-left"></i>
                                    <span class="badge badge-warning right">7</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../conferencia/" class="nav-link">
                                        <i class="fas fa-chart-area nav-icon"></i>
                                        <p>Conferência</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <i class="fas fa-chart-bar nav-icon"></i>
                                        <p>Faturamento</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-globe-americas nav-icon"></i>
                                        <p>Mapa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../funcionarios/" class="nav-link">
                                        <i class="fas fa-car nav-icon"></i>
                                        <p>Funcionários</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../custo/" class="nav-link">
                                        <i class="fas fa-donate nav-icon"></i>
                                        <p>Custo</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../terceiros/" class="nav-link">
                                        <i class="fas fa-truck-moving nav-icon"></i>
                                        <p>Terceiros</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../fornecedor/" class="nav-link">
                                        <i class="fab fa-pagelines nav-icon"></i>
                                        <p>Fornecedor de Cana</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-id-card"></i>
                                <p>
                                    Cadastros
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-success right">2</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../matricula/" class="nav-link">
                                        <i class="fas fa-user-plus nav-icon"></i>
                                        <p>Criar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../matricula/alterar/" class="nav-link">
                                        <i class="fas fa-user-edit nav-icon"></i>
                                        <p>Alterar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-download"></i>
                                <p>
                                    Baixar Arquivo
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-success right">2</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../arquivo/conciliar/" class="nav-link">
                                        <i class="fas fa-file-alt nav-icon"></i>
                                        <p>Conciliar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../arquivo/excel/" class="nav-link">
                                        <i class="far fa-file-excel nav-icon"></i>
                                        <p>Excel</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-cloud-upload-alt"></i>
                                <p>
                                    Importar Arquivo
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-success right">4</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../import/cupom/" class="nav-link">
                                        <i class="fas fa-server nav-icon"></i>
                                        <p>Cupom</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../import/fornecedor/" class="nav-link">
                                        <i class="fas fa-server nav-icon"></i>
                                        <p>Fornecedor</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../import/funcionario/" class="nav-link">
                                        <i class="fas fa-server nav-icon"></i>
                                        <p>Funcionário</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../import/proprio/" class="nav-link">
                                        <i class="fas fa-server nav-icon"></i>
                                        <p>Próprio</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Posição de Açúcar</li>
                            </ol>
                        </div><!-- /.col -->
                        
                        <table class="table table-bordered text-center">
                        <tbody>
                            <td>
                                <button type="button" class="btn btn-block bg-gradient-warning btn-lg" data-toggle="modal" data-target="#ordemModal">Inserir Ordem de Venda</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block bg-gradient-primary btn-lg" data-toggle="modal" data-target="#ContratoModal">Inserir Contrato</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block bg-gradient-danger btn-lg" data-toggle="modal" data-target="#ovSaidaModal">Inserir Saída de Venda</button>
                            </td>
                        </tbody>
                        </table>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lista de Contratos - ZSD023</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-condensed">
                  <thead>
                    <tr>
                      <th style="text-align: center;">Cliente</th>
                      <th style="text-align: center;">Contrato</th>
                      <th style="text-align: center;">Nº Pedido</th>
                      <th style="text-align: center;">Material</th>
                      <th style="text-align: right;">Quantidade</th>
                      <th style="text-align: center;">Unidade</th>
                      <th style="text-align: center;">Data</th>
                    </tr>
                  </thead>
                    <?php  
                        // abre a conexão
                        $PDO = FaturamentoDB();
                        // SQL para selecionar os registros
                        $SQL_SELECT = "SELECT * FROM `tb_contratos` ORDER BY `tb_contratos`.`col_id` DESC";
                        // seleciona os registros
                        $resultado_conexao = $PDO->prepare($SQL_SELECT);
                        $resultado_conexao->execute();
                    ?>
                  <tbody id="myTable">
                    <?php 
                    //Para obter os dados pode ser utilizado um while percorrendo assim cada linha retornada do banco de dados:
                    while ($SQL = $resultado_conexao->fetch(PDO::FETCH_ASSOC)): ?>
                        <?php
                            /*if ($SQL['UMB']=='KG') {
                                $QUANTIDADE = $SQL['Qtd_conf']/50;
                            }else{*/
                                $QUANTIDADE = $SQL['col_qtd_contrato'];
                            //}
                        ?>
                            <tr>
                                
                                <td style="text-align: left;"><?php echo $SQL['col_nome']; ?></td>
                                <td style="text-align: center;"><?php echo $SQL['col_docvendas']; ?></td>
                                <td style="text-align: center;"><?php echo $SQL['col_nocontrato_cliente']; ?></td>
                                <td style="text-align: center;"><?php echo $SQL['col_material']; ?></td>
                                <td style="text-align: right;"><?php echo number_format($QUANTIDADE, 0, ',', '.'); ?></td>
                                <td style="text-align: right;"><?php echo $SQL['col_un']; ?></td>
                                <td style="text-align: center;"><?php echo date("d/m/Y",strtotime($SQL['col_data'])); ?></td>
                                  <!--<td>
                                    <div class="progress progress-xs">
                                      <div class="progress-bar bg-warning" style="width: 10%"></div>
                                    </div>
                                  </td>
                                  <td><span class="badge bg-warning"><?php echo(number_format("10", 0, ",", ".")); ?>%</span></td>-->
                                  <td><button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#gsgModal" 
                                  data-ict="<?php echo $SQL['col_id']; ?>"
                                  data-icont="<?php echo $SQL['col_docvendas']; ?>"
                                  data-icliente="<?php echo $SQL['col_nome']; ?>"
                                  data-iquant="<?php echo $SQL['col_qtd_contrato']; ?>"
                                  data-iund="<?php echo $SQL['col_un']; ?>"
                                  data-istfs="<?php echo $SQL['SAFRA']; ?>"
                                  data-iped="<?php echo $SQL['col_nocontrato_cliente']; ?>"
                                  data-iposit="<?php echo $SQL['col_position']; ?>"
                                  data-col_rep="<?php echo $SQL['col_repres']; ?>"
                                  data-col_id_psot_tb="<?php echo $SQL['col_id_position_tb']; ?>"
                                  >Alterar</button></td></tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
       </div>
        <!-- /.content-wrapper -->
        <!-- Modal -->
        <div class="modal fade" id="gsgModal">
        <div class="modal-dialog">
            <div class="modal-content bg-primary">
            <div class="modal-header">
                <h4 class="modal-title" ></h4>
            </div>
            <div class="modal-body">
                <form role="form" name="formCad" action="" method="post">
                <div class="form-group">
                    <label for="Emissor" class="col-form-label">Emissor:</label>
                    <input name="Emissor"  type="text" class="form-control" id="Emissor"> 
                </div>
                <div class="form-group">
                    <label for="Quant" class="col-form-label">Quantidade:</label>
                    <input name="Quant"  type="text" class="form-control" id="Quant">
                </div>
                <div class="form-group">
                    <label for="UNIDADEMEDIDA" class="col-form-label">Unidade:</label>
                    <input name="UNIDADEMEDIDA" type="text" class="form-control" id="UNIDADEMEDIDA">
                </div>
                <div class="form-group">
                    <label for="PedidoN" class="col-form-label">Pedido:</label>
                    <input name="PedidoN" type="text" class="form-control" id="PedidoN">
                </div>
                <div class="form-group">
                    <label for="recipient-Safra" class="col-form-label">Safra:</label>
                    <select name="Safra" class="form-control" id="Safra">
                        <option value="5">2020/2021</option>
                        <option value="6">2021/2022</option>
                        <option value="7">2022/2023</option>
                    </select>
                </div>
                <div class="form-group">
                <label for="PositREP" class="col-form-label">Posição Representante:</label>
                    <select name="PositREP" class="form-control" id="PositREP">
                        <?php echo($OPTION_POSITION_REP); ?>
                    </select>
                </div>
                <div class="form-group">
                <label for="Posit" class="col-form-label">Posição Container:</label>
                <select name="Posit" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="20" tabindex="-1" aria-hidden="true" id="Posit">
                    <?php echo($OPTION_POSITION); ?>
                </select>
                </div>          
                </div>
                <input name="OrdID" hidden id="OrdID">
                <input name="Psoti" hidden id="Psoti">
                <input name="ColTabelaPosit" hidden id="ColTabelaPosit">
                <input name="gsgModalLabel" hidden id="gsgModalLabel">
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" name="btnUpdateContrato" class="btn btn-outline-light">Alterar</button>
                </div>
            </form>
            </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <footer class="main-footer">
            <strong>Copyright &copy; <?php echo '' . $ANOINICIO . ''; ?>-<?php echo '' . $ANOFIM . ''; ?> <a href="#">SistemaGSG</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> <?php echo '' . $VERSIONPROG . ''; ?>
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="../../../../../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../../../../../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../../../../../plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../../../../../plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../../../../../plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../../../../../plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../../../../../plugins/moment/moment.min.js"></script>
    <script src="../../../../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../../../../../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../../../dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../../../../dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../../../../dist/js/demo.js"></script>
    <script type="text/javascript">
    $('#gsgModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Botão que acionou o modal
        var recID = button.data('ict')
        var recEmissor = button.data('icliente')
        var recOvenda = button.data('icont')
        var recQuantidade = button.data('iquant')
        var recUnid = button.data('iund')
        var recPosit = button.data('iposit')
        var recPsoit = button.data('iposit')
        var recRepr = button.data('col_rep')
        var recPedidoN = button.data('iped')
        var recPedidoS = button.data('ideps')
        var recSafra = button.data('istfs')
        var recColIdent = button.data('col_id_psot_tb')
        // Se necessário, você pode iniciar uma requisição AJAX aqui e, então, fazer a atualização em um callback.
        // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
        var modal = $(this)
        modal.find('.modal-title').text('Contrato Nº: ' + recOvenda)
        modal.find('#gsgModalLabel').val(recOvenda)
        modal.find('#OrdID').val(recID)
        modal.find('#Emissor').val(recEmissor)
        modal.find('#Quant').val(recQuantidade)
        modal.find('#UNIDADEMEDIDA').val(recUnid)
        modal.find('#Posit').val(recPosit)
        modal.find('#Psoti').val(recPsoit)
        modal.find('#PositREP').val(recRepr)
        modal.find('#PedidoN').val(recPedidoN)
        modal.find('#Psoti12').val(recPedidoS)
        modal.find('#ColTabelaPosit').val(recColIdent)
        modal.find('#Safra').val(recSafra)
    })
    </script>
  </div>
  </div>
</body>
</html>