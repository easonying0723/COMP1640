@extends ('layouts/sidebar')

@section('title', 'Dashboard')

@section('dashboard')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js" integrity="sha512-zO8oeHCxetPn1Hd9PdDleg5Tw1bAaP0YmNvPY8CwcRyUk7d7/+nyElmFrB6f7vg4f7Fv4sui1mcep8RIEShczg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js" integrity="sha512-SuxO9djzjML6b9w9/I07IWnLnQhgyYVSpHZx0JV97kGBfTIsUYlWflyuW4ypnvhBrslz1yJ3R+S14fdCWmSmSA==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.css" integrity="sha512-C7hOmCgGzihKXzyPU/z4nv97W0d9bv4ALuuEbSf6hm93myico9qa0hv4dODThvCsqQUmKmLcJmlpRmCaApr83g==" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js" integrity="sha512-hZf9Qhp3rlDJBvAKvmiG+goaaKRZA6LKUO35oK6EsM0/kjPK32Yw7URqrq3Q+Nvbbt8Usss+IekL7CRn83dYmw==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css" integrity="sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
<link href="https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
background-color: white;
}

h1,h2,h3,h4,h5,h6,th,td{
  font-family:'montserrat';
}

h4.d-title {
    font-size: 50px;
    text-align: center;
}

h4.d-title:after {
    content: "All (Department)";
    font-size: 18px;
    display: flex;
    justify-content: end;
    font-weight:100;
}

h4.d-title {
    margin-bottom: 0;
    margin-top: 20px;
}

form.form_css {
border: 3px solid #D1D4E3;
background-color: #F4F6FB;
}


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #424473;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 16px;
  background-color:#F4F6FB;
}

.banner{
  text-align:right;
}


table {
  font-family: 'montserrats';
  border-collapse: collapse;
  width: 100%;
  overflow-y: scroll;
}

.table-dash table {
    margin-top: 50px;
}
.table-dash{
  margin-top:20px;
}
.table-dash .search-container {
    float: right;
}

.table-dash a, .table-dash input[type=text], .table-dash .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
  }

.table-dash input[type=text] {
    border: 1px solid #ccc;  
  }



a.download-btn {
    background: #414372;
    color: #fff !important;
    text-decoration: none;
    font-family: 'montserrat';
    padding: 10px;
    border-radius: 5px;
}

a.download-btn:after {
    content: "\f0ed";
}

#dashboard-grid-anonymous>div:first-child{
  background:#F4F7FF !important;
  border-radius:20px;
  box-shadow: 0 0 5px 5px #f1f1f2;
  padding:20px;
}


#dashboard-grid>div{
  background:#F4F7FF !important;
  border-radius:20px;
  box-shadow: 0 0 5px 5px #f1f1f2;
  padding:50px;
  
}

#dashboard-grid h3{
  border-left:5px solid #000;
  padding-left:5px;
}

#dashboard-grid{
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: repeat(3, 0.3fr);
  grid-column-gap: 20px;
  grid-row-gap: 20px;
}

#dashboard-grid>div:first-child{ grid-area: 1 / 1 / 2 / 3; }
#dashboard-grid>div:nth-child(2){ grid-area: 1 / 3 / 2 / 4; }
#dashboard-grid>div:nth-child(3){ grid-area: 2 / 1 / 3 / 2; }
#dashboard-grid>div:nth-child(4){ grid-area: 3 / 1 / 4 / 2; }
#dashboard-grid>div:nth-child(5){ grid-area: 2 / 2 / 4 / 4; }
#dashboard-grid>div:nth-child(6) {grid-area: 4 / 1 / 5 / 4;}
#dashboard-grid>div:nth-child(7) {grid-area: 5 / 1 / 6 / 4;}

table.ideas th{
  background:#414372;
  color:#fff;
  border:1px solid #fff;
}

table.ideas td {
    border: 1px solid #ebebeb;
    background: #fff;
    text-align: center;
    padding: 5px 0px;
}


.d-flex.justify {
    display: flex;
    justify-content: center;
    margin: auto;
    margin-top: 20px;
}

/*======================== Chart Js Css=========================*/

@media ( min-width: 991px ) {
canvas#myChart1{
  /* width:800px !important; */
  height:300px !important;
}

canvas#myChart2 {
    height: 350px !important;
    width: 350px !important;
    margin: auto;
    margin-top: 50px;
}

canvas#myChart4 {
    height: 350px !important;
    width: auto !important;
    margin-top:50px !important;
}

