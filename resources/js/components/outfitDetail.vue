<template>
  <div class="container">
    <h1 class="text-center">詳細</h1>
    <div class="detail-all-wrapper">
      <h1 class="text-center">{{item.item_name}}</h1>
      <div class="detail-wrapper">
        <div class="col-sm-4 detail-item">
          <h2>{{item.tops['name']}}</h2>
          <img :src="item.tops['image']" />
        </div>
        <div class="col-sm-4 detail-item">
          <h2>{{item.bottoms['name']}}</h2>
          <img :src="item.bottoms['image']" />
        </div>
        <div class="col-sm-4 detail-item">
          <h2>{{item.shoes['name']}}</h2>
          <img :src="item.shoes['image']" />
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: ["item"]
};
</script>
<style>
.detail-all-wrapper {
  border: 3px solid #aaaa;
}

.detail-wrapper {
  display: flex;
}

.detail-wrapper img {
  width: 250px;
  height: 250px;
  object-fit: cover;
}

.detail-item {
  text-align: center;
}
</style>