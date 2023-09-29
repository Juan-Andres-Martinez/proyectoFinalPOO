<?php include("./templates/header.php"); ?>
    <style>
        main {
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            background-color: #fff;
        }

        form {
            display: flex;
            flex-direction: column;
            
        }

        label {
            margin-bottom: 10px;
        }

        input {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    <br/>
        <h1>Formulario de Pago</h1>
        
        <form method="POST" action="./objetopago.php">
            <label for="nombre">Nombre en la tarjeta:</label>
            <input type="text" id="nombre" name="nombre_de_tarjeta" required>

            <label for="numero_tarjeta">Número de tarjeta:</label>
            <input type="text" id="numero_tarjeta" name="numero_de_tarjeta" required>

            <label for="fecha_vencimiento">Fecha de vencimiento:</label>
            <input type="text" id="fecha_vencimiento" name="fecha_de_vencimiento" placeholder="MM/YY" required>

            <label for="ccv">CVV:</label>
            <input type="text" id="ccv" name="ccv" required>

            <button type="submit">Pagar</button>
        </form>

<?php include("./templates/footer.php"); ?>