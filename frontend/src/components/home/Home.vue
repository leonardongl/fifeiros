<template>
  <div class="row pt-5 px-5">
    <ranking-home :titulo="'RANKING'"></ranking-home>
    <destaques-home :titulo="'DESTAQUES'"></destaques-home>
    <ranking-jogador-home :titulo="'GOLEADORES'"></ranking-jogador-home>
    <ranking-jogador-home :titulo="'PASSEADORES'"></ranking-jogador-home>
    <ranking-jogador-home :titulo="'MELHORES'"></ranking-jogador-home>
  </div>
</template>

<script>
import RankingHome from './RankingHome'
import DestaquesHome from './DestaquesHome'
import RankingJogadorHome from './RankingJogadorHome'
export default {
  name: 'Home',
  components: {
    RankingHome,
    DestaquesHome,
    RankingJogadorHome
  }
}
</script>

<style>
  .card {
    border: 1px solid rgba(255,255,255,0.3);
    border-radius: 0 !important;
    background-color: rgba(0,0,0,0) !important;
    background-image: linear-gradient(to bottom right, rgba(6, 35, 43, 1), rgba(6, 35, 43, 0.6));
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
    color: #f4f4f4;
    text-transform: uppercase;
    font-style: italic;
    font-size: 30px;
    font-family: 'Staatliches', cursive;
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
    background-color: rgba(6, 35, 43, 0.6);
  }
  .ranking-table tr:nth-child(even) {
    background-color: rgba(6, 35, 43, 0.1);
  }
</style>
