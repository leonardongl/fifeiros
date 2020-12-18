<template>
  <div class="container-fluid" id="app">
    <header-app></header-app>
    <router-view/>
  </div>
</template>

<script>
import HeaderApp from './components/header/HeaderApp'
export default {
  name: 'App',
  components: { HeaderApp }
}
</script>

<style scope>
#app {
  background-image: url('./assets/background.jpg');
  background-position: center;
  background-size: cover;
  height: 100%;
}
</style>
