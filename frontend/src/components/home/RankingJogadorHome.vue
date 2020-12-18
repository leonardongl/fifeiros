<template>
  <div :class="col" id="ranking-jogador-home">
    <div class="card">
      <h1 class="titulo">{{ titulo }}</h1>
      <table class="ranking-table">
        <tbody>
          <tr>
            <td>Ronaldo</td>
            <td class="w-10 text-center">10</td>
          </tr>
          <tr>
            <td>Messi</td>
            <td class="w-10 text-center">9</td>
          </tr>
          <tr>
            <td>Neymar</td>
            <td class="w-10 text-center">9</td>
          </tr>
          <tr>
            <td>Salah</td>
            <td class="w-10 text-center">7</td>
          </tr>
          <tr>
            <td>Haaland</td>
            <td class="w-10 text-center">6</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  name: 'RankingJogadorHome',
  props: {
    col: {
      type: String,
      default: 'col-sm-4'
    },
    titulo: {
      type: String,
      required: true
    }
  }
}
</script>

<style scope>
  #ranking-jogador-home {
    padding-right: 5px;
    padding-left: 5px;
  }
</style>
