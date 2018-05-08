<!-- Including Header -->
<?php
include_once('INCLUDES/header.php');
?>
<!-- Including Header Menu -->

<div class="go-back-box " style="position: fixed; width: 100vw;">
<a href="results.php" class="btn float-left">
<i class="fa fa-arrow-left"></i>
</a>
<div class="test-details " >
  <span class="text-ellipsis">My Tests</span>
  <span class="text-ellipsis ng-binding">Canara Bank PO - Full Mock Test</span>
</div>

</div>

<div class="result-page   pt-50 pb-50">

<div class="panel  container">
<div class="panel-heading ">
  <h3 class="panel-title">Test Overview</h3>
</div>
<div class="panel-body">
  <ul class="test-overview list-inline list-unstyled">
    <li class="list-inline-item text-center">
      <span class="test-data-value">UPSC IAS Preliminary</span><br>
      <span class="test-data-name">Test Name</span><br> 
      
    </li>

    <li class="list-inline-item text-center">
      <span class="test-data-value">26-02-2018</span><br>
      <span class="test-data-name">Exam Date</span>
    </li>

    <li class="list-inline-item text-center">
      <span class="test-data-value">112.3</span><br>
      <span class="test-data-name">Average Marks</span>
    </li>

    <li class="list-inline-item text-center">
      <span class="test-data-value">53</span><br>
      <span class="test-data-name">Number of Student</span>
    </li>
  </ul>
</div>

</div>


<div class="panel container">
<div class="panel-heading ">
  <h3 class="panel-title">Quick Status</h3>
</div>
<div class="panel-body">
  <ul class="test-overview  list-inline list-unstyled row">
    <!-- <li class="list-inline-item text-center row">
      <div class="col-md-4 test-data-img"> <img src="IMAGES/ICONS/percentile.png" alt="" width="40px" height="40px"></div>
      <div class="col-md-8 test-data-info">
      <span class="test-data-value">121/200</span><br>  
      <span class="test-data-name">Score</span> </div>
      
    </li> -->

    <li class="list-inline-item text-center ">
      
      <span class="test-data-value">121/200</span><br>  
      <span class="test-data-name">Score</span>
      
    </li>

    <!-- <li class="list-inline-item text-center">

      <span class="test-data-value">93.3%</span><br>
      <span class="test-data-name">Percentile</span>
    </li> -->

    <!-- <li class="list-inline-item text-center">
      <span class="test-data-value">65%</span><br>
      <span class="test-data-name">Accuracy</span>
    </li> -->

    <li class="list-inline-item text-center">
      <span class="test-data-value">21/30</span><br>
      <span class="test-data-name">Rank</span>
    </li>

    <li class="list-inline-item text-center">
      <span class="test-data-value">182</span><br>
      <span class="test-data-name">Best Score</span>
    </li>

    <li class="list-inline-item text-center">
      <span class="test-data-value">135.5</span><br>
      <span class="test-data-name">Average Score</span>
    </li>
  </ul>
</div>

</div>


<div class="container">
  <div class="row">
    
    <div class="panel performace-comparision  ">
    <div class="panel-heading ">
      <h3 class="panel-title">Performace Comparision</h3>
    </div>
    <canvas class="container" id="performace-chart" width="800" height="450"></canvas>
    

    
    </div>
  </div>
  
  
</div>

<!-- </div>
  <canvas class="" id="pie-chart-marks-distribution" width="150px" height="150px"></canvas>
</div> -->

<div class="download-solution container p0">
  <a href="" class="btn">Download Solution</a>
</div>


</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/0.5.5/chartjs-plugin-annotation.js"></script>

<script>
var speedCanvas = document.getElementById("performace-chart");

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
              content: "You Are Here | Marks : 8",
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


// new Chart(document.getElementById("performace-chart-1"), {
//     type: 'bar',
//     data: {
//       labels: [""],
//       datasets: [
//         {
//           label: "Your Marks",
//           backgroundColor: "#E76F51",
//           data: [82]
//         }, {
//           label: "Avergae Marks",
//           backgroundColor: "#2EC4B6",
//           data: [152]
//         }, {
//           label: "Highest Marks",
//           backgroundColor: "#369696",
//           data: [186]
//         }
//       ]
//     },
//     options: {
//       title: {
//         display: true,
        
//       },
//       scales: {
//         yAxes: [{
//           scaleLabel: {
//             display: true,
//             labelString: 'Marks',

//           },
//           ticks: {
//               beginAtZero: true,
//               stepSize: 10,
//               min: 0
              
//           }
//         }],
//         xAxes: [{
//           scaleLabel: {
//             display: true,
//             labelString: ''
//           },
//           ticks: {
//               beginAtZero: true,
//               stepSize: 10,
//               min: 0
//           }
//         }]
//       }     
//     }
// });



</script>
<!-- Including Footer menu -->
<?php
include_once('INCLUDES/footer-menu-2.php');
?>
<!-- Including Footer -->
<?php
include_once('INCLUDES/footer.php');
?>
