<!DOCTYPE html>
<html>

<head>
    <title>Vue 3 y Blade en Laravel</title>
    <script src="https://unpkg.com/vue@3.2.31/dist/vue.global.prod.js"></script>
</head>

<body>
    <div id="app">
        @{{ message }}
    </div>

    <script>
        const app = Vue.createApp({
            data() {
                return {
                    message: 'Hola, Vue 3 y Blade en Laravel!'
                }
            }
        })

        app.mount('#app')
    </script>
</body>

</html>
