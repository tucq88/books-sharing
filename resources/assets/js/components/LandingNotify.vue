<template>
  <div class="box box-notify">
    <div class="field is-grouped">
      <p class="control is-expanded">
        <input class="input" type="text" placeholder="Enter your email">
      </p>
      <p class="control">
        <a class="button is-info">Notify Me</a>
      </p>
    </div>
  </div>
</template>

<script>
  export default {
    mounted() {
      console.log('Component mounted.')
    }
  }
</script>
