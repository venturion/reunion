<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
	<title>{{app.name}} - {{app.title}}</title>
    {% include 'metas.php' %}
	{% include 'header.php' %}
</head>
<body>
    <div class="container">
        {% include content %} 
    </div>
</body>
</html>
