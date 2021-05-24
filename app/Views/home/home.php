<div class="container-fluid">
  <form action="/home/home" method="post">
    <select class="form-control" id="pelaksanaan" name="pelaksanaan" placeholder="Waktu Pelaksanaan" onchange="this.form.submit()">
      <option disabled selected>Pilih bulan pelaksanaan</option>
      <option value="JANUARI">JANUARI</option>
      <option value="FEBRUARI">FEBRUARI</option>
      <option value="MARET">MARET</option>
      <option value="APRIL">APRIL</option>
      <option value="MEI">MEI</option>
      <option value="JUNI">JUNI</option>
      <option value="JULI">JULI</option>
      <option value="AGUSTUS">AGUSTUS</option>
      <option value="SEPTEMBER">SEPTEMBER</option>
      <option value="OKTOBER">OKTOBER</option>
      <option value="NOVEMBER">NOVEMBER</option>
      <option value="DESEMBER">DESEMBER</option>
    </select>
  </form>
  <div class="row">
    <div class="col-xl-6 col-lg-5">
      <h1 class="mt-2"></h1>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Target Chart Bulan <?= $pelaksanaan; ?></h6>
        </div>
        <div class="card-body">
          <div class="chart1">
            <canvas id="target"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-lg-5">
      <h1 class="mt-2"></h1>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Realisasi Chart Bulan <?= $pelaksanaan; ?></h6>
        </div>
        <div class="card-body">
          <div class="chart">
            <canvas id="realisasi"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xl-6 col-lg-5">
      <h1 class="mt-2"></h1>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Sebaran Survey Chart</h6>
        </div>
        <div class="card-body">
          <div class="chart2">
            <canvas id="bulanan"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php
$warnarealisasi = null;
$varpetugas = null;
$namapetugas[] = null;
foreach ($querybulan as $i) {

  if ($i['nama_petugas'] != $varpetugas) {
    $namapetugas[] = $i['nama_petugas'];
    $varpetugas = $i['nama_petugas'];
  }
}

foreach ($namapetugas as $j) {
  $targetCount = 0;
  $realisasiCount = 0;
  foreach ($querybulan as $k) {
    if ($j == $k['nama_petugas']) {
      $targetCount++;
    }

    if ($j == $k['nama_petugas'] && $k['dokumen_masuk'] != null) {
      $realisasiCount++;
    }
  }
  $realisasi[] = $realisasiCount;
  $target[] = $targetCount;
}

?>

<?php foreach ($querybulan as $c) {
  if ($c['realisasi'] != $c['target']) {
    $warnarealisasi[] = 'rgba(255, 117, 160, 1)';
  } else {
    $warnarealisasi[] = 'rgba(149, 225, 211, 1)';
  }
}
?>

<?php foreach ($databulan as $k) {
  $bulan[] = $k;
} ?>
<script>
  let myChart12 = document.getElementById('realisasi').getContext('2d');
  window.onload = function() {

    let massPopChart1 = new Chart(myChart12, {
      type: 'bar',
      data: {
        labels: <?php echo json_encode($namapetugas)  ?>,
        datasets: [{
          label: 'Realisasi',
          data: <?php echo json_encode($realisasi) ?>,
          backgroundColor: <?php echo json_encode($warnarealisasi) ?>
        }]
      },
      options: {}
    });

    let myChart2 = document.getElementById('target').getContext('2d');

    let massPopChart2 = new Chart(myChart2, {
      type: 'bar',
      data: {
        labels: <?php echo json_encode($namapetugas)  ?>,
        datasets: [{
          label: 'Target',
          data: <?php echo json_encode($target) ?>,
          backgroundColor: [
            'rgba(149, 225, 211, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(149, 225, 211, 1)',
          ]
        }]
      },
      options: {}
    });

    let myChart3 = document.getElementById('bulanan').getContext('2d');

    let massPopChart3 = new Chart(myChart3, {
      type: 'line',
      data: {
        labels: <?php echo json_encode($namabulan) ?>,
        datasets: [{
          label: 'Sebaran Survey',
          data: <?php echo json_encode($bulan) ?>,
          backgroundColor: 'rgba(182, 200, 0, 0.5)',
          pointBackgroundColor: 'rgba(182, 200, 0, 1)'

        }]
      },
      options: {}
    });
  }
</script>