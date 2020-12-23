<template>
  <div class="container-fluid" id="app">
    <header-app :url="'http://api.leonardo'"></header-app>
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
  .ranking-table .tr-thead {
    background-color: rgba(34, 29, 83, 0.1);
  }
  .form-group {
    padding-left: 15px;
    padding-right: 15px;
  }
  .form-group label {
    color: #89c5de;
    text-transform: uppercase;
    font-size: 18px;
    font-family: 'Oswald', sans-serif;
  }
  .form-control {
    border-radius: 0 !important;
    border: none !important;
  }
  .custom-file-label {
    border-radius: 0 !important;
    border: none !important;
    color: #777;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
  }
  .custom-file-input {
    cursor: pointer;
  }
  .btn-cadastrar {
    background-color: #89c5de;
    color: rgb(34, 29, 83);
    border: none;
    border-radius: 0;
    outline: none !important;
    font-family: 'Oswald', sans-serif;
    text-transform: uppercase;
    font-size: 18px;
  }
  .btn-cadastrar:hover {
    transition: 0.5s;
    z-index: 999;
    transform: scale(1.1);
  }
  .tr-body {
    cursor: pointer;
  }
  .tr-body:hover {
    transition: 0.5s;
    background-color: rgba(0,0,0,0) !important;
    background-image: linear-gradient(to bottom right, rgba(34, 29, 83, 1), rgba(34, 29, 83, 0.8));
  }
</style>
