<template>
  <div class="row px-5">
    <div class="col-12" id="club">
      <div class="card">
        <card-loading v-if="loading"></card-loading>
        <div v-else class="row">
          <div class="col-sm-4 d-flex justify-content-around align-items-center flex-column">
            <img src="https://upload.wikimedia.org/wikipedia/pt/thumb/0/0c/Liverpool_FC.svg/1200px-Liverpool_FC.svg.png" class="club-img">
            <h1>{{ club.name }}</h1>
            <h2>TÉCNICO: {{ club.coach }}</h2>
          </div>
          <div class="col-sm-8">
            <h2>ELENCO</h2>
            <table class="ranking-table">
              <thead>
                <tr class="tr-thead">
                  <td colspan="2"></td>
                  <td class="text-center w-1">JGS</td>
                  <td class="text-center w-1">GOL</td>
                  <td class="text-center w-1">ASS</td>
                  <td class="text-center w-1">MOTM</td>
                </tr>
              </thead>
              <tbody>
                <tr @click="showPlayer(player.id) " v-for="(player, index) in players" :key="player.id" class="tr-body">
                  <td class="text-center w-1">{{ player.shirt }}</td>
                  <td>{{ player.name }}</td>
                  <td class="text-center w-1">{{ player.matches }}</td>
                  <td class="text-center w-1">{{ player.goals }}</td>
                  <td class="text-center w-1">{{ player.assists }}</td>
                  <td class="text-center w-1">{{ player.motm }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
import CardLoading from "../utils/CardLoading";
export default {
  components: {CardLoading},
  props: {
    url: { type: String, default: null }
  },
  data() {
    return {
      id: null,
      club: {},
      players: [],
      loading: true
    }
  },
  mounted() {
    this.id = location.href.substring(location.href.lastIndexOf("/")+1)
    this.findClub()
    this.findPlayers()
  },
  methods: {
    findClub() {
      axios.get(`${this.url}/clubs/${this.id}`, {})
        .then((response) => {
          this.club = response.data
        })
        .catch((error) => {
          console.log(error)
        })
    },
    findPlayers() {
      axios.get(`${this.url}/clubs/players/${this.id}`, {})
        .then((response) => {
          this.players = response.data
          this.loading = false
        })
        .catch((error) => {
          console.log(error)
        })
    },
    showPlayer(id) {
      this.$router.push(`/players/${id}`)
    }
  },
}
</script>

<style scoped>
  #club {
    padding-right: 5px;
    padding-left: 5px;
  }
  .card {
    height: 500px;
    padding-top: 20px;
    padding-right: 20px;
  }
  .club-img {
    max-height: 250px;
    max-width: 80%;
  }
  .ranking-table {
    width: 100% !important;
  }
  h1 {
    color: #89c5de;
    text-transform: uppercase;
    font-size: 45px;
    font-family: 'Oswald', sans-serif;
  }
  h2 {
    color: #89c5de;
    text-transform: uppercase;
    font-size: 35px;
    font-family: 'Oswald', sans-serif;
  }
</style>
