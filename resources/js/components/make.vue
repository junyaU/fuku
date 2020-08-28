<template>
  <div class="container">
    <h1 class="text-center">服装を作る</h1>
    <div class="row">
      <div class="col-sm-6">
        <h1 class="text-center">Items List</h1>
        <item-component></item-component>
      </div>
      <div class="col-sm-6 tekitou">
        <h1>IMGをここに貼る</h1>
        <h1>
          追加したいアイテムがあれば
          <br />ここでも追加できます！
        </h1>
      </div>
    </div>
    <div>
      <h1 class="choice-header">服を選択する</h1>
      <form
        action="/api/outfits"
        method="post"
        enctype="multipart/form-data"
        id="photoForm"
        class="make-wrapper"
      >
        <div class="row">
          <div class="col-sm-4 choice-wrapper">
            <h2>TOPS</h2>
            <item-choice :items="tops" name="tops"></item-choice>
          </div>
          <div class="col-sm-4 choice-wrapper">
            <h2>Bottoms</h2>
            <item-choice :items="bottoms" name="bottoms"></item-choice>
          </div>
          <div class="col-sm-4 choice-wrapper">
            <h2>Shoes</h2>
            <item-choice :items="shoes" name="shoes"></item-choice>
          </div>
        </div>
        <textarea-component></textarea-component>
        <register-button class="register-button_make"></register-button>
      </form>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return { tops: [], bottoms: [], shoes: [] };
  },
  methods: {
    getTops() {
      axios.get("/api/tops").then(res => {
        this.tops = res.data;
      });
    },
    getBottoms() {
      axios.get("/api/bottoms").then(res => {
        this.bottoms = res.data;
      });
    },
    getShoes() {
      axios.get("/api/shoes").then(res => {
        this.shoes = res.data;
      });
    }
  },
  mounted() {
    this.getTops(), this.getBottoms(), this.getShoes();
  }
};
</script>

<style>
.make-wrapper {
  text-align: center;
  border: 2px solid #aaaa;
}
.tekitou {
  margin-top: 180px;
}

.choice-header {
  text-align: center;
  margin-top: 20px;
}

.choice-wrapper {
  text-align: center;
}

.file-component_make {
  padding: 5px 2px !important;
  margin: 0 !important;
}

.register-button_make {
  margin: 10px 0;
}
</style>
