import axios from 'axios'

export default (path, data, method, file = false) => {
    let requestContent = {
        method: method ? method : 'GET',
        url: path,
    }
    let headers = {}
    if (! file) {
        headers = {
            headers: {
                'Content-Type': 'application/json',
            },
        }
    }
    if (data && method) {
        requestContent = {
            ...requestContent,
            data
        }
    }
    if (file) {
        requestContent = {
            ...requestContent,
            contentType: false,
            cache: false,
            processData: false,
        }
    } else {
        requestContent = {
            ...requestContent,
            headers
        }
    }
    return axios(requestContent)
}