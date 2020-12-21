<template>
  <div class="container-fluid" id="app">
    <header-app :url="'http://localhost:8080'"></header-app>
    <router-view :url="'http://api.leonardo/api'" />
  </div>
</template>

<script>
import HeaderApp from './components/header/HeaderApp'
export default {
  name: 'App',
  components: { HeaderApp },
}
</script>

<style>
  #app {
    background-image: url('./assets/background.jpg');
    background-position: center;
    background-size: cover;
    height: 100%;
  }
  .card {
    border: 1px solid rgba(100,137,175,0.9);
    border-radius: 0 !important;
    background-color: rgba(0,0,0,0) !important;
    background-image: linear-gradient(to bottom right, rgba(34, 29, 83, 1), rgba(34, 29, 83, 0.6));
    margin-top: 10px;
    padding: 10px;
    height: 250px;
  }
  .card .titulo {
    color: #89c5de;
    text-transform: uppercase;
    font-size: 28px;
    font-family: 'Oswald', sans-serif;
    margin-left: 10px;
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
    background-color: rgba(34, 29, 83, 0.6);
  }
  .ranking-table tr:nth-child(even) {
    background-color: rgba(34, 29, 83, 0.1);
  }
  .ranking-table .tr-thead{
    background-color: rgba(34, 29, 83, 0.1);
  }
</style>
