<template>
  <div>
    <b-carousel
      id="carousel-1"
      v-model="slide"
      :interval="4000"
      controls
      indicators
      background="#ababab"
      style="text-shadow: 1px 1px 2px #333;"
      img-width="800"
      img-height="580"
      @sliding-start="onSlideStart"
      @sliding-end="onSlideEnd"
    >
      <div v-for="trending in trendings">
        <!-- Text slides with image -->
        <b-carousel-slide
          :caption="trending.title"
          :text="trending.description"
          :img-src="trending.imgBanner"
        ></b-carousel-slide>
      </div>
    </b-carousel>

  </div>
</template>

<script>
  export default {
    props: {
      trendings: {
        type: Array,
        default: function () {
          []
        }
      }
    },
    data() {
      return {
        slide: 0,
        sliding: null
      }
    },
    methods: {
      onSlideStart(slide) {
        this.sliding = true
      },
      onSlideEnd(slide) {
        this.sliding = false
      }
    }
  }
</script>
