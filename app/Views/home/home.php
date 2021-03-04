<div class="container">
  <canvas id="myChart"></canvas>
</div>

<script>
  let myChart = document.getElementById('myChart').getContext('2d');

  let massPopChart = new Chart(myChart, {
    type: 'pie',
    data: {
      labels: ['Suep', 'Budi', 'Anton', 'Supro', 'Dani', 'Danto'],
      datasets: [{
        label: 'Population',
        data: [
          434343,
          432543,
          767543,
          786575,
          564545,
          123445
        ],
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
</script>