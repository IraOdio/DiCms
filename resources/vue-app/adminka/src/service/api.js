import axios from "axios";

export const r_get = (uri) => {
    return axios.get(uri);
};

export const r_post = (uri, data) => {
    return axios.post(uri, data);
}

export const r_put = (uri, data) => {
    return axios.put(uri,data);
}

export const r_delete = (uri) => {
    return axios.delete(uri);
}
