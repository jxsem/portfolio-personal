<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: sans-serif; line-height: 1.6; color: #333; }
        .container { padding: 20px; border: 1px solid #eee; border-radius: 5px; }
        .label { font-weight: bold; color: #2563eb; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Has recibido un nuevo mensaje de contacto</h2>
        <p><span class="label">Nombre:</span> {{ $data['nombre'] }}</p>
        <p><span class="label">Email:</span> {{ $data['email'] }}</p>
        <p><span class="label">Teléfono:</span> {{ $data['telefono'] }}</p>
        <p><span class="label">Mensaje:</span></p>
        <p>{{ $data['mensaje'] }}</p>
    </div>
</body>
</html>