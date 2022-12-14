<?php
require_once 'Funcoes.class.php';
require_once 'Funcionario.class.php';
$objFn = new Funcionario();

if (isset($_POST['btnCadastro'])) {
    if ($objFn->queryCadastroGeral($_POST) == 'funcionario') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Funcion??rio inserido, tenha um bom dia!'
                })
            });
        </script>";
    } elseif ($objFn->queryCadastroGeral($_POST) == 'proprio') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Pr??prio inserido, tenha um bom dia!'
                })
            });
        </script>";
    } elseif ($objFn->queryCadastroGeral($_POST) == 'fornecedor') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Fornecedor inserido, tenha um bom dia!'
                })
            });
        </script>";
    } elseif ($objFn->queryCadastroGeral($_POST) == 'usina') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Ve??culo da Industria inserido, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Contate o Administrador do Sistema ou verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}

if (isset($_POST['btnContaines'])) {
    if ($objFn->queryContainers($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Tanque Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Tanque Atualizado com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Tanque n??o Atualizado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Tanque n??o Atualizado, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnBooking'])) {
    if ($objFn->queryBooking($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro enviado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Booking Inserido com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro!, Registro n??o enviado.',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Booking n??o Inserido, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnEventoNF'])) {
    if ($objFn->queryEvento($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro enviado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Evento Inserido com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro!, Registro n??o enviado.',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Evento n??o Inserido, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnBookingManual'])) {
    if ($objFn->queryBookingManual($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro enviado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Informa????es Inseridas com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro!, Registro n??o enviado.',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Informa????o n??o Inserida, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnFilaCarregamento'])) {
    if ($objFn->queryCarregaMentoManual($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro enviado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Informa????es Inseridas com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro!, Registro n??o enviado.',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Informa????o n??o Inserida, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnUpdateTanques'])) {
    if ($objFn->queryUpdateTanques($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Tanque Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Tanque Atualizado com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Tanque n??o Atualizado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Tanque n??o Atualizado, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnSolcRequisicao'])) {
    if ($objFn->querySolcRequisicao($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Solicita????o Enviada!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Solicita????o enviada com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } elseif ($objFn->querySolcRequisicao($_POST) == 'erro') {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! em sua solicita????o',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Solicita????o n??o enviada, verifique os dados e tente novamente.'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-warning', 
                    title: 'Alerta! N??o Registrado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Reserva j?? solicitada, outro usu??rio est?? fazendo ou j?? fez esse registro.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnChat'])) {
    if ($objFn->queryChat($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='plugins/moment/moment.min.js'></script>
        <script src='plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Mensagem Enviada!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Mensagem Enviada, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='plugins/moment/moment.min.js'></script>
        <script src='plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Chat',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Chat n??o Enviado, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnUpdateCadastro'])) {
    if ($objFn->queryUpdateCadastro($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Cadastro Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cadastro de Funcion??rio Atualizado com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Cadastro n??o Atualizado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cadastro n??o Atualizado, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnUpdateCadastroFornecedor'])) {
    if ($objFn->queryUpdateCadastroFornecedor($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Cadastro Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cadastro de Fornecedor Atualizado com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Cadastro n??o Atualizado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cadastro n??o Atualizado, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnUpdateCadastroUsina'])) {
    if ($objFn->queryUpdateCadastroUsina($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Cadastro Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cadastro Atualizado com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Cadastro n??o Atualizado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cadastro n??o Atualizado, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnAlterarUser'])) {
    if ($objFn->queryUpdateCadastroUser($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Cadastro Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cadastro Atualizado com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Cadastro n??o Atualizado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cadastro n??o Atualizado, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}

if (isset($_POST['btnCadastroUser'])) {
    if ($objFn->CadastroUser($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Cadastro Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cadastro Atualizado com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Cadastro n??o Atualizado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cadastro n??o Atualizado, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnUpdateCupom'])) {
    if ($objFn->queryUpdateCupom($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Cupom Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cupom Atualizado com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Cupom n??o Atualizado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cupom n??o Atualizado, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnUpdateBombas'])) {
    if ($objFn->queryUpdateBombas($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Leitura alterada com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Bomba N??o Alterada',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Leitura n??o inserida, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnUpdateOvCia'])) {
    if ($objFn->ModfOvsMesCIA($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../..//dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Ordem de Vendas alterada com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Ordem de Vendas n??o Alterada',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Ordem de Vendas n??o inserida, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnUpdateOvSaida'])) {
    if ($objFn->ModfOvsSaida($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../..//dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Ordem de Vendas alterada com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Ordem de Vendas n??o Alterada',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Ordem de Vendas n??o inserida, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnDeleteOv'])) {
    if ($objFn->DeletarOvs($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../..//dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Ordem de Venda deletada com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Ordem de Vendas n??o Alterada',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Ordem de Vendas n??o deletada, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnUpdateContrato'])) {
    if ($objFn->ModfContratos($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../..//dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Contrato Atualizado com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Contrato n??o Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Contrato n??o atualizado, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnEnviarOrdem'])) {
    if ($objFn->InserirOV($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../..//dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Ordem de Vendas inserida com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Ordem de Venda n??o Inserida',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Ordem de Vendas n??o inserida, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnEnviarSaida'])) {
    if ($objFn->InserirSaidaOV($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../..//dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Sa??da inserida com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Sa??da n??o Inserida',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Sa??da n??o inserida, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnEnviarContrato'])) {
    if ($objFn->InserirContratoOV($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../..//dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-primary', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Contrato inserido com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Contrato N??o Inserido',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Contrato n??o inserido, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnUpdateMovimentos'])) {
    if ($objFn->queryUpdateMovimentos($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Movimentos Atualizados com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Movimento N??o Atualizado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Movimentos n??o Atualizados, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnRequisicao'])) {
    if ($objFn->queryRequisicao($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Material inserida com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } elseif ($objFn->queryRequisicao($_POST) == 'outro') {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-warning', 
                    title: 'Alerta! N??o Registrado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Material n??o inserido, outro usu??rio est?? fazendo ou j?? fez esse registro.'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! N??o Registrado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Material n??o inserido, voc?? j?? fez essa baixa.'
                })
            });
        </script>";
    }
}

if (isset($_POST['btnBombas'])) {
    if ($objFn->queryBombas($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Leitura inserida com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! N??o Registrado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Leitura n??o inserida, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnTanque'])) {
    if ($objFn->queryTanque($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Tanque inserido com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! N??o Registrado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Tanque n??o inserido, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnMovimentos'])) {
    if ($objFn->queryInsertMovimentos($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Movimento inserido com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! N??o Registrado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Movimento n??o inserido, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnEnviarCupom'])) {
    if ($objFn->queryCupom($_POST) == 'funcionario') {
        echo "
        <!-- jQuery -->
        <script src='plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='plugins/moment/moment.min.js'></script>
        <script src='plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cupom de Funcion??rio inserido, tenha um bom dia!'
                })
            });
        </script>";
    } elseif ($objFn->queryCupom($_POST) == 'proprio') {
        echo "
        <!-- jQuery -->
        <script src='plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='plugins/moment/moment.min.js'></script>
        <script src='plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cupom da Ind??stria inserido, tenha um bom dia!'
                })
            });
        </script>";
    } elseif ($objFn->queryCupom($_POST) == 'fornecedor') {
        echo "
        <!-- jQuery -->
        <script src='plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='plugins/moment/moment.min.js'></script>
        <script src='plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cupom de Fornecedor inserido, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='plugins/moment/moment.min.js'></script>
        <script src='plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Contate o Administrador do Sistema ou verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
