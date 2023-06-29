import React, { useState } from 'react';
import { Slider, TextField, Grid, InputAdornment } from '@mui/material';

const RangeButton = ({
  label = '',
  min = 0,
  max = 0,
  types = '',
  onChange,
}) => {
  const [value, setValue] = useState([100, 20000]);
  const handleChange = (event, newValue) => {
    setValue(newValue);
    onChange(event, value);
    console.log(value[0], value[1]);
  };
  return (
    <Grid container>
      <Grid
        item
        md={6}
        sx={{ maxWidth: '100%' }}
      >
        <TextField
          value={value[0]}
          id={'desde'}
          label='Desde'
          size='small'
          sx={{ maxWidth: '100%', paddingRight: 1 }}
          InputProps={{
            endAdornment: (
              <InputAdornment position='start'>{types}</InputAdornment>
            ),
          }}
        />
      </Grid>
      <Grid
        item
        md={6}
      >
        <TextField
          value={value[1]}
          id={'hasta'}
          label='Hasta'
          size='small'
          sx={{ maxWidth: '100%' }}
          InputProps={{
            endAdornment: (
              <InputAdornment position='start'>{types}</InputAdornment>
            ),
          }}
        />
      </Grid>
      <Grid
        item
        md={12}
      >
        <Slider
          value={value}
          valueLabelDisplay='auto'
          max={parseInt(max)}
          min={parseInt(min)}
          onChange={handleChange}
          sx={{ maxWidth: '100%', gap: 3 }}
        />
      </Grid>
    </Grid>
  );
};

export default RangeButton;
