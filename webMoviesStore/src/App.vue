<template>
  <div>
    <div>
      <b-navbar toggleable="lg" type="dark" variant="info">
        <b-navbar-brand href="#">Movie Home</b-navbar-brand>

        <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

        <b-collapse id="nav-collapse" is-nav>
          <b-navbar-nav>
            <b-nav-item href="#">Home</b-nav-item>
            <b-nav-item href="#">Release</b-nav-item>
            <b-nav-item href="#">Coming Soon</b-nav-item>
          </b-navbar-nav>

          <!-- Right aligned nav items -->
          <b-navbar-nav class="ml-auto">
            <b-nav-form>
              <b-form-input v-model="search" size="sm" class="mr-sm-4" placeholder="Search"></b-form-input>
              <b-button size="sm" class="my-4 my-sm-0" @click="getMoviesByTitle()">Search</b-button>
            </b-nav-form>
          </b-navbar-nav>
        </b-collapse>
      </b-navbar>
    </div>
    <div class="container" v-if="search === ''">
      <banner :trendings="trending" />
      <session-genre :genres="genres" :movies="movies"/>
    </div>
    <div v-else>
      <div class="row">
        <div v-for="movie in movies">
          <b-card no-body class="overflow-hidden" style="max-width: 540px;">
            <b-row no-gutters>
              <b-col md="6">
                <b-card-img :src="movie.img" alt="Image" class="rounded-0"></b-card-img>
              </b-col>
              <b-col md="6">
                <b-card-body :title="movie.title">
                  <b-card-text>
                    {{movie.description}}
                  </b-card-text>
                </b-card-body>
              </b-col>
            </b-row>
          </b-card>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import service from './services/services'
import banner from './components/bannerTrending'
import sessionGenre from './components/sessionGenre'
export default {
  name: 'app',
  components: {
    sessionGenre,
    banner
  },
  data () {
    return {
      search: '',
      genres: null,
      movies: null,
      lancamentos: [],
      trending: [],
    }
  },
  methods: {
    getMoviesByTitle () {
      service.getMoviesByTitle(this.search).then(response => {
        console.log('res', response)
        this.movies = response.data
      })
    },
    getGenres () {
      service.getGenre().then(response => {
        this.genres = response.data
        this.getMovies()
      })
    },
    getMovies () {
      service.getMovie().then(response => {
        this.movies = response.data
        this.getLancamentos()
        this.getTrending()
      })
    },
    getLancamentos() {
      let that = this
      this.lancamentos = []
        this.movies.forEach(function (item) {
         if (item.next_movies) {
          that.lancamentos.push(item)
         }
        })
    },
    getTrending() {
      let that = this
      this.trending = []
      this.movies.forEach(function (item) {
        if (item.trending) {
          that.trending.push(item)
        }
      })
    },

  },
  mounted() {
    this.getGenres()
  }
}
</script>

<style lang="scss">
.sessionGenre {
 background-color: #e2e8f0;
 padding: 15px;
 border-bottom-color: #4a5568;
}

.listMovies {
  background-color: #ffffff;
}
#banner {
  width: 100%;
  height: 400px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative !important;
}
</style>