canvas#myChart5 {
    height: 350px !important;
    margin-top:50px !important;
}

table.ideas th {
    text-align: center;
}

}


</style>
</head>
<body>

<form class="form_css" action="/action_page.php" method="post">
<div class="container">
  <div class="banner">
<h3> Welcome {{ $LoggedUserInfo['name'] }} !<h3>
  <p>Here's whats happening in your account today! </p>
  
</div>

<h2> Dashboard </h2>
<div id="dashboard-grid">
  <div> 
    <h3> Number of ideas by department</h3>
  <!-- <select>
    <option value="0">All (Titles)</option>
    @foreach($titles as $title)
    <option value="{{$title['id']}}">{{$title['name']}}</option>
    @endforeach
  </select> -->

  <h5> Department</h5>
<div id="chart1"></div>
</div>
<div>
 <h3> Percentage of ideas by department </h3>
<div id="piechart"></div>
</div>
 
<div>
<h3> Contribution of Ideas</h3>
<h4 class="d-title">{{$contribution_of_title}}</h4>
</div>

<div>
<h3> Number of contributors by department</h3>
<div id="doughnutchart"></div>
</div>



<div>
  <h3>Ideas Without Comments </h3>
  <table class="ideas">
  <tr>
    <th>Idea ID</th>
    <th>Idea</th>
  </tr>

  @foreach($ideasWithoutComment as $idea)
  <tr>
    <td>{{$idea->id}}</td>
    <td>{{$idea->idea}}</td>
  </tr>
@endforeach
  
</table>
  <!-- <div id="linechart"></div> -->
<!-- </div> -->

<!-- <div> -->
  <br>
  <div class="d-flex justify-content-center">
    {{ $ideasWithoutComment->links("pagination::bootstrap-4") }}
  </div>
  <br>
  <br>
<h3> Anonymous ideas</h3>
  <table class="ideas">
  <tr>
    <th>ID</th>
    <th>Subject</th>
    <th>Idea</th>
    <th>User ID</th>
    <th>User Name</th>
  </tr>
  @foreach($anonymousIdea as $idea)
  <tr>
    <td>{{$idea->id}}</td>
    <td>{{$idea->subject}}</td>
    <td>{{$idea->idea}}</td>
    <td>{{$idea->user->id}}</td>
    <td>{{$idea->user->name}}</td>
  </tr>
  @endforeach

</table>
<div class="d-flex justify">
    {{ $anonymousIdea->links("pagination::bootstrap-4") }}
  </div>

 
  
</div>

<div id="dashboard-grid-anonymous">
<h3> Anonymous Comments</h3>
  <table class="ideas">
  <tr>
    <th>ID</th>
    <th>Comment</th>
    <th>Idea</th>
    <th>User ID</th>
    <th>User Name</th>
  </tr>
  @foreach($anonymousComment as $idea)
  @if($idea->idea)
  <tr>
    <td>{{$idea->id}}</td>
    <td>{{$idea->comment}}</td>
    <td>{{$idea->idea->idea}}</td>
    <td>{{$idea->user->id}}</td>
    <td>{{$idea->user->name}}</td>
  </tr>
  @endif
  @endforeach

</table>
<div class="d-flex justify">
    {{ $anonymousComment->links("pagination::bootstrap-4") }}
  </div>
</div>
</div>
<br>

</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
var xValues = <?php echo(json_encode($chart1XValues)); ?>;
var yValues = <?php echo(json_encode($chart1yValues)); ?>;
var barColors = <?php echo(json_encode($chart1Colors)); ?>;


$('#chart1').append(' <canvas id="myChart1" width="50" height="50" ></canvas>');
                var ctx = document.getElementById('myChart1');

                var myChart = new Chart(ctx, {
                    type: 'horizontalBar',
                    data: {
                        labels: xValues,
                        datasets: [{
                            label: 'Number of Ideas',
                            data: yValues,
                            backgroundColor: barColors,
                            
                        }]
                    },
                    options: {
                      
                      responsive: true,
                      maintainAspectRatio: false,
                        plugins: {
                            labels: false,
                            datalabels: {
                                backgroundColor: function(context) {
                                    return context.dataset.backgroundColor;
                                },
                                borderRadius: 4,
                                color: 'white',
                                font: {
                                    weight: 'bold'
                                },
                                formatter: Math.round,
                                padding: 6
                            }
                        },
                        scales: {
                            yAxes: [{
                              barThickness: 20,  // number (pixels) or 'flex'
                                ticks: {
                                    beginAtZero: true,
         
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }
                            }],
                            xAxes: [{
                              ticks: {
                                    beginAtZero: true
                                },
                              scaleLabel: {
                              display: true,
                              labelString: 'No of Ideas'
                              },
                                barPercentage: 0.5,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",

                                }
                            }]
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            enabled: true
                        }
                    }
                });

