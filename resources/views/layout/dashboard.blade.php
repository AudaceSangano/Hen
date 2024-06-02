@extends('inc.main')
@section('content')
<?php
use Carbon\Carbon;
use App\Models\Product;
if (Auth::user()->role_id==2) {
$items = Product::select("*")
    ->whereBetween('created_at',

            [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]

        )
    ->where('user_id',Auth::id())
    ->get();
}else {
    $items = Product::select("*")
        ->whereBetween('created_at',

                [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]

            )
        ->get();
}
$mandayEgg=0;
$mandayMeat=0;
$mandayMishwi=0;

$tuesdayEgg=0;
$tuesdayMeat=0;
$tuesdayMishwi=0;

$wednesdayEgg=0;
$wednesdayMeat=0;
$wednesdayMishwi=0;

$thursdayEgg=0;
$thursdayMeat=0;
$thursdayMishwi=0;

$fridayEgg=0;
$fridayMeat=0;
$fridayMishwi=0;

$saturdayEgg=0;
$saturdayMeat=0;
$saturdayMishwi=0;

$sundayEgg=0;
$sundayMeat=0;
$sundayMishwi=0;

foreach ($items as $item) {
    $d = Carbon::createFromFormat('Y-m-d', $item->created_at->format('Y-m-d'))->format('l');
    if ($d == "Monday" && $item->category_id==1) {
        $mandayEgg+=$item->quantity;
    }
    if ($d == "Monday" && $item->category_id==2) {
        $mandayMeat+=$item->quantity;
    }
    if ($d == "Monday" && $item->category_id==3) {
        $mandayMishwi+=$item->quantity;
    }

    if ($d == "Tuesday" && $item->category_id==1) {
        $tuesdayEgg+=$item->quantity;
    }
    if ($d == "Tuesday" && $item->category_id==2) {
        $tuesdayMeat+=$item->quantity;
    }
    if ($d == "Tuesday" && $item->category_id==3) {
        $tuesdayMishwi+=$item->quantity;
    }

    if ($d == "Wednesday" && $item->category_id==1) {
        $wednesdayEgg+=$item->quantity;
    }
    if ($d == "Wednesday" && $item->category_id==2) {
        $wednesdayMeat+=$item->quantity;
    }
    if ($d == "Wednesday" && $item->category_id==3) {
        $wednesdayMishwi+=$item->quantity;
    }

    if ($d == "Thursday" && $item->category_id==1) {
        $thursdayEgg+=$item->quantity;
    }
    if ($d == "Thursday" && $item->category_id==2) {
        $thursdayMeat+=$item->quantity;
    }
    if ($d == "Thursday" && $item->category_id==3) {
        $thursdayMishwi+=$item->quantity;
    }

    if ($d == "Friday" && $item->category_id==1) {
        $fridayEgg+=$item->quantity;
    }
    if ($d == "Friday" && $item->category_id==2) {
        $fridayMeat+=$item->quantity;
    }
    if ($d == "Friday" && $item->category_id==3) {
        $fridayMishwi+=$item->quantity;
    }

    if ($d == "Saturday" && $item->category_id==1) {
        $saturdayEgg+=$item->quantity;
    }
    if ($d == "Saturday" && $item->category_id==2) {
        $saturdayMeat+=$item->quantity;
    }
    if ($d == "Saturday" && $item->category_id==3) {
        $saturdayMishwi+=$item->quantity;
    }

    if ($d == "Sunday" && $item->category_id==1) {
        $sundayEgg+=$item->quantity;
    }
    if ($d == "Sunday" && $item->category_id==2) {
        $sundayMeat+=$item->quantity;
    }
    if ($d == "Sunday" && $item->category_id==3) {
        $sundayMishwi+=$item->quantity;
    }
}
?>

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">
        @if (Auth::user()->role_id==3)
        <?php
        $egg = App\Models\Product::where('category_id',1)->count();
        $meat = App\Models\Product::where('category_id',2)->count();
        $mishwi = App\Models\Product::where('category_id',3)->count();
        ?>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-account-invoice-two">
                <div class="widget-content">
                    <div class="account-box">
                        <div class="info">
                            <div class="inv-title">
                                <h5 class="">Total Egg Production</h5>
                            </div>
                            <div class="inv-balance-info">

                                <p class="inv-balance"></p>

                            </div>
                        </div>
                        <div class="acc-action">
                            <div class="">
                                {{$egg}}
                             </div>
                            <a href="{{route('layout.product.list.category')}}/egg">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-account-invoice-two bg-primary">
                <div class="widget-content">
                    <div class="account-box">
                        <div class="info">
                            <div class="inv-title">
                                <h5 class="">Total Meat Chicken</h5>
                            </div>
                            <div class="inv-balance-info">

                                <p class="inv-balance"></p>

                            </div>
                        </div>
                        <div class="acc-action">
                            <div class="">
                                {{$meat}}
                            </div>
                            <a href="{{route('layout.product.list.category')}}/meat-chicken">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-account-invoice-two bg-success">
                <div class="widget-content">
                    <div class="account-box">
                        <div class="info">
                            <div class="inv-title">
                                <h5 class="">Total Production Of Imishwi</h5>
                            </div>
                            <div class="inv-balance-info">

                                <p class="inv-balance"></p>

                            </div>
                        </div>
                        <div class="acc-action">
                            <div class="">
                                {{$mishwi}}
                            </div>
                            <a href="{{route('layout.product.list.category')}}/imishwi">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">

                <div class="widget-content">
                    <div id="revenueMonthly"></div>
                </div>
            </div>
        </div>
        @endif



    </div>

