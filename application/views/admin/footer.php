<!-- footer content -->
<footer>
  <div class="pull-right">
    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>public/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo base_url(); ?>public/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="<?php echo base_url(); ?>public/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="<?php echo base_url(); ?>public/vendors/bernii/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="<?php echo base_url(); ?>public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>public/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="<?php echo base_url(); ?>public/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="<?php echo base_url(); ?>public/vendors/Flot/jquery.flot.js"></script>
<script src="<?php echo base_url(); ?>public/vendors/Flot/jquery.flot.pie.js"></script>
<script src="<?php echo base_url(); ?>public/vendors/Flot/jquery.flot.time.js"></script>
<script src="<?php echo base_url(); ?>public/vendors/Flot/jquery.flot.stack.js"></script>
<script src="<?php echo base_url(); ?>public/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="<?php echo base_url(); ?>public/js/flot/jquery.flot.orderBars.js"></script>
<script src="<?php echo base_url(); ?>public/js/flot/date.js"></script>
<script src="<?php echo base_url(); ?>public/js/flot/jquery.flot.spline.js"></script>
<script src="<?php echo base_url(); ?>public/js/flot/curvedLines.js"></script>
<!-- jVectorMap -->
<script src="<?php echo base_url(); ?>public/js/maps/jquery-jvectormap-2.0.3.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?php echo base_url(); ?>public/js/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/datepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo base_url(); ?>public/build/js/custom.min.js"></script>

<!-- Flot -->
<script>
$(document).ready(function() {
var data1 = [
  [gd(2012, 1, 1), 17],
  [gd(2012, 1, 2), 74],
  [gd(2012, 1, 3), 6],
  [gd(2012, 1, 4), 39],
  [gd(2012, 1, 5), 20],
  [gd(2012, 1, 6), 85],
  [gd(2012, 1, 7), 7]
];

var data2 = [
  [gd(2012, 1, 1), 82],
  [gd(2012, 1, 2), 23],
  [gd(2012, 1, 3), 66],
  [gd(2012, 1, 4), 9],
  [gd(2012, 1, 5), 119],
  [gd(2012, 1, 6), 6],
  [gd(2012, 1, 7), 9]
];
$("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
  data1, data2
], {
  series: {
    lines: {
      show: false,
      fill: true
    },
    splines: {
      show: true,
      tension: 0.4,
      lineWidth: 1,
      fill: 0.4
    },
    points: {
      radius: 0,
      show: true
    },
    shadowSize: 2
  },
  grid: {
    verticalLines: true,
    hoverable: true,
    clickable: true,
    tickColor: "#d5d5d5",
    borderWidth: 1,
    color: '#fff'
  },
  colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
  xaxis: {
    tickColor: "rgba(51, 51, 51, 0.06)",
    mode: "time",
    tickSize: [1, "day"],
    //tickLength: 10,
    axisLabel: "Date",
    axisLabelUseCanvas: true,
    axisLabelFontSizePixels: 12,
    axisLabelFontFamily: 'Verdana, Arial',
    axisLabelPadding: 10
  },
  yaxis: {
    ticks: 8,
    tickColor: "rgba(51, 51, 51, 0.06)",
  },
  tooltip: false
});

function gd(year, month, day) {
  return new Date(year, month - 1, day).getTime();
}
});
</script>
<!-- /Flot -->

<!-- jVectorMap -->
<script src="<?php echo base_url();?>public/js/maps/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url();?>public/js/maps/jquery-jvectormap-us-aea-en.js"></script>
<script src="<?php echo base_url();?>public/js/maps/gdp-data.js"></script>
<script>
$(document).ready(function(){
$('#world-map-gdp').vectorMap({
  map: 'world_mill_en',
  backgroundColor: 'transparent',
  zoomOnScroll: false,
  series: {
    regions: [{
      values: gdpData,
      scale: ['#E6F2F0', '#149B7E'],
      normalizeFunction: 'polynomial'
    }]
  },
  onRegionTipShow: function(e, el, code) {
    el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
  }
});
});
</script>
<!-- /jVectorMap -->

<!-- Skycons -->
<script>
$(document).ready(function() {
var icons = new Skycons({
    "color": "#73879C"
  }),
  list = [
    "clear-day", "clear-night", "partly-cloudy-day",
    "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
    "fog"
  ],
  i;

for (i = list.length; i--;)
  icons.set(list[i], list[i]);

icons.play();
});
</script>
<!-- /Skycons -->

<!-- Doughnut Chart -->
<script>
$(document).ready(function(){
var options = {
  legend: false,
  responsive: false
};

});
</script>
<!-- /Doughnut Chart -->

<!-- bootstrap-daterangepicker -->
<script>
$(document).ready(function() {

var cb = function(start, end, label) {
  console.log(start.toISOString(), end.toISOString(), label);
  $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
};

var optionSet1 = {
  startDate: moment().subtract(29, 'days'),
  endDate: moment(),
  minDate: '01/01/2012',
  maxDate: '12/31/2015',
  dateLimit: {
    days: 60
  },
  showDropdowns: true,
  showWeekNumbers: true,
  timePicker: false,
  timePickerIncrement: 1,
  timePicker12Hour: true,
  ranges: {
    'Today': [moment(), moment()],
    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
    'This Month': [moment().startOf('month'), moment().endOf('month')],
    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
  },
  opens: 'left',
  buttonClasses: ['btn btn-default'],
  applyClass: 'btn-small btn-primary',
  cancelClass: 'btn-small',
  format: 'MM/DD/YYYY',
  separator: ' to ',
  locale: {
    applyLabel: 'Submit',
    cancelLabel: 'Clear',
    fromLabel: 'From',
    toLabel: 'To',
    customRangeLabel: 'Custom',
    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    firstDay: 1
  }
};
$('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
$('#reportrange').daterangepicker(optionSet1, cb);
$('#reportrange').on('show.daterangepicker', function() {
  console.log("show event fired");
});
$('#reportrange').on('hide.daterangepicker', function() {
  console.log("hide event fired");
});
$('#reportrange').on('apply.daterangepicker', function(ev, picker) {
  console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
});
$('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
  console.log("cancel event fired");
});
$('#options1').click(function() {
  $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
});
$('#options2').click(function() {
  $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
});
$('#destroy').click(function() {
  $('#reportrange').data('daterangepicker').remove();
});
});
</script>
<!-- /bootstrap-daterangepicker -->
<!-- /gauge.js -->
</body>
</html>
