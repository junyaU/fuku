<template>
  <div class="container">
    <h1 class="text-center">これは服装リストです</h1>
    <div class="list-wrapper">
      <div v-for="outfit in outfits" :key="outfit.id" class="outfit-block">
        <router-link :to="{name:'outfitDetail' , params: { item: outfit}}" class="detail-link">
          <h1 class="outfit-name">{{outfit.item_name}}</h1>
          <img :src="outfit.tops['image']" class="outfit-photo-wrapper" />
          <img :src="outfit.bottoms['image']" class="outfit-photo-wrapper" />
          <img :src="outfit.shoes['image']" class="outfit-photo-wrapper" />
        </router-link>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return { outfits: [] };
  },
  methods: {
    getOutfits() {
      axios.get("/api/outfits").then(res => {
        this.outfits = res.data;
      });
    }
  },
  mounted() {
    this.getOutfits();
  }
};
</script>
<style>
.list-wrapper {
  border: 3px solid #aaaa;
  overflow-x: scroll;
  overflow-y: hidden;
  white-space: nowrap;
}

.outfit-block {
  display: inline-block;
  border: 2px solid #aaae;
  margin: 10px;
}

.outfit-photo-wrapper {
  width: 200px;
  height: 200px;
  object-fit: cover;
  display: block;
  padding: 10px;
}

.outfit-name {
  text-align: center;
}

.detail-link {
  text-decoration: none;
}
</style>
