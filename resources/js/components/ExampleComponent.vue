<template>
    <div>
      <h1>{{ message }}</h1>
      <button @click="count++">Increment</button>
      <p>Count: {{ count }}</p>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        message: 'Hello from Vue 3!',
        count: 0,
      };
    },
  };
  </script>
  