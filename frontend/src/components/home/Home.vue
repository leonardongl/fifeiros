<template>
  <div class="row px-5">
    <home-ranking-club :url="url" :titulo="'RANKING'"></home-ranking-club>
    <home-highlights :url="url" :titulo="'DESTAQUES'"></home-highlights>
    <home-ranking-player :loading="loading" :players="playersGoals" :titulo="'GOLEADORES'"></home-ranking-player>
    <home-ranking-player :loading="loading" :players="playersAssists" :titulo="'PASSEADORES'"></home-ranking-player>
    <home-ranking-player :loading="loading" :players="playersParticipations" :titulo="'PARTICIPAÇÕES'"></home-ranking-player>
    <home-ranking-player :loading="loading" :players="playersMotm" :titulo="'MELHORES'"></home-ranking-player>
  </div>
</template>

<script>
import HomeRankingClub from './HomeRankingClub'
import HomeHighlights from './HomeHighlights'
import HomeRankingPlayer from './HomeRankingPlayer'
import axios from 'axios'
export default {
  name: 'Home',
  components: {
    HomeRankingClub,
    HomeHighlights,
    HomeRankingPlayer
  },
  props: {
    url: { type: String, default: null }
  },
  data() {
    return {
      playersGoals: [],
      playersAssists: [],
      playersParticipations: [],
      playersMotm: [],
      loading: true
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
          this.playersParticipations = response.data['participations']
          this.playersMotm = response.data['motm']
          this.loading = false
        })
        .catch((error) => {
          console.log(error)
        })
    }
  },
}
</script>


