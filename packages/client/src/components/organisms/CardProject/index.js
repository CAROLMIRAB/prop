import React, { useState, useContext } from 'react';
import {
  Card,
  CardActionArea,
  CardMedia,
  CardContent,
  Typography,
  CardActions,
  Button,
  CardHeader,
  Fab,
  Grid,
} from '@mui/material';
import { baseUrl } from '../../..';

const CardProject = ({
  name = '',
  description = '',
  subtitle = '',
  image = '',
  price = '',
}) => {
  return (
    <Grid
      item
      md={6}
      sx={{
        padding: 1,
      }}
    >
      <Card>
        <Fab
          variant='extended'
          size='small'
          color='primary'
          aria-label='add'
          sx={{ position: 'absolute', margin: 1 }}
        >
          {price} UF
        </Fab>

        <CardActionArea>
          <CardMedia
            component='img'
            height='140'
            image={`/images/${image}`}
            alt={image}
          />
          <CardContent>
            <Typography
              gutterBottom
              variant='h6'
              component='div'
            >
              {name}
            </Typography>
            <Typography
              sx={{ mb: 1.5 }}
              color='text.secondary'
              variant='caption'
            >
              {subtitle}
            </Typography>
          </CardContent>
        </CardActionArea>
        <CardActions>
          <Button
            size='small'
            color='primary'
          >
            Ver Mas
          </Button>
        </CardActions>
      </Card>
    </Grid>
  );
};

export default CardProject;
