<template>
  <div class="container">
    <h1 class="topTitle">Fukuun</h1>
    <h2 class="subTitle">〜服の管理に〜</h2>
    <router-link v-bind:to="{name:'list'}">
      <h3 class="my-outfit">
        <i class="fas fa-tshirt"></i>Watch My Outfit
      </h3>
    </router-link>
    <router-link v-bind:to="{name:'add'}">
      <h3 class="add-clothes">
        <i class="fas fa-plus"></i>Add Clothes
      </h3>
    </router-link>
    <router-link v-bind:to="{name:'make'}">
      <h3 class="make-outfit">
        <i class="fas fa-check"></i>Make Outfit
      </h3>
    </router-link>
  </div>
</template>
<script>
export default {};
</script>
<style>
.topTitle {
  font-size: 80px;
  text-align: center;
  padding-top: 30px;
  color: darkblue;
}
.subTitle {
  color: darkblue;
  padding-top: 10px;
  text-align: center;
}
img {
  width: 70%;
  height: 80%;
}
.my-outfit {
  font-size: 50px;
  background-color: #fff;
  margin: 40px 0;

  text-align: center;
  padding: 10px;
  border-radius: 15px;
}
.add-clothes {
  font-size: 50px;
  background-color: #fff;
  margin: 5px;
  text-align: center;
  margin-bottom: 40px;
  padding: 10px;
  border-radius: 15px;
}
.make-outfit {
  font-size: 50px;
  background-color: #fff;
  margin: 5px;
  text-align: center;
  padding: 10px;
  border-radius: 15px;
}
</style>
