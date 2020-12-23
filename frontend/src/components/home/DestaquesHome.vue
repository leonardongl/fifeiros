<template>
  <div :class="col" id="destaques-home">
    <div class="card">
      <h1 class="titulo">{{ titulo }}</h1>
      <card-loading v-if="loading"></card-loading>
      <div v-else id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div v-for="(player, index) in players" :key="player.id" class="carousel-item" :id="'highlights-item-'+index">
            <div class="row">
              <div class="col-6 pt-2">
                <div class="foto-destaque">
                  <img src="https://futhead.cursecdn.com/static/img/21/players/209331.png" alt="Neymar">
                  <div class="nome-destaque">{{ player.name }}</div>
                </div>
              </div>
              <div class="col-6">
                <div class="item-destaque">
                  <span>{{ player.goals }}</span> GOLS
                </div>
                <div class="item-destaque">
                  <span>{{ player.assists }}</span> ASSISTÊNCIAS
                </div>
                <div class="item-destaque">
                  <span>{{ player.motm }}</span> ESTRELAS
                </div>
                <div class="item-destaque">
                  <span class="text-warning">{{ player.rating.toFixed(2) }}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
import CardLoading from "../utils/CardLoading";
export default {
  name: 'DestaquesHome',
  components: {CardLoading},
  props: {
    col: { type: String, default: 'col-sm-4' },
    titulo: { type: String, required: true },
    url: { type: String, required: true },
  },
  data() {
    return {
      players: [],
      loading: true
    }
  },
  mounted() {
    this.highlights()
  },
  methods: {
    highlights() {
      axios.get(`${this.url}/players/home/highlights`, {})
        .then((response) => {
          this.players = response.data
          this.loading = false
          setTimeout(() => {
            document.getElementById('highlights-item-0').classList = 'carousel-item active'
          }, 100);
        })
        .catch()
    }
  },
}
</script>

<style scoped>
  #destaques-home {
    padding-right: 5px;
    padding-left: 5px;
  }
  .foto-destaque {
    width: 140px;
    height: 140px;
    margin: 0 auto;
    border-radius: 100px;
    border: 1px solid rgba(255,255,255,0.1);
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
  }
  .foto-destaque img {
    height: 100%;
  }
  .nome-destaque {
    position: absolute;
    transform: translateY(85px);
    color: #f4f4f4;
    text-align: center;
  }
  .item-destaque {
    color: #f4f4f4;
    transform: translateY(-3px);
    font-family: 'Oswald', sans-serif;
    font-style: italic;
  }
  .item-destaque span {
    font-size: 29px;
    color: #89c5de;
    margin-right: 10px;
    font-family: 'Oswald', sans-serif;
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
