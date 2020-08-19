<template>
  <div class="file-wrapper">
    <label for="image" class="file-label">
      ファイルを選択してください
      <input type="file" name="image" id="image" />
    </label>
    <div class="text-wrapper">
      <input type="text" name="name" placeholder class="ef" />
      <label>品名</label>
      <span class="focus_line"></span>
    </div>
    <input type="submit" value="登録" class="register-button" />
  </div>
</template>

<script>
export default {};
</script>

<style>
.file-wrapper {
  border: 3px solid black;
}

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

.text-wrapper {
  position: relative;
  width: 80%;
  margin: 40px 3%;
}
.text-wrapper input[type="text"] {
  font: 15px/24px sans-serif;
  box-sizing: border-box;
  width: 100%;
  letter-spacing: 1px;
  padding-left: 4em;
}
.text-wrapper input[type="text"]:focus {
  outline: none;
}
.ef {
  padding: 4px 0;
  border: 0;
  border-bottom: 1px solid #1b2538;
  background-color: transparent;
}
.ef ~ .focus_line {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 2px;
  transition: 0.4s;
  background-color: black;
}
.ef:focus ~ .focus_line,
.text-wrapper.ef ~ .focus_line {
  width: 100%;
  transition: 0.4s;
}
.ef ~ label {
  position: absolute;
  z-index: -1;
  top: 4px;
  left: 0;
  width: 100%;
  transition: 0.3s;
  letter-spacing: 0.5px;
  color: #aaaaaa;
}
.ef:focus ~ label,
.text-wrapper.ef ~ label {
  font-size: 12px;
  top: -16px;
  transition: 0.3s;
  color: black;
}

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
  width: 10%;
  margin-left: 475px;
  margin-bottom: 30px;
}
.register-button:hover {
  box-shadow: none;
  color: #000000;
  background: #ffffff;
}
</style>

