<template>
<div>
    <div class="row">
        <div class="col-xs-2 col-centered">
            <input class="form-control" type="text" :value="counter">
        </div>
    </div>
    <div class="row">
      <button type="button" class="btn btn-default" v-on:click="counter -= 1">-</button>
      <button type="button" class="btn btn-default" v-on:click="counter += 1">+</button>
    </div>
</div>
</template>

<script>
    export default {
        data() {
    return {
      counter: 0
    }
  }
}
</script>

<style lang="scss">
.col-centered{
    float: none;
    margin: 10px auto;
}
.form-control{
    text-align: center;
}
</style>