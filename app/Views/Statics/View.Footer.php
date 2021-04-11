
<!--   Core JS Files   -->
<script src="{{Host}}public/js/core/jquery.min.js"></script>
<script src="{{Host}}public/js/core/popper.min.js"></script>
<script src="{{Host}}public/js/core/bootstrap-material-design.min.js"></script>
<script src="{{Host}}public/js/plugins/perfect-scrollbar.min.js"></script>
<!-- Plugin for the momentJs  -->
<script src="{{Host}}public/js/plugins/moment.min.js"></script>
<!--  Plugin for Sweet Alert -->
<script src="{{Host}}public/js/plugins/sweetalert2.js"></script>
<!-- Forms Validations Plugin -->
<script src="{{Host}}public/js/plugins/jquery.validate.min.js"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{Host}}public/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{Host}}public/js/plugins/bootstrap-selectpicker.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{Host}}public/js/plugins/bootstrap-datetimepicker.min.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="{{Host}}public/js/plugins/jquery.dataTables.min.js"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{Host}}public/js/plugins/bootstrap-tagsinput.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{Host}}public/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{Host}}public/js/plugins/fullcalendar.min.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{Host}}public/js/plugins/jquery-jvectormap.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{Host}}public/js/plugins/nouislider.min.js"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="{{Host}}public/js/plugins/arrive.min.js"></script>
<!-- Chartist JS -->
<script src="{{Host}}public/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="{{Host}}public/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{Host}}public/js/material-dashboard.js?v=2.2.2" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="https://code.highcharts.com/highcharts.src.js"></script>


<script>
    $(document).ready(function() {
        $().ready(function() {
            $sidebar = $('.sidebar');

            $sidebar_img_container = $sidebar.find('.sidebar-background');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                    $('.fixed-plugin .dropdown').addClass('open');
                }

            }

            $('.fixed-plugin a').click(function(event) {
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .active-color span').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-color', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data-color', new_color);
                }
            });

            $('.fixed-plugin .background-color .badge').click(function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('background-color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-background-color', new_color);
                }
            });

            $('.fixed-plugin .img-holder').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');


                var new_image = $(this).find("img").attr('src');

                if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    $sidebar_img_container.fadeOut('fast', function() {
                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $sidebar_img_container.fadeIn('fast');
                    });
                }

                if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $full_page_background.fadeOut('fast', function() {
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                        $full_page_background.fadeIn('fast');
                    });
                }

                if ($('.switch-sidebar-image input:checked').length == 0) {
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                }
            });

            $('.switch-sidebar-image input').change(function() {
                $full_page_background = $('.full-page-background');

                $input = $(this);

                if ($input.is(':checked')) {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar_img_container.fadeIn('fast');
                        $sidebar.attr('data-image', '#');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page_background.fadeIn('fast');
                        $full_page.attr('data-image', '#');
                    }

                    background_image = true;
                } else {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar.removeAttr('data-image');
                        $sidebar_img_container.fadeOut('fast');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page.removeAttr('data-image', '#');
                        $full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                }
            });

            $('.switch-sidebar-mini input').change(function() {
                $body = $('body');

                $input = $(this);

                if (md.misc.sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;

                    if ($(".sidebar").length != 0) {
                        var ps = new PerfectScrollbar('.sidebar');
                    }
                    if ($(".sidebar-wrapper").length != 0) {
                        var ps1 = new PerfectScrollbar('.sidebar-wrapper');
                    }
                    if ($(".main-panel").length != 0) {
                        var ps2 = new PerfectScrollbar('.main-panel');
                    }
                    if ($(".main").length != 0) {
                        var ps3 = new PerfectScrollbar('main');
                    }

                } else {

                    if ($(".sidebar").length != 0) {
                        var ps = new PerfectScrollbar('.sidebar');
                        ps.destroy();
                    }
                    if ($(".sidebar-wrapper").length != 0) {
                        var ps1 = new PerfectScrollbar('.sidebar-wrapper');
                        ps1.destroy();
                    }
                    if ($(".main-panel").length != 0) {
                        var ps2 = new PerfectScrollbar('.main-panel');
                        ps2.destroy();
                    }
                    if ($(".main").length != 0) {
                        var ps3 = new PerfectScrollbar('main');
                        ps3.destroy();
                    }


                    setTimeout(function() {
                        $('body').addClass('sidebar-mini');

                        md.misc.sidebar_mini_active = true;
                    }, 300);
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);

            });
        });
    });
