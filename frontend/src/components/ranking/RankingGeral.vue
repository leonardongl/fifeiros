<template>
  <div class="row px-5">
    <div class="col-12" id="ranking-geral">
      <div class="card">
        <h1 class="titulo">Ranking Geral</h1>
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
              <td class="text-center">G.P.</td>
              <td class="text-center">G.C.</td>
              <td class="text-center">S.G.</td>
            </tr>
          </thead>
          <tbody>
            <tr @click="showClub(club.id)" v-for="(club, index) in clubs" :key='club.id' class="tr-body">
              <td class="w-10 text-center">{{ index+1 }}º</td>
              <td>{{ club.name }}</td>
              <td class="w-10 text-center">{{ club.points }}</td>
              <td class="w-10 text-center">{{ club.matches }}</td>
              <td class="w-10 text-center">{{ club.wins }}</td>
              <td class="w-10 text-center">{{ club.draws }}</td>
              <td class="w-10 text-center">{{ club.losts }}</td>
              <td class="w-10 text-center">{{ club.goals_scored }}</td>
              <td class="w-10 text-center">{{ club.goals_against }}</td>
              <td class="w-10 text-center">{{ club.goals_scored - club.goals_against }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
import CardLoading from "../utils/CardLoading";
export default {
  name: 'RankingGeral',
  components: {CardLoading},
  props: {
    url: { type: String, default: null }
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
  #ranking-geral {
    padding-right: 5px;
    padding-left: 5px;
  }
</style>
