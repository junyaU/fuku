<template>
  <div>
    <div>
      <div class="upper item-wrapper">
        <router-link v-bind:to="{name:'addTops'}">
          <h1 class="item-head">Tops</h1>
          <p class="item-icon">
            <i class="fas fa-tshirt"></i>
          </p>
        </router-link>
      </div>
      <div class="bottom row">
        <div class="col-sm-5 offset-sm-2 item-wrapper">
          <router-link v-bind:to="{name:'addBottoms'}">
            <h1 class="item-head">Bottoms</h1>
            <p class="item-icon">
              <i class="fas fa-columns"></i>
            </p>
          </router-link>
        </div>
        <div class="col-sm-5 item-wrapper">
          <router-link v-bind:to="{name:'addShoes'}">
            <h1 class="item-head">Shoes</h1>
            <p class="item-icon">
              <i class="fas fa-shoe-prints"></i>
            </p>
          </router-link>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {};
</script>
<style>
.item-wrapper {
  border: 2px solid black;
  width: 50%;
  height: 48%;
  margin: 0 auto;
  border-radius: 25px;
  margin-bottom: 20px;
}
.item-icon {
  font-size: 130px;
  text-align: center;
  margin: 0;
}

.item-head {
  text-align: center;
  margin: 0;
}

.upper {
  width: 45%;
  height: 40%;
}
</style>