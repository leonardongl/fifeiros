<template>
  <div class="row" id="header-row">
    <div class="col-sm-8"></div>
    <div class="col-sm-4"></div>
    <div class="col-sm-6">
      <nav class="menu-header">
        <router-link class="link" to="/">INÍCIO</router-link>
        <router-link class="link" to="/ranking">RANKING</router-link>
        <router-link class="link" to="/clubs">CLUBES</router-link>
      </nav>
    </div>
  </div>
</template>

<script>
export default {
  name: 'HeaderApp',
  props: {
    url: { type: String, required: true }
  }
}
</script>

<style scoped>
  .menu-header {
    border-radius: 0 !important;
    background-color: rgba(0,0,0,0) !important;
    background-image: linear-gradient(to bottom right, rgba(34, 29, 83, 0.8), rgba(34, 29, 83, 0.4));
    margin-top: 40px;
    display: flex;
    width: min-content;
    margin-left: 39px;
  }
  .menu-header .link {
    padding: 5px 20px;
    font-family: 'Oswald', sans-serif;
    text-decoration: none;
    color: #f4f4f4;
    font-size: 20px;
  }
  .menu-header .link:hover {
    transition: 0.3s;
    background-image: linear-gradient(to bottom right, rgba(34, 29, 83, 1), rgba(34, 29, 83, 0.6));
  }
</style>
