import axios from "axios";

axios.defaults.withCredentials = true;
axios.defaults.baseURL = "http://localhost:8000";

axios.interceptors.request.use(async (config) => {
    if (config.method !== 'get') {
      await axios.get('/sanctum/csrf-cookie');
    }
    return config;
  });