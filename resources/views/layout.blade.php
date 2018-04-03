<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Puwarin House</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
	  
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </head>
  

 <body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"></a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link">Puwarin House v.1.0</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-grey-Lightest sidebar" style="height:100%">
          <div class="sidebar-sticky">
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>MAIN NAVIGATION</span>
          </h6>
            <ul class="nav flex-column"><br>
              <li class="nav-item">
              <a class="nav-link " href="/dashboard">
              <span data-feather="bar-chart-2"></span>
              &nbsp;แผงควบคุมข้อมูล <span class="sr-only"></span>
              </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/user/index">
                  <span data-feather="user"></span>
                  &nbsp;ข้อมูลผู้ใช้ 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active " href="/room/index">
                  <span data-feather="home"></span>
                  &nbsp;ข้อมูห้องพัก
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/customer/index">
                  <span data-feather="users"></span>
                  &nbsp;ข้อมูลผู้เช่า
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contract/index">
                  <span data-feather="tag"></span>
                  &nbsp;ข้อมูลสัญญาผู้เช่า
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/maintenance/index">
                  <span data-feather="alert-triangle"></span>
                  &nbsp;ข้อมูลการแจ้งซ่อม
                </a>
              </li>
				<li class="nav-item">
                <a class="nav-link" href="/invoices">
                  <span data-feather="file-text"></span>
                  &nbsp;ข้อมูลการชำระ
                </a>
              </li>
              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>EXIT</span>
          </h6>
          <br>
          <li class="nav-item text-nowrap">
          <a class="nav-link" href="/logout">
          <span data-feather="log-out"></span>
          &nbsp;ออกจากระบบ</a>
        </li>
            </ul>
        </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          @section('content')
          @show
        
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#303030',
            borderWidth: 4,
            pointBackgroundColor: '#303030'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>
