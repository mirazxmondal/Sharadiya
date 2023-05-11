// Initialize Mapbox
mapboxgl.accessToken = 'pk.eyJ1IjoibWlyYXptb25kYWwiLCJhIjoiY2xoajltZWZnMDEwNjNsb2Q3N3FsYjM1bSJ9.xI-NFFkj8cjMVZJk7kOBtg';
const map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/streets-v11',
  center: [-74.5, 40], // Default center
  zoom: 9 // Default zoom
});

// Get user's location
navigator.geolocation.getCurrentPosition(position => {
  const userLocation = [position.coords.longitude, position.coords.latitude];

  // Set map center to user's location
  map.setCenter(userLocation);

  // Add user marker to map
  new mapboxgl.Marker()
    .setLngLat(userLocation)
    .addTo(map);

  // Fetch nearby clubs using Places API
  fetch(`https://api.mapbox.com/geocoding/v5/mapbox.places/clubs.json?proximity=${userLocation[0]},${userLocation[1]}&access_token=${mapboxgl.accessToken}`)
    .then(response => response.json())
    .then(data => {
      const clubs = data.features;

      // Add club markers to map
      clubs.forEach(club => {
        new mapboxgl.Marker()
          .setLngLat(club.geometry.coordinates)
          .addTo(map);
      });

      // Display club list
      const clubList = document.getElementById('clubs');
      clubs.forEach(club => {
        const clubItem = document.createElement('li');
        clubItem.classList.add('club-item');
        clubItem.textContent = club.text;
        clubList.appendChild(clubItem);
      });
    });
});
