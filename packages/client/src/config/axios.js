import axios from 'axios';

axios.interceptors.response.use(
  function(response) {
    // Any status code that lie within the range of 2xx cause this function to trigger
    // Do something with response data
    return response;
  },
  function(error) {
    // Any status codes that falls outside the range of 2xx cause this function to trigger
    // Do something with response error
    if (error.response.status == 422) {
      /* MySwal.fire({
        title: `${error.response.data.error[0]}`,
        icon: 'error',
        confirmButtonText: 'Aceptar',
        confirmButtonColor: '#09393e',
      }).then((result) => {
        if (result['isConfirmed']) {
          //navigation("/");
        }
      });*/
    }
    if (error.response.status == 401) {
      /* MySwal.fire({
        title: `${error.response.data.error}`,
        icon: 'error',
        confirmButtonText: 'Aceptar',
        confirmButtonColor: '#09393e',
      }).then((result) => {
        if (result['isConfirmed']) {
          //navigation("/");
        }
      });*/
    }
    return Promise.reject(error);
  }
);
