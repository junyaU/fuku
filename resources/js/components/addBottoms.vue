<template>
  <div class="container">
    <h1 class="text-center">addBottoms</h1>
    <div>
      <form action="/api/bottoms" method="post" enctype="multipart/form-data">
        <file-choice></file-choice>
      </form>
    </div>
    <div>
      <h1 class="text-center">Bottoms一覧</h1>
      <photo-list :items="bottoms"></photo-list>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return { bottoms: [] };
  },
  methods: {
    getBottoms() {
      axios.get("/api/bottoms").then(res => {
        this.bottoms = res.data;
      });
    }
  },
  mounted() {
    this.getBottoms();
  }
};
</script>
<style>
</style>