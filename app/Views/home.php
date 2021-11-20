<?= $this->extend('layout\default') ?>

<?= $this->section('content') ?>

<?php
$session = session();
$error = $session->getFlashdata('error');
$success = $session->getFlashdata('success');
?>

<section class="section">
    <div class="section-header">
        <h1>Dashboard Penjualan</h1>
    </div>
</section>
<div class="row">
    <div class="col-lg-6 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header" style="justify-content: center;">
                <h4>Total Penjualan Perbulan</h4>
            </div>
            <div class="card-body">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <canvas id="lineChart" height="565" style="display: block; height: 452px; width: 746px;" width="932" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header" style="justify-content: center;">
                <h4>5 Produk Terlaris</h4>
            </div>
            <div class="card-body">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <canvas id="pieChart" height="565" style="display: block; height: 452px; width: 746px;" width="932" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
</div>
</div>
<div class="main-content" style="min-height: 395px; padding-top: 5px;">
    <div class="section">
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Laporan Penjualan Perbulan</h4>

                    <?php if ($error) { ?>
                        <div class="position-fixed top-0 right-0 p-3" style="z-index: 5; right: 0; top: 50px;">
                            <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                                <div class="toast-header bg-danger">
                                    <strong class="mr-auto text-white">Gagal</strong>
                                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="toast-body">
                                    <?= $error; ?>
                                </div>
                            </div>
                        </div>
                        <!-- <h1>gagal</h1> -->
                    <?php } ?>
                    <?php if ($success) { ?>
                        <div class="position-fixed top-0 right-0 p-3" style="z-index: 5; right: 0; top: 50px;">
                            <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                                <div class="toast-header bg-success">
                                    <strong class="mr-auto text-white">Berhasil</strong>
                                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="toast-body">
                                    <?= $success; ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <form action="<?= base_url('laporan_pdf') ?>" method="post">
                        <div class="form-row align-items-center">
                            <div class="col-auto">
                                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                <div class="input-group mb-2">
                                    <select name="start_periode" class="custom-select" id="inlineFormInputGroup" required>
                                        <option value="" selected disabled>-- Pilih Tahun Mulai --</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                    </select>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">-</div>
                                    </div>
                                    <select name="end_periode" class="custom-select" id="inlineFormInputGroup" required>
                                        <option value="" selected disabled>-- Pilih Tahun Akhir --</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary" type="submit">Eksport PDF</button>
                            </div>
                        </div>
                    </form>
                    <!-- <a style="margin-left: 10px;" class="btn btn-warning" href="<?php echo base_url('Home/pdf') ?>"><i class="fa fa-file"></i> Eksport PDF</a> -->
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tbody>
                                <tr>
                                    <th>No</th>
                                    <th>Bulan</th>
                                    <th>Tahun</th>
                                    <th>Total</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                                <?php foreach ($tbl_penjualan as $key => $value) : ?>

                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $value->bulan ?></td>
                                        <td><?= $value->tahun ?></td>
                                        <td><?= $value->total ?></td>
                                        <td><?= $value->created_at ?></td>
                                        <td><?= $value->updated_at ?></td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>