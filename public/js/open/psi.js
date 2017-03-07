//try{
	var map;
	var psi_level = ['#00ff00', '#ffdd00', '#ff0000', '#800080', '#633300']; //等級顏色

	function initMap() {
		map = new google.maps.Map(
			document.getElementById('mapObj'),{
				zoom : 8,
				center : new google.maps.LatLng(23.549941, 120.512812),
				mapTypeId : google.maps.MapTypeId.TERRAIN,
				minZoom : 8,
				maxZoom : 12,
				//disableDefaultUI:false
			}
		);
	}
	var site_info = [{ "SiteName": "二林", "locLon": "120.4096530000", "locLat": "23.9251750000" }, 
			 { "SiteName": "三重", "locLon": "121.4938060000", "locLat": "25.0726110000" }, 
			 { "SiteName": "三義", "locLon": "120.7588330000", "locLat": "24.3829420000" }, 
			 { "SiteName": "土城", "locLon": "121.4518610000", "locLat": "24.9825280000" }, 
			 { "SiteName": "士林", "locLon": "121.5153890000", "locLat": "25.1054170000" }, 
			 { "SiteName": "大同", "locLon": "121.5133110000", "locLat": "25.0632000000" }, 
			 { "SiteName": "大里", "locLon": "120.6776890000", "locLat": "24.0996110000" }, 
			 { "SiteName": "大園", "locLon": "121.2018110000", "locLat": "25.0603440000" }, 
			 { "SiteName": "大寮", "locLon": "120.4250810000", "locLat": "22.5657470000" }, 
			 { "SiteName": "小港", "locLon": "120.3377360000", "locLat": "22.5658330000" }, 
			 { "SiteName": "中山", "locLon": "121.5265280000", "locLat": "25.0623610000" }, 
			 { "SiteName": "中壢", "locLon": "121.2216670000", "locLat": "24.9532780000" }, 
			 { "SiteName": "仁武", "locLon": "120.3326310000", "locLat": "22.6890560000" }, 
			 { "SiteName": "斗六", "locLon": "120.5449940000", "locLat": "23.7118530000" }, 
			 { "SiteName": "冬山", "locLon": "121.7929280000", "locLat": "24.6322030000" }, 
			 { "SiteName": "古亭", "locLon": "121.5295560000", "locLat": "25.0206080000" }, 
			 { "SiteName": "左營", "locLon": "120.2929170000", "locLat": "22.6748610000" }, 
			 { "SiteName": "平鎮", "locLon": "121.2039860000", "locLat": "24.9527860000" }, 
			 { "SiteName": "永和", "locLon": "121.5163060000", "locLat": "25.0170000000" }, 
			 { "SiteName": "安南", "locLon": "120.2175000000", "locLat": "23.0481970000" }, 
			 { "SiteName": "朴子", "locLon": "120.2473500000", "locLat": "23.4653080000" }, 
			 { "SiteName": "汐止", "locLon": "121.6423000000", "locLat": "25.0671310000" }, 
			 { "SiteName": "竹山", "locLon": "120.6773060000", "locLat": "23.7563890000" }, 
			 { "SiteName": "竹東", "locLon": "121.0889030000", "locLat": "24.7406440000" }, 
			 { "SiteName": "西屯", "locLon": "120.6169170000", "locLat": "24.1621970000" }, 
			 { "SiteName": "沙鹿", "locLon": "120.5687940000", "locLat": "24.2256280000" }, 
			 { "SiteName": "宜蘭", "locLon": "121.7463940000", "locLat": "24.7479170000" }, 
			 { "SiteName": "忠明", "locLon": "120.6410920000", "locLat": "24.1519580000" }, 
			 { "SiteName": "松山", "locLon": "121.5786110000", "locLat": "25.0500000000" }, 
			 { "SiteName": "板橋", "locLon": "121.4586670000", "locLat": "25.0129720000" }, 
			 { "SiteName": "林口", "locLon": "121.3768690000", "locLat": "25.0771970000" }, 
			 { "SiteName": "林園", "locLon": "120.4117500000", "locLat": "22.4795000000" }, 
			 { "SiteName": "花蓮", "locLon": "121.5997690000", "locLat": "23.9713060000" }, 
			 { "SiteName": "金門", "locLon": "118.3122560000", "locLat": "24.4321330000" }, 
			 { "SiteName": "前金", "locLon": "120.2880860000", "locLat": "22.6325670000" }, 
			 { "SiteName": "前鎮", "locLon": "120.3075640000", "locLat": "22.6053860000" }, 
			 { "SiteName": "南投", "locLon": "120.6853060000", "locLat": "23.9130000000" }, 
			 { "SiteName": "屏東", "locLon": "120.4880330000", "locLat": "22.6730810000" }, 
			 { "SiteName": "恆春", "locLon": "120.7889280000", "locLat": "21.9580690000" }, 
			 { "SiteName": "美濃", "locLon": "120.5305420000", "locLat": "22.8835830000" }, 
			 { "SiteName": "苗栗", "locLon": "120.8202000000", "locLat": "24.5652690000" }, 
			 { "SiteName": "埔里", "locLon": "120.9679030000", "locLat": "23.9688420000" }, 
			 { "SiteName": "桃園", "locLon": "121.3199640000", "locLat": "24.9947890000" }, 
			 { "SiteName": "馬公", "locLon": "119.5661580000", "locLat": "23.5690310000" }, 
			 { "SiteName": "馬祖", "locLon": "119.9498750000", "locLat": "26.1604690000" }, 
			 { "SiteName": "基隆", "locLon": "121.7600560000", "locLat": "25.1291670000" }, 
			 { "SiteName": "崙背", "locLon": "120.3487420000", "locLat": "23.7575470000" }, 
			 { "SiteName": "淡水", "locLon": "121.4492390000", "locLat": "25.1645000000" }, 
			 { "SiteName": "麥寮", "locLon": "120.2518250000", "locLat": "23.7535060000" }, 
			 { "SiteName": "善化", "locLon": "120.2971420000", "locLat": "23.1150970000" }, 
			 { "SiteName": "復興", "locLon": "120.3120170000", "locLat": "22.6087110000" }, 
			 { "SiteName": "湖口", "locLon": "121.0386530000", "locLat": "24.9001420000" }, 
			 { "SiteName": "菜寮", "locLon": "121.4810280000", "locLat": "25.0689500000" }, 
			 { "SiteName": "陽明", "locLon": "121.5295830000", "locLat": "25.1827220000" }, 
			 { "SiteName": "新竹", "locLon": "120.9720750000", "locLat": "24.8056190000" }, 
			 { "SiteName": "新店", "locLon": "121.5377780000", "locLat": "24.9772220000" }, 
			 { "SiteName": "新莊", "locLon": "121.4325000000", "locLat": "25.0379720000" }, 
			 { "SiteName": "新港", "locLon": "120.3455310000", "locLat": "23.5548390000" }, 
			 { "SiteName": "新營", "locLon": "120.3172500000", "locLat": "23.3056330000" }, 
			 { "SiteName": "楠梓", "locLon": "120.3282890000", "locLat": "22.7336670000" }, 
			 { "SiteName": "萬里", "locLon": "121.6898810000", "locLat": "25.1796670000" }, 
			 { "SiteName": "萬華", "locLon": "121.5079720000", "locLat": "25.0465030000" }, 
			 { "SiteName": "嘉義", "locLon": "120.4408330000", "locLat": "23.4627780000" }, 
			 { "SiteName": "彰化", "locLon": "120.5415190000", "locLat": "24.0660000000" }, 
			 { "SiteName": "臺西", "locLon": "120.2028420000", "locLat": "23.7175330000" }, 
			 { "SiteName": "臺東", "locLon": "121.1504500000", "locLat": "22.7553580000" }, 
			 { "SiteName": "臺南", "locLon": "120.2026170000", "locLat": "22.9845810000" }, 
			 { "SiteName": "鳳山", "locLon": "120.3580830000", "locLat": "22.6273920000" }, 
			 { "SiteName": "潮州", "locLon": "120.5611750000", "locLat": "22.5231080000" }, 
			 { "SiteName": "線西", "locLon": "120.4690610000", "locLat": "24.1316720000" }, 
			 { "SiteName": "橋頭", "locLon": "120.3056890000", "locLat": "22.7575060000" }, 
			 { "SiteName": "頭份", "locLon": "120.8985720000", "locLat": "24.6969690000" }, 
			 { "SiteName": "龍潭", "locLon": "121.2163500000", "locLat": "24.8638690000" }, 
			 { "SiteName": "豐原", "locLon": "120.7417110000", "locLat": "24.2565860000" }, 
			 { "SiteName": "關山", "locLon": "121.1619330000", "locLat": "23.0450830000" }, 
			 { "SiteName": "觀音", "locLon": "121.0827610000", "locLat": "25.0355030000" }];
	var sites = {};
	for (var i = 0; i < site_info.length; i++) {
	  sites[site_info[i].SiteName]=  site_info[i].locLat+','+site_info[i].locLon ;
	}
	var load_data = [];
	var load_data_length = "";

	//抓取opendata
	var epaAPI = "http://opendata.epa.gov.tw/ws/Data/REWXQA/?$orderby=SiteName&$skip=0&$top=1000&format=json&callback=?";
	//加上&callback=?
	$.getJSON( epaAPI, function(){
		format: "json"
	}).done(function(data) {
		$.each( data, function( i, item ) {
			load_data[i] = data[i];
		});

		document.getElementById('update_time').innerHTML = load_data[0].PublishTime;  //更新最新時間
		load_data_length = load_data.length;
		show(load_data);
	});


	var circles = [];
	function show(show_data){

	  if(circles.length !== 0){
		for(var i=0;i<load_data_length;i++){
		  if(circles[i] != undefined){
			circles[i].setMap(null);
		  }
		}
		circles = [];
	  }
	  for(var i=0;i<load_data_length;i++){
		if(show_data[i] != undefined){
		  //把每一個物件拆開來執行一次function
		  var lon = parseFloat(sites[show_data[i].SiteName].split(',')[1]);
		  var lat = parseFloat(sites[show_data[i].SiteName].split(',')[0]);
		  var psi = parseInt( show_data[i].PSI);  //PSI空氣汙染指標
		  var psi_color;
		  switch(true) {
			case psi<=50:
			  psi_color = psi_level[0];
			  break;
			case psi<=100:
			  psi_color = psi_level[1];
			  break;
			case psi<200:
			  psi_color = psi_level[2];
			  break;
			case psi<300:
			  psi_color = psi_level[3];
			  break;
			case psi>300:
			  psi_color = psi_level[4];
			  break;
		  }
		  
		  var CircleOptions = {
			strokeColor: psi_color,
			fillColor: psi_color,
			fillOpacity: 0.3,
			//map: map,
			center: new google.maps.LatLng(lat, lon),
			radius: 7000
		  };
		  var circle = new google.maps.Circle(CircleOptions);
		  circle.setMap(map);
		  circles.push(circle);
		}
	  }
	}

	$('.item').click(function(){
	  var city = $(this).text();
	  if(city === '全台灣'){
		show(load_data);
	  } else {
		var show_data = [];
		for(var i=0;i<load_data_length;i++){
		  if(load_data[i].County === city){
			show_data[i] = load_data[i];
		  }
		}
		show(show_data);
	  }
	});

// } catch (e) {
// 	alert('無法連接網路，請確認');
// }