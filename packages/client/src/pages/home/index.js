import React, { useEffect, useContext } from 'react';
import { Button, Card, Grid } from '@mui/material';
import { getAllProject } from '../../services/projects';
import { getAllTypes } from '../../services/types';
import { GlobalContext } from '../../App';
import Filter from '../../components/organisms/Filter';
import Template from '../../components/organisms/Template';
import CardProject from '../../components/organisms/CardProject';
import MapRender from '../mapRender';
import { useState } from 'react';
import { getAllComunas } from '../../services/comunas';

const Home = () => {
  const { allProject, setAllProject } = useContext(GlobalContext);

  const types = getAllTypes;
  const comunas = getAllComunas;

  useEffect(() => {
    const _getAllProjects = async () => {
      const change_state = await getAllProject();
      setAllProject(change_state);
    };
    _getAllProjects();
  }, []);

  return (
    <Template>
      <Grid
        item
        container
        md={3}
        mt={10}
        sx={{
          p: 2,
          gap: 10,
          overflow: 'auto',
          display: 'block',
          height: 'fit-content',
        }}
      >
        <Grid
          item
          md={12}
          sx={{
            p: 2,
            gap: 10,
          }}
        >
          <Filter
            types={types}
            comunas={comunas}
            allProject={allProject}
            setAllProject={setAllProject}
          ></Filter>
        </Grid>
        <Grid
          item
          container
          md={12}
        >
          {allProject.map((item, index) => {
            return (
              <CardProject
                name={item.name}
                description={item.description}
                subtitle={item.address}
                price={item.price}
                image={item.image}
                area={item.area}
                key={index}
              ></CardProject>
            );
          })}
        </Grid>
      </Grid>
      <Grid
        item
        container
        md={9}
        style={{ gap: 15 }}
      >
        <MapRender></MapRender>
      </Grid>
    </Template>
  );
};
export default Home;
