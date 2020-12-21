<template>
  <div class="row" id="header-row">
    <div class="col-sm-8"></div>
    <div class="col-sm-4"></div>
    <div class="col-sm-6">
      <nav class="menu-header">
        <a href="">INÍCIO</a>
        <a href="">RANKING</a>
        <a href="">PARTIDAS</a>
        <a href="">ESTATÍSTICAS</a>
      </nav>
    </div>
  </div>
</template>

<script>
export default {
  name: 'HeaderApp'
}
</script>

<style scope>
  .menu-header {
    border-radius: 0 !important;
    background-color: rgba(0,0,0,0) !important;
    background-image: linear-gradient(to bottom right, rgba(34, 29, 83, 0.8), rgba(34, 29, 83, 0.4));
    margin-top: 40px;
    display: flex;
    width: min-content;
    margin-left: 39px;
  }
  .menu-header a {
    padding: 5px 20px;
    font-family: 'Oswald', sans-serif;
    text-decoration: none;
    color: #f4f4f4;
    font-size: 20px;
  }
  .menu-header a:hover {
    transition: 0.3s;
    background-image: linear-gradient(to bottom right, rgba(34, 29, 83, 1), rgba(34, 29, 83, 0.6));
  }
</style>
