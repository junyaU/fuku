<template>
  <div class="side-bar">
    <div class="sidebar-text-wrapper">
      <a href="/">
        <p>TOPに戻る</p>
      </a>
      <router-link v-bind:to="{name:'list'}">
        <p>
          <i class="fas fa-tshirt"></i>コーディネートを見る
        </p>
      </router-link>

      <p>
        <i class="fas fa-tshirt"></i>コーディネートを追加する
      </p>

      <router-link v-bind:to="{name:'add'}">
        <p>
          <i class="fas fa-check"></i>自分のアイテムを見る
        </p>
      </router-link>
      <router-link v-bind:to="{name:'make'}">
        <p>
          <i class="fas fa-plus"></i>自分のアイテムを追加する
        </p>
      </router-link>
    </div>
  </div>
</template>
<script>
export default {};
</script>
<style>
body {
  background-color: #f4f5f7;
}
.side-bar {
  position: absolute;
  width: 15%;
  top: 22%;
  left: 10%;
}

.sidebar-text-wrapper {
  padding: 10px;
}

.sidebar-text-wrapper p {
  color: #111111;
}

.sidebar-text-wrapper a {
  text-decoration: none;
}
</style>