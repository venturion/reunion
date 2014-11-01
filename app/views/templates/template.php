<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Template doida pra daná</title>
</head>
<body>
	{% if nomes > 0 %}
		nomes não nulos.
	{% endif %}

	{% for key, value in nomes %}
		<h1>
			key: {{key}}
			value: {{value}}
		</h1>
	{% endfor %}
</body>
</html>