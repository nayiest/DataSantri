<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
</head>
<body>
  <script>var query = {!! $query !!};
    const nama_santri = [];
    const angktan_santri = [];
    const jk_santri = [];

    $.each(query,function(key,val){
        nama_santri.push(val.nama_santri);
        angkatan_santri.push(val.angkatan_santri);
        jk_santri.push(val.jk_santri);
    });
    var ctx6 = $("#doughnut-chart").get(0).getContext("2d");
    var myChart6 = new Chart(ctx6, {
        type: "doughnut",
        data: {
            labels: namasantri,
            datasets: [{
                backgroundColor: [
                    "rgba(60, 60, 60 .7)",
                    "rgba(100, 100, 100 .6)",
                    "rgba(140, 140, 140 .5)",
                    "rgba(180, 180, 180 .4)",
                    "rgba(200, 200, 200 .3)"
                ],
                data: jumlahsantri
                }]
        },
        options: {
            responsive: true
        }
    });
    </script>

</body>
</html>