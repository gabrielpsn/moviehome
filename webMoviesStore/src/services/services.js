import axios from 'axios'

const service = {
  getGenre () {
    return axios.get('http://127.0.0.1:8000/api/genre').then(response => (response))
  },
  getMovie () {
    return axios.get('http://127.0.0.1:8000/api/movies').then(response => (response))
  },
  getMoviesByTitle (search) {
    return axios.get('http://127.0.0.1:8000/api/movies/filter?search=' + search).then(response => (response))
  }
}

export default service
