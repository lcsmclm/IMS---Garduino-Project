(function () {

    var week = document.getElementById("week");
    var month = document.getElementById("month");
    var months = document.getElementById("months");

    var tempselect = document.getElementById("tempselect");
    var moistureselect = document.getElementById("moistureselect");
    var lightselect = document.getElementById("lightselect");

    week.addEventListener("click", datepick, false);
    month.addEventListener("click", datepick, false);
    months.addEventListener("click", datepick, false);

    tempselect.addEventListener("click", select, false);
    moistureselect.addEventListener("click", select, false);
    lightselect.addEventListener("click", select, false);

    var activeSelect = 'Moisture';
    var activeDate = 'data1week';
    var activeSymbol = '%';

    function select(e) {
        if(e.path[0].id === 'moistureselect'){
            activeSelect = 'Moisture';
            activeSymbol = '%';
        }else if(e.path[0].id === 'tempselect'){
            activeSelect = 'Temp';
            activeSymbol = '℃';
    }else if(e.path[0].id === 'lightselect'){
        activeSelect = 'Sun';
        activeSymbol = '%';
        }
        setupChart(activeDate, activeSelect, activeSymbol);
    }

    function datepick(e) {
        if(e.path[0].id === 'week'){
            activeDate = 'data1week';
        }else if(e.path[0].id === 'month'){
            activeDate = 'data1month';
    }else if(e.path[0].id === 'months'){
        activeDate = 'data3month';
        }
        setupChart(activeDate, activeSelect, activeSymbol);
    }

function setupChart(file, selection, symbol) {

    document.querySelector('.temp').innerHTML = "";
    document.querySelector('.data-details').innerHTML = "";
        d3.json("../"+file+".json", function (error, data) {
            if (error) throw error;
            draw(data, "My Tomatoes", selection, symbol);
        });
        }



    function draw(data, plantname, statKind, symbol) {
        //SET STAT DIMENSIONS
        var margin = { top: 20, right: 20, bottom: 30, left: 70 },
            width = 960 - margin.left - margin.right,
            height = 500 - margin.top - margin.bottom;

        //PARSE DATE
        var parseTime = d3.timeParse("%Y-%m-%d");

        //SET RANGE AND DEFINE DATE VARIABLES
        var x = d3.scaleTime().rangeRound([0, width]);
        var y = d3.scaleLinear().range([height, 0]);
        var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var dayNames = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

        //X GRID
        function xgridlines() {
            return d3.axisBottom(x)
                .ticks(5);
        }
        //Y GRID
        function ygridlines() {
            return d3.axisLeft(y)
                .ticks(5);
        }
        //DEFINE VALUE LINE
        var valueline = d3.line()
            .x(function (d) {
                return x(d.Date);
            })
            .y(function (d) {
                if(statKind === 'Moisture') { selection = d.Moisture; selectAvg = d.MoistureAvg; }else if(statKind === 'Temp') { selection = d.Temp; selectAvg = d.TempAvg; }else if(statKind === 'Sun'){ selection = d.Sun; selectAvg = d.SunAvg; }
                return y(selection);
            });

        //DEFINE AVERAGE LINE
        var averageline = d3.line()
            .x(function (d) {
                return x(d.Date);
            })
            .y(function (d) {
                if(statKind === 'Moisture') { selection = d.Moisture; selectAvg = d.MoistureAvg; }else if(statKind === 'Temp') { selection = d.Temp; selectAvg = d.TempAvg; }else if(statKind === 'Sun'){ selection = d.Sun; selectAvg = d.SunAvg; }
                return y(selectAvg);
            });

        var svg = d3.select(".temp").append("svg")
            .attr("width", width + margin.left + margin.right)
            .attr("height", height + margin.top + margin.bottom)
            .append("g")
            .attr("transform",
                "translate(" + margin.left + "," + margin.top + ")");

        var data = data[plantname];
        //FORMAT
        data.forEach(function (d) {
            if(statKind === 'Moisture') { selection = d.Moisture; selectAvg = d.MoistureAvg; }else if(statKind === 'Temp') { selection = d.Temp; selectAvg = d.TempAvg; }else if(statKind === 'Sun'){ selection = d.Sun; selectAvg = d.SunAvg; }
            d3.select(".data-details").append("li").html(dayNames[new Date(d.Date).getDay()] + " - " + selection + symbol);
            d.Date = parseTime(d.Date);
            selection = +selection;
            selectAvg = +selectAvg;
        });

        //SCALE
        x.domain(d3.extent(data, function (d) {
            return d.Date;
        }));
        y.domain([(d3.min(data, function (d) {
            if(statKind === 'Moisture') { selection = d.Moisture; selectAvg = d.MoistureAvg; }else if(statKind === 'Temp') { selection = d.Temp; selectAvg = d.TempAvg; }else if(statKind === 'Sun'){ selection = d.Sun; selectAvg = d.SunAvg; }
            return Math.min(selection, selectAvg);
        })) - 5, (d3.max(data, function (d) {
            if(statKind === 'Moisture') { selection = d.Moisture; selectAvg = d.MoistureAvg; }else if(statKind === 'Temp') { selection = d.Temp; selectAvg = d.TempAvg; }else if(statKind === 'Sun'){ selection = d.Sun; selectAvg = d.SunAvg; }
            return Math.max(selection, selectAvg);
        })) + 5]);

        //X GRID
        svg.append("g")
            .attr("class", "grid")
            .attr("transform", "translate(0," + height + ")")
            .call(xgridlines()
                .tickSize(-height)
                .tickFormat("")
            );

        //Y GRID
        svg.append("g")
            .attr("class", "grid")
            .call(ygridlines()
                .tickSize(-width)
                .tickFormat("")
            )

        //ADD VALUE LINE
        svg.append("path")
            .data([data])
            .attr("class", "line")
            .attr("d", valueline);

        //ADD AVERAGE LINE
        svg.append("path")
            .data([data])
            .attr("class", "line")
            .attr("d", averageline);

        //Add X
        svg.append("g")
            .attr("class", "axisHorizontal")
            .attr("transform", "translate(0," + height + ")")
            .call(d3.axisBottom(x).ticks(7));

        //Add Y
        svg.append("g")
            .attr("class", "axisVertical")
            .call(d3.axisLeft(y).tickFormat(d => d + "℃"));
    }

})();
