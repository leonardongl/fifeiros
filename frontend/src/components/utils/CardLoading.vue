<template>
  <div class="d-flex flex-column justify-content-center align-items-center h-100">
    <div id="loader"></div>
    <span>Carregando...</span>
  </div>
</template>

<script>
export default {
  name: "CardLoading"
}
</script>

<style scoped>
  #loader {
    z-index: 1;
    width: 40px;
    height: 40px;
    border: 4px solid rgba(0,0,0,0);
    border-radius: 40px;
    border-top: 3px solid #89c5de;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 0.7s linear infinite;
    margin-bottom: 10px;
  }
  @-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
  }
  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
  span {
    color: #f4f4f4;
    font-size: 13px;
    color: #89c5de;
    -webkit-animation: spin 2s linear infinite;
    animation: colorchange 0.9s linear infinite;
  }
  @-webkit-keyframes colorchange {
    0% { opacity: 1; }
    100% { opacity: 0.1; }
  }
  @keyframes colorchange {
    0% { opacity: 1; }
    100% { opacity: 0.1; }
  }
</style>
