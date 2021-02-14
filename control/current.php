<?php include('header.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content pt-3">

     <!-- Small boxes (Stat box) -->
     <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <figure class="highcharts-figure">
                    <div id="container"></div>
                </figure>
              </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
    Highcharts.chart('container',{
        chart: {
            type: 'line',
            spacingBottom: 30,
            height: 640,
        },
        title: {
            text: 'Current Activity of Trains'
        },

        legend: {
            enabled: true
        },
        xAxis: {
            categories: [
                '08:00',
                '08:05',
                '08:10',
                '08:15',
                '08:20',
                '08:25',
                '08:30',
                '08:35',
                '08:40',
                '08:45',
                '08:50',
                '08:55',
                '09:00',
                '09:05',
                '09:10',
                '09:15',
                '09:20',
                '09:25',
                '09:30',
                '09:35',
                '09:40',
                '09:45',
                '09:50',
                '09:55',
                '10:00',
                '10:05',
                '10:10',
                '10:15',
                '10:20',
                '10:25',
                '10:30',
                '10:35',
                '10:40',
                '10:45',
                '10:50',
                '10:55',
            ]
        },
        yAxis: {
             categories: [
                'ISHURDI JN',
                'ISHURDI BY PASS',
                'MAJHGRAM JN',
                'MOOLADULI',
                'GAFURABAD',
                'CHATMOHAR',
                'GOOAKHORA',
                'BHANGOORA',
                'BARAL BRIDGE',
                'SARATNAGAR',
                'DILPASHAR',
                'LAHIRI MOHANPUR',
                'ULLAPARA',
                'SALOP',
                'JAMTOIL',
                'SHAHID M MONSUR ALI',
                'BANGABANDHU SETU/WEST',
                'BANGABANDHU SETU/EAST',
                'TANGAIL',
                'MOHERA',
                'MIRZAPUR',
                'HI-TECH CITY',
                'MOUCHAK'
            ],

            labels: {
                formatter: function () {
                    return this.value;
                }
            }
        },

        plotOptions: {
            line: {
                fillOpacity: 0.4
            }
        },
        credits: {
            enabled: false
        },
        tooltip: {
          enabled: true
        },
        series: [{
                name: '770 - Dumkatu Express',
                data: [null, null, 2, 1, 0, 1, 2, 3, 4, 5, 5, 5, 6, 7, 7, 8, 9, 10, 11, 12, 13, 14, 15, 15.5, 16, 17],
               marker: {
                      fillColor: '#00674C'
                   }
                },
                 {
                name: '757 - Drutajan Express',
                data: [14, 13, 12, 11, 10, 9, 8, 7, 6, 5, 4, 4, 3, 2, 1, 0, 1, 2, 2, 2, 3, 3, 4, 5, 6, 6.5, 7],
               marker: {
                      fillColor: '#E72D41'
                   }
                },
                 {
                name: '797 - Kurigram Express',
                data: [16, 16, 16, 15, 14, 13.5, 13,12, 11, 10.5, 10, 9, 8, 7, 6, 5, 4, 3, 2,1, 0, 1, 2, 2.5, 3],
               marker: {
                      fillColor: ' #212321'
                   }
                },
                 {
                name: '751 - Lalmoni Express',
                data: [19,18.2, 18,17.5, 17.3, 17, 16.5, 16, 16, 16, 16, 15.5, 15,14.5, 14, 13, 12, 11.5,11,11, 11, 10,9,8.5, 8, 7],
               marker: {
                      fillColor: ' #212321'
                   }
                }

            ]
    });
  </script>

<?php include('footer.php'); ?>