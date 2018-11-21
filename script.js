window.onload = function() {
    // var options1 = new CanvasJS.Chart("chartContainer", {
    //     title: {
    //         text: "起薪統計"
    //     },
    //     subtitles: [{
    //         text: "2018"
    //     }],
    //     animationEnabled: true,
    //     axisX: {
    //         labelAngle: 180
    //     },
    //     width: 600,
    //     height: 480,
    //     data: [{

    //         type: "column",
    //         startAngle: 40,
    //         toolTipContent: "<b>{label}</b>: {y}%",


    //         indexLabelFontSize: 16,
    //         indexLabel: "{y}%",

    //         dataPoints: [{
    //             y: 48.36,
    //             label: "A"
    //         }, {
    //             y: 26.85,
    //             label: "B"
    //         }, {
    //             y: 1.49,
    //             label: "C"
    //         }, {
    //             y: 6.98,
    //             label: "D"
    //         }, {
    //             y: 6.53,
    //             label: "E"
    //         }, {
    //             y: 2.45,
    //             label: "F"
    //         }, {
    //             y: 3.32,
    //             label: "G"
    //         }, {
    //             y: 4.03,
    //             label: "H"
    //         }, {
    //             y: 2.36,
    //             label: "I"
    //         }, {
    //             y: 9.36,
    //             label: "J"
    //         }, {
    //             y: 43.36,
    //             label: "K"
    //         }, {
    //             y: 21.36,
    //             label: "L"
    //         }, ]
    //     }]
    // });





    // var options2 = new CanvasJS.Chart("chartContainer2", {
    //     title: {
    //         text: "各學門起薪調查"
    //     },
    //     subtitles: [{
    //         text: "2018"
    //     }],
    //     animationEnabled: true,
    //     dataPointWidth: 27,
    //     axisX: {
    //         labelAngle: 180
    //     },


    //     data: [{
    //         type: "column",
    //         click: onClick,
    //         startAngle: 40,
    //         toolTipContent: "<b>{label}</b>: {y}元",


    //         indexLabelFontSize: 13,
    //         indexLabel: "{y}元",

    //         dataPoints: [{
    //             y: 30000,
    //             label: "法政學群"
    //         }, {
    //             y: 40000,
    //             label: "工程學群"
    //         }, {
    //             y: 35000,
    //             label: "資訊學群"
    //         }, {
    //             y: 22000,
    //             label: "數理化學群"
    //         }, {
    //             y: 10000,
    //             label: "教育學群"
    //         }, {
    //             y: 15000,
    //             label: "管理學群"
    //         }, {
    //             y: 25000,
    //             label: "社會心理學群"
    //         }, {
    //             y: 500,
    //             label: "文史哲學群"
    //         }, {
    //             y: 8000,
    //             label: "遊憩與運動學群"
    //         }, {
    //             y: 30000,
    //             label: "財經學群"
    //         }, {
    //             y: 100,
    //             label: "藝術學群"
    //         }, {
    //             y: 32000,
    //             label: "外語學群"
    //         }, {
    //             y: 60000,
    //             label: "醫藥衛生學群"
    //         }, {
    //             y: 24000,
    //             label: "地球與環境學群"
    //         }, {
    //             y: 26000,
    //             label: "生命科學學群"
    //         }, {
    //             y: 36000,
    //             label: "建築與設計學群"
    //         }, {
    //             y: 27000,
    //             label: "大眾傳播學群"
    //         }, {
    //             y: 38000,
    //             label: "生物資源學群"
    //         }]
    //     }]
    // });





    //社會學門
    var options3 = new CanvasJS.Chart("chartContainer3", {
        title: {
            text: "學士平均薪水"
        },
        subtitles: [{
            text: "2018"
        }],
        animationEnabled: true,
        dataPointWidth: 40,
        axisX: {
            labelAngle: 180
        },


        data: [{
            type: "column",
            click: onClick,
            startAngle: 40,
            toolTipContent: "<b>{label}</b>: {y}元",


            indexLabelFontSize: 13,
            indexLabel: "{y}元",

            dataPoints: [{
                y: 30000,
                label: "社會學"
            }, {
                y: 40000,
                label: "社會工作學"
            }, {
                y: 35000,
                label: "心理學"
            }, {
                y: 22000,
                label: "輔導學"
            }, {
                y: 10000,
                label: "幼兒保育學"
            }, {
                y: 15000,
                label: "老年服務學"
            }, {
                y: 25000,
                label: "宗教與生死學"
            }, {
                y: 5000,
                label: "人類與民族學"
            }]
        }]
    });

    // options1.render();

    // options2.render();
    options3.render();




    var piechart1 = new CanvasJS.Chart("phychology_piechartContainer", {
        exportEnabled: true,
        animationEnabled: true,
        title: {
            text: "心理學系" 
        },
        legend: {
            cursor: "pointer",
            itemclick: explodePie
        },
        width: 750,
        height: 500,
        data: [{
            type: "pie",
            showInLegend: true,
            toolTipContent: "{name}: <strong>{y}%</strong>",
            indexLabel: "{name} - {y}%",
            dataPoints: [{
                    y: 65,
                    name: "已就業",
                    exploded: true
                }, {
                    y: 30,
                    name: "升學"
                }, {
                    y: 5,
                    name: "未就業"
                }

            ]
        }]
    });
    piechart1.render();









    // $("#chartContainer").CanvasJSChart(options1);
    // $("#chartContainer2").CanvasJSChart(options2);
    $("#chartContainer3").CanvasJSChart(options3);

    // 這個onclick方法要呼叫Modal

    function onClick(e) {
        $('#field_column_Modal').modal('show');
    }



}


