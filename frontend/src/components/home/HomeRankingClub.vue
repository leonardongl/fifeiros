<template>
  <div :class="col" id="ranking-home">
    <div class="card">
      <h1 class="titulo">{{ titulo }}</h1>
      <card-loading v-if="loading"></card-loading>
      <table v-else class="ranking-table" style="width:96% !important">
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
          <tr @click="showClub(club.id)" class="tr-body" v-for="(club, index) in clubs" :key='club.id'>
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
import CardLoading from "../utils/CardLoading";
export default {
  name: 'HomeRankingClub',
  components: {CardLoading},
  props: {
    col: { type: String, default: 'col-sm-8'},
    titulo: { type: String, required: true },
    url: { type: String, required: true },
  },
  data() {
    return {
      clubs: [],
      loading: true
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
          this.loading = false
        })
        .catch((error) => {
          console.log(error)
        })
    },
    showClub(id) {
      this.$router.push(`/clubs/${id}`)
    }
  },
}
</script>

<style scoped>
  #ranking-home {
    padding-right: 5px;
    padding-left: 5px;
  }
  .card:hover {
    transition: 0.5s;
    z-index: 999;
    transform: scale(1.03);
  }
</style>
