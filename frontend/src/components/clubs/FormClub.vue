<template>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <h2>NOVO CLUBE</h2>
        <div class="row mt-3">
          <div class="col-12">
            <div class="form-group">
              <label>Nome</label>
              <input type="text" class="form-control" v-model="club.name">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Sigla</label>
              <input type="text" maxlength="3" class="form-control text-uppercase" v-model="club.abbreviation">
            </div>
          </div>
          <div class="col-sm-8">
            <div class="form-group">
              <label>Treinador</label>
              <input type="text" class="form-control" v-model="club.coach">
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label>Logo</label>
              <div class="input-group mb-3">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile02">
                  <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center mt-3 mb-2">
          <button class="btn btn-cadastrar" @click="save()">CADASTRAR</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  props: {
    url: { type: String, default: null }
  },
  data() {
    return {
      club: {}
    }
  },
  methods: {
    save() {
      axios.post(`${this.url}/clubs/store`, this.club)
        .then((response) => {
          console.log(response)
        })
        .catch((error) => {
          console.log(error)
        })
    }
  },
}
</script>

<style scoped>
  .modal-content {
    border: 1px solid rgba(100,137,175,0.9);
    border-radius: 0 !important;
    background-color: rgba(0,0,0,0) !important;
    background-image: linear-gradient(to bottom right, rgba(34, 29, 83, 1), rgba(34, 29, 83, 0.6));
    padding: 10px;
  }
  .modal-content h2{
    color: #89c5de;
    text-transform: uppercase;
    font-size: 28px;
    font-family: 'Oswald', sans-serif;
    margin-left: 10px;
  }
  .btn-cadastrar {
    width: 30%;
    margin-right: 15px;
  }
</style>
