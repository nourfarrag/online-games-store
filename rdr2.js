function showTable() {
    var tableContainer = document.getElementById('tableContainer');
    var table = document.createElement('table');
    var headerRow = table.insertRow(0);
    var header1 = headerRow.insertCell(0);
    var header2 = headerRow.insertCell(1);
    header1.innerHTML = 'Time to Beat';
    header2.innerHTML = '50 - 173 Hours';
    var row1 = table.insertRow(1);
    var cell1 = row1.insertCell(0);
    var cell2 = row1.insertCell(1);
    cell1.innerHTML = 'Open World';
    cell2.innerHTML = 'yes';
    var row2 = table.insertRow(2);
    var cell3 = row2.insertCell(0);
    var cell4 = row2.insertCell(1);
    cell3.innerHTML = 'Map Size';
    cell4.innerHTML = 'about 29 square miles';

    tableContainer.innerHTML = '';
    tableContainer.appendChild(table);

    tableContainer.style.display = 'block';
}