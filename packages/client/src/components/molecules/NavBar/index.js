import React, { useState } from 'react';
import { AppBar, Toolbar } from '@mui/material';

import Box from '@mui/material/Box';
import Typography from '@mui/material/Typography';
import MenuIcon from '@mui/icons-material/Menu';
import ButtonBar from '../../atoms/ButtonBar';
import { blue } from '@mui/material/colors';

const NavBar = ({ pages = [] }) => {
  return (
    <AppBar component='nav'>
      <Toolbar>
        <Typography
          variant='h6'
          component='div'
          sx={{ flexGrow: 1, display: { xs: 'none', sm: 'block' } }}
        >
          Prop
        </Typography>
        <Box sx={{ display: { xs: 'none', sm: 'block' } }}>
          <ButtonBar
            color=''
            pages={pages}
          ></ButtonBar>
        </Box>
      </Toolbar>
    </AppBar>
  );
};

export default NavBar;
