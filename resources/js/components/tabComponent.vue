<template>
  <div>
    <nav class="navbar navbar-expand navbar-light bg-light top-bar">
      <span class="app-title">FUKU</span>
      <span class="user-name">{{user['name']}}</span>
    </nav>
  </div>
</template>
<script>
export default {
  props: ["user"]
};
</script>
<style>
.top-bar {
  height: 60px;
}
.user-name {
  position: absolute;
  right: 3%;
  font-family: monospace;
  color: #4d4d4d;
}

.app-title {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  font-size: 40px;
  font-weight: bold;
  letter-spacing: 10px;
  font-family: system-ui;
}
</style>