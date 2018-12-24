window.onload = function() {


    var piechart_title = "";
    
    
    //預設進入 大學部
    var options = new CanvasJS.Chart("chartContainer3", {
        title: {
            text: "學士平均薪資"
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

    

  

    options.render();
    // 學士 
        $("#college_salary").click(function() {
           


            var options = new CanvasJS.Chart("chartContainer3", {
                title: {
                    text: "學士平均薪資"
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


            options.render();

            $("#chartContainer3").CanvasJSChart(options);

        });

    // 碩士班
        $("#master_salary").click(function() {
           


            var options = new CanvasJS.Chart("chartContainer3", {
                title: {
                    text: "碩士平均薪資"
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


            options.render();
            $("#chartContainer3").CanvasJSChart(options);

        });

       
    





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



    $("#chartContainer3").CanvasJSChart(options);

    // 這個onclick方法要呼叫Modal

    function onClick(e) {
        alert(e.dataPoint.label); //e.dataPoint.label 得到科系名稱
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