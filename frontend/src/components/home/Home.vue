<template>
  <div class="row px-5">
    <ranking-home :url="url" :titulo="'RANKING'"></ranking-home>
    <destaques-home :url="url" :titulo="'DESTAQUES'"></destaques-home>
    <ranking-jogador-home :loading="" :players="playersGoals" :titulo="'GOLEADORES'"></ranking-jogador-home>
    <ranking-jogador-home :players="playersAssists" :titulo="'PASSEADORES'"></ranking-jogador-home>
    <ranking-jogador-home :players="playersMotm" :titulo="'MELHORES'"></ranking-jogador-home>
  </div>
</template>

<script>
import RankingHome from './RankingHome'
import DestaquesHome from './DestaquesHome'
import RankingJogadorHome from './RankingJogadorHome'
import axios from 'axios'
export default {
  name: 'Home',
  components: {
    RankingHome,
    DestaquesHome,
    RankingJogadorHome
  },
  props: {
    url: { type: String, default: null }
  },
  data() {
    return {
      playersGoals: [],
      playersAssists: [],
      playersMotm: [],
    }
  },
  mounted() {
    this.rankingPlayers()
  },
  methods: {
    rankingPlayers() {
      axios.get(`${this.url}/players/home/ranking`, {})
        .then((response) => {
          this.playersGoals = response.data['goals']
          this.playersAssists = response.data['assists']
          this.playersMotm = response.data['motm']
        })
        .catch()
    }
  },
}
</script>


