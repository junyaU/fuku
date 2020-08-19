<template>
  <div class="container">
    <h1 class="headline">AddMyWear</h1>
    <div class="row">
      <div class="col-sm-4 selects">
        <router-link v-bind:to="{name:'addTops'}">
          <h2>addTops!</h2>
        </router-link>
      </div>
      <div class="col-sm-4 selects">
        <router-link v-bind:to="{name:'addBottoms'}">
          <h2>addBottoms!</h2>
        </router-link>
      </div>
      <div class="col-sm-4 selects">
        <router-link v-bind:to="{name:'addShoes'}">
          <h2>addShoes!</h2>
        </router-link>
      </div>
    </div>
  </div>
</template>
<script>
export default {};
</script>
<style>
body {
  background-color: #fff;
}
.headline {
  text-align: center;
  color: darkblue;
  font-family: fantasy;
  margin: 30px;
}
.selects {
  text-align: center;
  font-family: fantasy;
  margin-top: 200px;
}
</style>