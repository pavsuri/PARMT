
$(document).ready(function() {

Morris.Area({
    element: 'morris-chart-dashboard',
    data: hours_data,
    xkey: 'date',
    xLabelFormat: function(date) {
        return (date.getMonth() + 1) + '/' + date.getDate() + '/' + date.getFullYear();
    },
    xLabels: 'day',
    ykeys: [userNameYkey],
    yLabelFormat: function(y) {
        //return "$" + y;
        return y;
    },
    labels: [userNameLabel],
    lineColors: ['#fff', '#fff', '#fff', '#fff'],
    hideHover: 'auto',
    resize: true,
    gridTextFamily: ['Open Sans'],
    gridTextColor: ['rgba(255,255,255,0.7)'],
    fillOpacity: 0.1,
    pointSize: 0,
    smooth: true,
    lineWidth: 2,
    grid: true,
    dateFormat: function(date) {
        d = new Date(date);
        return (d.getMonth() + 1) + '/' + d.getDate() + '/' + d.getFullYear();
    },
});

})