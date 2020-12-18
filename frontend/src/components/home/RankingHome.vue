<template>
  <div :class="col" id="ranking-home">
    <div class="card" @click="link()">
      <h1 class="titulo">{{ titulo }}</h1>
      <table class="ranking-table" style="width:96% !important">
        <tbody>
          <tr>
            <td>Liverpool FC</td>
            <td class="w-10 text-center">22</td>
            <td class="w-10 text-center">22</td>
            <td class="w-10 text-center">22</td>
            <td class="w-10 text-center">22</td>
            <td class="w-10 text-center">22</td>
          </tr>
          <tr>
            <td>Real Madrid CF</td>
            <td class="w-10 text-center">18</td>
            <td class="w-10 text-center">18</td>
            <td class="w-10 text-center">18</td>
            <td class="w-10 text-center">18</td>
            <td class="w-10 text-center">18</td>
          </tr>
          <tr>
            <td>Juventus FC</td>
            <td class="w-10 text-center">16</td>
            <td class="w-10 text-center">16</td>
            <td class="w-10 text-center">16</td>
            <td class="w-10 text-center">16</td>
            <td class="w-10 text-center">16</td>
          </tr>
          <tr>
            <td>Barcelona FC</td>
            <td class="w-10 text-center">15</td>
            <td class="w-10 text-center">15</td>
            <td class="w-10 text-center">15</td>
            <td class="w-10 text-center">15</td>
            <td class="w-10 text-center">15</td>
          </tr>
          <tr>
            <td>Bayern FC</td>
            <td class="w-10 text-center">14</td>
            <td class="w-10 text-center">14</td>
            <td class="w-10 text-center">14</td>
            <td class="w-10 text-center">14</td>
            <td class="w-10 text-center">14</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  name: 'RankingHome',
  props: {
    col: {
      type: String,
      default: 'col-sm-8'
    },
    titulo: {
      type: String,
      required: true
    }
  },
  methods: {
    link() {
      console.log(123)
      router.push('ranking')
    }
  },
}
</script>

<style scope>
  #ranking-home {
    padding-right: 5px;
    padding-left: 5px;
  }
</style>