</script>
<script>

    $(document).ready(function() {

      let wizardTab = 0;
      // Initialise the wizard
      demo.initMaterialWizard()     
      getbillsperMonth();
      getbillsperMonthperAcount();
      getIncomeperCategiries();
      setTimeout(function() {
        $('.card.card-wizard').addClass('active');
      }, 600);

      $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            var idx = $(this).index('a[data-toggle="tab"]');
            wizardTab = idx;
        });


        $(".addFund").on('click',function (){
            $('#noticeModal').modal({backdrop: 'static'});
             $('#noticeModal').modal('show');
        });


        $("#AddRecord").on('click',function (){
          
           let data = '';
           console.log(wizardTab);
           if(wizardTab==0)
           {
                data={
                            account      :$("#userAccountInc").val(),
                            categories   :$("#combCategoriesInc").val(),
                            amount       :$("#amountInc").val(),
                            operation   :'+' };
           }else
           {
                 data={
                            account      :$("#userAccountBill").val(),
                            categories   :$("#combCategoriesBill").val(),
                            amount       :$("#amountBill").val(),
                            operation   :'-' };
           }


          console.log(wizardTab);
            $.ajax({
                type:"POST",
                url:"{{Host}}Dashboard/newReg",
                data:{data : data},
                dataType: 'json',
                success:function(data){
                    console.log(data);
                }
            });


        });


        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();
        md.initVectorMap();

    });

    const getbillsperMonth=async()=>{


        Highcharts.theme = {
                            colors: ['#058DC7',
                                     '#50B432',
                                     '#ED561B',
                                     '#DDDF00',
                                     '#24CBE5',
                                     '#64E572',
                                     '#FF9655',
                                     '#FFF263',
                                     '#6AF9C4'],
                            chart: {
                                backgroundColor: {
                                    linearGradient: [500, 0, 500, 500],
                                    stops: [
                                        [0, 'rgba(255, 99, 71, 0)'],
                                        [1, 'rgba(255, 99, 71, 0)']
                                    ]
                                },
                            },
                            title: {
                                style: {
                                    color: '#000000',
                                    font: 'bold 16px "Roboto", Arial, sans-serif'
                                }
                            },
                            subtitle: {
                                style: {
                                    color: '#000000',
                                    font: 'bold 12px "Roboto", Arial, sans-serif'
                                }
                            },
                            legend: {
                                itemStyle: {
                                    font: '12pt Roboto, Arial, sans-serif',
                                    color: '#000000'
                                },
                                itemHoverStyle:{
                                    color: '#000000'
                                }
                            }
                        };
                        // Apply the theme
                        Highcharts.setOptions(Highcharts.theme);


      $.ajax({
                type:"POST",
                url:"{{Host}}Dashboard/getbillsperMonth",
                dataType: 'json',
                async: false,
                success:function(data){
                  
                    // Build the chart
                    Highcharts.chart('billViewsChart', {
                        chart: {
                            plotBackgroundColor: null,
                            plotBorderWidth: null,
                            plotShadow: false,
                            type: 'pie'
                        },
                        title: {
                            text: ''
                        },
                        tooltip: {
                            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                        },
                        accessibility: {
                            point: {
                                valueSuffix: '%'
                            }
                        },
                        plotOptions: {
                            pie: {
                                allowPointSelect: true,
                                cursor: 'pointer',
                                dataLabels: {
                                    enabled: false
                                },
                                showInLegend: true
                            }
                        },
                        series: [{
                            name: 'Brands',
                            colorByPoint: true,
                            data: data
                        }]
                    });
                }
            });


   
    }

const getbillsperMonthperAcount=async()=>{

    $.ajax({
                type:"POST",
                url:"{{Host}}Dashboard/getbillsperMonthperAcount",
                dataType: 'json',
                async: false,
                success:function(data){
                  
                     // Build the chart
    Highcharts.chart('billperacountViewsChart', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: data
        }]
    });
                }
            });


}

const getIncomeperCategiries=async()=>{
    $.ajax({
                type:"POST",
                url:"{{Host}}Dashboard/getIncomeperCategiries",
                dataType: 'json',
                async: false,
                success:function(data){
                   console.log(data[0].name);
                   let categories=[];
                   let series =[];
                   for (i = 0; i <data.length; i++) {
                        categories.push(data[i].name);
                        series.push({"name":data[i].name,"data":[data[i].data]})
                       }
                   Highcharts.chart('IncomepercategoriesChar', {
                                chart: {
                                    type: 'column'
                                },
                                title: {
                                    text: ''
                                },
                                subtitle: {
                                    text: ''
                                },
                                xAxis: {
                                    categories:categories,
                                    crosshair: true
                                },
                                yAxis: {
                                    min: 0,
                                    title: {
                                        text: 'Monto ($)'
                                    }
                                },
                                tooltip: {
                                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                        '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                                    footerFormat: '</table>',
                                    shared: true,
                                    useHTML: true
                                },
                                plotOptions: {
                                    column: {
                                        pointPadding: 0.2,
                                        borderWidth: 0
                                    }
                                },
                                series: series
                            });

                                }
                            });

}

</script>
</body>

</html>