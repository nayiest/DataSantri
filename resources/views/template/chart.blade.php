<!DOCTYPE html>
<html lang="en">
<body>
    <script>

    
    // Doughnut Chart
var query = {!! $query !!};
const nama_santri = [];
const angkatan_santri = [];
const jk_santri = [];

$.each(query,function(key,val){
    nama_santri.push(val. nama_santri);
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
            data: santri
        }]
    },
    options: {
        responsive: true
    }
});


    </script>
</body>
</html>