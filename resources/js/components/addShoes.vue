<template>
  <div class="container">
    <h1 class="text-center">addShoes</h1>
    <div>
      <form action="/api/shoes" method="post" enctype="multipart/form-data">
        <file-choice></file-choice>
      </form>
    </div>
    <div>
      <h1 class="text-center">Shoes一覧</h1>
      <photo-list :items="shoes"></photo-list>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return { shoes: [] };
  },

  methods: {
    getShoes() {
      axios.get("/api/shoes").then(res => {
        this.shoes = res.data;
      });
    }
  },
  mounted() {
    this.getShoes();
  }
};
</script>

<style>
</style>