function explodePie(e) {
    if (typeof(e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
        e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
    } else {
        e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
    }
    e.chart.render();

}
// window.onload = function () {
// var options2 = {
// 	title: {
// 		text: "Desktop OS Market Share in 2017"
// 	},
// 	subtitles: [{
// 		text: "As of November, 2017"
// 	}],
// 	animationEnabled: true,
// 	data: [{
// 		type: "column",
// 		startAngle: 40,
// 		toolTipContent: "<b>{label}</b>: {y}%",
// 		showInLegend: "false",
// 		legendText: "{label}",
// 		indexLabelFontSize: 16,
// 		indexLabel: "{label} - {y}%",
// 		dataPoints: [
// 			{ y: 48.36, label: "Windows 7" },
// 			{ y: 26.85, label: "Windows 10" },
// 			{ y: 1.49, label: "Windows 8" },
// 			{ y: 6.98, label: "Windows XP" },
// 			{ y: 6.53, label: "Windows 8.1" },
// 			{ y: 2.45, label: "Linux" },
// 			{ y: 3.32, label: "Mac OS X 10.12" },
// 			{ y: 4.03, label: "Others" }
// 		]
// 	}]
// };
// $("#chartContainer2").CanvasJSChart(options2);
// }


// 捲軸事件
// js
var windowHeight = window.innerHeight,
    gridTop = windowHeight * 0.2,
    gridBottom = windowHeight * 0.8;
$(window).on('scroll', function() {
    $('button.btn_animation').each(function() {
        var thisTop = jQuery(this).offset().top - $(window).scrollTop();
        if (thisTop >= gridTop && (thisTop + $(this).height()) <= gridBottom) {
            $(this).addClass('demo_animated');
        } else {
            $(this).removeClass('demo_animated');
        }
    });
});

$(window).trigger('scroll');


// 卷軸到到指定區塊

$('#column').click(function() {
    $('html,body').animate({
        scrollTop: $('#chartContainer2').offset().top
    }, 800);
});

$('#pieChart').click(function() {
    $('html,body').animate({
        scrollTop: $('#chartContainer1').offset().top
    }, 800);
    //代表一個完整的執行區塊


}); //代表一個完整的執行區塊