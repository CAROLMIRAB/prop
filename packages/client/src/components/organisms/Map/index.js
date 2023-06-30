import React, { useMemo, useState } from 'react';
import { GoogleMap, Marker, InfoWindow } from '@react-google-maps/api';
import CardProject from '../CardProject';
import {
  Card,
  CardMedia,
  CardContent,
  Typography,
  CardActions,
  Button,
} from '@mui/material';

const Map = ({ allProject }) => {
  const center = useMemo(() => ({ lat: -33.462111, lng: -70.67214 }), []);
  const [selectedElement, setSelectedElement] = useState(null);
  const [activeMarker, setActiveMarker] = useState(null);
  const [showInfoWindow, setInfoWindowFlag] = useState(true);
  return (
    <GoogleMap
      zoom={12}
      center={center}
      mapContainerClassName='map-container'
    >
      {allProject.map((item, index) => {
        return (
          <>
            <Marker
              key={index}
              position={{
                lat: parseFloat(item.place.lat),
                lng: parseFloat(item.place.long),
              }}
              icon={{
                scaledSize: new window.google.maps.Size(50, 50),
                url: 'https://propital.s3.amazonaws.com/pin.svg',
              }}
              onClick={(props, marker) => {
                setSelectedElement(item);
                setActiveMarker(marker);
              }}
            ></Marker>
            {selectedElement == item ? (
              <InfoWindow
                key={index}
                visible={showInfoWindow}
                marker={activeMarker}
                onCloseClick={() => {
                  setSelectedElement(null);
                }}
                position={{
                  lat: parseFloat(item.place.lat),
                  lng: parseFloat(item.place.long),
                }}
              >
                <Card
                  sx={{ maxWidth: 150 }}
                  key={index}
                >
                  <CardMedia
                    sx={{ height: 140 }}
                    image={`${item.image}`}
                    title='green iguana'
                  />
                  <CardContent>
                    <Typography
                      gutterBottom
                      variant='subtitle2'
                      component='div'
                    >
                      {item.name}
                    </Typography>
                    <Typography variant='caption'>{item.address}</Typography>
                  </CardContent>
                  <CardActions>
                    <Button size='small'>Ver Mas</Button>
                  </CardActions>
                </Card>
              </InfoWindow>
            ) : null}
          </>
        );
      })}
    </GoogleMap>
  );
};

export default Map;
