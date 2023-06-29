import React, { useState, useContext } from 'react';
import { Box, Grid, Stack } from '@mui/material';
import Filter from '../Filter';
import NavBar from '../../molecules/NavBar';

const pages = ['Products', 'Pricing', 'Blog'];

const Template = ({ children }) => {
  return (
    <Grid
      item
      container
    >
      <NavBar pages={pages}></NavBar>

      {children}
    </Grid>
  );
};

export default Template;
