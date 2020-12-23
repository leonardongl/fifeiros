<template>
  <div class="row px-5">
    <div class="col-12" id="player">
      <div class="card">
        <card-loading v-if="loading"></card-loading>
        <div v-else class="row">
          <div class="col-sm-4 d-flex justify-content-around align-items-center flex-column">
            <img src="https://upload.wikimedia.org/wikipedia/pt/thumb/0/0c/Liverpool_FC.svg/1200px-Liverpool_FC.svg.png" class="player-img">
            <h1>{{ player.name }}</h1>
            <h2>{{ player.shirt }}</h2>
            <h3 @click="showClub(club.id)" style="cursor:pointer;">{{ club.name }}</h3>
          </div>
          <div class="col-sm-8">
            <h2 class="text-center">ESTATÍSTICAS</h2>
            <div class="row player-stats">
              <div class="col-sm-6">
                <h3>{{ player.goals }}</h3>
                <h4>GOLS</h4>
              </div>
              <div class="col-sm-6">
                <h3>{{ player.assists }}</h3>
                <h4>ASSISTÊNCIAS</h4>
              </div>
              <div class="col-sm-6">
                <h3>{{ player.goals+player.assists }}</h3>
                <h4>PARTICIPAÇÕES</h4>
              </div>
              <div class="col-sm-6">
                <h3>{{ player.motm }}</h3>
                <h4>CRAQUE DA PARTIDA</h4>
              </div>
              <div class="col-sm-6">
                <h3 class="text-warning">{{ player.rating }}</h3>
                <h4>NOTA</h4>
              </div>
              <div class="col-sm-6">
                <h3>{{ player.matches }}</h3>
                <h4>JOGOS</h4>
              </div>
            </div>
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
  name: "PlayerShow",
  components: {CardLoading},
  props: {
    url: { type: String, default: null }
  },
  data() {
    return {
      id: null,
      player: {},
      club: {},
      loading: true
    }
  },
  mounted() {
    this.id = location.href.substring(location.href.lastIndexOf("/")+1)
    this.findPlayer()
  },
  methods: {
    findPlayer() {
      axios.get(`${this.url}/players/${this.id}`, {})
        .then((response) => {
          this.player = response.data
          this.findClub()
        })
        .catch((error) => {
          console.log(error)
        })
    },
    findClub() {
      axios.get(`${this.url}/clubs/${this.player.club_id}`, {})
        .then((response) => {
          this.club = response.data
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
#player {
  padding-right: 5px;
  padding-left: 5px;
}
.card {
  height: 500px;
  padding-top: 20px;
  padding-right: 20px;
}
.player-img {
  max-height: 250px;
  max-width: 80%;
}
.player-stats div{
  margin: 30px 0;
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
h3 {
  color: #f4f4f4;
  text-transform: uppercase;
  font-size: 30px;
  font-family: 'Oswald', sans-serif;
  text-align: center;
}
h4 {
  color: #89c5de;
  text-transform: uppercase;
  font-size: 20px;
  font-family: 'Oswald', sans-serif;
  text-align: center;
}
</style>
