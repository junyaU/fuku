<template>
  <div class="container">
    <h1>これは服装リストです</h1>
    <div v-for="outfit in outfits" :key="outfit.id">
      <h1>{{outfit.item_name}}</h1>
      <h3>{{outfit.tops_id}}</h3>
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
