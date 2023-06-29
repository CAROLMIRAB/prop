import React, { useState } from 'react';
import LoadingButton from '@mui/lab/LoadingButton';
import { Box, Slider, TextField, Grid } from '@mui/material';

const RangeButton = ({ label = '', min = 0, max = 0, onChange }) => {
  const [value, setValue] = useState([100, 20000]);
  const handleChange = (event, newValue) => {
    setValue(newValue);
    onChange(event, value);
    console.log(value[0], value[1]);
  };
  return (
    <Grid
      container
      direction='horizontal'
    >
      <Grid
        md={6}
        sx={{ maxWidth: '100%' }}
      >
        <TextField
          value={value[0]}
          id={'desde'}
          label='Desde'
          size='small'
          sx={{ maxWidth: '100%', paddingRight: 1 }}
        />
      </Grid>
      <Grid md={6}>
        <TextField
          value={value[1]}
          id={'hasta'}
          label='Hasta'
          size='small'
          sx={{ maxWidth: '100%' }}
        />
      </Grid>
      <Grid md={12}>
        <Slider
          getAriaLabel={() => 'Precio'}
          value={value}
          valueLabelDisplay='auto'
          max={20000}
          min={100}
          onChange={handleChange}
          sx={{ maxWidth: '100%', gap: 3 }}
        />
      </Grid>
    </Grid>
  );
};

export default RangeButton;
