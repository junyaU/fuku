<template>
  <div class="container">
    <div v-for="coordination in coordinations">
      <h1>aaaa</h1>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return { coordinations: [] };
  },
  methods: {
    getCoordination() {
      axios.get("/api/coordination").then(res => {
        this.coordinations = res.data;
      });
    }
  },
  mounted() {
    this.getCoordination();
  }
};
</script>
<style>
</style>
