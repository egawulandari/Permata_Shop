$(function() {
  "use strict";

  var ticksStyle = {
    fontColor: "#495057",
    fontStyle: "bold"
  };

  var mode = "index";
  var intersect = true;

  var $salesChart = $("#sales-chart");
  var salesChart = new Chart($salesChart, {
    type: "bar",
    data: {
      labels: [
        "JAN",
        "FEB",
        "MAR",
        "APR",
        "MEI",
        "JUN",
        "JUL",
        "AGS",
        "OKT",
        "NOV",
        "DES"
      ],
      datasets: [
        {
          backgroundColor: "#007bff",
          borderColor: "#007bff",
          data: [
            1000,
            2000,
            3000,
            2500,
            2700,
            2500,
            3000,
            3000,
            2500,
            2700,
            2500,
            3000
          ]
        },
        {
          backgroundColor: "#ced4da",
          borderColor: "#ced4da",
          data: [
            700,
            1700,
            2700,
            2000,
            1800,
            1500,
            2000,
            3000,
            2500,
            2700,
            2500,
            3000
          ]
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        mode: mode,
        intersect: intersect
      },
      hover: {
        mode: mode,
        intersect: intersect
      },
      legend: {
        display: false
      },
      scales: {
        yAxes: [
          {
            // display: false,
            gridLines: {
              display: true,
              lineWidth: "4px",
              color: "rgba(0, 0, 0, .2)",
              zeroLineColor: "transparent"
            },
            ticks: $.extend(
              {
                beginAtZero: true,

                // Include a dollar sign in the ticks
                callback: function(value, index, values) {
                  if (value >= 1000) {
                    value /= 1000;
                    value += "k";
                  }
                  return "Rp" + value;
                }
              },
              ticksStyle
            )
          }
        ],
        xAxes: [
          {
            display: true,
            gridLines: {
              display: false
            },
            ticks: ticksStyle
          }
        ]
      }
    }
  });

  var $salesChart2 = $("#sales-chart2");
  var salesChart2 = new Chart($salesChart2, {
    type: "bar",
    data: {
      labels: [
        "JAN",
        "FEB",
        "MAR",
        "APR",
        "MEI",
        "JUN",
        "JUL",
        "AGS",
        "OKT",
        "NOV",
        "DES"
      ],
      datasets: [
        {
          backgroundColor: "#007bff",
          borderColor: "#007bff",
          data: [100, 100, 150, 150, 151, 160, 200, 150, 150, 151, 160, 200]
        },
        {
          backgroundColor: "#ced4da",
          borderColor: "#ced4da",
          data: [25, 75, 75, 80, 90, 92, 95, 150, 150, 151, 160, 200]
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        mode: mode,
        intersect: intersect
      },
      hover: {
        mode: mode,
        intersect: intersect
      },
      legend: {
        display: false
      },
      scales: {
        yAxes: [
          {
            // display: false,
            gridLines: {
              display: true,
              lineWidth: "4px",
              color: "rgba(0, 0, 0, .2)",
              zeroLineColor: "transparent"
            },
            ticks: $.extend(
              {
                beginAtZero: true,

                // Include a dollar sign in the ticks
                callback: function(value, index, values) {
                  if (value >= 1000) {
                    value /= 1000;
                    value += "k";
                  }
                  return value;
                }
              },
              ticksStyle
            )
          }
        ],
        xAxes: [
          {
            display: true,
            gridLines: {
              display: false
            },
            ticks: ticksStyle
          }
        ]
      }
    }
  });

  var $visitorsChart = $("#visitors-chart");
  var visitorsChart = new Chart($visitorsChart, {
    data: {
      labels: ["18th", "20th", "22nd", "24th", "26th", "28th", "30th"],
      datasets: [
        {
          type: "line",
          data: [100, 120, 170, 167, 180, 177, 160],
          backgroundColor: "transparent",
          borderColor: "#007bff",
          pointBorderColor: "#007bff",
          pointBackgroundColor: "#007bff",
          fill: false
          // pointHoverBackgroundColor: '#007bff',
          // pointHoverBorderColor    : '#007bff'
        },
        {
          type: "line",
          data: [60, 80, 70, 67, 80, 77, 100],
          backgroundColor: "tansparent",
          borderColor: "#ced4da",
          pointBorderColor: "#ced4da",
          pointBackgroundColor: "#ced4da",
          fill: false
          // pointHoverBackgroundColor: '#ced4da',
          // pointHoverBorderColor    : '#ced4da'
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        mode: mode,
        intersect: intersect
      },
      hover: {
        mode: mode,
        intersect: intersect
      },
      legend: {
        display: false
      },
      scales: {
        yAxes: [
          {
            // display: false,
            gridLines: {
              display: true,
              lineWidth: "4px",
              color: "rgba(0, 0, 0, .2)",
              zeroLineColor: "transparent"
            },
            ticks: $.extend(
              {
                beginAtZero: true,
                suggestedMax: 200
              },
              ticksStyle
            )
          }
        ],
        xAxes: [
          {
            display: true,
            gridLines: {
              display: false
            },
            ticks: ticksStyle
          }
        ]
      }
    }
  });
});