</div>
@endsection
@section('css')
<script>
    try {

/*
    ==============================
    |    @Options Charts Script   |
    ==============================
*/

/*
    =============================
        Daily Sales | Options
    =============================
*/
    var d_2options1 = {
      chart: {
            height: 160,
            type: 'bar',
            stacked: true,
            stackType: '100%',
            toolbar: {
              show: false,
            }
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            show: true,
            width: 1,
        },
        colors: ['#e2a03f', '#e0e6ed'],
        responsive: [{
            breakpoint: 480,
            options: {
                legend: {
                    position: 'bottom',
                    offsetX: -10,
                    offsetY: 0
                }
            }
        }],
        series: [{
            name: 'Sales',
            data: [44, 55, 41, 67, 22, 43, 21]
        },{
            name: 'Last Week',
            data: [13, 23, 20, 8, 13, 27, 33]
        }],
        xaxis: {
            labels: {
                show: false,
            },
            categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat'],
        },
        yaxis: {
            show: false
        },
        fill: {
            opacity: 1
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '25%',

            }
        },
        legend: {
            show: false,
        },
        grid: {
            show: false,
            xaxis: {
                lines: {
                    show: false
                }
            },
            padding: {
              top: 10,
              right: 0,
              bottom: -40,
              left: 0
            },
        },
    }

/*
    =============================
        Total Orders | Options
    =============================
*/
    var d_2options2 = {
      chart: {
        id: 'sparkline1',
        group: 'sparklines',
        type: 'area',
        height: 295,
        sparkline: {
          enabled: true
        },
      },
      stroke: {
          curve: 'smooth',
          width: 2
      },
      fill: {
        opacity: 1,
      },
      series: [{
        name: 'Sales',
        data: [28, 40, 36, 52, 38, 60, 38, 52, 36, 40]
      }],
      labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
      yaxis: {
        min: 0
      },
      grid: {
        padding: {
          top: 125,
          right: 0,
          bottom: 0,
          left: 0
        },
      },
      fill: {
        type:"gradient",
        gradient: {
            type: "vertical",
            shadeIntensity: 1,
            inverseColors: !1,
            opacityFrom: .40,
            opacityTo: .05,
            stops: [45, 100]
        }
    },
      tooltip: {
        x: {
          show: false,
        },
        theme: 'dark'
      },
      colors: ['#fff']
    }


