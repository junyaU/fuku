<template>
  <div class="tops-list">
    <div class="items-wrapper">
      <div v-for="item in items" :key="item.id" class="item-block">
        <h3 class="photo-name">{{item.name}}</h3>
        <img :src="item.image" class="item-img" />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["items"]
};
</script>

<style>
.items-wrapper {
  padding: 10px 0;
  overflow-x: scroll;
  overflow-y: hidden;
  white-space: nowrap;
}
.item-block {
  display: inline-block;
  margin: 0 25px;
  width: 20%;
  height: 20%;
  padding: 8px 0;
  border-radius: 10px;
  background-color: #ddd;
}

.photo-name {
  text-align: center;
}

.item-img {
  width: 220px;
  height: 220px;
  object-fit: cover;
}
</style>
