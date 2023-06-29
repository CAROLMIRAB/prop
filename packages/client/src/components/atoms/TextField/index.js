import React from 'react';
import TextField from '@mui/material/TextField';

const TextField = ({ name = '', label = '', variant = 'outlined' }) => {
  return <TextField id={name} label={label} variant={variant} fullWidth />;
};

export default TextField;
