<template>
  <div class="row px-5">
    <ranking-home :url="url" :titulo="'RANKING'"></ranking-home>
    <destaques-home :url="url" :titulo="'DESTAQUES'"></destaques-home>
    <ranking-jogador-home :players="playersGoals" :titulo="'GOLEADORES'"></ranking-jogador-home>
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

<style>
  .card {
    border: 1px solid rgba(100,137,175,0.9);
    border-radius: 0 !important;
    background-color: rgba(0,0,0,0) !important;
    background-image: linear-gradient(to bottom right, rgba(34, 29, 83, 1), rgba(34, 29, 83, 0.6));
    margin-top: 10px;
    padding: 10px;
    height: 250px;
    cursor: pointer;
  }
  .card:hover {
    transition: 0.5s;
    z-index: 999;
    transform: scale(1.03);
  }
  .card .titulo {
    color: #89c5de;
    text-transform: uppercase;
    font-size: 28px;
    font-family: 'Oswald', sans-serif;
    margin-left: 10px;
  }
  .ranking-table {
    width: 90%;
    margin: 0 auto;
  }
  .ranking-table tr td {
    color: #f4f4f4;
    padding: 5px;
  }
  .ranking-table tr{
    background-color: rgba(34, 29, 83, 0.6);
  }
  .ranking-table tr:nth-child(even) {
    background-color: rgba(34, 29, 83, 0.1);
  }
  .ranking-table .tr-thead{
    background-color: rgba(34, 29, 83, 0.1);
  }
</style>
