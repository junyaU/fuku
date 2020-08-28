<template>
  <label for="image" class="file-label">
    ファイルを選択してください
    <input type="file" v-bind:name="names" id="image" multiple />
  </label>
</template>
<script>
export default {
  props: ["names"]
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