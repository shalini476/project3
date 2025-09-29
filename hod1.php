<?php include 'header.php';?>
<?php
$username = "Guest";
if (isset($_GET['user'])) {
  $username = htmlspecialchars($_GET['user']);
}
?>
<!-- Breadcrumb -->
<div class="breadcrumb-area custom-gradient">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="#" style="color:grey;">WELCOME</a></li>
      <li class="breadcrumb-item active" aria-current="page">Dr.A.Arunkumar</li>
    </ol>
  </nav>
</div>

<!-- Content Area -->
<div class="container-fluid">
  <div class="custom-tabs">
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="academic-main-tab" data-bs-toggle="tab" href="#academic" role="tab"
          aria-controls="academic" aria-selected="true"
          style="background: linear-gradient(135deg, #95f160ff, #175f05ff);color:white">
          <i class="fas fa-book tab-icon"></i> HoD corner
        </a>
      </li>
    </ul>
  </div>

  <div class="tab-content mt-3">

    <!-- Charts -->
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="card shadow p-3">
          <h6 class="text-center">Department Distribution</h6>
          <div style="height:150px;">
            <canvas id="pieChart"></canvas>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card shadow p-3">
          <h6 class="text-center">Reason-wise Count</h6>
          <div style="height:150px;">
            <canvas id="barChart2"></canvas>
          </div>
        </div>
      </div>
    </div>

    <br><br>
    <div class="tab-pane fade show active" id="academic" role="tabpanel" aria-labelledby="academic-main-tab">

      <div class="table-responsive">
        <table class="table table-bordered align-middle" id="tblAcademic">
          <thead class="gradient-header text-white">
            <tr>
              <th>Sl.no</th>
              <th>Register number</th>
              <th>Name</th>
              <th>Year</th>
              <th>Occurrence</th>
              <th>Reason</th>
              <th>Action(mentor remarks)</th>
              <th>Letter proof</th>
              <th>Status</th>
              <th>Closing Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>927623BEC230</td>
              <td>Thaya sri V</td>
              <td>III</td>
              <td>1</td>
              <td>Late comer</td>
              <td>Warning given</td>
              <td><i class="fa fa-eye eye-icon"></i></td>
              <td><span class="badge bg-warning">Pending</span></td>
              <td>----</td>
            </tr>

            <tr>
              <td>2</td>
              <td>927623BEC234</td>
              <td>Tharun V</td>
              <td>III</td>
              <td>4</td>
              <td>Late comer</td>
              <td>---</td>
              <td><i class="fa fa-eye eye-icon"></i></td>
              <td><span class="badge bg-warning">Pending</span></td>
              <td>----</td>
            </tr>

            <tr>
              <td>3</td>
              <td>927623BEC216</td>
              <td>Vardha</td>
              <td>III</td>
              <td>2</td>
              <td>Not shaved</td>
              <td>Made him to shave</td>
              <td><i class="fa fa-eye eye-icon"></i></td>
              <td><span class="badge bg-success">Closed</span></td>
              <td>1/9/25</td>
            </tr>

            <tr>
              <td>4</td>
              <td>927623BEC231</td>
              <td>Trisa P</td>
              <td>III</td>
              <td>2</td>
              <td>Pony tail</td>
              <td>Informed - not to repeat</td>
              <td><i class="fa fa-eye eye-icon"></i></td>
              <td><span class="badge bg-success">Closed</span></td>
              <td>31/8/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <?php include 'footer.php'; ?>
  </div>

  <!-- Chart JS -->
  <script>
    // Pie Chart
    new Chart(document.getElementById("pieChart"), {
      type: 'pie',
      data: {
        labels: ["I", "II", "III", "IV"],
        datasets: [{
          data: [8, 9, 3, 7],
          backgroundColor: ["#1abc9c", "#2cf312ff", "#8e44ad", "#e67e22"]
        }]
      },
      options: { responsive: true, maintainAspectRatio: false }
    });

    // Bar Chart 2
    new Chart(document.getElementById("barChart2"), {
      type: 'bar',
      data: {
        labels: ["Shave", "Late entry", "Haircut", "Dress code"],
        datasets: [{
          label: "Count",
          data: [8, 9, 6, 2],
          backgroundColor: ["#ff6384", "#36a2eb", "#ffcd56", "#4bc0c0"]
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } }
      }
    });
  </script>

  <!-- DataTables JS + CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

  <script>
    $(document).ready(function () {
      $('#tblAcademic').DataTable({
        "pageLength": 5,
        "lengthMenu": [5, 10, 20, 50],
        "ordering": true,
        "searching": true,
        "language": {
          "search": "Filter records:"
        }
      });
    });
  </script>

</body>
</html>
