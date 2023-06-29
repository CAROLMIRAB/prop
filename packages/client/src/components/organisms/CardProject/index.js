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
    <Grid md={5}>
      <Card>
        <CardHeader
          sx={{ bgcolor: 'transparent' }}
          action={
            <>
              <Fab
                variant='extended'
                size='small'
                color='primary'
                aria-label='add'
              >
                {price} UF
              </Fab>
            </>
          }
        />
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
