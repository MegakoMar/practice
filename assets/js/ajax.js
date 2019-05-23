$(document).ready(function () {
    $.ajax({
        url: 'data.php',
        data: {},
        dataType: 'html',
        success: function (data) {
            data = data.trim();
            //console.log(data)
            var arr = data.split(' ');
            //console.log(arr);

            var row = ["A", "B", "C", "D", "E", "F"];
            var N = arr.length;
            //console.log(N);
            function changeColor(row, N) {
                var n, k = 0, j = 0;
                var place = "";
                var condition = "";
                for (var i = 0; i < N; i++){
                    if (i >= 10 && i % 10 == 0) {
                        console.log(i)
                        k = 0;
                        j++;
                    }
                    n = k + 1;
                    //console.log(n);
                    place = row[j] + n;
                    condition = place + "=1";
                    //console.log(place);
                    if (arr[i] == condition) {
                        document.getElementById(place).style.color="white";
                        document.getElementById(place).style.backgroundColor="green";
                    } else {
                        document.getElementById(place).style.color="white";
                        document.getElementById(place).style.backgroundColor="red";
                    }
                    k++;
                }
            }
            changeColor(row, N);
        }
    });
});