/*
    =================================
        Revenue Monthly | Options
    =================================
*/
var options1 = {
  chart: {
    fontFamily: 'Nunito, sans-serif',
    height: 365,
    type: 'area',
    zoom: {
        enabled: false
    },
    dropShadow: {
      enabled: true,
      opacity: 0.2,
      blur: 10,
      left: -7,
      top: 22
    },
    toolbar: {
      show: false
    },
    events: {
      mounted: function(ctx, config) {
        const highest1 = ctx.getHighestValueInSeries(0);
        const highest2 = ctx.getHighestValueInSeries(1);

        ctx.addPointAnnotation({
          x: new Date(ctx.w.globals.seriesX[0][ctx.w.globals.series[0].indexOf(highest1)]).getTime(),
          y: highest1,
          label: {
            style: {
              cssClass: 'd-none'
            }
          },
          customSVG: {
              SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#1b55e2" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
              cssClass: undefined,
              offsetX: -8,
              offsetY: 5
          }
        })

        ctx.addPointAnnotation({
          x: new Date(ctx.w.globals.seriesX[1][ctx.w.globals.series[1].indexOf(highest2)]).getTime(),
          y: highest2,
          label: {
            style: {
              cssClass: 'd-none'
            }
          },
          customSVG: {
              SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#e7515a" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
              cssClass: undefined,
              offsetX: -8,
              offsetY: 5
          }
        })
      },
    }
  },
  colors: ['#1b55e2', '#e7515a', '#000'],
  dataLabels: {
      enabled: false
  },
  markers: {
    discrete: [{
    seriesIndex: 0,
    dataPointIndex: 7,
    fillColor: '#000',
    strokeColor: '#000',
    size: 5
  }, {
    seriesIndex: 2,
    dataPointIndex: 11,
    fillColor: '#000',
    strokeColor: '#000',
    size: 4
  }]
  },
  subtitle: {
    text: '2022',
    align: 'left',
    margin: 0,
    offsetX: 180,
    offsetY: 0,
    floating: false,
    style: {
      fontSize: '18px',
      color:  '#4361ee'
    }
  },
  title: {
    text: 'Annually report',
    align: 'left',
    margin: 0,
    offsetX: -10,
    offsetY: 0,
    floating: false,
    style: {
      fontSize: '18px',
      color:  '#0e1726'
    },
  },
  stroke: {
      show: true,
      curve: 'smooth',
      width: 2,
      lineCap: 'square'
  },
  series: [{
      name: 'Chicken Eggs',
      data: [{{$mandayEgg}},{{$tuesdayEgg}},{{$wednesdayEgg}},{{$thursdayEgg}},{{$fridayEgg}},{{$saturdayEgg}},{{$sundayEgg}}]
  }, {
      name: 'Chicken Meat',
      data: [{{$mandayMeat}},{{$tuesdayMeat}},{{$wednesdayMeat}},{{$thursdayMeat}},{{$fridayMeat}},{{$saturdayMeat}},{{$sundayMeat}}]
  }, {
      name: 'Udushwi',
      data: [{{$mandayMishwi}},{{$tuesdayMishwi}},{{$wednesdayMishwi}},{{$thursdayMishwi}},{{$fridayMishwi}},{{$saturdayMishwi}},{{$sundayMishwi}}]
  }],
  labels: ['Manday','TuesDay','wenesday','Thersday','Firday','Sturday','Sunday'],
  xaxis: {
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false
    },
    crosshairs: {
      show: true
    },
    labels: {
      offsetX: 0,
      offsetY: 5,
      style: {
          fontSize: '12px',
          fontFamily: 'Nunito, sans-serif',
          cssClass: 'apexcharts-xaxis-title',
      },
    }
  },
  yaxis: {
    labels: {
      formatter: function(value, index) {
        return (value / 1000) + 'K'
      },
      offsetX: -22,
      offsetY: 0,
      style: {
          fontSize: '12px',
          fontFamily: 'Nunito, sans-serif',
          cssClass: 'apexcharts-yaxis-title',
      },
    }
  },
  grid: {
    borderColor: '#e0e6ed',
    strokeDashArray: 5,
    xaxis: {
        lines: {
            show: true
        }
    },
    yaxis: {
        lines: {
            show: false,
        }
    },
    padding: {
      top: 0,
      right: 0,
      bottom: 0,
      left: -10
    },
  },
  legend: {
    position: 'top',
    horizontalAlign: 'right',
    offsetY: -50,
    fontSize: '16px',
    fontFamily: 'Nunito, sans-serif',
    markers: {
      width: 10,
      height: 10,
      strokeWidth: 0,
      strokeColor: '#fff',
      fillColors: undefined,
      radius: 12,
      onClick: undefined,
      offsetX: 0,
      offsetY: 0
    },
    itemMargin: {
      horizontal: 0,
      vertical: 20
    }
  },
  tooltip: {
    theme: 'dark',
    marker: {
      show: true,
    },
    x: {
      show: false,
    }
  },
  fill: {
      type:"gradient",
      gradient: {
          type: "vertical",
          shadeIntensity: 1,
          inverseColors: !1,
          opacityFrom: .28,
          opacityTo: .05,
          stops: [45, 100]
      }
  },
  responsive: [{
    breakpoint: 575,
    options: {
      legend: {
          offsetY: -30,
      },
    },
  }]
}

