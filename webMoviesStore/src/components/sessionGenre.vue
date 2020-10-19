<template>
  <div class="accordion" role="tablist">
    <b-card no-body class="mb-1" v-for="genre in genres" :key="genre.id">
      <b-card-header header-tag="header" class="p-1" role="tab">
        <b-button block v-b-toggle="genre.description" variant="info">{{genre.description}}</b-button>
      </b-card-header>
      <b-collapse :id="genre.description" :accordion="genre.description" role="tabpanel" visible>
        <div class="row">
          <div v-for="movie in movies">
            <b-card no-body class="overflow-hidden" style="max-width: 540px;" v-if="movie.genre_id === genre.id">
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
      </b-collapse>
    </b-card>
  </div>
</template>

<script>
  export default {
    name: "sessionGenre",
    props: {
      genres: {
        type: Array,
        default: function () {
          return []
        }
      },
      movies: {
        type: Array,
        default: function () {
          return []
        }
      }
    }
  }
</script>

<style scoped>

</style>
