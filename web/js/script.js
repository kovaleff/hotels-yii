(function worker() {
    $.get('/bid/bid', function(data) {
         setTimeout(worker, 1000);
    });

    $.get('/stat/managers', function(data) {
        $('#managers').html(
            JSON.parse(data).reduce(function (result, manager) {
                return result + "<li>" + manager['name'] + "(" + manager['total_orders'] + ")" + "</li>";
            }, '')
        )
    });
    $.get('/stat/hotels', function(data) {
        $('#hotels').html(
            JSON.parse(data).reduce(function (result, hotel) {
                return result + "<li>" + hotel['name'] + "(" + hotel['total_hotels'] + ")" + "</li>";
            }, '')
        )
    });
    $.get('/stat/clients', function(data) {
        $('#clients').html(
            JSON.parse(data).reduce(function (result, client) {
                return result + "<li>" + client['name'] + ", INN:" + client['inn']  +" (" + client['total_clients'] + ")" + "</li>";
            }, '')
        )
    });
})();
