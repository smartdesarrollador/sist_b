<!DOCTYPE html>
<html>

<head>
    <title>Vue 3 y Blade en Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.1/tailwind.min.css">
    <script src="https://unpkg.com/vue@3.2.31/dist/vue.global.prod.js"></script>

</head>

<body>


    <div class="flex justify-center items-center h-screen">
        <div id="app">
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" @click="showAlert">Haz
                clic
                aquí</button>
        </div>
    </div>

    <script>
        const app = Vue.createApp({
            data() {
                return {
                    message: 'El resultado de la suma es:'
                }
            },
            methods: {
                showAlert() {
                    alert(this.message + this.suma(2, 3) + '');
                },
                suma(a, b) {
                    return a + b;
                }
            }
        });
        app.mount('#app');
    </script>

</body>

</html>
