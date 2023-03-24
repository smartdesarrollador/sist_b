<!DOCTYPE html>
<html>

<head>
    <title>Vue 3 y Blade en Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.1/tailwind.min.css">
    <script src="https://unpkg.com/vue@3.2.31/dist/vue.global.prod.js"></script>

</head>

<body>



    <div id="app">



        <div class="grid grid-cols-3 gap-4">
            <div class="bg-blue-500 h-12">
                <div class="flex flex-col justify-center items-center h-screen">
                    <div class="mt-8">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded border border-yellow-500"
                            @click="showAlert">Haz
                            clic
                            aquí</button>
                    </div>
                </div>
            </div>
            <div class="bg-green-500 h-12">
                <div class="w-full h-auto rounded-lg overflow-hidden">
                    <img class="w-full h-auto object-cover" src="https://picsum.photos/800/500" alt="Imagen de ejemplo">
                </div>
            </div>
            <div class="bg-red-500 h-12"></div>
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
