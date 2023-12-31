import React, { useState, useContext } from 'react';
import { Box, Grid, Button } from '@mui/material';
import SelectButton from '../../atoms/SelectButton';
import RangeButton from '../../atoms/RangeButton';
import { getAllProject } from '../../../services/projects';
import { GlobalContext } from '../../../App';
import LoadingButton from '@mui/lab/LoadingButton';

const Filter = ({ types = [], comunas = [] }) => {
  const { allProject, setAllProject } = useContext(GlobalContext);
  const [selectedType, setSelectedType] = useState('');
  const [selectedComuna, setSelectedComuna] = useState('');
  const [priceRange, setPriceRange] = useState([0, 0]);
  const [mtRange, setMtRange] = useState([0, 0]);
  const [loading, setLoading] = useState(false);

  const handleChangeType = (e) => {
    setSelectedType(e.target.value);
  };
  const handleChangeComuna = (e) => {
    setSelectedComuna(e.target.value);
  };
  const handleChangePrices = (e, value) => {
    setPriceRange(value);
  };
  const handleChangeMt = (e, value) => {
    setMtRange(value);
  };
  const handleClick = async (event) => {
    event.preventDefault();
    setLoading(true);
    const _getAllProjects = async () => {
      const change_state = await getAllProject(
        selectedComuna,
        selectedType,
        priceRange[0],
        priceRange[1],
        mtRange[0],
        mtRange[1]
      );
      setLoading(false);
      setAllProject(change_state);
    };
    _getAllProjects();
  };

  return (
    <Grid
      item
      md={12}
    >
      <Box
        component='form'
        sx={{
          '& .MuiTextField-root': { m: 1, width: '25ch' },
        }}
        noValidate
        autoComplete='off'
      >
        <SelectButton
          values={types}
          label='Tipo'
          selected={selectedType}
          onChange={handleChangeType}
        ></SelectButton>
        <Box
          sx={{
            height: 20,
            backgroundColor: '#fff',
          }}
        />
        <SelectButton
          values={comunas}
          label='Comunas'
          onChange={handleChangeComuna}
          selected={selectedComuna}
        ></SelectButton>
        <Box
          sx={{
            height: 20,
            backgroundColor: '#fff',
          }}
        />
      </Box>
      <RangeButton
        label='Mt'
        min='10'
        max='500'
        types='mt2'
        onChange={handleChangeMt}
      ></RangeButton>
      <RangeButton
        label='Precio'
        min='100'
        max='20000'
        types='UF'
        onChange={handleChangePrices}
      ></RangeButton>
      <Box
        sx={{ display: 'flex', flexDirection: 'column', alignItems: 'center' }}
      >
        <LoadingButton
          variant='contained'
          onClick={handleClick}
          loading={loading}
        >
          Filtrar
        </LoadingButton>
      </Box>
    </Grid>
  );
};

export default Filter;
