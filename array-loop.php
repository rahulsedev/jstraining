<table id="employees-list" border="1" width="100%">
</table>
<script>
    var employees = [
        "Rahul",
        "Vipen",
        "Suraj",
        "Sweety",
        "Chintoo",
        "Meeta"
    ];
    var empListDataTbl = '<tr><td>Id</td><td>Name</td>';
    for (var i = 0; i < employees.length; i = i + 1) {
        empListDataTbl = empListDataTbl + '<tr><td>' + (i+1) + '</td><td>' + employees[i] + '</td></tr>';
    }
    empListDataTbl = empListDataTbl + '</tr>';
    document.getElementById('employees-list').innerHTML = empListDataTbl;
</script>