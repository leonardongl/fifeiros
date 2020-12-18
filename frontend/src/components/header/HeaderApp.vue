<template>
  <div class="row" id="header-row">
    <div class="col-sm-8"></div>
    <div class="col-sm-4">
      <div class="menu-header">
        Hello
      </div>
    </div>
    <div class="col-sm-6">
      <div class="menu-header">
        Hello
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'HeaderApp'
}
</script>

<style scope>
  #header-row {
    padding-right: 5px;
    padding-left: 5px;
  }
  .menu-header {
    border: 1px solid rgba(255,255,255,0.3);
    border-radius: 0 !important;
    background-color: rgba(0,0,0,0) !important;
    background-image: linear-gradient(to bottom right, rgba(6, 35, 43, 1), rgba(6, 35, 43, 0.6));
    margin-top: 10px;
    padding: 10px;
  }
</style>
