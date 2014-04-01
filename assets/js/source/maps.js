/*var bombs = new Backbone.Collection([
  {
    name: 'TEFL Africa',
    radius: 0,
    yeild: 2,
    country: 'Africa',
	flag: 'flag-map.svg',
    significance: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar eget mi id fermentum.  ',
    fillKey: 'AFR',
    latitude: -0.325,
    longitude: 26.1840
  },{
    name: 'TEFL Austrailia',
    radius: 0,
    yeild: 2,
    country: 'Austrailia',
    significance: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar eget mi id fermentum.',
	flag: 'flag-map.svg',
    fillKey: 'GBR',
    latitude: -20.25,
    longitude: 115.33
  },  {
    name: 'TEFL India',
    radius: 0,
    yeild: 2,
    country: 'India',
	flag: 'flag-map.svg',
    fillKey: 'IND',
    significance: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar eget mi id fermentum.',
    latitude: 27.07884,
    longitude: 71.72211
  }
]);

    //prep the data
    var yields = bombs.pluck('yeild');

    var min = d3.min( yields );
    var max = d3.max( yields );

    var scale = d3.scale.pow()
        .domain([min, max])
        .range([10, 45]);

    bombs.each(function(val, idx) {
        bombs.at(idx).set('radius', scale(val.get('yeild')));
    });

   $("#container1").datamap({
        scope: 'world',
        bubbles: bombs.toJSON(),
        bubble_config: {
            popupTemplate: _.template([
                '<div class="map-info-box"><h1><%= data.name %></h1>',
                '<img src="assets/images/<%= data.flag %>" alt="TEFL Academy"/>',
				'<p><%= data.significance %></p>',
				'<a class="button-light oarrow alignright" href="#">More Info<span></span></a>',
                '</div>'].join(''))
        },
        done: function(datamap) {
            datamap.svg.selectAll('#states').on('click', function(geography) {
                alert(geography.properties.name);
            });
        },
        geography_config: {
        	 popupOnHover: false,
            popupOnClick: true,
            highlightOnHover: false
        },
        fills: {
            'USA': '#fecc4f',
            'RUS': '#81af92',
            'PRK': '#81af92',
            'PRC': '#81af92',
            'IND': '#fecc4f',
            'GBR': '#81af92',
            'FRA': '#fecc4f',
            'PAK': '#81af92',
            defaultFill: '#81af92'
        },
        data: {
            'RUS': {fillKey: 'RUS'},
            'PRK': {fillKey: 'PRK'},
            'CHN': {fillKey: 'PRC'},
            'IND': {fillKey: 'IND'},
            'GBR': {fillKey: 'GBR'},
            'FRA': {fillKey: 'FRA'},
            'PAK': {fillKey: 'PAK'},
            'USA': {fillKey: 'USA'}
        }
    });
    
*/