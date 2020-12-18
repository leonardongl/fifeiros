<template>
  <div class="container-fluid" id="app">
    <router-view/>
  </div>
</template>

<script>
export default {
  name: 'App'
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
