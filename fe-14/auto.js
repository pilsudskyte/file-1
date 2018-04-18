var autos = [
    ['2018-04-18', 'FFF066', 5000, 100],
    ['2018-04-18', 'FFF066', 5000, 99],
    ['2018-04-18', 'FFF066', 5000, 101]
];
var tekstas = '';
for (i = 0; i < autos.length; i++) {
    tekstas +=
        '<tr>' +
        '<td>' + autos[i][0] + '</td>' +
        '<td>' + autos[i][1] + '</td>' +
        '<td>' + autos[i][2] + '</td>' +
        '<td>' + autos[i][3] + '</td>' +
        '<td>' + autos[i][2]  / autos[i][3] * 3.6 + '</td>' +
        '</tr>';
}
document.querySelector('tbody').innerHTML = tekstas;