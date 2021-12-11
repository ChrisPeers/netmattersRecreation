mapboxgl.accessToken = 'pk.eyJ1Ijoic29saWRpdG8iLCJhIjoiY2t4MmNmOXFtMWE1djJ4b2JkeXBzeDQxdiJ9.VGFJXB9O-fFA3SgoARM17Q';

// The below creates the map, sets it's center, style and how zoomed in it is.
const mapCambridge = new mapboxgl.Map({
    container: 'mapCambridge',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [0.15468009071425376, 52.23526134904788],
    zoom: 15
    
});

const mapWymondham = new mapboxgl.Map({
    container: 'mapWymondham',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [1.1365739377895152, 52.57605470633871],
    zoom: 15
    
});

const mapYarmouth = new mapboxgl.Map({
    container: 'mapYarmouth',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [1.713057714669059, 52.55590811437722],
    zoom: 15
    
});

// The below are the default markers for each map.
const marker1 = new mapboxgl.Marker()
.setLngLat([0.15468009071425376, 52.23526134904788])
.addTo(mapCambridge);



const marker2 = new mapboxgl.Marker()
.setLngLat([1.1365739377895152, 52.57605470633871])
.addTo(mapWymondham);


const marker3 = new mapboxgl.Marker()
.setLngLat([1.713057714669059, 52.55590811437722])
.addTo(mapYarmouth);