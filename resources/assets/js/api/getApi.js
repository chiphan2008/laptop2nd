import React from 'react';
import global from '../global';

const getApi = (url) => {
  return axios.get(`${global.url_api}${url}`);
}
// post("http://localhost:8080/foo", foo, {
//     headers: { Authorization: "Bearer " + token }
// })
export default getApi;
