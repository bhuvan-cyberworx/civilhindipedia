<!-- Including Header -->
<html>

<body>
  <div style="width: 75%">
    <canvas id="canvas"></canvas>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<!-- including Chart Js Annotations plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/0.5.5/chartjs-plugin-annotation.js"></script>

<script>
  var speedCanvas = document.getElementById("canvas");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var speedData = {
  labels: ["-4 to 4", "4 to 12", "12 to 20", "20 to 28", "28 to 36", "36 to 44", "44 to 52"],
  datasets: [{
    label: "Marks Wise Distribution",
    data: [0, 59, 75, 36, 20, 16, 3],
    lineTension: 0,
    fill: false,
    borderColor: '#01A2A6',
    backgroundColor: '#01A2A6',
    pointBorderColor: '#01A2A6',
    pointBackgroundColor: '#01A2A6',
    borderDash: [0, 0],
    pointRadius: 5,
    pointHoverRadius: 10,
    pointHitRadius: 30,
    pointBorderWidth: 2,
    pointStyle: 'rectRounded'
  }]
};

var chartOptions = {
  legend: {
    display: true,
    position: 'top',
    labels: {
      boxWidth: 80,
      fontColor: 'black'
    }
  },
  scales: {
    xAxes: [{
      gridLines: {
        display: false,
        color: "black"
      },
      scaleLabel: {
        display: true,
        labelString: "Marks",
        fontColor: "black"
      }
    }],
    yAxes: [{
      gridLines: {
        color: "black",
        borderDash: [2, 5],
      },
      scaleLabel: {
        display: true,
        labelString: "Number of Students",
        fontColor: "black"
      }
    }]
  },
  annotation: {
        annotations: [
          {
            type: "line",
            mode: "vertical",
            scaleID: "x-axis-0",
            value: "4 to 12",
            borderColor: "transparent",
            label: {
              content: "You Are Here",
              enabled: true,
              position: "middle"
            }
          }
        ]
      }
};

var lineChart = new Chart(speedCanvas, {
  type: 'line',
  data: speedData,
  options: chartOptions
});

</script>
<!-- Including Footer -->
</body>

</html>


