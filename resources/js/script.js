// Leaflet Mapbox //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if( window.location.pathname === '/contact' ) { // Prevent a JS error if not on the Contact page.
	var mymap = L.map( 'cscMap' ).setView( [ 39.4714884, -119.77672480000001 ], 15 );
	L.tileLayer( 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		maxZoom: 18,
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1,
		accessToken: 'pk.eyJ1IjoibmNoam9lIiwiYSI6ImNraHY5czNzbTEzbnUyeXJtZXg5d3c3b2kifQ.LB2ajC5BlC7ic4T6zOmBvA'
	} ).addTo( mymap );

	var marker = L.marker( [ 39.4714884, -119.77672480000001 ] ).addTo( mymap );
	marker.bindPopup( '<b>Corporate Service Center</b>' ).openPopup();
}
