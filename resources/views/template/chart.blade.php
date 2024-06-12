<!DOCTYPE html>
<html lang="en">
<body>
    <script>

    
    // Doughnut Chart
var query = {!! $query !!};
const namabuku = [];
const genrebuku = [];
const jumlahbuku = [];

$.each(query,function(key,val){
    namabuku.push(val.nama_buku);
    genrebuku.push(val.genre_buku);
    jumlahbuku.push(val.jumlah_buku);
});
var ctx6 = $("#doughnut-chart").get(0).getContext("2d");
var myChart6 = new Chart(ctx6, {
    type: "doughnut",
    data: {
        labels: namabuku,
        datasets: [{
            backgroundColor: [
                "rgba(60, 60, 60 .7)",
                "rgba(100, 100, 100 .6)",
                "rgba(140, 140, 140 .5)",
                "rgba(180, 180, 180 .4)",
                "rgba(200, 200, 200 .3)"
            ],
            data: jumlahbuku
        }]
    },
    options: {
        responsive: true
    }
});


    </script>
</body>
</html>