<template>
  <input type="submit" value="登録" class="register-button" />
</template>
<script>
export default {};
</script>
<style>
.register-button {
  display: inline-block;
  border-radius: 5%;
  font-size: 18pt;
  text-align: center;
  cursor: pointer;
  padding: 12px 12px;
  background: #000000;
  color: #ffffff;
  line-height: 1em;
  transition: 0.3s;
  box-shadow: 6px 6px 3px #666666;
  border: 2px solid #000000;
}
.register-button:hover {
  box-shadow: none;
  color: #000000;
  background: #ffffff;
}
</style>