/*
    ==================================
        Sales By Category | Options
    ==================================
*/

var options = {
      chart: {
          type: 'donut',
          width: 380
      },
      colors: ['#5c1ac3', '#e2a03f', '#e7515a', '#e2a03f'],
      dataLabels: {
        enabled: false
      },
      legend: {
          position: 'bottom',
          horizontalAlign: 'center',
          fontSize: '14px',
          markers: {
            width: 10,
            height: 10,
          },
          itemMargin: {
            horizontal: 0,
            vertical: 8
          }
      },
      plotOptions: {
        pie: {
          donut: {
            size: '65%',
            background: 'transparent',
            labels: {
              show: true,
              name: {
                show: true,
                fontSize: '29px',
                fontFamily: 'Nunito, sans-serif',
                color: undefined,
                offsetY: -10
              },
              value: {
                show: true,
                fontSize: '26px',
                fontFamily: 'Nunito, sans-serif',
                color: '20',
                offsetY: 16,
                formatter: function (val) {
                  return val
                }
              },
              total: {
                show: true,
                showAlways: true,
                label: 'Total',
                color: '#888ea8',
                formatter: function (w) {
                  return w.globals.seriesTotals.reduce( function(a, b) {
                    return a + b
                  }, 0)
                }
              }
            }
          }
        }
      },
      stroke: {
        show: true,
        width: 25,
      },
      series: [20000, 7000, 8500],
      labels: ['Eggs', 'Chicken Meat', 'udushwi'],
      responsive: [{
          breakpoint: 1599,
          options: {
              chart: {
                  width: '350px',
                  height: '400px'
              },
              legend: {
                  position: 'bottom'
              }
          },

          breakpoint: 1439,
          options: {
              chart: {
                  width: '250px',
                  height: '390px'
              },
              legend: {
                  position: 'bottom'
              },
              plotOptions: {
                pie: {
                  donut: {
                    size: '65%',
                  }
                }
              }
          },
      }]
}

/*
    ==============================
    |    @Render Charts Script    |
    ==============================
*/


/*
    ============================
        Daily Sales | Render
    ============================
*/
var d_2C_1 = new ApexCharts(document.querySelector("#daily-sales"), d_2options1);
d_2C_1.render();

/*
    ============================
        Total Orders | Render
    ============================
*/
var d_2C_2 = new ApexCharts(document.querySelector("#total-orders"), d_2options2);
d_2C_2.render();

/*
    ================================
        Revenue Monthly | Render
    ================================
*/
var chart1 = new ApexCharts(
    document.querySelector("#revenueMonthly"),
    options1
);

chart1.render();

/*
    =================================
        Sales By Category | Render
    =================================
*/
var chart = new ApexCharts(
    document.querySelector("#chart-2"),
    options
);

chart.render();

/*
    =============================================
        Perfect Scrollbar | Recent Activities
    =============================================
*/
$('.mt-container').each(function(){ const ps = new PerfectScrollbar($(this)[0]); });

const topSellingProduct = new PerfectScrollbar('.widget-table-three .table-scroll table', {
  wheelSpeed:.5,
  swipeEasing:!0,
  minScrollbarLength:40,
  maxScrollbarLength:100,
  suppressScrollY: true

});

} catch(e) {
    console.log(e);
}

    </script>
@endsection
