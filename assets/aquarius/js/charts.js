$(document).ready(function(){
    
    if($("#chart_activity").length > 0){
        
        var stuff = [], contacts = [];

        for (var i = 0; i < 7; i += 1) {
            stuff.push([i, parseInt(Math.random() * 30)]);
            contacts.push([i, parseInt(Math.random() * 30)]);
        }

        $.plot($("#chart_activity"), [ { data: stuff, label: "stuff"}, { data: contacts, label: "contacts"}], {xaxis: {show: true}, yaxis: { show: true}});
        
    }
    
    if($(".visitsChart-2").length > 0){

        var d1 = [];
        
        for (var i = 1; i <= 30; i += 1)
            d1.push([i, parseInt(Math.random() * 30)]);

        $.plot($(".visitsChart-2"), [ { data: d1 }], {xaxis: {show: true}, yaxis: { show: true}});
    
    }      
    
    
    if($("#chart-1").length > 0){

        /* CHART - 1*/

        var sin1 = [], sin2 = [], cos1 = [], cos2 = [],lead = [],prospect = [],survey = [],install = [];

        for (var i = 0; i < 14; i += 0.3) {
            sin1.push([i, Math.sin(i)]);
            sin2.push([i, Math.sin(i-1.57)]);
            cos1.push([i, Math.cos(i)]);
            cos2.push([i, Math.cos(i+1.57)]);
        }
        lead.push([0,21]);
        lead.push([1,19]);
        lead.push([2,24]);
        lead.push([3,25]);
        lead.push([4,36]);
        lead.push([5,15]);
        lead.push([6,28]);
        lead.push([7,15]);
        lead.push([8,39]);
        lead.push([9,12]);
        lead.push([10,24]);
        lead.push([11,35]);
        lead.push([12,26]);
        lead.push([13,5]);

        prospect.push([0,41]);
        prospect.push([1,33]);
        prospect.push([2,24]);
        prospect.push([3,36]);
        prospect.push([4,43]);
        prospect.push([5,27]);
        prospect.push([6,25]);
        prospect.push([7,38]);
        prospect.push([8,12]);
        prospect.push([9,14]);
        prospect.push([10,44]);
        prospect.push([11,25]);
        prospect.push([12,8]);
        prospect.push([13,5]);

        survey.push([0,21]);
        survey.push([1,11]);
        survey.push([2,14]);
        survey.push([3,15]);
        survey.push([4,10]);
        survey.push([5,24]);
        survey.push([6,3]);
        survey.push([7,9]);
        survey.push([8,23]);
        survey.push([9,8]);
        survey.push([10,7]);
        survey.push([11,12]);
        survey.push([12,23]);
        survey.push([13,2]);

        install.push([0,1]);
        install.push([1,0]);
        install.push([2,2]);
        install.push([3,21]);
        install.push([4,11]);
        install.push([5,8]);
        install.push([6,21]);
        install.push([7,9]);
        install.push([8,22]);
        install.push([9,13]);
        install.push([10,8]);
        install.push([11,7]);
        install.push([12,1]);
        install.push([13,2]);        
        
        $.plot($("#chart-1"), [ {data:lead,label:'Lead'},{data:prospect,label:'Prospect'},{data:survey,label:'Survey'},{data:install,label:'Install'} ], {
                series: {lines: { show: true }, points: { show: true }},
                grid: { hoverable: true, clickable: true },
                yaxis: { min: 0, max: 50 }
                });

        /* eof CHART - 1*/
    
    }    

    if($("#chart-2").length > 0){
        

        var d1 = [];
        for (var i = 0; i <= 10; i += 1)
            d1.push([i, parseInt(Math.random() * 30)]);

        var d2 = [];
        for (var i = 0; i <= 10; i += 1)
            d2.push([i, parseInt(Math.random() * 30)]);

        var d3 = [];
        for (var i = 0; i <= 10; i += 1)
            d3.push([i, parseInt(Math.random() * 30)]);

        var stack = 0, bars = true, lines = false, steps = false;


        $.plot($("#chart-2"), [ { data: d1, label: "data 1" }, { data: d2, label: "data 2" }, { data: d3, label: "data 3" } ], {
            series: {
                stack: stack,
                lines: { show: lines, fill: true, steps: steps },
                bars: { show: bars, barWidth: 0.6 }
            }
        });
        
        
    }

    if($("#chart-3").length > 0){
        
        var data = [];
        	        
	for( var i = 0; i < 5; i++)	
		data[i] = { label: "Series"+(i+1), data: Math.floor(Math.random()*100)+1 };
	

        $.plot($("#chart-3"), data, 
	{
            series: {
                pie: { show: true }
            },
            legend: { show: false }
	});

    }

    if($("#chart-4").length > 0){
        
        var data = [], totalPoints = 300;
        
        var updateInterval = 30;

        

        var plot = $.plot($("#chart-4"), [ getRandomData() ], {
            series: { shadowSize: 0 }, 
            yaxis: { min: 0, max: 100 },
            xaxis: { show: false }
        });

        update();
            
    }

    function update() {
        plot.setData([ getRandomData() ]);
        // since the axes don't change, we don't need to call plot.setupGrid()
        plot.draw();

        setTimeout(update, updateInterval);
    }

    function getRandomData() {
        if (data.length > 0)
            data = data.slice(1);

        // do a random walk
        while (data.length < totalPoints) {
            var prev = data.length > 0 ? data[data.length - 1] : 50;
            var y = prev + Math.random() * 10 - 5;
            if (y < 0)
                y = 0;
            if (y > 100)
                y = 100;
            data.push(y);
        }

        // zip the generated y values with the x values
        var res = [];
        for (var i = 0; i < data.length; ++i)
            res.push([i, data[i]])
        return res;
    }

    function showTooltip(x, y, contents) {
        $('<div class="ct">' + contents + '</div>').css( {
            position: 'absolute',
            display: 'none',
            top: y,
            left: x + 10,
            border: '2px solid #333',
            padding: '2px',
            'background-color': '#ffffff',
            'border-radius': '2px',
            color: '#333'            
        }).appendTo("body").fadeIn(200);
    }    

    var previousPoint = null;
    
    $("#chart-1").bind("plothover", function (event, pos, item) {
        
        $("#x").text(pos.x.toFixed(2));
        $("#y").text(pos.y.toFixed(2));

        if (item) {
            if (previousPoint != item.dataIndex) {
                previousPoint = item.dataIndex;

                $(".ct").remove();
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2);

                showTooltip(item.pageX, item.pageY,
                            item.series.label + " of " + x + " = " + y);
            }
        }else {
            $(".ct").remove();
            previousPoint = null;            
        }

    });

    $(".mChartBar").sparkline('html',{ enableTagOptions: true });    
    
});
