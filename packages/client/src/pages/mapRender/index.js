import React, { useContext } from 'react';
import { useLoadScript } from '@react-google-maps/api';
import { Box, CircularProgress } from '@mui/material';
import Map from '../../components/organisms/Map';
import { GlobalContext } from '../../App';

const MapRender = () => {
  const { allProject, setAllProject } = useContext(GlobalContext);
  const { isLoaded } = useLoadScript({
    googleMapsApiKey: '',
  });

  if (!isLoaded)
    return (
      <Box
        sx={{ display: 'flex', flexDirection: 'column', alignItems: 'center' }}
      >
        <CircularProgress />
      </Box>
    );
  return <Map allProject={allProject} />;
};

export default MapRender;
