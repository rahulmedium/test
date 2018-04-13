$(function() {

    Morris.Bar({
        element: 'maingraph',
        data: [{
                y: 'Tuesday',
                a: 34
            }, {
                y: 'Wednesday',
                a: 20
            }, {
                y: 'Thursday',
                a: 30
            }, {
                y: 'Friday',
                a: 40
            }, {
                y: 'Saturday',
                a: 60
            }, {
                y: 'Sunday',
                a: 80
            }, {
                y: 'Monday',
                a: 100
            }],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Wagers'],
        barColors: ['#6477d2'],
        hideHover: 'auto',
        resize: true
    });
//
//    Morris.Bar({
//        element: 'morris-bar-chart-2',
//        data: [{
//                y: '2006',
//                a: 100,
//                b: 90
//            }, {
//                y: '2007',
//                a: 75,
//                b: 65
//            }, {
//                y: '2008',
//                a: 50,
//                b: 40
//            }, {
//                y: '2009',
//                a: 75,
//                b: 65
//            }, {
//                y: '2010',
//                a: 50,
//                b: 40
//            }, {
//                y: '2011',
//                a: 75,
//                b: 65
//            }, {
//                y: '2012',
//                a: 100,
//                b: 90
//            }],
//        xkey: 'y',
//        ykeys: ['a', 'b'],
//        labels: ['Series A', 'Series B'],
//        hideHover: 'auto',
//        resize: true
//    });
//
//    Morris.Line({
//        element: 'morris-line',
//        data: [
//            {y: '2006', a: 100, b: 90},
//            {y: '2007', a: 75, b: 65},
//            {y: '2008', a: 50, b: 40},
//            {y: '2009', a: 75, b: 65},
//            {y: '2010', a: 50, b: 40},
//            {y: '2011', a: 75, b: 65},
//            {y: '2012', a: 100, b: 90}
//        ],
//        xkey: 'y',
//        ykeys: ['a', 'b'],
//        labels: ['Series A', 'Series B']
//    });
//
//    Morris.Donut({
//        element: 'morris-donut-chart',
//        data: [{
//                label: "Download Sales",
//                value: 12
//            }, {
//                label: "In-Store Sales",
//                value: 30
//            }, {
//                label: "Mail-Order Sales",
//                value: 20
//            }],
//        resize: true
//    });
//
//    Morris.Bar({
//        element: 'morris-bar-chart',
//        data: [{
//                y: '2006',
//                a: 100,
//                b: 90
//            }, {
//                y: '2007',
//                a: 75,
//                b: 65
//            }, {
//                y: '2008',
//                a: 50,
//                b: 40
//            }, {
//                y: '2009',
//                a: 75,
//                b: 65
//            }, {
//                y: '2010',
//                a: 50,
//                b: 40
//            }, {
//                y: '2011',
//                a: 75,
//                b: 65
//            }, {
//                y: '2012',
//                a: 100,
//                b: 90
//            }],
//        xkey: 'y',
//        ykeys: ['a', 'b'],
//        labels: ['Series A', 'Series B'],
//        hideHover: 'auto',
//        resize: true
//    });

});
