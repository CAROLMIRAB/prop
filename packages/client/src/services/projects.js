import axios from 'axios';
import { headers } from './headers';
import { baseUrl } from '..';

export const getAllProject = async (
  comuna = '',
  type = '',
  pricemin = '',
  pricemax = ''
) => {
  return await axios
    .get(`${baseUrl}/projects`, {
      headers,
      params: { comuna, type, pricemin, pricemax },
    })
    .then((response) => {
      return response.data.data;
    });
};

export const createProject = async (description) => {
  return await axios
    .post(`${baseUrl}/create`, { description }, { headers })
    .then((response) => {
      return response.data.data;
    });
};

export const updateProject = async (id, description) => {
  const desc = { description: description };
  console.log(description);
  return await axios
    .put(`${baseUrl}/project/${id}`, desc, { headers })
    .then((response) => {
      return response.data.data;
    });
};

export const deleteProject = async (id) => {
  return await axios
    .delete(`${baseUrl}/project/${id}`, {
      headers,
    })
    .then((response) => {
      return response.data;
    });
};
