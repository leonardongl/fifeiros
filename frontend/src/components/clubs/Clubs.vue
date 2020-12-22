<template>
  <div>
    <form-club :url="url"></form-club>
    <div class="row px-5">
      <div class="col-12" id="ranking-geral">
        <div class="card">
          <h1 class="titulo">TODOS OS CLUBES</h1>
          <table class="ranking-table" style="width:96% !important">
            <thead>
              <tr class="tr-thead">
                <td class="w-10 text-center">ID</td>
                <td>NOME DO CLUBE</td>
                <td>TREINADOR</td>
                <td class="text-center">AÇÕES</td>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(club, index) in clubs" :key='club.id'>
                <td class="w-10 text-center">{{ club.id }}</td>
                <td>{{ club.name }}</td>
                <td>{{ club.coach }}</td>
                <td class="text-center">Editar | Excluir</td>
              </tr>
              <tr class="tr-cadastrar">
                <td colspan="3"></td>
                <td class="text-center">
                  <button class="btn btn-cadastrar" type="button" data-toggle="modal" data-target="#exampleModal">NOVO CLUBE</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
import FormClub from "./FormClub"
export default {
  name: 'Clubs',
  components: {FormClub},
  props: {
    url: { type: String, default: null }
  },
  data() {
    return {
      clubs: []
    }
  },
  mounted() {
    this.ranking()
  },
  methods: {
    ranking() {
      axios.get(`${this.url}/clubs/ranking`, {})
        .then((response) => {
          this.clubs = response.data
        })
        .catch()
    }
  },
}
</script>

<style scoped>
  #ranking-geral {
    padding-right: 5px;
    padding-left: 5px;
  }
  .tr-cadastrar {
    background: none !important;
  }
</style>
