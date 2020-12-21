<template>
  <div :class="col" id="ranking-home">
    <div class="card" @click="link()">
      <h1 class="titulo">{{ titulo }}</h1>
      <table class="ranking-table" style="width:96% !important">
        <thead>
          <tr class="tr-thead">
            <td colspan="2"></td>
            <td class="text-center">PTS</td>
            <td class="text-center">JGS</td>
            <td class="text-center">VIT</td>
            <td class="text-center">EMP</td>
            <td class="text-center">DER</td>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(club, index) in clubs" :key='club.id'>
            <td class="w-10 text-center">{{ index+1 }}º</td>
            <td>{{ club.name }}</td>
            <td class="w-10 text-center">{{ club.points }}</td>
            <td class="w-10 text-center">{{ club.matches }}</td>
            <td class="w-10 text-center">{{ club.wins }}</td>
            <td class="w-10 text-center">{{ club.draws }}</td>
            <td class="w-10 text-center">{{ club.losts }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  name: 'RankingHome',
  props: {
    col: { type: String, default: 'col-sm-8'},
    titulo: { type: String, required: true },
    url: { type: String, required: true },
  },
  data() {
    return {
      clubs: []
    }
  },
  mounted() {
    this.ranking()
  },
  methods: {
    ranking() {
      axios.get(`${this.url}/clubs/ranking`, {})
        .then((response) => {
          this.clubs = response.data
        })
        .catch()
    }
  },
}
</script>

<style scope>
  #ranking-home {
    padding-right: 5px;
    padding-left: 5px;
  }
</style>
