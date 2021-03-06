<div class="chart">
  <canvas width="600" height="250" id="realisasi"></canvas>
</div>
<div class="chart1">
  <canvas width="600" height="250" id="target"></canvas>
</div>

<?php
foreach ($isi as $i) {
  $namapetugas[] = $i['nama_petugas'];
  $realisasi[] = $i['realisasi'];
  $target[] = $i['target'];
}

?>

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
          backgroundColor: [
            'rgba(255, 117, 160, 1)',
            'rgba(252, 227, 138, 1)',
            'rgba(234, 255, 208, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(252, 227, 138, 1)',
            'rgba(149, 225, 211, 1)'
          ]
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
            'rgba(255, 117, 160, 1)',
            'rgba(252, 227, 138, 1)',
            'rgba(234, 255, 208, 1)',
            'rgba(149, 225, 211, 1)',
            'rgba(252, 227, 138, 1)',
            'rgba(149, 225, 211, 1)'
          ]
        }]
      },
      options: {

      }
    });


  }
</script>