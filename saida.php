<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estacionamento</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="container p-16 mx-auto h-16 flex" >
    <h1 class="text-xl">Estacionamento</h1>
    <div class="container p-16 mx-auto h-16 flex " >
        <div class="w-full max-w-xs">
        <form method="post" action="index.php" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="placa">
                Placa
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="placa" name="placa" type="text" pattern="[A-Z]{3}[0-9]{4}" placeholder="Placa do veículo">
            </div>
            <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="hora">
                Hora de saída
            </label>
            <input name="hora_entrada" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="hora_entrada" type="time" placeholder="Horário de entrada">     </div>
            <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                Salvar
            </button>
            </div>
        </form>
        </div>
        <div >
            <?php

                echo $_POST['placa'];
                echo $_POST['hora_entrada'];
            
            ?>
        </div>
    </div>
</div>
</body>
</html>