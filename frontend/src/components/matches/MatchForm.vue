<template>
  <div>
    <div class="row px-5">
      <div class="col-12" id="match">
        <div class="card h-auto">
          <h1 class="titulo">JOGAR PARTIDA</h1>
          <card-loading v-if="loading"></card-loading>
          <div v-else class="row" id="form">
            <div class="col-5">
              <div class="form-group">
                <select @change="listHomePlayers()" class="form-control" name="home" id="home">
                  <option></option>
                  <option v-for="(club, index) in clubs" :key='club.id' :value="club.id">
                    {{ club.name }}
                  </option>
                </select>
              </div>
              <table class="ranking-table" style="width:96% !important">
                <tbody>
                  <tr v-for="(player, index) in homePlayers" :key='player.id'>
                    <td>{{ player.name }}</td>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" style="cursor: pointer" type="checkbox" value="" :id="'home_played_'+player.id">
                        <label class="form-check-label" style="cursor: pointer" :for="'home_played_'+player.id"></label>
                      </div>
                    </td>
                    <td>
                      <input type="number" min="0" class="form-control form-control-sm" :id="'home_player_goals_'+player.id">
                    </td>
                    <td>
                      <input type="number" min="0" class="form-control form-control-sm" :id="'home_player_assists_'+player.id">
                    </td>
                    <td>
                      <input type="number" min="0" class="form-control form-control-sm" :id="'home_player_rating'+player.id">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-2 row">
              <div class="col-6">
                <input type="number" min="0" class="form-control" id="home_goals">
              </div>
              <div class="col-6">
                <input type="number" min="0" class="form-control" id="away_goals">
              </div>
              <div class="col-12">
                <button class="btn btn-cadastrar w-100" @click="jogar()">JOGAR</button>
              </div>
            </div>
            <div class="col-5">
              <div class="form-group">
                <select @change="listAwayPlayers()" class="form-control" name="away" id="away">
                  <option></option>
                  <option v-for="(club, index) in clubs" :key='club.id' :value="club.id">
                    {{ club.name }}
                  </option>
                </select>
              </div>
              <table class="ranking-table" style="width:96% !important">
                <tbody>
                <tr v-for="(player, index) in awayPlayers" :key='player.id'>
                  <td>{{ player.name }}</td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" style="cursor: pointer" type="checkbox" value="" :id="'away_played_'+player.id">
                      <label class="form-check-label" style="cursor: pointer" :for="'away_played_'+player.id"></label>
                    </div>
                  </td>
                  <td>
                    <input type="number" min="0" class="form-control form-control-sm" :id="'away_player_goals_'+player.id">
                  </td>
                  <td>
                    <input type="number" min="0" class="form-control form-control-sm" :id="'away_player_assists_'+player.id">
                  </td>
                  <td>
                    <input type="number" min="0" class="form-control form-control-sm" :id="'away_player_rating'+player.id">
                  </td>
                </tr>
                </tbody>
              </table>
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
  name: 'MatchForm',
  components: {CardLoading},
  props: {
    url: { type: String, default: null }
  },
  data() {
    return {
      clubs: [],
      homePlayers: [],
      awayPlayers: [],
      loading: true
    }
  },
  mounted() {
    this.listClubs()
  },
  methods: {
    listClubs() {
      axios.get(`${this.url}/clubs/ranking`, {})
        .then((response) => {
          this.clubs = response.data
          this.loading = false
        })
        .catch((error) => {
          console.log(error)
        })
    },
    listHomePlayers() {
      var id = document.getElementById('home').value
      axios.get(`${this.url}/clubs/players/${id}`, {})
        .then((response) => {
          this.homePlayers = response.data
          this.loading = false
        })
        .catch((error) => {
          console.log(error)
        })
    },
    listAwayPlayers() {
      var id = document.getElementById('away').value
      axios.get(`${this.url}/clubs/players/${id}`, {})
        .then((response) => {
          this.awayPlayers = response.data
          this.loading = false
        })
        .catch((error) => {
          console.log(error)
        })
    },
    jogar() {
      var inputs = document.getElementById('form').getElementsByTagName('input')
      var values = {}

      for (let item of inputs) {
        values[item.id] = item.value
      }
      axios.post(`${this.url}/matches/store`, { data : values })
        .then((response) => {
          console.log(response)
        })
        .catch((error) => {
          console.log(error)
        })
    },
  },
}
</script>

<style scoped>
  #match {
    padding-right: 5px;
    padding-left: 5px;
  }
  .form-control-sm {
    width: 60px;
    text-align: center;
  }
  .form-check-input, .form-check-label {
    cursor: pointer;
  }
</style>
