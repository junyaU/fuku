<template>
  <div class="container">
    <h1 class="text-center">addTops</h1>
    <div>
      <form action="/api/tops" method="post" enctype="multipart/form-data">
        <file-choice></file-choice>
      </form>
    </div>
    <div>
      <h1 class="text-center">Tops一覧</h1>
      <photo-list :items="tops"></photo-list>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return { tops: [] };
  },

  methods: {
    getTops() {
      axios.get("/api/tops").then(res => {
        this.tops = res.data;
      });
    }
  },
  mounted() {
    this.getTops();
  }
};
</script>

<style>
.tops-list {
  border: 2px solid black;
}
</style>
