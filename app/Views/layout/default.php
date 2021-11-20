<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Tugas 12</title>

    <!-- General CSS Files -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.css">


    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/components.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar" style="justify-content: right;">
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= base_url() ?>/template/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Rizki Pratama</div>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="<?= site_url() ?>">PWEB 2</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?= site_url() ?>">PWEB2</a>
                    </div>
                    <ul class="sidebar-menu">
                        <?= $this->include('layout/menu'); ?>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content" style="min-height: 395px;">
                <?= $this->renderSection('content') ?>
            </div>

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2021 <div class="bullet"></div> Developed By Rizki Pratama 41519010042</a>
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
    <script src="<?= base_url() ?>/template/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
    <!-- <script src="<?= base_url() ?>/template/node_modules/popper.js/dist/popper.min.js"></script> -->
    <script src="<?= base_url() ?>/template/node_modules/moment/min/moment.min.js"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> -->
    <script src="<?= base_url() ?>/template/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?= base_url() ?>/template/node_modules/chart.js/dist/Chart.bundle.min.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/template/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <?php
    foreach ($pj2019 as $pjs2019) {
        $bulan19[] = $pjs2019['bulan'];
        $thn19[] = $pjs2019['tahun'];
        $total19[] = $pjs2019['total'];
    }

    foreach ($pj2021 as $pjs2021) {
        $bulan21[] = $pjs2021['bulan'];
        $thn21[] = $pjs2021['tahun'];
        $total21[] = $pjs2021['total'];
    }

    foreach ($pjl_produk as $pjls_produk) {
        $nama_produk[] = $pjls_produk['nama_produk'];
        $terjual[] = $pjls_produk['terjual'];
    }

    foreach ($produk_teratas as $produk_teratass) {
        $nama_produk_teratas[] = $produk_teratass['nama_produk'];
        $terjual_teratas[] = $produk_teratass['terjual'];
    }
    ?>

    <script>
        if ($('#lineChart').length) {

            var ctx = document.getElementById("lineChart");
            var lineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: <?= json_encode($bulan19) ?>,
                    datasets: [{
                        label: <?= json_encode($thn19[0]) ?>,
                        backgroundColor: "rgba(38, 185, 154, 0.31)",
                        borderColor: "rgba(38, 185, 154, 0.7)",
                        pointBorderColor: "rgba(38, 185, 154, 0.7)",
                        pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(220,220,220,1)",
                        pointBorderWidth: 1,
                        data: <?= json_encode($total19) ?>
                    }, {
                        label: <?= json_encode($thn21[0]) ?>,
                        backgroundColor: "rgba(3, 88, 106, 0.3)",
                        borderColor: "rgba(3, 88, 106, 0.70)",
                        pointBorderColor: "rgba(3, 88, 106, 0.70)",
                        pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(151,187,205,1)",
                        pointBorderWidth: 1,
                        data: <?= json_encode($total21) ?>
                    }]
                },
            });

        }

        // Pie chart
        if ($('#pieChart').length) {

            var ctx = document.getElementById("pieChart");
            var data = {
                datasets: [{
                    data: <?= json_encode($terjual_teratas) ?>,
                    backgroundColor: [
                        "#455C73",
                        "#9B59B6",
                        "#BDC3C7",
                        "#26B99A",
                        "#3498DB"
                    ],
                    label: '5 Produk Terlaris' // for legend
                }],
                labels: <?= json_encode($nama_produk_teratas) ?>
            };

            var pieChart = new Chart(ctx, {
                data: data,
                type: 'pie',
                otpions: {
                    legend: false
                }
            });

        }
    </script>
</body>

</html>