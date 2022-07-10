<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<head>
    <meta charset="utf-8">
    <title>Laravel Charts </title>
</head>
<body>
    <h1>Charts of the Population of the US </h1>
    <div id="container" style="padding: 50px ;">
    <canvas id="myChart">
  <script>
  const labels = [
    '2013',
    '2014',
    '2015',
    '2016',
    '2017',
    '2018',
    '2019'
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'Dataset',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [316128839, 316128839, 318857056, 321418821, 323127515, 325719178,
      327167439, 328239523],
    }]
  };

  const config = {
    type: 'line',
    data: data ,
    options: {}
  };
</script>
<script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
  </canvas>
    </div>
</body>
</html>