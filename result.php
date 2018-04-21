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
  <h3 class="panel-title">Test Overviews</h3>
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
  <ul class="test-data list-inline list-unstyled row">
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

    <li class="list-inline-item text-center">

      <span class="test-data-value">93.3%</span><br>
      <span class="test-data-name">Percentile</span>
    </li>

    <li class="list-inline-item text-center">
      <span class="test-data-value">65%</span><br>
      <span class="test-data-name">Accuracy</span>
    </li>

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
    <div class="col-md-8 p0" style="padding-right: 20px;">
      <div class="panel question-distrbution  ">
        <div class="panel-heading ">
        <h3 class="panel-title">Question Distribution Chart</h3>
        </div>
        <canvas class="container" id="bar-chart-grouped" width="auto !important" height="auto"></canvas>
      </div>
    
    </div>
    <div class="panel performace-comparision  col-md-4">
    <div class="panel-heading ">
      <h3 class="panel-title">Performace Comparision</h3>
    </div>
    <canvas class="container" id="performace-chart-1" width="800" height="450"></canvas>


    <canvas class="container" id="performace-chart-2" width="800" height="450"></canvas>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>


new Chart(document.getElementById("bar-chart-grouped"), {
    type: 'bar',
    maintainAspectRatio: false,
    data: {
      labels: ["Reasoning", "Quantitative Aptitude", "English Language", "General Awareness"],
      datasets: [
        {
          label: "Incorrect",
          backgroundColor: "#FF6B6B",
          data: [10,20,30,23]
        }, {
          label: "Correct",
          backgroundColor: "#2EC4B6",
          data: [30,42,10,7]
        },{
          label:"Not Attempted",
          backgroundColor: "#50514F",
          data:[20,10,20,30]
        }
      ]
    },
    options: {
      title: {
        display: true,
        
      },
      scales: {
        yAxes: [{
          scaleLabel: {
            display: true,
            labelString: 'Marks'
          }
        }],
        xAxes: [{
          scaleLabel: {
            display: true,
            labelString: 'Section'
          }
        }]
      }     
    }
});


new Chart(document.getElementById("performace-chart-1"), {
    type: 'horizontalBar',
    data: {
      labels: [""],
      datasets: [
        {
          label: "Last Test",
          backgroundColor: "#E76F51",
          data: [90]
        }, {
          label: "Present Test",
          backgroundColor: "#2EC4B6",
          data: [30]
        }
      ]
    },
    options: {
      title: {
        display: true,
        
      },
      scales: {

        xAxes: [{
          scaleLabel: {
            display: true,
            labelString: 'Marks'
          }
        }]
      }    

    }
});

// new Chart(document.getElementById("performace-chart-1"), {
//     type: 'bar',
//     data: {
//       labels: ["Marks", "Attempted"],
//       datasets: [
//         {
//           label: "Last Test",
//           backgroundColor: "#FF6C92",
//           data: [10,20]
//         }, {
//           label: "Present Test",
//           backgroundColor: "#6ED087",
//           data: [30,42]
//         }
//       ]
//     },
//     options: {
//       title: {
//         display: true,
        
//       }
//     }
// });

new Chart(document.getElementById("performace-chart-2"), {
    type: 'bar',
    data: {
      labels: ["Correct", "Incorrect","Attempted"],
      datasets: [
        {
          label: "Last Test",
          backgroundColor: "#E76F51",
          data: [43,30,73]
        }, {
          label: "Present Test",
          backgroundColor: "#2EC4B6",
          data: [23,32,55]
        }
      ]
    },
    options: {
      title: {
        display: true,
        
      },
      scales: {

        yAxes: [{
          scaleLabel: {
            display: true,
            labelString: 'No. Questions'
          }
        }]
      }   
    }
});

</script>
<!-- Including Footer menu -->
<?php
include_once('INCLUDES/footer-menu-2.php');
?>
<!-- Including Footer -->
<?php
include_once('INCLUDES/footer.php');
?>
