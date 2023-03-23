<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejemplo básico de Vue en Blade</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
</head>

<body>
    <div id="app">
        <button v-on:click="mostrarAlerta">Mostrar alerta</button>
    </div>

    <script>
        var data = {
            mensaje: 'la respuesta es:'
        };

        var methods = {
            mostrarAlerta: function() {
                alert(this.mensaje + ' ' + this.suma(2, 3));
            },

            suma: function(a, b) {
                return a + b;
            }
        };

        var app = new Vue({
            el: '#app',
            data: data,
            methods: methods
        });
    </script>
</body>

</html>
