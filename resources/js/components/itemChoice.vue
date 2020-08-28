<template>
  <div class="scroll-wrapper_tops">
    <div v-for="item in items" :key="item.id" class="item-list-wrapper">
      <img :src="item.image" />
      <h1 class="choice-item-name">{{item.name}}</h1>
      <input type="radio" :name="name" :value="item.id" required />
    </div>
  </div>
</template>
<script>
export default {
  props: ["items", "name"]
};
</script>
<style>
.item-list-wrapper {
  position: relative;
  width: 100%;
  height: 100px;
  margin-bottom: 10px;
  font-size: 10px;
}

.item-list-wrapper img {
  width: 100px;
  height: 100px;
  object-fit: cover;
}

.choice-item-name {
  position: absolute;
  top: 81%;
  left: 30%;
  font-size: 15px;
  background-color: #fff;
}

.scroll-wrapper_tops {
  overflow-y: scroll;
  overflow-x: hidden;
  height: 300px;
  white-space: nowrap;
  width: 100%;
  border: 2px solid #aaaa;
  background-color: #ccc;
}
</style>
