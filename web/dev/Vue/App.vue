<template>
  <div>
    <h1>Because creating the future needs expertise</h1>
  </div>
</template>

<script>
  export default {
    data: function() {
      return {
        status: 'Critical'
      }
    },
    methods: {
      changeStatus() {
        this.status = 'Good !';
      }
    }
  }
</script>

<style>
  h1 {
    text-align: center;
  }
</style>
