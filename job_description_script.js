
window.onload = function() {


    //從這撈資料，陣列仿照下面的格式

    var data =
        [{
            "name": '太陽能業務(業務人員)',
            "company": '菳寶能源科技有限公司',
            "degree": "不拘",
            "experience": "2年以上",
            "location": "嘉義市嘉義市",
            "start_date": "2018/12/22"
        }, {
            "name": '業務人員',
            "company": 'XXX科技有限公司',
            "degree": "碩士",
            "experience": "2年以上",
            "location": "嘉義市嘉義市",
            "start_date": "2018/11/27"
        }, {
            "name": 'DDD業務(業務人員)',
            "company": 'DD能源科技有限公司',
            "degree": "不拘",
            "experience": "4年以上",
            "location": "嘉義市嘉義市",
            "start_date": "2018/12/27"
        }, {
            "name": 'WWW業務(業務人員)',
            "company": 'WWWW科技有限公司',
            "degree": "不拘",
            "experience": "8年以上",
            "location": "嘉義市嘉義市",
            "start_date": "2017/12/27"
        }];


    var html = '';

    for (var d of data) {

        html += `<tr><td height = "60px">${d.name}</td><td height = "60px">${d.company}</td><td height = "60px">${d.degree}</td><td height = "60px">${d.experience}</td><td height = "60px">${d.location}</td><td height = "60px">${d.start_date}</td></tr>`;
    }
    // html = '<tr><td>abc</td><td>aaa</td><td>ccc</td><td>dddd</td><td>eee</td><td>gggg</td></tr>';
    // document.getElementById('test').innerHTML = html;
    $('#job_form').append(html);
    return;
}






$(document).ready(function() {
    $('#job_form').DataTable({
        select: true,
        ordering: true,
        scrollY: '50vh',
        scrollCollapse: true,
        paging: false

    });
});


// $(document).on('click', 'th', function() {

//   var table = $(this).parents('table').eq(0);
//   var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()));

//   this.asc = !this.asc;
//   if (!this.asc) {
//     rows = rows.reverse();
//   }
//    table.children('tbody').empty().html(rows);
//   $('#tbodyid').empty().html(rows);

// });

// function comparer(index) {
//   return function(a, b) {
//     var valA = getCellValue(a, index),
//       valB = getCellValue(b, index);
//     return $.isNumeric(valA) && $.isNumeric(valB) ?
//       valA - valB : valA.localeCompare(valB);
//   };
// }

// function getCellValue(row, index) {
//   return $(row).children('td').eq(index).text();
// }

// function sortTable(n) {
//     var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
//     table = document.getElementById("job_description_form");
//     switching = true;
//     // Set the sorting direction to ascending:
//     dir = "asc";
//     /* Make a loop that will continue until
//     no switching has been done: */
//     while (switching) {
//         // Start by saying: no switching is done:
//         switching = false;
//         rows = table.rows;
//         /* Loop through all table rows (except the
//         first, which contains table headers): */
//         for (i = 1; i < (rows.length - 1); i++) {
//             // Start by saying there should be no switching:
//             shouldSwitch = false;
//             /* Get the two elements you want to compare,
//             one from current row and one from the next: */
//             x = rows[i].getElementsByTagName("TD")[n];
//             y = rows[i + 1].getElementsByTagName("TD")[n];
//             /* Check if the two rows should switch place,
//             based on the direction, asc or desc: */
//             if (dir == "asc") {
//                 if (n == 5) {
//                     if (Number(x.innerHTML) > Number(y.innerHTML)) {
//                         shouldSwitch = true;
//                         break;
//                     }
//                 }
//                 if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
//                     // If so, mark as a switch and break the loop:
//                     shouldSwitch = true;
//                     break;
//                 }
//             } else if (dir == "desc") {

//             }
//             if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
//                 // If so, mark as a switch and break the loop:
//                 shouldSwitch = true;
//                 break;
//             }
//         }
//     }
//     if (shouldSwitch) {
//         /* If a switch has been marked, make the switch
//         and mark that a switch has been done: */
//         rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
//         switching = true;
//         // Each time a switch is done, increase this count by 1:
//         switchcount++;
//     } else {
//         /* If no switching has been done AND the direction is "asc",
//         set the direction to "desc" and run the while loop again. */
//         if (switchcount == 0 && dir == "asc") {
//             dir = "desc";
//             switching = true;
//         }
//     }
// }