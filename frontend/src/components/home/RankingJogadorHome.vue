<template>
  <div :class="col" id="ranking-jogador-home">
    <div class="card">
      <h1 class="titulo">{{ titulo }}</h1>
      <card-loading v-if="loading"></card-loading>
      <table class="ranking-table">
        <tbody>
          <tr v-for="(player, index) in players" :key='player.id'>
            <td class="w-10 text-center">{{ index+1 }}º</td>
            <td>{{ player.name }}</td>
            <td class="w-10 text-center">{{ player.value }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import CardLoading from "../utils/CardLoading";
export default {
  name: 'RankingJogadorHome',
  components: {CardLoading},
  props: {
    col: { type: String, default: 'col-sm-4' },
    titulo: { type: String, required: true },
    players: { type: Array, default: [] },
    loading: { type: Boolean, default: true }
  }
}
</script>

<style scoped>
  #ranking-jogador-home {
    padding-right: 5px;
    padding-left: 5px;
  }
  .card {
    cursor: pointer;
  }
  .card:hover {
    transition: 0.5s;
    z-index: 999;
    transform: scale(1.03);
  }
</style>
