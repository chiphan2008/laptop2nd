import React from 'react';
import global from '../global';

const postApi = (url,param) => {
  return axios.post(`${global.url_api}${url}`,param);
}
// post("http://localhost:8080/foo", foo, {
//     headers: { Authorization: "Bearer " + token }
// })
export default postApi;
