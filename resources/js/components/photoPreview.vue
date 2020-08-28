<template>
  <div class="photo-wrapper" v-bind:id="idName"></div>
</template>
<script>
export default {
  props: ["idName"],
  methods: {},
  mounted() {
    const photoForm = document.querySelector("#photoForm");
    const photoWrapper = document.getElementById(`${this.idName}`);
    console.log(photoWrapper);
    photoForm.addEventListener("change", e => {
      const file = e.target.files[0];

      const fileReader = new FileReader();
      fileReader.onload = function() {
        const dataUri = this.result;

        const img = document.createElement("img");
        img.src = dataUri;
        photoWrapper.appendChild(img);
        // photoForm.appendChild(img);
      };
      fileReader.readAsDataURL(file);
    });
  }
};
</script>
<style>
.photo-wrapper {
  border: 1px solid #aaaa;
  height: 200px;
  width: 200px;
  margin: 10px auto;
}

.photo-object {
  width: 100%;
  height: 100%;
}
</style>