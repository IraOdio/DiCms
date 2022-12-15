import {r_delete, r_get, r_post, r_put} from "@/service/api";

export const example_method = () => {
    console.log('example method execute!!!');
}
export const example_request_get = (uri) => {
    return r_get(uri);
}

export const example_request_post = (uri, data) => {
    return r_post(uri, data);
}

export const example_request_put = (uri, data) => {
    return r_put(uri,data);
}

export const example_request_delete = (uri) => {
    return r_delete(uri);
}
