<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('vendor/libs/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/libs/datatable/datatables/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('vendor/libs/jquery/validate/jquery.validate.js') }}"></script>
<script src="{{ asset('vendor/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('vendor/libs/jquery/validate/additional-methods.js') }}"></script>
<script src="{{ asset('vendor/libs/jquery/validate/localization/messages_id.js') }}"></script>
<script src="{{ asset('vendor/libs/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('vendor/libs/sweet-alert/sweetalert.min.js') }}"></script>
<script src="{{ asset('vendor/libs/apex-charts/apexcharts.js') }}"></script>
<script src="{{ asset('vendor/libs/filepond/filepond.min.js') }}"></script>
<script src="{{ asset('vendor/libs/filepond/filepond.jquery.js') }}"></script>
<script src="{{ asset('vendor/libs/filepond/filepond-plugin-file-validate-type.js') }}"></script>
<script src="https://js.pusher.com/7.2/pusher.min.js"></script>

<script src="{{ asset('vendor/js/menu.js') }}"></script>
<!-- endbuild -->
<script>
    $(function() {
        console.log('%c Hayooo mau ngapain.. wkwkwk, mau ngutek-ngutek ya. Gaboleh loh',
            'color: white; background-color: red');
        const notifications = localStorage.getItem('notifications')
        if (!notifications) {
            localStorage.setItem('notifications', 0)
        }
        if (notifications != 0) {
            $('#notification-count').text(notifications);
        }
    })
    var notificationsWrapper = $('#notification-count');
    var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
    var notificationsCountElem = notificationsToggle.find('i[data-count]');
    var notificationsCount = parseInt($('#notification-count').data('count'));
    console.log($('#notification-count').data('count'));
</script>

<!-- Vendors JS -->
{{-- <script src="{{ asset('vendor/libs/apex-charts/apexcharts.js') }}"></script> --}}

<!-- Main JS -->
<script src="{{ asset('js/main.js') }}"></script>
<script>
    // Total Revenue Report Chart - Bar Chart
  // --------------------------------------------------------------------
  const totalRevenueChartEl = document.querySelector('#totalRevenueChart'),
    totalRevenueChartOptions = {
      series: [
        {
          name: '2021',
          data: [18, 7, 15, 29, 18, 12, 9]
        },
        {
          name: '2020',
          data: [-13, -18, -9, -14, -5, -17, -15]
        }
      ],
      chart: {
        height: 300,
        stacked: true,
        type: 'bar',
        toolbar: { show: false }
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '33%',
          borderRadius: 12,
          startingShape: 'rounded',
          endingShape: 'rounded'
        }
      },
      colors: [config.colors.primary, config.colors.info],
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'smooth',
        width: 6,
        lineCap: 'round',
        colors: [cardColor]
      },
      legend: {
        show: true,
        horizontalAlign: 'left',
        position: 'top',
        markers: {
          height: 8,
          width: 8,
          radius: 12,
          offsetX: -3
        },
        labels: {
          colors: axisColor
        },
        itemMargin: {
          horizontal: 10
        }
      },
      grid: {
        borderColor: borderColor,
        padding: {
          top: 0,
          bottom: -8,
          left: 20,
          right: 20
        }
      },
      xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        labels: {
          style: {
            fontSize: '13px',
            colors: axisColor
          }
        },
        axisTicks: {
          show: false
        },
        axisBorder: {
          show: false
        }
      },
      yaxis: {
        labels: {
          style: {
            fontSize: '13px',
            colors: axisColor
          }
        }
      },
      responsive: [
        {
          breakpoint: 1700,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '32%'
              }
            }
          }
        },
        {
          breakpoint: 1580,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '35%'
              }
            }
          }
        },
        {
          breakpoint: 1440,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '42%'
              }
            }
          }
        },
        {
          breakpoint: 1300,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '48%'
              }
            }
          }
        },
        {
          breakpoint: 1200,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '40%'
              }
            }
          }
        },
        {
          breakpoint: 1040,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 11,
                columnWidth: '48%'
              }
            }
          }
        },
        {
          breakpoint: 991,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '30%'
              }
            }
          }
        },
        {
          breakpoint: 840,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '35%'
              }
            }
          }
        },
        {
          breakpoint: 768,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '28%'
              }
            }
          }
        },
        {
          breakpoint: 640,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '32%'
              }
            }
          }
        },
        {
          breakpoint: 576,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '37%'
              }
            }
          }
        },
        {
          breakpoint: 480,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '45%'
              }
            }
          }
        },
        {
          breakpoint: 420,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '52%'
              }
            }
          }
        },
        {
          breakpoint: 380,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '60%'
              }
            }
          }
        }
      ],
      states: {
        hover: {
          filter: {
            type: 'none'
          }
        },
        active: {
          filter: {
            type: 'none'
          }
        }
      }
    };
  if (typeof totalRevenueChartEl !== undefined && totalRevenueChartEl !== null) {
    const totalRevenueChart = new ApexCharts(totalRevenueChartEl, totalRevenueChartOptions);
    totalRevenueChart.render();
  }
</script>

<script>
    Pusher.logToConsole = true;

    $('#notif-icon').click(function() {
        localStorage.setItem('notifications', 0)
        const notifications = localStorage.getItem('notifications')
        $('#notification-count').text('');
    })
    var pusher = new Pusher('3517bb3b91fb20ab176c', {
        cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind("App\\Events\\SuratBroadcast", function(data) {
        console.log('id: '+data.id)
        var existingNotif = $('#notification-wrapper').html();
        var newNotif = ` <li class="p-2 border-bottom">
                        <a href="surat/detail/`+data.id+`" class="d-flex justify-content-between">
                            <div class="d-flex flex-row">
                                <div class="pt-1">
                                    <p class="fw-bold mb-0">` + data.nim_mhs + `</p>
                                </div>
                            </div>
                            <div class="pt-1">
                                <p class="small text-muted mb-1">` + data.kode_surat + `</p>
                            </div>
                        </a>
                    </li>`;
        $('#notification-wrapper').html(existingNotif + newNotif);
    });
    channel.bind('pusher:subscription_succeeded', function(data) {});


    channel.bind('my-event', function(data) {
        console.log('id: '+data.id)
        var existingNotif = $('#notification-wrapper').html();
        var newNotif = ` <li class="p-2 border-bottom">
                        <a href="surat/detail/`+data.id+`" class="d-flex justify-content-between">
                            <div class="d-flex flex-row">
                                <div class="pt-1">
                                    <p class="fw-bold mb-0">` + data.nim_mhs + `</p>
                                </div>
                            </div>
                            <div class="pt-1">
                                <p class="small text-muted mb-1">` + data.kode_surat + `</p>
                            </div>
                        </a>
                    </li>`;
        $('#notification-wrapper').html(existingNotif + newNotif);


        //toast
        $('#liveToast').toast('show');

        notifications = parseInt(localStorage.getItem('notifications'));
        notifications += 1;
        console.log(localStorage.getItem('notifications'))
        localStorage.setItem("notifications", notifications);
        notificationsWrapper.attr('data-count', notifications);
        notificationsWrapper.text(notifications);
    });
</script>

<!-- Page JS -->
<script src="{{ asset('js/dashboards-analytics.js') }}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