var xTitle = <?php echo json_encode($chart2xTitle); ?>;
var yTitle = <?php echo json_encode($chart2yTitle); ?>;
var barColors = <?php echo json_encode($chart2barColors); ?>;

$('#piechart').append(' <canvas id="myChart2" width="100" height="100" ></canvas>');
                var ctx = document.getElementById('myChart2');
                var myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: xValues,
                        datasets: [{
                            label: 'Number of Ideas',
                            data: yValues,
                            backgroundColor: barColors,
                        }]
                    },
                    options: {
                      tooltips: {
                          enabled: false
                      },
                      plugins: {
                          datalabels: {
                            color: 'white',
                            formatter: function (value) {
                              return Math.round(value) + '%';
                            },
                          }
                      }
                    }
                    
                });

var chart3XValues = <?php echo json_encode($chart3XValues); ?>;
var chart3YValues = <?php echo json_encode($chart3YValues); ?>;
$('#doughnutchart').append(' <canvas id="myChart3" width="100" height="100" ></canvas>');
                var ctx = document.getElementById('myChart3');
                var myChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: chart3XValues,
                        datasets: [{
                            label: 'Number of Ideas',
                            data: chart3YValues,
                            backgroundColor: barColors,
                        }]
                    },
                    options: {
                        plugins: {
                            labels: false,
                            datalabels: {
                                backgroundColor: function(context) {
                                    return context.dataset.backgroundColor;
                                },
                                borderRadius: 4,
                                color: 'white',
                                font: {
                                    weight: 'bold'
                                },
                                formatter: Math.round,
                                padding: 6
                            }
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            enabled: true
                        }
                    }
                });

$('#linechart').append(' <canvas id="myChart4" width="50" height="50" ></canvas>');
                var ctx = document.getElementById('myChart4');

                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: xValues,
                        datasets: [{
                            label: 'Number of Collections',
                            data: yValues,
                            backgroundColor: barColors,
                            
                        }]
                    },
                    options: {
                      
                      responsive: true,
                      maintainAspectRatio: false,
                        plugins: {
                            labels: false,
                            datalabels: {
                                backgroundColor: function(context) {
                                    return context.dataset.backgroundColor;
                                },
                                borderRadius: 4,
                                color: 'white',
                                font: {
                                    weight: 'bold'
                                },
                                formatter: Math.round,
                                padding: 6
                            }
                        },
                        scales: {
                            yAxes: [{
                              barThickness: 20,  // number (pixels) or 'flex'
                                ticks: {
                                    beginAtZero: true,
         
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }
                            }],
                            xAxes: [{
                              ticks: {
                                    beginAtZero: true
                                },
                              scaleLabel: {
                              display: true,
                              labelString: 'No of Ideas'
                              },
                                barPercentage: 0.5,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",

                                }
                            }]
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            enabled: true
                        }
                    }
                });
$('#barchart').append(' <canvas id="myChart5" width="50" height="50" ></canvas>');
                var ctx = document.getElementById('myChart5');

                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: xValues,
                        datasets: [{
                            label: 'Number of Collections',
                            data: yValues,
                            backgroundColor: barColors,
                            
                        }]
                    },
                    options: {
                      responsive: true,
                      maintainAspectRatio: false,
                        plugins: {
                            labels: false,
                            datalabels: {
                                backgroundColor: function(context) {
                                  return context.dataset.backgroundColor;
                                },
                                borderRadius: 4,
                                color: 'white',
                                font: {
                                    weight: 'bold'
                                },
                                formatter: Math.round,
                                padding: 6
                            }
                        },
                        scales: {
                            yAxes: [{
                              barThickness: 20,  // number (pixels) or 'flex'
                                ticks: {
                                    beginAtZero: true,
         
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }
                            }],
                            xAxes: [{
                              ticks: {
                                    beginAtZero: true
                                },
                              scaleLabel: {
                              display: true,
                              labelString: 'No of Ideas'
                              },
                                barPercentage: 0.5,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",

                                }
                            }]
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            enabled: true
                        }
                    }
                });
</script>
</body>
@endsection