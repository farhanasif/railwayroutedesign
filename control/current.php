<?php include('header.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Current Activity</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Current Activity</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

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

    Highcharts.chart('container', {
        chart: {
            type: 'spline',
            scrollablePlotArea: {
                minWidth: 600,
                scrollPositionX: 1
            },
            height: 640,
            chartWidth: 740
        },
        title: {
            text: 'Current Train Location',
            align: 'left'
        },
        subtitle: {
            text: '8th February 2021, 11:35 am',
            align: 'left'
        },
        xAxis: {
            type: 'datetime',
            labels: {
                overflow: 'justify'
            }
        },
        yAxis: {
            title: {
                text: 'Location'
            },
            minorGridLineWidth: 0,
            gridLineWidth: 0,
            alternateGridColor: null,
            plotBands: [{ // MOUCHAK
                from: 362.20,
                to: 341.41,
                color: 'rgba(68, 170, 213, 0.1)',
                label: {
                    text: 'MOUCHAK',
                    style: {
                        color: '#606060'
                    }
                }
            }, { // Light breeze
                from: 341.40,
                to: 331.25,
                color: 'rgba(0, 0, 0, 0)',
                label: {
                    text: 'MIRZAPUR',
                    style: {
                        color: '#606060'
                    }
                }
            }, { // Gentle breeze
                from: 331.24,
                to: 315.51,
                color: 'rgba(68, 170, 213, 0.1)',
                label: {
                    text: 'MOHERA',
                    style: {
                        color: '#606060'
                    }
                }
            }, { // Moderate breeze
                from: 315.50,
                to: 294.91,
                color: 'rgba(0, 0, 0, 0)',
                label: {
                    text: 'TANGAIL',
                    style: {
                        color: '#606060'
                    }
                }
            }, { // Fresh breeze
                from: 294.90,
                to: 285.41,
                color: 'rgba(68, 170, 213, 0.1)',
                label: {
                    text: 'BANGABANDHU SETU/EAST',
                    style: {
                        color: '#606060'
                    }
                }
            }, { // Strong breeze
                from: 285.40,
                to: 281.1,
                color: 'rgba(0, 0, 0, 0)',
                label: {
                    text: 'BANGABANDHU SETU/WEST',
                    style: {
                        color: '#606060'
                    }
                }
            }, { // High wind
                from: 281.0,
                to: 274.4,
                color: 'rgba(68, 170, 213, 0.1)',
                label: {
                    text: 'SHAHID M MONSUR ALI',
                    style: {
                        color: '#606060'
                    }
                }
            },{ // High wind
                from: 274.50,
                to: 267.4,
                color: 'rgba(68, 170, 213, 0.1)',
                label: {
                    text: 'JAMTOIL',
                    style: {
                        color: '#606060'
                    }
                }
            },{ // High wind
                from: 267.3,
                to: 264,
                color: 'rgba(68, 170, 213, 0.1)',
                label: {
                    text: 'SALOP',
                    style: {
                        color: '#606060'
                    }
                }
            },{ // High wind
                from: 263,
                to: 256,
                color: 'rgba(68, 170, 213, 0.1)',
                label: {
                    text: 'ULLAPARA',
                    style: {
                        color: '#606060'
                    }
                }
            },{ // High wind
                from: 255,
                to: 252,
                color: 'rgba(68, 170, 213, 0.1)',
                label: {
                    text: 'LAHIRI MOHANPUR',
                    style: {
                        color: '#606060'
                    }
                }
            },{ // High wind
                from: 251,
                to: 247,
                color: 'rgba(68, 170, 213, 0.1)',
                label: {
                    text: 'DILPASHAR',
                    style: {
                        color: '#606060'
                    }
                }
            },{ // High wind
                from: 246,
                to: 242,
                color: 'rgba(68, 170, 213, 0.1)',
                label: {
                    text: 'BARAL BRIDGE',
                    style: {
                        color: '#606060'
                    }
                }
            },{ // High wind
                from: 240,
                to: 237,
                color: 'rgba(68, 170, 213, 0.1)',
                label: {
                    text: 'BHANGOORA',
                    style: {
                        color: '#606060'
                    }
                }
            },{ // High wind
                from: 236,
                to: 231,
                color: 'rgba(68, 170, 213, 0.1)',
                label: {
                    text: 'GOOAKHORA',
                    style: {
                        color: '#606060'
                    }
                }
            },{ // High wind
                from: 230,
                to: 226,
                color: 'rgba(68, 170, 213, 0.1)',
                label: {
                    text: 'CHATMOHOR',
                    style: {
                        color: '#606060'
                    }
                }
            }]
        },
        tooltip: {
            valueSuffix: ' KM'
        },
        plotOptions: {
            spline: {
                lineWidth: 4,
                states: {
                    hover: {
                        lineWidth: 5
                    }
                },
                marker: {
                    enabled: false
                },
                pointInterval: 300000, // one hour
                pointStart: Date.UTC(2021, 2, 8, 8, 0, 0)
            }
        },
        series: [{
            name: '759 Padma Express',
            data: [
                362, 361,355,350,340,338,330,321,319,312, 300, 295,295,295,284,281,277,273,270,265,263,254,254,248,243,243,239,239,228,228
            ]

        }, {
            name: '757 Drutajan Express',
            data: [
                331, 314,296,292,289,287,285, 284, 284,284, 279,273,267,261,254,248,243,239,239,239,233,233,228
            ]

        }],
        navigation: {
            menuItemStyle: {
                fontSize: '10px'
            }
        }
    });
  </script>

<?php include('footer.php'); ?>