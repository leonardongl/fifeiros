<template>
  <div :class="col" id="destaques-home">
    <div class="card">
      <h1 class="titulo">{{ titulo }}</h1>
      <div class="row">
        <div class="col-6 pt-2">
          <div class="foto-destaque">
            <img src="https://futhead.cursecdn.com/static/img/21/players/190871.png" alt="Neymar">
            <div class="nome-destaque">Neymar</div>
          </div>
        </div>
        <div class="col-6">
          <div class="item-destaque">
            <span>9</span> GOLS
          </div>
          <div class="item-destaque">
            <span>9</span> ASSISTÊNCIAS
          </div>
          <div class="item-destaque">
            <span>9</span> ESTRELAS
          </div>
          <div class="item-destaque">
            <span class="text-warning">8.5</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'DestaquesHome',
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
    font-family: 'Staatliches', cursive;
    font-style: italic;
  }
  .item-destaque span {
    font-size: 29px;
    color: #f4f4f4;
    margin-right: 10px;
    font-family: 'Staatliches', cursive;
  }
</style>
