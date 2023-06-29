import React, { useState } from 'react';
import { FormControl, InputLabel, MenuItem, Select } from '@mui/material';

const SelectButton = ({ values = [], label = '', selected = '', onChange }) => {
  const [value, setValue] = useState('');
  const handleChange = (event) => {
    setValue(event);
  };
  return (
    <FormControl fullWidth>
      <InputLabel id={label}>{label}</InputLabel>
      <Select
        labelId={label}
        id={label}
        key={label}
        value={selected}
        label={label}
        onChange={(e) => onChange(e)}
        size='small'
      >
        <MenuItem value={''}>{label}</MenuItem>
        {values.map(({ id, name }) => (
          <MenuItem
            value={id}
            key={id}
          >
            {name}
          </MenuItem>
        ))}
      </Select>
    </FormControl>
  );
};

export default SelectButton;
