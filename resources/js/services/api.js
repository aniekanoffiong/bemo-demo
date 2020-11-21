import axios from 'axios'

export default (path, data, method, token) => {
    let requestContent = {
        method: method ? method : 'GET',
        url: path,
    }
    let headers = {
        headers: {
            'Content-Type': 'application/json',
        },
    }
    if (token) {
        headers = {
            ...headers, 'X-CSRF-Token': token,
        }
    }
    if (data && method) {
        requestContent = {
            ...requestContent,
            data, headers
        }
    }
    return axios(requestContent)
}