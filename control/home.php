<?php include('header.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

     <!-- Small boxes (Stat box) -->
     <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Total Station</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-home"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53</h3>

                <p>Trains</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-train"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>144</h3>

                <p>Station Masters</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>15</h3>

                <p>Currently Moving Trains</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->


        <div class="row">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Current Activity</h3>
                  <a href="javascript:void(0);">View Report</a>
                </div>
              </div>
              <div class="card-body">
                <div id="highcontainer"></div>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <div class="col-lg-4">
            <div class="card">
                <div class="card-header border-transparent">
                  <h3 class="card-title">Latest Train Activity</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table m-0">
                      <thead>
                      <tr>
                        <th>Train No</th>
                        <th>Name</th>
                        <th>Last Update</th>
                        <th>Last Update Time</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td><a href="#">795</a></td>
                        <td>Benapole Express</td>
                        <td><span class="badge badge-success">Tangail</span></td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20">09:05 AM</div>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="#">796</a></td>
                        <td>Benapole Express</td>
                        <td><span class="badge badge-success">Mouchak</span></td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20">09:05 AM</div>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="#">757</a></td>
                        <td>Drutajan Express</td>
                        <td><span class="badge badge-success">Bangabondhu Setu/East</span></td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20">09:05 AM</div>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="#">797</a></td>
                        <td>Kurigram Express</td>
                        <td><span class="badge badge-success">Biman Bandar</span></td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20">09:05 AM</div>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Routes</a>
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
        </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
    Highcharts.chart('highcontainer', {
      chart: {
          type: 'line'
      },
      title: {
          text: 'Monthly Average Hours'
      },
      subtitle: {
          text: 'Source: Bangladesh Railway'
      },
      xAxis: {
          categories: [ 'Mar 2020', 'Apr  2020', 'May  2020', 'Jun 2020', 'Jul 2020', 'Aug 2020', 'Sep 2020', 'Oct 2020', 'Nov 2020', 'Dec 2020', 'Jan 2021', 'Feb 2021',]
      },
      yAxis: {
          title: {
              text: 'Hours'
          }
      },
      plotOptions: {
          line: {
              dataLabels: {
                  enabled: true
              },
              enableMouseTracking: false
          }
      },
      series: [{
          name: '796',
          data: [117.0, 126.9, 129.5, 164.5, 218.4, 211.5, 125.2, 126.5, 223.3, 218.3, 113.9, 79.6]
      }, {
          name: '793',
          data: [213.9, 214.2, 225.7, 228.5, 161.9, 215.2, 167.0, 216.6, 184.2, 210.3, 216.6, 74.8]
      }]
    });
  </script>

<?php include('footer.php'); ?>