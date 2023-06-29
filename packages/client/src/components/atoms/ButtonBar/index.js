import React from 'react';
import { Button } from '@mui/material';

const ButtonBar = ({ color = '', pages = [] }) => {
  return pages.map((item) => (
    <Button
      key={item}
      sx={{ color: { color } }}
      onClick={(e) => {}}
    >
      {item}
    </Button>
  ));
};

export default ButtonBar;
