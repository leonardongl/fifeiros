<template>
  <div>
    <club-form :url="url"></club-form>
    <div class="row px-5">
      <div class="col-12" id="clubs">
        <div class="card">
          <h1 class="titulo">TODOS OS CLUBES</h1>
          <card-loading v-if="loading"></card-loading>
          <table v-else class="ranking-table" style="width:96% !important">
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
import ClubForm from "./ClubForm"
import CardLoading from "../utils/CardLoading";
export default {
  name: 'Clubs',
  components: {ClubForm, CardLoading},
  props: {
    url: { type: String, default: null }
  },
  data() {
    return {
      clubs: [],
      loading: true
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
          this.loading = false
        })
        .catch((error) => {
          console.log(error)
        })
    }
  },
}
</script>

<style scoped>
  #clubs {
    padding-right: 5px;
    padding-left: 5px;
  }
  .tr-cadastrar {
    background: none !important;
  }
</style>
