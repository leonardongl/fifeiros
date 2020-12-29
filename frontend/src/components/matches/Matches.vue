<template>
  <div>
    <club-form :url="url"></club-form>
    <div class="row px-5">
      <div class="col-12" id="matches">
        <div class="card">
          <h1 class="titulo">PARTIDAS</h1>
          <card-loading v-if="loading"></card-loading>
          <table v-else class="ranking-table" style="width:96% !important">
            <thead>
              <tr class="tr-thead">
                <td>HOME</td>
                <td class="w-10 text-center"></td>
                <td class="w-10 text-center"></td>
                <td class="w-10 text-center"></td>
                <td class="text-right">AWAY</td>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(match, index) in matches" :key='match.id'>
                <td>{{ match.home }}</td>
                <td class="w-10 text-center">{{ match.home_goals }}</td>
                <td class="w-10 text-center">x</td>
                <td class="w-10 text-center">{{ match.away_goals }}</td>
                <td class="text-right">{{ match.away }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
import CardLoading from "../utils/CardLoading";
export default {
  name: 'Matches',
  components: {CardLoading},
  props: {
    url: { type: String, default: null }
  },
  data() {
    return {
      matches: [],
      loading: true
    }
  },
  mounted() {
    this.listMatches()
  },
  methods: {
    listMatches() {
      axios.get(`${this.url}/matches`, {})
        .then((response) => {
          this.matches = response.data
          this.loading = false
        })
        .catch((error) => {
          console.log(error)
        })
    }
  },
}
</script>

<style scoped>
  #matches {
    padding-right: 5px;
    padding-left: 5px;
  }
</style>
