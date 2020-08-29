<template>
  <div>
    <nav class="navbar navbar-expand navbar-light bg-light">
      <a class="navbar-brand" href="/">
        <img src="../../../public/img/logo2.png" class="navLogo" />
      </a>
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
.navLogo {
  width: 30%;
  height: 30%;
}

.user-name {
  position: absolute;
  right: 3%;
  font-family: monospace;
  color: #4d4d4d;
}
</style>