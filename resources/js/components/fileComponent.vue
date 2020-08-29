<template>
  <div>
    <label for="image" class="file-label">
      <span class="file-text">ファイルを選択してください</span>
      <input type="file" v-bind:name="names" id="image" required />
    </label>
  </div>
</template>
<script>
export default {
  props: ["names"],
  mounted() {
    const image = document.querySelector("#image");
    const fileText = document.querySelector(".file-text");
    const fileLabel = document.querySelector(".file-label");

    image.addEventListener("change", () => {
      if (image.value != "") {
        fileText.innerHTML = "ファイル選択済みです";
        fileLabel.style.color = "black";
        fileLabel.style.background = "#BBBBBB";
      }

      if (image.value == "") {
        fileText.innerHTML = "ファイルを選択してください";
        fileLabel.style.color = "white";
        fileLabel.style.background = "black";
      }
    });
  }
};
</script>
<style>
.file-label {
  color: white;
  background-color: black;
  padding: 6px;
  border-radius: 12px;
  cursor: pointer;
  margin: 10px 0 0 20px;
}

.file-label input {
  display: none;
}
</style>